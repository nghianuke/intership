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
	<h3 style=" text-transform: uppercase;">Create New Product</h3>
	{{Form::open(['url'=>'product','method'=>'post'])}}
	<div class="row form-group">
		<div class="col-md-6">
			{{Form::label('product_code')}}
		{{Form::text('code','',['class'=>'form-control','placeholder'=>'enter product_code'])}}
		@error('code')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		</div>
		<div class="col-md-6">
			{{Form::label('product_name')}}
		{{Form::text('name','',['class'=>'form-control','placeholder'=>'enter product_name'])}}
		@error('name')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			{{Form::label('brand')}}
			{{Form::select('brand_id',$brand,'',['class'=>'form-control'])}}
		
		</div>
		<div class="col-md-6">
			{{Form::label('category')}}
			{{Form::select('category_id',$category,'',['class'=>'form-control'])}}
		</div>
	</div>
	<div class=" form-group">
		
		{{Form::label('price')}}
		{{Form::text('price','',['class'=>'form-control','placeholder'=>'enter price'])}}
		@error('price')
    <div class="text text-danger">{{ $message }}</div>
@enderror
		
	</div>
	<div class="form-group">
		{{Form::label('image')}}
		{{Form::file('image',['class'=>'form-control'])}}
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
	<a href="{{url('product')}}" class="btn btn-info">Back To List</a>
</div>
	{{Form::close()}}
</div>
@endsection