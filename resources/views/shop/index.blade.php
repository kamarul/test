@extends('layout')
@section('content')

    <!-- Product Row -->
        <div class="row">
            @foreach( $shops as $shop)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h4>
                    <a href="{{ route('promotion.index',array('shop'=>$shop->id)) }}">{{ $shop->name }}</a>
                </h4>
            </div>
            @endforeach
        </div>

    
@endsection