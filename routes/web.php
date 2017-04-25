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

Route::get('/campaign/{id}', 'CampaignProfileController@index');
Route::get('/campaigns', 'CampaignsController@index');

Route::get('/campaign/popularity', 'CampaignsPopularityController@index');
Route::get('/campaign/trending', 'CampaignsTrendingController@index');
Route::get('/campaign/byDate', 'CampaignsByDateController@index');

Route::get('/home', 'MainPageController@home');
Route::get('/products', 'ProductsController@products');

