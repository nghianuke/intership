@extends('layout.index')
@section('content')
<div class="col-md-4">
	@if(Session::has('update'))
	<div class="alert alert-success text-center">
		<strong>Happy You</strong>
		{{Session::get('update')}}
	</div>
	@endif
</div>
<div class="col-md-11">
	<h2 style=" text-transform: uppercase;">Update Category</h2>
	{{Form::open(['route'=>['category.update',$cg->id],'method'=>'put'])}}
	<div class="form-group">
		{{Form::label('name')}}
		{{Form::text('name',$cg->name,['class'=>'form-control','placeholder'=>'enter name'])}}
	</div>
	<div class="form-group">
		{{Form::label('description')}}
		{{Form::textarea('description',$cg->description,['class'=>'form-control','placeholder'=>'enter description'])}}
	</div>
	<div class="form-group">
	{{Form::submit('send',['class'=>'btn btn-primary'])}} 
	<a href="{{url('category')}}" class="btn btn-info">Back To List</a>
</div>
	{{Form::close()}}
</div>
@endsection