<?php

namespace Modules\HumanResource\App\Http\Controllers;

use App\Http\Controllers\Controller;

class HumanResourceController extends Controller
{
    /**
     * Display a attendance.
     */
    public function getAttendance()
    {
        return view('humanresource::attendance');
    }
 /**
     * Display a Employee Records.
     */
    public function getEmployee()
    {
        return view('humanresource::employee');
    }
     /**
     * Display a Hr Form.
     */
    public function getHrForm()
    {
        return view('humanresource::forms');
    }
     /**
     * Display a leave.
     */
    public function getleave()
    {
        return view('humanresource::leave');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function signout($attendanceId)
    {
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        return view('humanresource::signout', compact('attendanceId'));
    }
    public function rejectLeave($LeaveId){
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        return view('humanresource::reject_leave', compact('LeaveId'));
    }
    public function getEmployeeInformation($employee_record_id){
        return view('humanresource::employee_details', compact('employee_record_id'));
    }
}
