<!-- Product Row -->

            @foreach( $promotions as $promotion)
            <div class="col-md-3 portfolio-item">
                <a href="#">
                @if (isset($promotion->Product->Photo[0])) 
                    <img class="img-responsive" src="{{ asset('upload_photos') }}/{{ $promotion->Product->Photo[0]->path }}" alt="">
                @else
                    <img class="img-responsive" src="http://placehold.it/300x200" alt="">
                @endif
                </a>
                <h4>
                    <a href="{{ route('promotion.show',$promotion->id) }}">{{ $promotion->Product->name }}</a>
                </h4>
                <p>{{ $promotion->Shop->name }}</p>
                <p>RM {{ $promotion->price_promo }} &nbsp; <del>RM {{ $promotion->price_normal }}</del>
                &nbsp;&nbsp;<small>*Saving RM {{ $promotion->saving }}</small></p>
            </div>
            @endforeach

<a href="{{ $nextUrl }}" data-totalPage="{{ $totalPage }}"></a>