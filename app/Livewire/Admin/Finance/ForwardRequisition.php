<?php

namespace App\Livewire\Admin\Finance;

use Session;
use Livewire\Component;
use Modules\Finance\App\Services\RequisitionService;

class ForwardRequisition extends Component
{
    public $requisition_id;
    public $comment;
    public $forwarded_by;
    public $request_status;
     // Validate
     protected $rules = [
        'comment' => 'required',
        'forwarded_by' => '',
        'request_status' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'comment.required' => 'Comment is required',
    ];

    public function mount($requisition_id){
        $this->requisition_id =$requisition_id;
    }
    public function forwardRequisition(){
        $this->validate();
        $fields =[
            'comment' =>$this->comment,
            'request_status' =>'forwarded',
            'forwarded_by' =>auth()->user()->id
        ];
        RequisitionService::forwardRequisition($this->requisition_id, $fields);
        Session::flash('msg','You Have Forwarded Requisition Successful');
        return redirect()->to('/finance/requisition');
    }
    public function render()
    {
        return view('livewire.admin.finance.forward-requisition');
    }
}
