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
/*
Route::get('/', function () {
    return view('welcome');
})->name('index');
*/
Route::get('facebook-login', ['uses' => 'AuthController@redirectToFacebook'])->name('facebook-login');
Route::get('fb-callback', ['uses' => 'AuthController@handleFacebookCallback']);
 
Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');
/*
Route::get('/team', function () {
    return view('team');
})->name('team');
*/
Route::get('/register', function () {
    return view('register');    
})->name('register');

Route::get('/team',['uses' => 'TeamController@show'])->name('team');

Route::get('/profile',['uses' => 'TeamController@profile'])->name('profile');
Route::get('/shop',['uses' => 'ShopController@shop'])->name('shop');

