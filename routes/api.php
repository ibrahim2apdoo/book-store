<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace'=>'Api'], function () {
Route::group(['middleware'=>'auth:api'], function () {
    Route::get('all/category','categoryController@all_category');
    Route::get('category/{category_id}','categoryController@all_product_category');
    Route::post('add_product','categoryController@add_product');
    Route::get('/user', function (Request $request) {return $request->user();
    });
});
Route::post('login','users@login');
});
