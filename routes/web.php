<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/shop', 'CartController@shop')->name('shop');
Route::get('/cartt', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.add');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::post('/compra', 'CartController@money')->name('cart.money');

Route::get('/add/produc', 'ProductController@index')->name('producto');

Route::DELETE('ProductController/remove/{id}', 'ProductController@destroy')->name('product.remove');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
