<?php namespace App\promoshop\Repositories;
 
use Illuminate\Support\ServiceProvider;
 
class BackendServiceProvider extends ServiceProvider {
	
	public function register()
	{
		//product
		$this->app->bind('App\promoshop\Repositories\Products\ProductRepositoryInterface', 'App\promoshop\Repositories\Products\DbProductRepository');
	}
}