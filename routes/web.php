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

Route::get('/products/{category_short_name?}', 'IndexController@index');
//Route::post('/products');
Route::get('/products/{category_short_name}/{product_id}', 'IndexController@detail');

//Route::get('/create', 'Admin\ProductController@create');
//Route::post('/create', 'Admin\ProductController@store');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function (){
    Route::resource('/products', 'Admin\ProductController');

    Route::resource('/categories', 'Admin\CategoryController');

});

//Route::get('/addcategory', 'Admin\CategoryController@create');
//Route::post('/addcategory', 'Admin\CategoryController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
