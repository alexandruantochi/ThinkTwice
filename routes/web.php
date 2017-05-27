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


Auth::routes();

//Alexandru Antochi
Route::get('/company/{id}', 'CompanyProfileController@index');
Route::get('/companies', 'CompanyBrowserController@index');
Route::get('/companies/{order}', 'CompanyBrowserController@order');
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@submit');

//Ionut Arhire
Route::get('/campaigns/{id}', 'Campaign\CampaignProfileController@index');
Route::get('/campaigns', 'Campaign\CampaignBrowserController@index');

Route::get('/campaigns/popularity', 'Campaign\CampaignsPopularityController@index');
Route::get('/campaigns/trending', 'Campaign\CampaignsTrendingController@index');
Route::get('/campaigns/byDate', 'Campaign\CampaignsByDateController@index');


//Alexandru Poputoaia
Route::get('/home', 'Home\MainPageController@home');
Route::get('/products', 'Products\ProductsController@index');

//Silitra Dragos
Route::get('/profile','ProfileController@showprofile');
Route::get('/profile/edit','EditformController@editprofile');
Route::get('/auth/login','LoginuserController@show');
Route::get('/auth/register','RegisteruserController@show');




Route::get('/home', 'home\HomeController@index');
