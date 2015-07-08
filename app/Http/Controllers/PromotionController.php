<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;

use App\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $today = date('Y-m-d');
        $promotions = Promotion::with(['Product.Photo' => function ($query) {
            return $query->where('dimension','=','400x700')->get();
        }])->with('Shop')->where('start','<=',$today)->where('end','>=',$today);

        //filter by category
        if (Input::has('category')) {
            $promotions->whereHas('product',function ($query) {
                $query->where('category_id','=',Input::get('category'));
            });
        }

        //filter by shop
        if (Input::has('shop')) {
            $promotions->where('shop_id','=',Input::get('shop'));
        }

        $promotions = $promotions->paginate(15);
       // dd( $promotions);

        return view('promotion.index',compact('promotions'));
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
