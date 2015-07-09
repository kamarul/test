<?php namespace App\promoshop\Repositories\Promotion;
 
use App\Promotion;

class DbPromotionRepository implements PromotionRepositoryInterface {
	
	public function listPromotion($shopId = null ,$categoryId = null){
		
		$today = date('Y-m-d');
        $promotions = Promotion::with(['Product.Photo' => function ($query) {
        	 return $query->where('dimension','=','400x700')->get();
        }])->with('Shop')->where('start','<=',$today)->where('end','>=',$today);

	 	//filter by category
        if (isset($categoryId)) {
            $promotions->whereHas('product',function ($query) use($categoryId) {
                $query->where('category_id','=',$categoryId);
            });
        }

        //filter by shop
        if (isset($shopId)) {
            $promotions->where('shop_id','=',$shopId);
        }

        return $promotions = $promotions->paginate(15);
	}

}

