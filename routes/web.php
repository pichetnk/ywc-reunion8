<?php

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
})->name('index');
Route::get('facebook-login', ['uses' => 'AuthController@redirectToFacebook']);
Route::get('fb-callback', ['uses' => 'AuthController@handleFacebookCallback']);
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
