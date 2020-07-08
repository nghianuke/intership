@extends('Content.Admin.Layouts.main')
@section('title','Sửa tin tức')
@section('content')	
		<div class="row">
			<div class="col-md-8 ml-3">
				<div class="form-group">
				{!! Form::model($new,['route' => ['new.update',$new->id], 'method' => 'put']) !!}
					<div class="form-group">
						{{ Form::label('', 'Tiêu đề') }} 
			    	{{ Form::text('title', $new->title,['class' => 'form-control']) }}
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
			    	{{ Form::text('content',$new->content,['class' => 'form-control']) }}
			    	@error('content')		    	
    					<div class="text-danger">{{ $message }}</div>
					@enderror
					</div>
					<div>
						{!! Form::label('Trạng thái :', '', ['class'=>'col-md-2']) !!}
					@if($new->status =="1")
						{!! Form::radio('status','1',true,['checked'=>'checked']) !!} Công khai
						{!! Form::radio('status','0', false) !!} Không công khai
					@else
						{!! Form::radio('status','1',false) !!} Công khai
						{!! Form::radio('status','0', true ,['checked'=>'checked']) !!} Không công khai
					@endif	
					@if ($errors->has('status'))
					<span class="text-danger">{{ $errors->first('status') }}</span>
					@endif
					</div>
					
					<div class="mt-3">
						{{ Form::submit('Lưu',['class' => 'btn text-white','style="background: #fbb034"']) }}
						<a class="btn text-white" style="background: #fbb034" href="{{ route('new.index') }}">Xem danh sách</a>
					</div>

				{!! Form::close() !!}
			</div>
		</div>



@endsection