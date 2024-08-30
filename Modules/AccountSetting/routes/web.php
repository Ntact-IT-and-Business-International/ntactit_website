<?php

use Illuminate\Support\Facades\Route;
use Modules\AccountSetting\App\Http\Controllers\AccountSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'accountsetting', 'middleware' => ['auth']], function () { 
Route::get('/users','AccountSettingController@getUsers')->name('Users'); 
Route::get('/staff-for-permissions','AccountSettingController@getStaff')->name('Staff');
Route::get('/assign-or-remove-permission/{employee_id}','AccountSettingController@getStaffAssignedPermissions')->name('Staff Assigned Permissions');
Route::get('/permissions/{employee_id}','AccountSettingController@getPermissions')->name('Permissions');
});
