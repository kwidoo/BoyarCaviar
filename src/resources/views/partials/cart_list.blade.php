@if (count(Cart::content()) > 0)
	@foreach (Cart::content() as $content)
		@include('boyarcaviar::partials.cart_row',['content' => $content])
	@endforeach
	<div class="m-2 d-flex flex-column text-white align-items-center">

		<div class="d-flex flex-row justify-content-end w-100 text-right">
			<div class="col-md-2">
				Subtotal:
			</div>
			<div class="col-md-2">
				{{ number_format( (Cart::subtotal()-50) ,2) }} €
			</div>
		</div>		
		<div class="d-flex flex-row justify-content-end w-100 text-right">
			<div class="col-md-2">
				Taxes:
			</div>
			<div class="col-md-2">
				{{Cart::tax()}} €
			</div>
		</div>
		<div class="d-flex flex-row justify-content-end w-100 text-right">
			<div class="col-md-2">
				Shipping:
			</div>
			<div class="col-md-2">
				50.00 €
			</div>
		</div>
		<div class="d-flex flex-row justify-content-end w-100 text-right">
			<div class="col-md-2">
				Total:
			</div>
			<div class="col-md-2">
				{{Cart::total()}} €
			</div>
		</div>
	</div>
	<div class="m-2 d-flex flex-column text-white align-items-center">
		<div class="d-flex flex-row justify-content-end w-100">
			<div class="col-6 text-left">
				<a href="{{ route('empty') }}" class="btn btn-secondary btn-empty text-black">Empty cart</a>
			</div>
			<div class="col-6 text-right">
				<a href="{{ route('checkout') }}" class="btn btn-caviar">Checkout</a>
			</div>
		</div>
	</div>
@else
	<div class="m-5 d-flex flex-row text-white align-items-center">
		Cart is empty
	</div>
@endif