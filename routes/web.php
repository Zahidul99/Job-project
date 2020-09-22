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

Route::get('/','CategoryController@index');

Route::get('/add-category','CategoryController@view_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/all-category','CategoryController@all_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');
Route::get('/add-customer','CustomerController@index');
Route::post('/save-customer','CustomerController@save_customer');
Route::get('/all-customer','CustomerController@all_customer');


Route::get('/add-product','productController@view_product');
