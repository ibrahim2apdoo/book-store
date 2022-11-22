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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','categoryController');
Route::resource('product','productController');

Route::post('add_product/{category_id}','categoryController@add_product');

Route::get( 'contact','ContactController@index');
Route::post('contact','ContactController@create')->name('contact.create');


Route::get('contact/showindex','ContactController@showindex')->name('contact.showindex');
Route::delete('contact/{id}','ContactController@destroy');


Route::get('/','HomeController@home');
Route::get('/about_us','HomeController@about_us');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
