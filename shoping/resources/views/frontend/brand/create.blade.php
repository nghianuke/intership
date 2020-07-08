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
	<h3 style=" text-transform: uppercase;">Create New Brand</h3>
	{{Form::open(['url'=>'brand','method'=>'post'])}}
	<div class="form-group">
		{{Form::label('name')}}
		{{Form::text('name','',['class'=>'form-control','placeholder'=>'enter name'])}}
		@error('name')
    <div class="text text-danger">{{ $message }}</div>
@enderror
	</div>
	<div class="form-group">
		{{Form::label('description')}}
		{{Form::textarea('description','',['class'=>'form-control','placeholder'=>'enter description'])}}
		@error('description')
    <div class="text text-danger">{{ $message }}</div>
@enderror
	</div>
	<div class="form-group">
	{{Form::submit('send',['class'=>'btn btn-primary'])}} 
	<a href="{{url('brand')}}" class="btn btn-info">Back To List</a>
</div>
	{{Form::close()}}
</div>
@endsection