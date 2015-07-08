@extends('layout')
@section('content')

<div class="media">
  <div class="media-left col-md-4 portfolio-item">
    <img class="img-responsive" src="http://placehold.it/700x400" alt="">

  </div>
  <div class="media-body">
    <h4>
        <a href="#">{{ $promotion->Product->name }}</a>
    </h4>
    <p>{{ $promotion->Shop->name }}</p>
    <p><del>RM {{ $promotion->price_normal }}</del><br>RM {{ $promotion->price_promo }}
    &nbsp;&nbsp;<small>*Saving RM {{ $promotion->saving }}</small></p>
  </div>
</div>

<br><br>
<div data-example-id="simple-responsive-table" class="bs-example">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th colspan="3">Same Promotion</th>
          </tr>
        </thead>
        <tbody>
        <?php $count = 1;?>
          @foreach ($samepromo as $promotion)
          <tr>
            <th scope="row">{{ $count++ }}</th>
            <td>{{ $promotion->Shop->name }}</td>
            <td> <p><del>RM {{ $promotion->price_normal }}</del><br>RM {{ $promotion->price_promo }}
    &nbsp;&nbsp;<small>*Saving RM {{ $promotion->saving }}</small></p></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div><!-- /.table-responsive -->

  </div>
   
@endsection