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

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Alexandru Antochi
Route::get('companies/profile/{id}', 'Companies\CompanyProfileController@viewProfile');
Route::get('companies/browse', 'Companies\CompanyBrowserController@main');
Route::get('companies/API/{name}', 'Companies\CompanyAPIController@main');
Route::get('companies/suggest','Companies\SuggestCompanyController@main');
Route::post('companies/suggest', 'Companies\SuggestCompanyController@saveCompany');
/*
Route::get('/companies/{order}', 'CompanyBrowserController@order');
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@submit');
*/
//Ionut Arhire
Route::get('/campaigns/popularity', 'Campaign\CampaignsPopularityController@index');
Route::get('/campaigns/trending', 'Campaign\CampaignsTrendingController@index');
Route::get('/campaigns/byDate', 'Campaign\CampaignsByDateController@index');

/*
Route::get('/campaigns/byName', 'Campaign\CampaignsFilterController@byName');
Route::get('/campaigns/byCategory', 'Campaign\CampaignsFilterController@byCategory');
Route::get('/campaigns/byOrganizer', 'Campaign\CampaignsFilterController@byOrganizer');*/

Route::get('/campaigns/filter', 'Campaign\CampaignsFilterController@index');

Route::get('/campaigns/{id}', 'Campaign\CampaignProfileController@index');
Route::get('/campaigns', 'Campaign\CampaignBrowserController@index');

Route::get('/NewsFeed', 'NewsFeedController@index');


Route::get('/suggestions/{id}', function ($id) {


    $DICampaigns = new \App\Http\Controllers\Campaign\CustomClasses\DICampaigns();

    $suggestions = new \App\Http\Controllers\Campaign\CustomClasses\SuggestionsAlg($DICampaigns, $DICampaigns->campaign_categories);

    $results = $suggestions->makeSuggstions($id, 6);

    var_dump($results);
});


//Alexandru Poputoaia
Route::get('/home', 'Home\MainPageController@home');
Route::get('/products', 'Products\ProductsController@index');
Route::get('/products/all', 'Products\ProductsCategoryFilterController@displayAllProducts');
Route::get('/products/profile/{id}', 'Products\ProductsCategoryFilterController@displayProductProfile');
Route::get('/category/{categoryName}', 'Products\ProductsCategoryFilterController@displayProductsCategory');




//Silitra Dragos
Route::get('/profile','ProfileController@showprofile');
Route::get('/profile/edit','EditformController@editprofile');
Route::get('/auth/login','LoginuserController@show');
Route::get('/auth/register','RegisteruserController@show');

//
Route::get('auth/logout', function() { Auth::logout(); echo "Logged out.";});


Route::get('/home', 'home\HomeController@index');
