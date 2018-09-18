<nav class="navbar navbar-expand-md navbar-dark topmenu" >
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse text-caviar" id="navbarResponsive">
			<ul class="navbar-nav mr-auto">
				@auth
					<li class="nav-item active">
						<a class="nav-link text-caviar" href="{{ route('my-account') }}">My Account
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('my-whishlist') }}">My Whishlist</a>
					</li>
				@endauth
				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">Login</a> 
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">Signin</a>
				</li>
				@endguest
				<li class="nav-item ml-auto">
					<span><a class="nav-link" href="{{ route('my-cart') }}">My Cart: <span id="cart">{{ Cart::total() }}</span> €</a></span>		
				</li>
			</ul>
		</div>
</nav>
<section class="logo">
	<div class="container">
		<div class="d-flex d-flex-row justify-content-between align-items-end">
			<div class="p-2">
				<a class="navbar-brand" href="/">
					<img src="/svg/logo.svg" class="img-fluid" width="100%" />
				</a>
			</div>
			<div class="p-2">
			</div>
			<div class="p-2" style="color:#B3B3B3">
				<h5>Welcome to our online store</h5>
				<h5>Order online or call</h5>
				<h3><a href="tel:+37129285978">+371 29 285 978</a></h3>
			</div>
		</div>
	</div>
</section>