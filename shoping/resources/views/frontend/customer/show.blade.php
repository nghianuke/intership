@extends('layout.index')
@section('content')
<div class="col-md-11">
	<h3 class="text-center" style="text-transform: uppercase;">Show Customer</h3>
	  <div class="text-body text-center">
	
			<div class="form-group">
				<strong>FullName:</strong> {{ $customer->first_name." ".$customer->last_name }}  <br>
			</div>

			<div class="form-group">
				<strong>Post_Address:</strong> {{$customer->post_address}}  <br>
			</div>
			<div class="form-group">
				<strong>Physical:</strong> {{$customer->physical_address}} <br>
			</div>
			<div class="form-group">
					<strong>Email:</strong> {{$customer->email}}
			</div>
			<div class="form-group">
				<a href="{{url('customer')}}" class="btn btn-info">Back To List</a>
			</div>
		
		</div>
	
	
</div>
@endsection
