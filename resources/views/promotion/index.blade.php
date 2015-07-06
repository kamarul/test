@extends('layout')
@section('content')

    <!-- Product Row -->
        <div class="row">
            @foreach( $promotions as $promotion)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h4>
                    <a href="{{ route('promotion.show',$promotion->id) }}">{{ $promotion->Product->name }}</a>
                </h4>
                <p><del>RM {{ $promotion->price_normal }}</del><br>RM {{ $promotion->price_promo }}
                &nbsp;&nbsp;<small>*Saving RM {{ $promotion->saving }}</small></p>
            </div>
            @endforeach
        </div>

    
@endsection