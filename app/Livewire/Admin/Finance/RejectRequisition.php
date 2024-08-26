<?php

namespace App\Livewire\Admin\Finance;

use Livewire\Component;
use Modules\Finance\App\Services\RequisitionService;
use Illuminate\Support\Facades\Session;

class RejectRequisition extends Component
{
    public $requisition_id;
    public $reason;
    public $updated_by;
    public $request_status;
     // Validate
     protected $rules = [
        'reason' => 'required',
        'updated_by' => '',
        'request_status' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'reason.required' => 'Comment is required',
    ];

    public function mount($requisition_id){
        $this->requisition_id =$requisition_id;
    }
    public function rejectRequisition(){
        $this->validate();
        $fields =[
            'reason' =>$this->reason,
            'request_status' =>'rejected',
            'updated_by' =>auth()->user()->id
        ];
        RequisitionService::rejectRequisition($this->requisition_id, $fields);
        Session::flash('msg','You Have Reject This Requisition');
        return redirect()->to('/finance/requisition');
    }
    public function render()
    {
        return view('livewire.admin.finance.reject-requisition');
    }
}
