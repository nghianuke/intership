@extends('Content.Admin.Layouts.main')
@section('title','Sửa sản phẩm')
@section('content')


<h3 style="text-align: center;">Cập nhật Sản Phẩm</h3>
{{Form::open(['route'=>['product.update',$pt->id],'method'=>'put'])}}
{{-- {{Form::open(['route'=>'product.update','method'=>'post','files' =>'true'])}} --}}
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Tên')}}
		{{Form::text('name',$pt->name,['class'=>'form-control','placeholder'=>'Vui lòng nhập tên'])}}
		
	</div>
	<div class="col-md-6">
		{{Form::label('Nhà xuất bản')}}
		{{Form::text('issuing',$pt->issuing,['class'=>'form-control','placeholder'=>'Vui lòng nhập nhà xuất bản '])}}
		
	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Ảnh')}}
		{{Form::file('thumbnail',['class'=>'form-control'])}}
		@error('thumbnail')
		<div class="text text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-6">
		{{Form::label('Nhà phát hành')}}
		{{Form::text('publishing',$pt->publishing,['class'=>'form-control','placeholder'=>'Vui lòng nhập nhà phát hành '])}}
		
	</div>
	
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Loại Sách')}}
		{{Form::select('category_id',$category,null,['class'=>'form-control', 'readonly' =>'true'])}}
		{{-- {{Form::select('category_id',$category,null,['class'=>'form-control'])}} --}}
		
	</div>
	<div class="col-md-6">
		{{Form::label('Gía')}}
		{{Form::text('price',$pt->price,['class'=>'form-control','placeholder'=>'Vui lòng nhập giá '])}}
		
	</div>
</div>

<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Số lượng')}}
		{{Form::text('quantity',$pt->quantity,['class'=>'form-control','placeholder'=>'Vui lòng nhập giá '])}}
		
	</div>
	<div class="col-md-6">
		{{Form::label('Tác giả')}}
		{{Form::text('author',$pt->author,['class'=>'form-control','placeholder'=>'Vui lòng nhập tác giả '])}}
		
	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Kích cở')}}
		{{Form::text('size',$pt->size,['class'=>'form-control','placeholder'=>'Vui lòng nhập kích cở '])}}
		
	</div>
	<div class="col-md-6">
		{{Form::label('Người dịch')}}
		{{Form::text('translator',$pt->translator,['class'=>'form-control','placeholder'=>'Vui lòng nhập người dịch '])}}
	</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Loại bìa')}}
		{{Form::text('cover_type',$pt->cover_type,['class'=>'form-control','placeholder'=>'Vui lòng nhập bìa  '])}}
	</div>
	<div class="col-md-6">
		{{Form::label('Số trang')}}
		{{Form::text('pages',$pt->pages,['class'=>'form-control','placeholder'=>'Vui lòng nhập số trang '])}}
			</div>
</div>
<div class="row form-group">
	<div class="col-md-6">
		{{Form::label('Mã sku')}}
		{{Form::text('sku',$pt->sku,['class'=>'form-control','placeholder'=>'Vui lòng nhập sku'])}}
	</div>
	<div class="col-md-6">
		{{-- {{ Form::label('', 'Chọn Tag') }} 
								{{ Form::select('tag[]', $tag,null,['class' => 'form-control tag','multiple'=>'multiple']) }} --}}
	</div>
	
</div>

<div class="form-group">
	{{Form::label('Mô tả')}}
	{{Form::textarea('description',$pt->description,['class'=>'form-control','placeholder'=>'Vui lòng nhập mô tả'])}}
</div>
<div class="row form-group">
	<div class="col-md-2">
		{{ Form::label('', 'Các ảnh chi tiết') }} <br>
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
	<a href="{{route('product.index')}}" style="background:#fbb034 " class="btn text-white">Xem danh sách</a>
</div>

@endsection