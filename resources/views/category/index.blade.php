@extends('layout')
@section('content')

    <!-- Product Row -->
        <div class="row">
            @foreach( $categories as $category)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h4>
                    <a href="">{{ $category->name }}</a>
                </h4>
            </div>
            @endforeach
        </div>

    
@endsection