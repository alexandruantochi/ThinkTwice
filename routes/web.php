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
//CompanyProfileController
Route::get('companies/profile/{id}', 'Companies\CompanyProfileController@viewProfile');
Route::get('companies/profile/{id}/fav','Companies\CompanyProfileController@favCompany');
Route::get('companies/browse', 'Companies\CompanyBrowserController@main');
Route::get('companies/browse/{id}', 'Companies\CompanyProfileController@viewProducts');
//Company API
Route::get('companies/API/{name}', 'Companies\CompanyAPIController@main');
//Company Suggestion Controller
Route::get('companies/suggest','Companies\SuggestCompanyController@main');
Route::post('companies/suggest', 'Companies\SuggestCompanyController@saveCompany');
//Company Administration
Route::get('companies/admin','Companies\CompanyAdminController@viewCompanies');
Route::get('companies/edit/{id}','Companies\CompanyAdminController@editCompany');
Route::get('companies/admin/delete/{id}','Companies\CompanyAdminController@deleteCompany');
Route::post('companies/edit/{id}','Companies\CompanyAdminController@saveEditedCompany');
Route::get('companies/admin/ugc','Companies\CompanyAdminController@viewSuggestions');
Route::get('companies/admin/ugc_delete/{id}','Companies\CompanyAdminController@deleteSuggestion');
Route::get('companies/admin/ugc_approve/{id}','Companies\CompanyAdminController@approveSuggestion');

//Ionut Arhire
Route::get('/campaigns/popularity', 'Campaign\CampaignsPopularityController@index');
Route::get('/campaigns/trending', 'Campaign\CampaignsTrendingController@index');
Route::get('/campaigns/byDate', 'Campaign\CampaignsByDateController@index');

Route::get('/campaigns/filter', 'Campaign\CampaignsFilterController@index');

Route::get('/campaigns/create', 'Campaign\CampaignCreateController@index');
Route::post('/campaigns/create', 'Campaign\CampaignCreateController@saveCampaign');

Route::get('/campaigns/PendingCreations', 'Campaign\CampaignCreationsController@pendingCreations');
Route::get('/campaigns/FinalizedCreations', 'Campaign\CampaignCreationsController@finalizedCreations');
Route::get('/campaigns/suggestions', 'Campaign\CampaignSuggestionController@index');
Route::get('/campaigns/subscriptions', 'Campaign\CampaignSubscriptionController@getMySubs');
Route::get('/campaigns/{id}/subscribe', 'Campaign\CampaignSubscriptionController@subscribe');
Route::get('/campaigns/{id}/unsubscribe', 'Campaign\CampaignSubscriptionController@unsubscribe');


Route::get('/campaigns/{id}/supported', 'Campaign\AssociatedCompaniesController@companiesSupported');
Route::get('/campaigns/{id}/against', 'Campaign\AssociatedCompaniesController@companiesAgainst');

Route::get('/campaigns/{id}', 'Campaign\CampaignProfileController@index');
Route::get('/campaigns', 'Campaign\CampaignBrowserController@index');

Route::get('/NewsFeed', 'NewsFeedController@index');

//Alexandru Poputoaia
Route::get('/home', 'Home\MainPageController@home');
Route::get('/products', 'Products\ProductsController@index');
Route::get('/products/all', 'Products\ProductsCategoryFilterController@displayAllProducts');
Route::get('/products/profile/{id}', 'Products\ProductsCategoryFilterController@displayProductProfile');
Route::get('/category/{categoryName}', 'Products\ProductsCategoryFilterController@displayProductsCategory');
Route::post('/create',['uses'=>'Products\PostReviewsController@postCreatePost', 'as' => 'post.products/profile/{id}']);
route::get('/search/filter','Search\SearchController@index');
Route::get('/logout',['uses'=>'UserController@getLogout']);



//Silitra Dragos
Route::get('/profile','ProfileController@showprofile');
Route::get('/profile/edit','EditformController@editprofile');
Route::post('/profile/save','EditformController@save');
Route::get('/auth/login','LoginuserController@show');
Route::get('/auth/register','RegisteruserController@show');


//
Route::get('auth/logout', function() { Auth::logout(); echo "Logged out.";});

