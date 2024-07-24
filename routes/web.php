<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('Dashboard');
});

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/services', function () {
    return view('front.services');
});

Route::get('/contact', function () {
    return view('front.contact');
});
