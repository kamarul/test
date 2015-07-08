@extends('layout')
@section('content')

    <!-- Product Row -->
        <div class="row">
            @foreach( $shops as $shop)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    @if (isset($shop->Photo[0])) 
                        <img class="img-responsive" src="{{ asset('upload_photos') }}/{{ $shop->Photo[0]->path }}" alt="">
                    @else
                        <img class="img-responsive" src="http://placehold.it/300x200" alt="">
                    @endif
                </a>
                <h4>
                    <a href="{{ route('promotion.index',array('shop'=>$shop->id)) }}">{{ $shop->name }}</a>
                </h4>
            </div>
            @endforeach
        </div>

    
@endsection