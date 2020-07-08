@extends('Content.Admin.Layouts.main')

@section('title','Tạo Danh mục')

@section('content')	
<div class="row">
	<div class="col-md-8 ml-5">	
		<div class="form-group">
			{!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
			<div class="form-group">
				{{ Form::label('', 'Tên') }} 
				{{ Form::text('name', '',['class' => 'form-control','placeholder'=>'Vui lòng nhập']) }}
				@error('name')
				<span class="text-danger">
					{!! $errors->first('name') !!}
				</span>
				@enderror
			</div>
			

			<div class="form-group">
				{{ Form::label('', 'Mô tả') }} 
				{{ Form::textarea('description', '',['class' => 'form-control']) }}
				@error('description')
				<span class="text-danger">
					{!! $errors->first('description') !!}
				</span>
				@enderror
			</div>
			
			<div class="mt-3">
				{{ Form::submit('Lưu',['class' => 'btn','style="background: #fbb034"']) }}
				<a class="btn" style="background: #fbb034" href="{{ route('category.index') }}">Quay lại</a>
			</div>

			{!! Form::close() !!}
		</div>
	</div>

	@endsection