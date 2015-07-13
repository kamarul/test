<?php

namespace App\Http\Controllers\Admin;

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
    public function index()
    {
        $shopId = 1;
        $categoryId = Input::get('category');

        $promotions = $this->promotion->listPromotion($shopId,$categoryId);
        $nextUrl =$promotions->appends(Input::all())->nextPageUrl();
        $totalPage =$promotions->lastPage();

        return view('admin.promotion.index',compact('promotions','nextUrl','totalPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
