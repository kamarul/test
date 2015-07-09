@extends('layout')

@section('content')
<div class="row">
    <a href="{{ route('api.promotion.listpromotion',$param) }}"></a>
</div>
@endsection


@section('script')
<!-- Jquery JScroll Master plugin -->
<script src="{{ asset("plugin/jscroll-master/jquery.jscroll.js") }}"></script>

<script type="text/javascript">
    var $page = 1;
    $('.row').jscroll({
        callback : function (){
            $page = parseInt($page) + 1;
            $('.row').find('a').attr('href',"{{ route('api.promotion.listpromotion') }}?page=" + $page);
        }
    });
</script>
@endsection
