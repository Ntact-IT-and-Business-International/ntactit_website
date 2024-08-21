<?php

use Illuminate\Support\Facades\Route;
use Modules\NoticeBoard\App\Http\Controllers\NoticeBoardController;

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

Route::group(['prefix' => 'noticeboard', 'middleware' => ['auth']], function () {
    Route::get('/notice', 'NoticeBoardController@getNotice')->name('Notice Board');
});
