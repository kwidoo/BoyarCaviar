@extends('boyarcaviar::layouts.frontend')

@section('title', 'Sturgeon Black Caviar')

@section('content')
 	<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
 		<div class="container frame-two">
			@include('boyarcaviar::partials.second')	 		
	 		<div class="mt-5 d-flex flex-row no-gutters text-center">
	 			<div class="col-12">
		 			<h1 class="color-gold text-typography">Sturgeon Caviar</h1>
		 		</div>
	 		</div>
	 		<div class="mt-2 d-flex flex-row no-gutters align-items-center">
	 			<div class="col-2">
			  		<img class="card-img-top" src="/img/sturgeon.jpg" alt="Sturgeon Black Caviar">
	 			</div>
	 			<div class="col-10">
	 				<p class="pl-4 pr-4 card-text color-twilight text-justify">Sturgeon Caviar has smooth, firm eggs of medium size from 2.5mm to 3mm in dark grey, brown and black colour. Sturgeon caviar has an intensely nutty, buttery taste and aromatic aftertaste of a medium duration.</p>
	 			</div>
	 		</div>
	 		<div class="mt-5 d-flex flex-md-row flex-sm-column no-gutters justify-content-between">
	 			<div class="bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sturgeon Caviar 20g</p>
		 				<p class="text-vibes color-gold">36 €</p>
		    			<a href="/buy?product_id=194354&name=Sturgeon&qty=1&price=36&size=20&type=Caviar&image=sturgeon" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	 			<div class="bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sturgeon Caviar 30g</p>
		 				<p class="text-vibes color-gold">54 €</p>
		    			<a href="/buy?product_id=194355&name=Sturgeon&qty=1&price=54&size=30g&type=Caviar&image=sturgeon" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>	    		
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sturgeon Caviar 50g</p>
		 				<p class="text-vibes color-gold">90 €</p>
		    			<a href="/buy?product_id=194356&name=Sturgeon&qty=1&price=90&size=50g&type=Caviar&image=sturgeon" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sturgeon Caviar 100g</p>
		 				<p class="text-vibes color-gold">180 €</p>
		    			<a href="/buy?product_id=194357&name=Sturgeon&qty=1&price=180&size=100g&type=Caviar&image=sturgeon" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sturgeon Caviar 250g</p>
		 				<p class="text-vibes color-gold">450 €</p>
		    			<a href="/buy?product_id=194358&name=Sturgeon&qty=1&price=450&size=250g&type=Caviar&image=sturgeon" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sturgeon Caviar 500g</p>
		 				<p class="text-vibes color-gold">900 €</p>
		    			<a href="/buy?product_id=194359&name=Sturgeon&qty=1&price=900&size=500g&type=Caviar&image=sturgeon" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
			</div>
	 	</div>
	</div>
@endsection