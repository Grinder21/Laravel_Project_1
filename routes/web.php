<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in');

Route::get('/sign_up', function () {
    return view('sign_up');
})->name('sign_up');

Route::resource('/users', 'App\Http\Controllers\UserController');

Route::post('/sign_up/submit', 'App\Http\Controllers\SignUpController@submit')->name('sign_up_form');
Route::post('/sign_in/submit', 'App\Http\Controllers\SignInController@submit')->name('sign_in_form');