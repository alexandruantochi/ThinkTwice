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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/company/{id}', 'CompanyProfileController@index');
Route::get('/companies', 'CompanyBrowserController@index');

Route::get('/mainOffPage', 'MainOfflinePageController@mainOffPage');
Route::get('/home', 'MainPageController@home');
Route::get('/products', 'ProductsController@products');
