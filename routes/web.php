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
Route::get('/cms/products', 'ProductModelController@list')->name('cmsProductos');
// Mostrar formulario de Creación / Edición
Route::get('/cms/products/create_update/{id?}', 'ProductModelController@createOrEdit')->name('cms.products.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/products/create_update/{id?}', 'ProductModelController@storeOrUpdate')->name('cms.products.createOrUpdate');
// Eliminación
Route::delete('/cms/products/delete/{id}', 'ProductModelController@delete')->name('cms.products.delete');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/product', function (){
    return view('/product');
});

Route::get('/shopdetail', function (){
    return view('/shopdetail');
});

Route::get('/profile', function (){
    return view('/profile');
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

/*
Route::get('search/{tipo}/{id}', 'ClasificationController@getClasification')->name("obtener");
buscarporclasificacion/category/1
buscarporclasificacion/tag/1
*/
