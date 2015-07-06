@extends('layout')
@section('content')

    <!-- Product Row -->
        <div class="row">
            @foreach( $products as $product)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">{{ $product->name }}</a>
                </h3>
                <p>TESCO</p>
            </div>
            @endforeach
        </div>

    
@endsection