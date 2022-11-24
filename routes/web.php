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


//
Route::get( 'contact','ContactController@index')->middleware('auth');
Route::post('contact','ContactController@create')->middleware('auth');





Route::get('/','HomeController@index');
Route::get('/about_us','HomeController@about_us')->middleware('auth');
Route::get('/show_product/{id}','categoryController@show_product')->middleware('auth');

Route::middleware(['admin', 'web'])->group(function () {
        Route::get('/adminpanel', 'AdminController@index');
        Route::get('/users', 'AdminController@getUser')->name('users');
        Route::get('users/{id}/edit', 'AdminController@edit');
        Route::put('users/{id}', 'AdminController@update');
        Route::delete('users/{id}', 'AdminController@destroy');
        Route::get('/users/create', 'AdminController@create')->name('users.create');
        Route::post('/users/create', 'AdminController@store')->name('users.store');
        //contact route admin
        Route::get('contact/showindex','ContactController@showindex')->name('contact.showindex');
        Route::delete('contact/{id}','ContactController@destroy');
    //category route
        Route::resource('category','categoryController');
    //category product
        Route::resource('product','productController');

        Route::post('add_product/{category_id}','categoryController@add_product');
    });

