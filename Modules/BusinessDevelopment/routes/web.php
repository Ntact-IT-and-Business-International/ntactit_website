<?php

use Illuminate\Support\Facades\Route;
use Modules\BusinessDevelopment\App\Http\Controllers\BusinessDevelopmentController;

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

Route::group(['prefix' => 'businessdevelopment'], function () {
    Route::get('/partners', 'BusinessDevelopmentController@getPartnership')->name('Partnerships');
    Route::get('/get-dealerships', 'BusinessDevelopmentController@getDealerships')->name('Dealerships');
});

Route::group(['prefix' => 'businessdevelopment', 'middleware' => ['auth']], function () {
    Route::get('/client', 'BusinessDevelopmentController@getClient')->name('Client');
    Route::get('/get-quotation-form/{client_id}', 'BusinessDevelopmentController@getQuotation')->name('Quotation Form');
    Route::get('/get-invoice-form/{client_id}', 'BusinessDevelopmentController@getInvoice')->name('Invoice Form'); 
    Route::get('/quotation', 'BusinessDevelopmentController@getQuotationInfo')->name('Quotations');
    Route::get('/print-quotation/{client_id}', 'BusinessDevelopmentController@printQuotation')->name('Print Quotation');
    
    Route::get('/invoice', 'BusinessDevelopmentController@getInvoiceInfo')->name('Invoice');
    Route::get('/print-invoice/{client_id}', 'BusinessDevelopmentController@printInvoice')->name('Print Invoice');
    Route::get('/requested-quotation', 'BusinessDevelopmentController@getRequestedQuotation')->name('Requested Quotation');
    Route::get('/forward-quotation/{client_id}', 'BusinessDevelopmentController@forwardQuotation')->name('Forward Quotation');
    Route::get('/forwarded-quotation', 'BusinessDevelopmentController@forwardedQuotation')->name('Forwarded Quotation');
});

