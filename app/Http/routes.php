<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/product', array(
	'as'    => 'product.index',
	'uses'   => 'ProductController@index',
	));

Route::get('/', array(
	'as'    => 'promotion.index',
	'uses'   => 'PromotionController@index',
	));

Route::get('/promotion/{id}/show', array(
	'as'    => 'promotion.show',
	'uses'   => 'PromotionController@show',
	));

Route::get('/shop', array(
	'as'    => 'shop.index',
	'uses'   => 'ShopController@index',
	));

Route::get('/shop/{id}/show', array(
	'as'    => 'shop.show',
	'uses'   => 'ShopController@show',
	));

Route::get('/category', array(
	'as'    => 'category.index',
	'uses'   => 'CategoryController@index',
	));


//API
Route::get('/api/promotion/listpromotion', array(
	'as'    => 'api.promotion.listpromotion',
	'uses'   => 'Api\ApiPromotionController@listpromotion',
	));

//Admin
Route::get('/admin', function(){
	return view('admin.home');
});