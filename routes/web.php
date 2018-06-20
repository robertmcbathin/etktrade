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

Route::get('/', [
	'uses' => 'SiteController@showMainPage',
	'as' => 'site.show-main-page.get'
]);

Route::get('/how-to-register', [
	'uses' => 'SiteController@showHowToRegisterPage',
	'as' => 'site.how-to-register.get'
]);

Route::get('/categories/{category_id}', [
	'uses' => 'SiteController@showCategoriesPage',
	'as' => 'site.show-categories-page.get'
]);

Route::get('/subcategories/{subcategory_id}', [
	'uses' => 'SiteController@showSubcategoriesPage',
	'as' => 'site.show-subcategories-page.get'
]);

Route::get('/stock/{stock_id}', [
	'uses' => 'SiteController@showStockPage',
	'as' => 'site.show-stock-page.get'
]);

Route::get('/product/{product_id}', [
	'uses' => 'SiteController@showProductPage',
	'as' => 'site.show-product-page.get'
]);




Auth::routes();

/**
 * ПРОФИЛЬ ПОЛЬЗОВАТЕЛЯ
 */
Route::group(['middleware' => 'auth'], function () {
	Route::get('profile',[
		'uses' => 'UserController@showProfilePage',
		'as' => 'profile.show-profile-page.get'
		]);
});


Route::get('/home', 'HomeController@index')->name('home');

/**
 * AJAX
 */
Route::post('/ajax/add-to-cart',[
	'uses' => 'UserController@ajaxAddToCart',
	'as' => 'ajax.add-to-cart.post'
]);
Route::post('/ajax/check-cart',[
	'uses' => 'UserController@ajaxCheckCart',
	'as' => 'ajax.check-cart.post'
]);
