<?php

namespace App\Livewire\Admin\HumanResource;

use Livewire\Component;
use Modules\HumanResource\App\Services\LeaveService;
use Illuminate\Support\Facades\Session;

class RejectLeave extends Component
{
    public $LeaveId;
    public $reason_for_rejection;
    public $rejected_by;
    public $leave_status;

     // Validate
     protected $rules = [
        'rejected_by' => '',
        'leave_status' =>'',
        'reason_for_rejection' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'reason_for_rejection.required' => 'Reason for Rejection is required',
    ];
    public function rejectLeave(){
        $this->validate();
        $fields = [
            'rejected_by' => auth()->user()->id,
            'leave_status'=>'rejected',
            'reason_for_rejection' => $this->reason_for_rejection,
        ];
        LeaveService::rejectLeave($this->LeaveId,$fields);
        Session::flash('msg', 'Leave Rejected Successfully');
        return redirect()->to('/humanresource/leave');
    }

    public function mount($LeaveId){
        $this->LeaveId =$LeaveId;
    }

    public function render()
    {
        return view('livewire.admin.human-resource.reject-leave');
    }
}
