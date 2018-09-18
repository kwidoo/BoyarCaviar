@extends('boyarcaviar::layouts.frontend')

@section('title', 'Sevruga Black Caviar')

@section('content')
 	<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
 		<div class="container frame-two">
			@include('boyarcaviar::partials.second')	 		
	 		<div class="mt-5 d-flex flex-row no-gutters text-center">
	 			<div class="col-12">
		 			<h1 class="color-gold text-typography">Sevruga Caviar</h1>
		 		</div>
	 		</div>
	 		<div class="mt-2 d-flex flex-row no-gutters align-items-center">
	 			<div class="col-2">
			  		<img class="card-img-top" src="/img/sevruga.jpg" alt="Sevruga Black Caviar">
	 			</div>
	 			<div class="col-10">
	 				<p class="pl-4 pr-4 card-text color-twilight text-justify">Sevruga is exquisite and rare full flavoured caviar with the roe of 2mm in diameter and a colour varying between light grey and golden. The time required to harvest SEVRUGA caviar is approximately between 8 to 10 years.</p>
	 			</div>
	 		</div>
	 		<div class="mt-5 d-flex flex-md-row flex-sm-column no-gutters justify-content-between">
	 			<div class="bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sevruga Caviar 20g</p>
		 				<p class="text-vibes color-gold">49 €</p>
		    			<a href="/buy?product_id=164345&name=Sevruga&qty=1&price=49&size=20g&type=Caviar&image=sevruga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	 			<div class="bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sevruga Caviar 30g</p>
		 				<p class="text-vibes color-gold">73 €</p>
		    			<a href="/buy?product_id=164346&name=Sevruga&qty=1&price=73&size=30g&type=Caviar&image=sevruga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>	    		
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sevruga Caviar 50g</p>
		 				<p class="text-vibes color-gold">122 €</p>
		    			<a href="/buy?product_id=164347&name=Sevruga&qty=1&price=122&size=50g&type=Caviar&image=sevruga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sevruga Caviar 100g</p>
		 				<p class="text-vibes color-gold">234 €</p>
		    			<a href="/buy?product_id=164348&name=Sevruga&qty=1&price=234&size=100g&type=Caviar&image=sevruga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sevruga Caviar 250g</p>
		 				<p class="text-vibes color-gold">608 €</p>
		    			<a href="/buy?product_id=164349&name=Sevruga&qty=1&price=608&size=250g&type=Caviar&image=sevruga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
	    		<div class="ml-1 bd-glow">
	 				<div class="m-3 text-center">
		 				<p class="text-caviar">Sevruga Caviar 500g</p>
		 				<p class="text-vibes color-gold">1215€</p>
		    			<a href="/buy?product_id=164340&name=Sevruga&qty=1&price=1215&size=500g&type=Caviar&image=sevruga" class="btn btn-caviar btn-buy text-uppercase">Add to cart</a>
	    			</div>
	    		</div>
			</div>
	 	</div>
	</div>
@endsection