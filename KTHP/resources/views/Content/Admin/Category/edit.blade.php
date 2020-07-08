@extends('Content.Admin.Layouts.main')
@section('title','Sửa Danh mục')
@section('content')	

<div class="row">
	<div class="col-md-8 ml-5">
		<div class="form-group">
			{!! Form::model($category,['route' => ['category.update',$category->id], 'method' => 'put']) !!}
			
			<div class="form-group">
				{{ Form::label('', 'Tên') }} 
				{{ Form::text('name',$category->name,['class' => 'form-control']) }}
				@error('name')
				<span class="text-danger">
					{!! $errors->first('name') !!}
				</span>
				@enderror
			</div>

			<div class="form-group">
				{{ Form::label('', 'Mô tả') }} 
				{{ Form::textarea('description', $category->description,['class' => 'form-control']) }}
			</div>
			
			
			<div class="mt-3">
				{{ Form::submit('Lưu',['class' => 'btn text-white','style="background: #fbb034"']) }}
				<a class="btn text-white" style="background: #fbb034" href="{{ route('category.index') }}">Quay lại</a>
			</div>
			
			{!! Form::close() !!}

		</div>
	</div>


	@endsection
16:50
