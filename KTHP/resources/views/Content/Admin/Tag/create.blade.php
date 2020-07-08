@extends('Content.Admin.Layouts.main')
@section('title','Tạo Tag')
@section('content')
<h3 style="text-align: center;">Tạo Tag mới</h3>
{{Form::open(['route'=>'tag.store','method'=>'post'])}}
<div class="form-group">
	{{Form::label('Tag Name')}}
	{{Form::text('tag_name','',['class'=>'form-control','placeholder'=>'vui lòng nhập tên'])}}
	@error('tag_name')
   <div class="text text-danger">{{ $message }}</div>
@enderror
  
</div>


<div class="form-group">
	{{Form::label('Slug')}}
	{{Form::text('slug','',['class'=>'form-control','placeholder'=>'vui lòng nhập slug'])}}
	@error('slug')
    <div class="text text-danger">{{ $message }}</div>
@enderror
	
</div>



<div class="form-group">
	{{Form::submit('Gửi',['class'=>'btn text-white','style="background: #fbb034"'])}}
	 <a href="{{route('tag.index')}}" style="background: #fbb034" class="btn text-white">Xem danh sách</a>
</div>
@endsection