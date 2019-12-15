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

//Crud productos
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

Route::get('/ship', function () {
    return view('shipping');
});


//Crud marcas
// Listado
Route::get('/cms/brands', 'BrandModelController@list')->name('cmsMarcas');
// Mostrar formulario de Creación / Edición
Route::get('/cms/brands/create_update/{id?}', 'BrandModelController@createOrEdit')->name('cms.brands.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/brands/create_update/{id?}', 'BrandModelController@storeOrUpdate')->name('cms.brands.createOrUpdate');
// Eliminación
Route::delete('/cms/brands/delete/{id}', 'BrandModelController@delete')->name('cms.brands.delete');

Route::get('/checkout', function () {
    return view('checkout');
});


//Crud categorias
// Listado
Route::get('/cms/categories', 'CategoryModelController@list')->name('cmsCategorias');
// Mostrar formulario de categories/ Edición
Route::get('/cms/categories/create_update/{id?}', 'CategoryModelController@createOrEdit')->name('cms.categories.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/categories/create_update/{id?}', 'CategoryModelController@storeOrUpdate')->name('cms.categories.createOrUpdate');
// Eliminación
Route::delete('/cms/categories/delete/{id}', 'CategoryModelController@delete')->name('cms.categories.delete');

Route::get('/checkout', function () {
    return view('checkout');
});

/*
//Crud usuarios
// Listado
Route::get('/cms/users', 'CustomerModelController@list')->name('cmsUsuarios');
// Mostrar formulario de Creación / Edición
Route::get('/cms/users/create_update/{id?}', 'CustomerModelController@createOrEdit')->name('cms.users.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/users/create_update/{id?}', 'CustomerModelController@storeOrUpdate')->name('cms.users.createOrUpdate');
// Eliminación
Route::delete('/cms/users/delete/{id}', 'CustomerModelController@delete')->name('cms.users.delete');

Route::get('/checkout', function () {
    return view('checkout');
});




/*
Route::get('/home', 'HomeController@index')->name('home');



Route::resource('shippingmodel', 'ShippingModelController');
Route::resource('ordermodel', 'OrderModelController');
Route::resource('paymentmodel', 'PaymentModelController');
Route::resource('orderdetailsmodel', 'OrderDetailsModelController');
*/

/*
Route::get('search/{tipo}/{id}', 'ClasificationController@getClasification')->name("obtener");
buscarporclasificacion/category/1
buscarporclasificacion/tag/1
*/
?>