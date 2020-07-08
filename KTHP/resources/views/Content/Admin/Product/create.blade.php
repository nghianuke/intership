@extends('Content.Admin.Layouts.main')
@section('title','Tạo sản phẩm')
@section('content')

<h3 style="text-align: center;">Tạo Mới Sản Phẩm</h3>
{{Form::open(['route'=>'product.store','method'=>'post','files' =>'true'])}}
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Tên')}}
		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Vui lòng nhập tên'])}}
		@error('name')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Nhà phát hành')}}
		{{Form::text('issuing','',['class'=>'form-control','placeholder'=>'Vui lòng nhập vấn đề '])}}
		@error('issuing')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Ảnh bìa')}}
		{{Form::file('thumbnail',['class'=>'form-control'])}}
		@error('thumbnail')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Nhà xuất bản')}}
		{{Form::text('publishing','',['class'=>'form-control','placeholder'=>'Vui lòng nhập nhà xuất bản '])}}
		@error('publishing')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Loại sản phẩm')}}
		{{Form::select('category_id',$category,null,['class'=>'form-control'])}}
		@error('category_id')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Gía')}}
		{{Form::text('price','',['class'=>'form-control','placeholder'=>'Vui lòng nhập giá '])}}
		@error('price')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
</div>

<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Số lượng')}}
		{{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Vui lòng số lượng '])}}
		@error('quantity')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Tác giả')}}
		{{Form::text('author','',['class'=>'form-control','placeholder'=>'Vui lòng nhập tác giả '])}}
		@error('author')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Kích cở')}}
		{{Form::text('size','',['class'=>'form-control','placeholder'=>'Vui lòng nhập kích cở '])}}
		@error('size')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Người dịch')}}
		{{Form::text('translator','',['class'=>'form-control','placeholder'=>'Vui lòng nhập người dịch '])}}
		@error('translator')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Loại bìa')}}
		{{Form::text('cover_type','',['class'=>'form-control','placeholder'=>'Vui lòng nhập bìa  '])}}
		@error('cover_type')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Số trang')}}
		{{Form::text('pages','',['class'=>'form-control','placeholder'=>'Vui lòng nhập số trang '])}}
		@error('pages')
		<div class="text text-danger">{{ $message }}</div>
	@enderror	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Mã sku')}}
		{{Form::text('sku','',['class'=>'form-control','placeholder'=>'Vui lòng nhập sku'])}}
		@error('sku')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{ Form::label('Chon tags cho bai viet')}}
               {{--  {!! Form::select('tags[]', $tag,null,[
                    'class' => 'form-control tags','multiple'=>'multiple','id'=>'tags'
                ])
                !!} --}}
                {!! Form::select('tag[]',$tag,'',['class'=>'form-control tags','multiple'=>'multiple']) !!}
	</div>
	
</div>

<div class="form-group">
	{{Form::label('Mô tả')}}
	{{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Vui lòng nhập mô tả'])}}
	@error('description')
	<div class="text text-danger">{{ $message }}</div>
	@enderror
	
</div>
<div class="row form-group">
	<div class="col-md-2">
		{{ Form::label('', 'Các Hình ảnh') }} <br>
	</div>
	<div class="row">
		<div class="col-md-4">
			{{ Form::file('image[]') }}
		@error('image')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
		</div>
		<div class="col-md-4">
			{{ Form::file('image[]') }}
		@error('image')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
		</div>
		<div class="col-md-4">
			{{ Form::file('image[]') }}
		@error('image')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
		</div>
		
		
		
	</div>
</div>



<div class="form-group">
	{{Form::submit('Gửi',['class'=>'btn text-white','style="background: #fbb034"'])}}
	<a href="{{route('product.index')}}" class="btn text-white" style="background: #fbb034">Xem danh sách</a>
</div>

@endsection
