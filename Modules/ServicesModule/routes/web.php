<?php

use Illuminate\Support\Facades\Route;
use Modules\ServicesModule\App\Http\Controllers\ServicesModuleController;

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


Route::group(['prefix' => 'service'], function () {
    Route::get('/web-design', 'ServicesModuleController@webDesign')->name('Web Design');
    Route::get('/application-development', 'ServicesModuleController@applicationDevelopment')->name('Application Development');
    Route::get('/bulk-sms', 'ServicesModuleController@bulkSMS')->name('Bulk SMS');
    Route::get('/enterprise-it', 'ServicesModuleController@enterpriseIt')->name('Enterprise It');
    Route::get('/cybersecurity', 'ServicesModuleController@portal')->name('cybersecurity');
    Route::get('/artificial-intelligence', 'ServicesModuleController@artificailIntelligence')->name('Artificail Intelligence');
    Route::get('/data_analytics', 'ServicesModuleController@data_analytics')->name('Data Anayltics');
    Route::get('/ussd', 'ServicesModuleController@ussd')->name('USSD');
    Route::get('/cctv', 'ServicesModuleController@cctv')->name('CCTV');
    Route::get('/networking', 'ServicesModuleController@networking')->name('Networking');
    Route::get('/cybersecurity', 'ServicesModuleController@cybersecurity')->name('CyberSecurity');
    Route::get('/digita-lmarketing', 'ServicesModuleController@digitalmarketing')->name('Digital Marketing');
    Route::get('/consultancy', 'ServicesModuleController@Consultancy')->name('Consultancy');
    Route::get('/get-quote', 'ServicesModuleController@getQuote')->name('Quotation');
});


Route::group(['prefix' => 'service', 'middleware' => ['auth']], function () {
    Route::get('/get-services', 'ServicesModuleController@services')->name('Services');
    Route::get('/get-packages', 'ServicesModuleController@package')->name('Packages');
});
