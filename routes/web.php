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
    return view('home');
});

Auth::routes();

/*
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('brandmodel', 'BrandModelController');
Route::resource('productmodel', 'ProductModelController');
Route::resource('customermodel', 'CustomerModelController');
Route::resource('shippingmodel', 'ShippingModelController');
Route::resource('ordermodel', 'OrderModelController');
Route::resource('paymentmodel', 'PaymentModelController');
Route::resource('orderdetailsmodel', 'OrderDetailsModelController');
Route::resource('categorymodel', 'CategoryModelController');*/
