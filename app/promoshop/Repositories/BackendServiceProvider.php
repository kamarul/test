<?php namespace App\promoshop\Repositories;
 
use Illuminate\Support\ServiceProvider;
 
class BackendServiceProvider extends ServiceProvider {
	
	public function register()
	{
		//product
		$this->app->bind('App\promoshop\Repositories\Products\ProductRepositoryInterface', 'App\promoshop\Repositories\Products\DbProductRepository');

		//promotion
		$this->app->bind('App\promoshop\Repositories\Promotion\PromotionRepositoryInterface', 'App\promoshop\Repositories\Promotion\DbPromotionRepository');

		//shop
		$this->app->bind('App\promoshop\Repositories\Shop\ShopRepositoryInterface', 'App\promoshop\Repositories\Shop\DbShopRepository');
	}
}