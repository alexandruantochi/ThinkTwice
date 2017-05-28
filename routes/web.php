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
Route::get('/company/profile/{id}', 'Companies\CompanyProfileController@viewProfile');
Route::get('/companies/browse', 'Companies\CompanyBrowserController@main');
//
Route::get('/companies/{order}', 'CompanyBrowserController@order');
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@submit');

//Ionut Arhire
Route::get('/campaigns/popularity', 'Campaign\CampaignsPopularityController@index');
Route::get('/campaigns/trending', 'Campaign\CampaignsTrendingController@index');
Route::get('/campaigns/byDate', 'Campaign\CampaignsByDateController@index');

Route::get('/campaigns/byName', 'Campaign\CampaignsFilterController@byName');
Route::get('/campaigns/byCategory', 'Campaign\CampaignsFilterController@byCategory');
Route::get('/campaigns/byOrganizer', 'Campaign\CampaignsFilterController@byOrganizer');

Route::get('/campaigns/{id}', 'Campaign\CampaignProfileController@index');
Route::get('/campaigns', 'Campaign\CampaignBrowserController@index');

Route::get('/NewsFeed', 'NewsFeedController@index');

//Alexandru Poputoaia
Route::get('/home', 'Home\MainPageController@home');
Route::get('/products', 'Products\ProductsController@index');
Route::get('/category/{categoryName}', 'Products\ProductsCategoryFilterController@displayProductProfile');
Route::get('/products/all', 'Products\ProductsCategoryFilterController@displayAllProducts');



//Silitra Dragos
Route::get('/profile','ProfileController@showprofile');
Route::get('/profile/edit','EditformController@editprofile');
Route::get('/auth/login','LoginuserController@show');
Route::get('/auth/register','RegisteruserController@show');




Route::get('/home', 'home\HomeController@index');
