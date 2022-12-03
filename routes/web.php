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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/cart', 'CartController@index')->name('index');
Route::post('/cart', 'CartController@store')->name('cart.store');


//
Route::get('contact', 'ContactController@index')->middleware('auth');
Route::post('contact', 'ContactController@create')->middleware('auth');


Route::get('/', 'HomeController@index')->name('products.list');
Route::get('/about_us', 'HomeController@about_us')->middleware('auth');
Route::get('/show_product/{id}', 'categoryController@show_product')->middleware('auth');
Route::get('/show_product_details/show_product/{id}', 'categoryController@show_product')->middleware('auth');
Route::get('/show_product_details/{id}', 'productController@show_product_details')->middleware('auth');

Route::middleware(['admin', 'web'])->group(function () {
    Route::get('/adminpanel', 'AdminController@index');
    Route::get('/users', 'AdminController@getUser')->name('users');
    Route::get('users/{id}/edit', 'AdminController@edit');
    Route::put('users/{id}', 'AdminController@update');
    Route::delete('users/{id}', 'AdminController@destroy');
    Route::get('/users/create', 'AdminController@create')->name('users.create');
    Route::post('/users/create', 'AdminController@store')->name('users.store');
    //contact route admin
    Route::get('contact/showindex', 'ContactController@showindex')->name('contact.showindex');
    Route::delete('contact/{id}', 'ContactController@destroy');
    //category route
    Route::resource('category', 'categoryController');
    //category product
    Route::resource('product', 'productController');

    Route::post('add_product/{category_id}', 'categoryController@add_product');
});

Route::get('cart', 'CartController@cartList')->name('cart.list');
Route::post('cart', 'CartController@addToCart')->name('cart.store');
Route::post('update-cart', 'CartController@updateCart')->name('cart.update');
Route::post('remove', 'CartController@removeCart')->name('cart.remove');
Route::post('clear', 'CartController@clearAllCart')->name('cart.clear');


