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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Auth::routes();

/** FRONT  ///////////////////////////////////////////////////////////////////////////////////////// */

Route::get('/profile/{id?}', 'UserController@profile')->name('UserProfile');
Route::post('/profile/{id?}', 'UserController@useredit')->name('UserUpdate');

Route::get('/category/{id?}', 'CategoryController@show')->name('category');

Route::get('/product/{id?}', 'ProductController@show')->name('product');


/*
Route::get('search/{tipo}/{id}', 'ClasificationController@getClasification')->name("obtener");
buscarporclasificacion/category/1
buscarporclasificacion/tag/1
*/

Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/faq', function () { return view('faq'); });

Route::get('/about', function (){ return view('about'); });



Route::get('/shopdetail', function (){ return view('shopdetail'); });

Route::resource('province', 'ProvinceController');



Route::get('/add-to-cart/{id}', [
    'uses'=> 'ProductController@getAddToCart',
    'as'=> 'product.addToCart'
]);



/** CARRITO */


Route::get('cart', 'ProductController@cart');

Route::get('add-to-cart/{id}', 'ProductController@addToCart');


Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/orderrev', function () {
    return view('orderreview');
});

Route::get('/payment', function () {
    return view('payment');
});




/** BACK END ////////////////////////////////////////////////////////////////////////////////////////// */

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/cms', function () {
    return view('cms.auth.login');
});


// PRODUCTOS
// Listado
Route::get('/cms/products', 'ProductController@list')->name('cmsProductos');
// Mostrar formulario de Creación / Edición
Route::get('/cms/products/create_update/{id?}', 'ProductController@createOrEdit')->name('cms.products.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/products/create_update/{id?}', 'ProductController@storeOrUpdate')->name('cms.products.createOrUpdate');
// Eliminación
Route::delete('/cms/products/delete/{id}', 'ProductController@delete')->name('cms.products.delete');

// MARCAS
// Listado
Route::get('/cms/brands', 'BrandController@list')->name('cmsMarcas');
// Mostrar formulario de Creación / Edición
Route::get('/cms/brands/create_update/{id?}', 'BrandController@createOrEdit')->name('cms.brands.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/brands/create_update/{id?}', 'BrandController@storeOrUpdate')->name('cms.brands.createOrUpdate');
// Eliminación
Route::delete('/cms/brands/delete/{id}', 'BrandController@delete')->name('cms.brands.delete');

// CATEGORIAS
// Listado
Route::get('/cms/categories', 'CategoryController@list')->name('cmsCategorias');
// Mostrar formulario de categories/ Edición
Route::get('/cms/categories/create_update/{id?}', 'CategoryController@createOrEdit')->name('cms.categories.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/categories/create_update/{id?}', 'CategoryController@storeOrUpdate')->name('cms.categories.createOrUpdate');
// Eliminación
Route::delete('/cms/categories/delete/{id}', 'CategoryController@delete')->name('cms.categories.delete');

// USUARIOS
// Listado
Route::get('/cms/users', 'UserController@list')->name('cmsUsuarios');
// Mostrar formulario de Creación / Edición
Route::get('/cms/users/create_update/{id?}', 'UserController@createOrEdit')->name('cms.users.createOrUpdate');
// Obtener datos enviados y Crear/Guardar
Route::post('/cms/users/create_update/{id?}', 'UserController@storeOrUpdate')->name('cms.users.createOrUpdate');
// Eliminación
Route::delete('/cms/users/delete/{id}', 'UserController@delete')->name('cms.users.delete');

/** /////////////////////////////////////////////////////////////////////////////////////////////////// */
