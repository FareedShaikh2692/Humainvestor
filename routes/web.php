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
    return view('welcome');
});

/** login */
Route::get('/login','App\Http\Controllers\ApiController@login');
Route::post('/postLogin','App\Http\Controllers\ApiController@postLogin');


/** signUp */
Route::get('/signup','App\Http\Controllers\ApiController@signUp');
Route::post('/postsignup','App\Http\Controllers\ApiController@postsignUp');

/** forget password */
Route::get('/forgetpassword','App\Http\Controllers\ApiController@forgetPassword');
Route::post('/postforgetpassword','App\Http\Controllers\ApiController@postforgetPassword');

/** Reset password */
Route::get('/reset_password/{token}','App\Http\Controllers\ApiController@reset_password_view');
Route::post('/reset_password','App\Http\Controllers\ApiController@reset_password');

/** dashboard */
Route::get('/dashboard','App\Http\Controllers\ApiController@dashboard');

/** Wallet */
Route::get('/wallet','App\Http\Controllers\ApiController@wallet');

/** Profile */
Route::get('/profile','App\Http\Controllers\ApiController@profile');

/** test */
Route::get('/test','App\Http\Controllers\ApiController@test');