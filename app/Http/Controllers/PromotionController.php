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
    public function index()
    {   
        $param = Input::all();
        return view('promotion.index',compact('param'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.promotion.create');
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
        $today = date('Y-m-d');
        $promotion = Promotion::with('Product','Shop')->find($id);
        $samepromo = Promotion::with('Shop')->where('product_id','=',$promotion->product_id)->where('id','!=',$id)->where('start','<=',$today)->where('end','>=',$today)->get();

        return view('promotion.show',compact('promotion','samepromo'));
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
