@extends('Content.Admin.Layouts.main')
@section('title','Tạo tin tức')
@section('content')	
		<div class="row">
			<div class="col-md-8 ml-3">
				<div class="form-group">
				{!! Form::open(['route' => 'new.store', 'method' => 'post', 'files' => 'true']) !!}
					<div class="form-group">
						{{ Form::label('', 'Tiêu đề') }} 
			    	{{ Form::text('title', '',['class' => 'form-control']) }}
			    	@error('title')
    				<div class="text-danger">{{ $message }}</div>
					@enderror
					</div>
					<div class="form-group">
						{{ Form::label('', 'Hình ảnh') }} 
			    	{{ Form::file('thumbnail',['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('', 'Nội dung') }} 
			    	{{ Form::text('content', '',['class' => 'form-control']) }}
			    	@error('content')		    	
    					<div class="text-danger">{{ $message }}</div>
					@enderror
					</div>
					<div>
						{!! Form::label('Tình trạng :', '', ['class'=>'col-md-2']) !!}
						{!! Form::radio('status','0', 'checked') !!} Không công khai
						{!! Form::radio('status','1') !!} Công khai
					</div>
					
					<div class="mt-3">
						{{ Form::submit('Lưu',['class' => 'btn text-white','style="background: #fbb034"']) }}
						<a class="btn text-white" style="background: #fbb034" href="{{ route('new.index') }}">Xem danh sách</a>
					</div>

				{!! Form::close() !!}
			</div>
		</div>



@endsection
