@extends('layout')
@section('content')

<div class="media">
  <div class="media-left col-md-3 portfolio-item">
    <a href="#">
       <img class="img-responsive" src="http://placehold.it/700x400" alt="">
    </a>
  </div>
  <div class="media-body">
    <h4>
        <a href="#">{{ $promotion->Product->name }}</a>
    </h4>
    <p><del>RM {{ $promotion->price_normal }}</del><br>RM {{ $promotion->price_promo }}
    &nbsp;&nbsp;<small>*Saving RM {{ $promotion->saving }}</small></p>
  </div>
</div>
   
@endsection