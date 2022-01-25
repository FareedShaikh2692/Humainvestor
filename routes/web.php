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

/** dashboard */
Route::get('/dashboard','App\Http\Controllers\ApiController@dashboard');

