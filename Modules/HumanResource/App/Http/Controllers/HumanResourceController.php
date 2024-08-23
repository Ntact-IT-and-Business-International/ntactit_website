<?php

namespace Modules\HumanResource\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
}
