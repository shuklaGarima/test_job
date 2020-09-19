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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('cart', 'HomeController@cart');
Route::get('add-to-cart/{id}', 'HomeController@addToCart');
Route::get('product-detail/{id}', 'HomeController@productDetail');
Route::patch('update-cart', 'HomeController@update'); 
Route::delete('remove-from-cart', 'HomeController@remove');

Route::namespace('Admin')->group(function () {
	Route::get('/admin', 'HomeController@index');
});