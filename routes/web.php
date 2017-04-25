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

//Alexandru Antochi
Route::get('/company/{id}', 'CompanyProfileController@index');
Route::get('/companies', 'CompanyBrowserController@index');
Route::get('/companies/{order}', 'CompanyBrowserController@order');
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@submit');

//Ionut Arhire
Route::get('/campaign/{id}', 'CampaignProfileController@index');
Route::get('/campaigns', 'CampaignsController@index');
Route::get('/campaign/create', 'CampaignCreateController@index');

Route::get('/campaigns/popularity', 'CampaignsPopularityController@index');
Route::get('/campaigns/trending', 'CampaignsPopularityController@index');
Route::get('/campaigns/byDate', 'CampaignsPopularityController@index');


//Alexandru Poputoaia
Route::get('/home', 'MainPageController@home');
Route::get('/products', 'ProductsController@products');



