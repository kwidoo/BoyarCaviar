@extends('boyarcaviar::layouts.frontend')

@section('title', 'My Cart')

@section('content')
 	<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
 		<div class="container frame-two">
			@include('boyarcaviar::partials.second')	 	
			<div id="cart-list" class="mt-5 d-flex flex-column w-100 frame-one">
				@include ('boyarcaviar::partials.cart_list')
			</div>
		</div>
	</div>
@endsection