<?php

use Illuminate\Support\Facades\Route;
use Modules\HumanResource\App\Http\Controllers\HumanResourceController;

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

Route::group(['prefix' => 'humanresource', 'middleware' => ['auth']], function () {
    Route::get('/attendance', 'HumanResourceController@getAttendance')->name('Attendance');
    Route::get('/employee-record', 'HumanResourceController@getEmployee')->name('Employees');
    Route::get('/forms', 'HumanResourceController@getHrForm')->name('Hr Forms');
    Route::get('/leave', 'HumanResourceController@getleave')->name('Leave'); 
    Route::get('/signout/{attendance_id}', 'HumanResourceController@signout')->name('SignOut');
    Route::get('/reject-leave/{leave_id}', 'HumanResourceController@rejectLeave')->name('Reject Leave');
    Route::get('/employee-details/{employee_record_id}', 'HumanResourceController@getEmployeeInformation')->name('Employee Details');
});