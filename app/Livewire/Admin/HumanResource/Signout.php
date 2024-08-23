<?php

namespace App\Livewire\Admin\HumanResource;

use Livewire\Component;
use Modules\HumanResource\App\Services\AttendanceService;
use Session;

class Signout extends Component
{
    public $attendanceId;
    public $time_out;
    public $reason;

     // Validate
     protected $rules = [
        'time_out' => 'required',
        'reason' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'time_out.required' => 'Time out is required',
        'reason.required' => 'Reason for out is required',
    ];
    public function signout(){
        $this->validate();
        $fields = [
            'time_out' => $this->time_out,
            'reason' => $this->reason,
        ];
        AttendanceService::signout($this->attendanceId,$fields);
        Session::flash('msg', 'Thank you For The Day, Bye !!!!!');
        return redirect()->to('/humanresource/attendance');
    }

    public function mount($attendanceId){
        $this->attendanceId =$attendanceId;
    }
    public function render()
    {
        return view('livewire.admin.human-resource.signout');
    }
}
