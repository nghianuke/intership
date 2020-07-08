
<div class="col-md-11">
	<h3 class="text-center" style="text-transform: uppercase;">Show Product</h3>
	<div class="text-body text-center">
		<div class="row">
			<div class="col-md-3">
				{{Form::open()}}
				<div class="form-group">
					{{Form::label('quantity')}}
					{{Form::text('quantity','',['class'=>'btn btn-primary','placeholder'=>'enter quantity'])}}
				</div>
				{{Form::close()}}
			
			</div>
			<div class="col-md-9">
				<div class="form-group">
					@foreach($category as $c)
					{{$c->name}}
					{{$c->description}}
					@endforeach
				</div>
				<div class="form-group">

				</div>
			<div class="form-group">
				<a href="{{url('abc')}}" class="btn btn-info">Back To Home</a>
			</div>
			</div>
		</div>
		
	
	</div>
</div>
