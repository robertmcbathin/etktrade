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