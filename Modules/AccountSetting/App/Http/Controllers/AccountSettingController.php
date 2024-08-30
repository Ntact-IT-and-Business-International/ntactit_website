<?php

namespace Modules\AccountSetting\App\Http\Controllers;

use App\Http\Controllers\Controller;

class AccountSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getUsers()
    {
        return view('accountsetting::index');
    } 

   public function getStaff(){
      return view('accountsetting::staff_for_permissions');
   }

   public function getStaffAssignedPermissions($employee_id){
    return view('accountsetting::staff_assigned_permissions',compact('employee_id'));
   }
   public function getPermissions($employee_id){
    return view('accountsetting::permissions',compact('employee_id'));
   }
}
