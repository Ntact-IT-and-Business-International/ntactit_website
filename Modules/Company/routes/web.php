<?php

use Illuminate\Support\Facades\Route;
use Modules\Company\App\Http\Controllers\CompanyController;

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

Route::group(['prefix' => 'company'], function () {
    Route::get('/about', 'CompanyController@about')->name('about');
    Route::get('/careers', 'CompanyController@careers')->name('careers');
    Route::get('/csr', 'CompanyController@csr')->name('csr');
});
