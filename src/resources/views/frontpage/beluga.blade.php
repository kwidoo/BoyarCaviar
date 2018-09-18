@extends('boyarcaviar::layouts.frontend')

@section('title', 'Beluga Black Caviar')

@section('content')
 	<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
 		<div class="container frame-two">
			@include('boyarcaviar::partials.second')	 		
	 		<div class="mt-5 d-flex flex-row no-gutters text-center">
	 			<div class="col-12">
		 			<h1 class="color-gold text-typography">Beluga Caviar</h1>
		 		</div>
	 		</div>
	 		<div class="mt-2 d-flex flex-row no-gutters align-items-center">
	 			<div class="col-2">
			  		<img class="card-img-top" src="/img/Beluga.jpg" alt="Beluga Black Caviar">
	 			</div>
	 			<div class="col-10">
	 				<p class="pl-4 pr-4 card-text color-twilight text-justify">Beluga is the most unique, rare and exclusive caviar in the market. These large pearls are smooth and give way to a buttery, creamy texture. The diameter of the roe is the largest and comes to 4mm, with the colour of eggs usually pale grey.</p>
	 			</div>
	 		</div>
	 		<div class="mt-5 d-flex flex-md-row flex-sm-column no-gutters justify-content-between">
	 			<div class="bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Beluga Caviar 20g</p>
		 				<p class="text-vibes color-gold">155 €</p>
		    			<a href="/buy?product_id=154345&name=Beluga&qty=1&price=155&size=20g&type=Caviar&image=beluga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	 			<div class="bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Beluga Caviar 30g</p>
		 				<p class="text-vibes color-gold">232 €</p>
		    			<a href="/buy?product_id=154346&name=Beluga&qty=1&price=232&size=30g&type=Caviar&image=beluga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>	    		
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Beluga Caviar 50g</p>
		 				<p class="text-vibes color-gold">387 €</p>
		    			<a href="/buy?product_id=154347&name=Beluga&qty=1&price=387&size=50g&type=Caviar&image=beluga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Beluga Caviar 100g</p>
		 				<p class="text-vibes color-gold">775 €</p>
		    			<a href="/buy?product_id=154348&name=Beluga&qty=1&price=775&size=100g&type=Caviar&image=beluga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Beluga Caviar 250g</p>
		 				<p class="text-vibes color-gold">1937€</p>
		    			<a href="/buy?product_id=154349&name=Beluga&qty=1&price=1937&size=250g&type=Caviar&image=beluga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Beluga Caviar 500g</p>
		 				<p class="text-vibes color-gold">3875</p>
		    			<a href="/buy?product_id=154340&name=Beluga&qty=1&price=3875&size=500g&type=Caviar&image=beluga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
			</div>
	 	</div>
	</div>
@endsection