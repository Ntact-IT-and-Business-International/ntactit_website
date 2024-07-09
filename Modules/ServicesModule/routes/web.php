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
    Route::get('/portals', 'ServicesModuleController@portal')->name('portal');
    Route::get('/artificial-intelligence', 'ServicesModuleController@artificailIntelligence')->name('Artificail Intelligence');
    Route::get('/data-analysis', 'ServicesModuleController@dataAnaylsis')->name('Data Anaylsis');

});
