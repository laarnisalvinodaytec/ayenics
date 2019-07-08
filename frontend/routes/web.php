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

// Route::get('welcome', function () {
//     return view('welcome');
// });

Route::get('landing', function () {
    return view('landingPage');
});


Route::get('/', function(){
	return view('welcomePage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cart', function(){
	return view('cart');
});

Route::get('addToCart', function(){
	return view('addToCart');
});