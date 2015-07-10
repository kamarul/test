<?php namespace App\promoshop\Repositories\Shop;
 
use App\Shop;
use App\Promotion;

class DbShopRepository implements ShopRepositoryInterface {
	
	public function listShop(){

        $today = date('Y-m-d');
		$shops = Shop::with(['Photo' => function ($query) {
            $query->where('dimension','=','200x300')->get();

        }])->get();

        return $shops;
	}

}

