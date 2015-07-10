@extends('layout')

@section('content')
<div class="row scroll"></div>
@endsection

@section('script')
<!-- Jquery JScroll Master plugin -->
<script src="{{ asset("plugin/jscroll-master/jquery.jscroll.js") }}"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('.scroll').load("{{ route('api.promotion.listpromotion',$param) }}" , function(){
		$('.scroll').jscroll({
			debug:true,
		});
	});
})
    
</script>
@endsection
