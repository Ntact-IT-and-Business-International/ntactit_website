<?php

use Illuminate\Support\Facades\Route;
use Modules\ContactModule\App\Http\Controllers\ContactModuleController;

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
    Route::get('/contact', 'ContactModuleController@contact')->name('contact');
});

Route::group(['prefix' => 'contact', 'middleware' => ['auth']], function () {
    Route::get('messages', 'ContactModuleController@getContactMessages')->name('Contact Messages');
});
