@extends('layout.index')
@section('content')
<div class="col-md-4">
	@if(Session::has('message'))
	<div class="alert alert-success text-center">
		<strong>Congratulation</strong>
		{{Session::get('message')}}
	</div>
	@endif
</div>
<div class="col-md-11">
	<h3 style=" text-transform: uppercase;">Create New Customer</h3>
	{{Form::open(['url'=>'customer','method'=>'post'])}}
	<div class="row form-group">
		<div class="col-md-6">
			{{Form::label('name')}}
		{{Form::text('firstname','',['class'=>'form-control','placeholder'=>'enter first_name'])}}
		@error('firstname')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		</div>
		<div class="col-md-6">
			{{Form::label('lastname')}}
		{{Form::text('lastname','',['class'=>'form-control','placeholder'=>'enter last_name'])}}
		@error('lastname')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			{{Form::label('post_address')}}
		{{Form::text('paddress','',['class'=>'form-control','placeholder'=>'enter post_address'])}}
		@error('paddress')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		</div>
		<div class="col-md-6">
			{{Form::label('physical_address')}}
		{{Form::text('physicaladdress','',['class'=>'form-control','placeholder'=>'enter physical_address'])}}
		@error('physicaladdress')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		</div>
	</div>
	
	<div class="form-group">
		{{Form::label('email')}}
		{{Form::text('email','',['class'=>'form-control','placeholder'=>'enter email'])}}
		@error('email')
    <div class="text text-danger">{{ $message }}</div>
@enderror
	</div>
	<div class="form-group">
	{{Form::submit('send',['class'=>'btn btn-primary'])}} 
	<a href="{{url('customer')}}" class="btn btn-info">Back To List</a>
</div>
	{{Form::close()}}
</div>
@endsection