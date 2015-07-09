<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\promoshop\Repositories\Promotion\PromotionRepositoryInterface;

use Input;

use App\Promotion;

class PromotionController extends Controller
{

    public function __construct(PromotionRepositoryInterface $promotion) {
        $this->promotion = $promotion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function list()
    {   
        $shopId = Input::get('shop');
        $categoryId = Input::get('category');

        $promotions = $this->promotion->listPromotion($shopId,$categoryId);
        
        return view('promotion.listpromotion',compact('promotions'));
    }

    
}
