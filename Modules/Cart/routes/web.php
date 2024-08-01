<?php

use Illuminate\Support\Facades\Route;
use Modules\Cart\App\Http\Controllers\CartController;

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

// Route::group([], function () {
//     Route::resource('cart', CartController::class)->names('cart');
// });
Route::group(['prefix' => 'cart'], function () { 
    Route::get('/shopping-cart', 'CartController@index')->name('Shopping Cart');
    Route::get('/customer-order', 'CartController@cartOrder')->name('Customer Order');
});
