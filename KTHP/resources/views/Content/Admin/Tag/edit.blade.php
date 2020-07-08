@extends('Content.Admin.Layouts.main')
@section('title','Update Tag')

@section('content')

<h3 style="text-align: center;">Cập nhật tag</h3>
{{Form::open(['route'=>['tag.update',$tag->id],'method'=>'put'])}}
<div class="form-group">
	{{Form::label('Tên Tag')}}
	{{Form::text('tag_name',$tag->tag_name,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('Slug')}}
	{{Form::text('slug',$tag->slug,['class'=>'form-control'])}}
</div>


<div class="form-group">
	{{Form::submit('Gủi',['class'=>'btn text-white', 'style="background: #fbb034"'])}}
	 <a href="{{route('tag.index')}}" class="btn text-white" style="background: #fbb034">Xem danh sách</a>
</div>
@endsection