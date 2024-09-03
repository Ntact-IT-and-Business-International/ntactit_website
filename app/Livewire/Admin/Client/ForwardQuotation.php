<?php

namespace App\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Modules\BusinessDevelopment\App\Services\ForwardedQuotationService;
use Modules\BusinessDevelopment\App\Services\ClientService;

class ForwardQuotation extends Component
{
    public $client_id;
    public $employee_id;
    public $comment;
    public $forwarded_by;

    protected $rules = [
        'employee_id' => 'required',
        'comment' => 'required',
        'forwarded_by' => '',
        'client_id' =>'',
    ];

    protected $messages = [
        'employee_id.required' => 'Employee Name is required',
        'comment.required' => 'Comment is required',
    ];

    public function mount($client_id){
        $this->client_id =$client_id;
    }

    public function forwardQuotation(){
        $fields =[
            'employee_id'=>$this->employee_id,
            'comment' => $this->comment,
            'client_id'=>$this->client_id,
            'forwarded_by' => auth()->user()->id,
        ];
        ForwardedQuotationService::forwardQuotation($fields);
        ClientService::updateClientStatus($this->client_id);
        Session::flash('msg', 'Quotation Request Forwarded Succesfully');

        return redirect()->to('/businessdevelopment/client');   
    }

    public function render()
    {
        return view('livewire.admin.client.forward-quotation',[
            'employees' =>$this->getEmlployee()
        ]);
    }

    private function getEmlployee(){
        return User::where('status','=','employee')->orwhere('status','=','director')->get();
    }
}
