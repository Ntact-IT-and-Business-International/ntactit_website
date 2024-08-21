<?php

use Illuminate\Support\Facades\Route;
use Modules\Finance\App\Http\Controllers\FinanceController;

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

Route::group(['prefix' => 'finance', 'middleware' => ['auth']], function () {
    Route::get('/expenses', 'FinanceController@getExpenses')->name('Expenses');
    Route::get('/finance-forms', 'FinanceController@getFinanceForms')->name('Finance Forms');
    Route::get('/income', 'FinanceController@getIncome')->name('Income');
    Route::get('/payroll', 'FinanceController@getPayroll')->name('Payroll');
    Route::get('/requisition', 'FinanceController@getRequisition')->name('Requisitions');
});
