<?php namespace App\promoshop\Repositories\Promotion;

use App\Promotion;
 
interface PromotionRepositoryInterface {

	public function listPromotion($shopId =null ,$categoryId = null);
}