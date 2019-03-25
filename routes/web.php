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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LandingPageController@index')->name('index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('/login', function(){
  return view('login');
});

Route::get('/register', function(){
  return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
