
@extends('layout.index')
@section('content')
<div class="col-md-11">
	<h3 class="text-center" style="text-transform: uppercase;">Show Brand</h3>
	
	<div class="text-body text-center">
			<div class="form-group">
				<strong>Name:</strong> {{$brand->name}} </br>
			</div>

			<div class="form-group">
					<strong>Description:</strong> {{$brand->description}}

			</div>
			<div class="form-group">
				<a href="{{url('brand')}}" class="btn btn-info">Back To List</a>
			</div>
		</div>
		
	
	
</div>
@endsection