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

Route::get('/admin/promotion/create', array(
	'as'    => 'admin.promotion.create',
	'uses'   => 'PromotionController@create',
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


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//API
Route::get('/api/promotion/listpromotion', array(
	'as'    => 'api.promotion.listpromotion',
	'uses'   => 'Api\ApiPromotionController@listpromotion',
	));

//Admin
Route::get('/admin', array( 
	'as' => 'admin.promotion.index' ,
	'middleware' => 'auth' ,
	'uses'  =>  'Admin\PromotionController@index'
	));