<?php

use Illuminate\Support\Facades\Route;
use Modules\Item\App\Http\Controllers\ItemController;

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

Route::group(['prefix' => 'item', 'middleware' => ['auth']], function () {
    Route::get('/item', 'ItemController@getItem')->name('Item');
});