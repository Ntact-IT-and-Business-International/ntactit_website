<?php

use Illuminate\Support\Facades\Route;
use Modules\IndustryModule\App\Http\Controllers\IndustryModuleController;

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

Route::group([], function () {
    Route::resource('industrymodule', IndustryModuleController::class)->names('industrymodule');

    // Education routes
    Route::get('/elearning', 'IndustryModuleController@elearning')->name('elearning');
    Route::get('/campusnetworking', 'IndustryModuleController@campusnetworking')->name('campusnetworking');
    Route::get('/classroomtechnology', 'IndustryModuleController@classroomtechnology')->name('classroomtechnology');
    Route::get('/digitalspecialisedcourses', 'IndustryModuleController@digitalspecialisedcourses')->name('digitalspecialisedcourses');
    Route::get('/schoolmanagementsystem', 'IndustryModuleController@schoolmanagementsystem')->name('School Management System');
    Route::get('/supportandmaintainence', 'IndustryModuleController@supportandmaintainence')->name('supportandmaintainence');

    // Health routes
    Route::get('/healthcybersecurity', 'IndustryModuleController@healthcybersecurity')->name('healthcybersecurity');
    Route::get('/electronicmedicalrecords', 'IndustryModuleController@electronicmedicalrecords')->name('electronicmedicalrecords');
    Route::get('/iot_enabledmedicaldevices', 'IndustryModuleController@iot_enabledmedicaldevices')->name('iot_enabledmedicaldevices');
    Route::get('/telemedicine', 'IndustryModuleController@telemedicine')->name('telemedicine');
    Route::get('/healthanalytics', 'IndustryModuleController@healthanalytics')->name('healthanalytics');

});
