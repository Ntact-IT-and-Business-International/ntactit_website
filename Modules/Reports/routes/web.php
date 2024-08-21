<?php

use Illuminate\Support\Facades\Route;
use Modules\Reports\App\Http\Controllers\ReportsController;

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

Route::group(['prefix' => 'reports', 'middleware' => ['auth']], function () {
    Route::get('/report', 'ReportsController@getReport')->name('Reports');
});
