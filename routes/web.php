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

Route::get('/', 'IndexController@index');
Route::get('/{category_id}/{product_id}', 'IndexController@detail');

Route::get('/create', 'Admin\ProductController@create');
Route::post('/create', 'Admin\ProductController@store');

Route::get('/addcategory', 'Admin\CategoryController@create');
Route::post('/addcategory', 'Admin\CategoryController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
