@extends('layout')
@section('content')

    <!-- Product Row -->
        <div class="row">
            @foreach( $categories as $category)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    @if (isset($category->Photo[0])) 
                        <img class="img-responsive" src="{{ asset('upload_photos') }}/{{ $category->Photo[0]->path }}" alt="">
                    @else
                        <img class="img-responsive" src="http://placehold.it/300x200" alt="">
                    @endif
                </a>
                <h4>
                    <a href="{{ route('promotion.index', array('category' => $category->id)) }}">{{ $category->name }}</a>
                </h4>
            </div>
            @endforeach
        </div>

    
@endsection