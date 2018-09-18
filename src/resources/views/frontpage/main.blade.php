@extends('boyarcaviar::layouts.frontend')

@section('title', 'Premium Black Caviar')

@section('content')
 	<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
 		<div class="container frame-two">
			@include('boyarcaviar::partials.promo')	 		
			@include('boyarcaviar::partials.second')	 		
	 		<div class="mt-5 d-flex flex-row no-gutters text-center">
	 			<div class="col-12">
		 			<h1 class="color-gold text-typography">OUR TOP SELLING PRODUCTS</h1>
		 		</div>
	 		</div>
	 		<div class="mt-2 d-flex flex-md-row flex-sm-column no-gutters align-items-stretch">
	 			<div class="col-4">
	 				<div class="row h-100">
	 					<div class="col h-100">
						 	<div class="card  mr-2" style="background-color: black; border-radius: 0;">
						 		<div class="m-4 p-2 bd-glow">
						  		<img class="card-img-top" src="/img/sturgeon.jpg" alt="Sturgeon Black Caviar">
						  		</div>
						  		<div class="card-body">
						    		<h5 class="card-title text-white">Sturgeon Caviar 100g</h5>
						    		<p class="card-text color-twilight text-justify">has smooth, firm eggs of medium size from 2.5mm to 3mm in dark grey, brown and black colour. STURGEON caviar has an intensely nutty, buttery taste and aromatic aftertaste of a medium duration.</p>
						    		<p class="text-center color-gold  text-vibes">
						    			180.00 €
						    		</p>
						    		<p class="text-center">

						    		<a href="/buy?product_id=194354&name=Sturgeon&qty=1&price=180&size=100g&type=Caviar" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
						    		</p>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>
	 			<div class="col-4">
	 				<div class="row h-100">
	 					<div class="col h-100">
						 	<div class="card mr-2" style="background-color: black;">
						 		<div class="m-4 p-2 bd-glow">
						  		<img class="card-img-top" src="/img/oscietra.jpg" alt="Oscietra Classic Black Caviar">
						  		</div>
						  		<div class="card-body">
						    		<h5 class="card-title text-white">Oscietra Classic 100g</h5>
						    		<p class="card-text color-twilight text-justify">caviar is sourced from the best Russian sturgeons. Smooth and silky pearls have a buttery flavour and the roe diameter from 2.7mm to 3.2mm, with a colour varying between black, brown and grey.</p>
						    		<p class="text-center color-gold  text-vibes">
						    			225.00 €
						    		</p>
						    		<p class="text-center">
						    		<a href="/buy?product_id=184345&name=Oscietra%20Classic&qty=1&price=225&size=100g&type=Caviar" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
						    		</p>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>
				<div class="col-4">
	 				<div class="row h-100">
	 					<div class="col h-100">
						 	<div class="card  mr-2" style="background-color: black; border-radius: 0;">
						 		<div class="m-4 p-2 bd-glow">
						  		<img class="card-img-top" src="/img/sevruga.jpg" alt="Sevruga Black Caviar">
						  		</div>
						  		<div class="card-body">
						    		<h5 class="card-title text-white">Sevruga 50g</h5>
						    		<p class="card-text color-twilight text-justify">is exquisite and rare full flavoured caviar with the roe of 2mm in diameter and a colour varying between light grey and golden. The time required to harvest SEVRUGA caviar is from 8 years.</p>
						    		<p class="text-center color-gold  text-vibes">
						    			122.00 €
						    		</p>
						    		<p class="text-center">
						    		<a href="/buy?product_id=164354&name=Sevruga&qty=1&price=122&size=50g&type=Caviar" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
						    		</p>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>
			</div>
	 	</div>
 	</div>
@endsection
