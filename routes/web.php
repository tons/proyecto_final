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

/*Route::get('/', function () {
    return view('home');
});*/

Route::view('/', 'home');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/cms', function () {
    return view('cms.auth.login');
});

// Listado
Route::get('crud/products', 'ProductCrudController@list')->name('crud.products');
// Mostrar formulario de Creación / Edición
Route::get('crud/products/create_update/{id?}', 'ProductCrudController@createOrEdit')->name('crud.products.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('crud/products/create_update/{id?}', 'ProductCrudController@storeOrUpdate')->name('crud.products.createOrUpdate');
// Eliminación
Route::delete('crud/products/delete/{id}', 'ProductCrudController@delete')->name('crud.products.delete');

Route::get('/checkout', function () {
    return view('checkout');
});

/*
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('brandmodel', 'BrandModelController');
Route::resource('customermodel', 'CustomerModelController');
Route::resource('shippingmodel', 'ShippingModelController');
Route::resource('ordermodel', 'OrderModelController');
Route::resource('paymentmodel', 'PaymentModelController');
Route::resource('orderdetailsmodel', 'OrderDetailsModelController');
Route::resource('categorymodel', 'CategoryModelController');
*/
