<div class="m-2 d-flex flex-row text-white align-items-center">
	<div class="col-2">
		<img src="/img/{{$content->options->image}}.jpg" class="img-fluid"/>
		
	</div>
	<div class="col-6">
		<span class="color-gold text-vibes text-capitalize">{{ $content->name }}
			<span style="font-size: 1rem" class="text-white text-typography">{{$content->options->type}}&nbsp;</span>
			<span style="font-size: 1.8rem" class="text-white text-typography">{{$content->options->size}}</span>
		</span>
	</div>
	<div class="col-2 input-group">
		<input class="form-control text-right qty" data-row="{{ $content->rowId }}" value="{{ $content->qty }}">
		<div class="input-group-append">
		    <span class="input-group-text" style="border-radius: 0">
		    	<i class="fa fa-refresh" aria-hidden="true"></i>
			</span>
		</div>
	</div>
	<div class="col-2">	
		{{ number_format($content->price*$content->qty,2) }} €&nbsp;&nbsp;
     	<i class="fa fa-times btn-delete text-caviar" data-row="{{ $content->rowId }}"></i>
    </div>
</div>
