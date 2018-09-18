@extends('boyarcaviar::layouts.frontend')

@section('title', 'Checkout')

@section('content')
 	<div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
 		<div class="container frame-two">
			@include('boyarcaviar::partials.second')	 	
			<div  class="mt-5 d-flex flex-column w-100 frame-one text-white align-items-center">
				<div class="col-6 mt-5 mb-5">
					{!! Form::model(\Kwidoo\BoyarCaviar\Models\Address::class,['route' => 'checkout']) !!}
							<div class="form-group">
						{!! Form::label('firstname', 'Firstname:') !!}
						{!! Form::text('firstname', null, ['class' => 'form-control']) !!}
					</div>
	  				<div class="form-group">
						{!! Form::label('lastname', 'Lastname:') !!}
						{!! Form::text('lastname', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('email', 'E-mail:') !!}
						{!! Form::text('email', null, ['class' => 'form-control']) !!}
					</div>			
					<div class="form-group">
						{!! Form::label('phone', 'Phone:') !!}
						{!! Form::text('phone', null, ['class' => 'form-control']) !!}
					</div>			
	  				<div class="form-group">
						{!! Form::label('billing', 'Billing Address:') !!}
						{!! Form::textarea('billing', null, ['class' => 'form-control']) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('shipping', 'Shipping Address:') !!}
						{!! Form::textarea('shipping', null, ['class' => 'form-control']) !!}
					</div>		
					{!! Form::submit('Order', ['class'=> 'btn btn-caviar pull-right']) !!}			
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection