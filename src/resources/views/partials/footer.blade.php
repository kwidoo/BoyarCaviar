
<section class="footer">
	<div class="d-flex bd-glow">
		<div class="m-2 d-flex w-100" style="border:1px solid #4D4D4D;color:white;">
			<div class="m-2 d-flex w-100 bd-glow-3" style="background-color: black; color:white;" >
				<ul style="list-style-type: circle;">Information
					<li class="color-twilight">
						<a href="/about">About us
						</a>
					</li>
					<li class="color-twilight">
						<a href="/about">Orders and Returns
						</a>
					</li>
					<li class="color-twilight">
						<a href="/about">Shipping
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="d-flex-row mt-2 text-caviar">
		<h6>(C)&nbsp;2018,&nbsp;<a class="text-caviar" href="https://smart2be.com">Smart 2 Be</a>. All rights reserved.</h6>
	</div>
	<div id="myCart" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content bd-glow" style="background: url(/img/bg.png); border-radius: 0;">
		 		<div class="m-4 p-2 bd-glow" style="background-color: black">
				<p class="text-white">Added to cart<br>
				<a href="{{ route('my-cart') }}" class="color-gold">Press to proceed to checkout?</a>
				</p>
				<button type="button" class="btn btn-caviar" data-dismiss="modal">Close</button>
				</div>
			</div>
		 </div>
	</div>
</section>