@extends('Content.Client.Layouts.main')
@section('title','Hồ sơ cá nhân')
@section('content')
		<section class="edit-info-content">
			<div class="product-detail-redirect">
				<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
				<a href="#">Danh sách đơn hàng </a><i class="fas fa-caret-right"></i>
				<p>Sửa địa chỉ liên lạc</p>
			</div>
	<div class="customer-info">
		<h3>Thông tin khách hàng</h3>
		<p><i class="fas fa-user"></i>{{ $user->name }}</p>
		<p><i class="fas fa-envelope"></i>{{ $user->email }}</p>
		<p><i class="fa fa-address-card"></i> 
			@if(Auth::user()->role==0)
			Quản trị viên
			@elseif((Auth::user()->role==1))
				Cộng tác viên 
			@else 
			Người dùng 
			@endif</p>
		<a href="{{ route('address') }}">Sửa thông tin liên lạc</a>
	</div>
			<div class="main-edit-info" id="main-edit-info">
				<h3>Thông tin liên lạc</h3>
				@if($check_address)
					{!! Form::open(['url' => ['address',$check_address->id],'method' => 'PUT','class'=> 'text-center']) !!}
					<label>Đường: </label>
					<input required value="{{ $check_address->street }}" type="text" name="street" >
					<label>Quận/huyện: </label>
					<input required value="{{ $check_address->district }}" type="text" name="district" >
					<label>Tỉnh/ thành phố: </label>
					<input required value="{{ $check_address->province }}" type="text" name="province" >
					<label>Số điện thoại: </label>
					<input required value="{{ $check_address->phone }}" type="number" name="phone" maxlength="10" >
					<input type="submit" name="" value="Lưu thông tin" class="submit">
				{!! Form::close() !!}
				@else
				{!! Form::open(['url' => 'address','method' => 'POST','class'=> 'text-center']) !!}
					<label>Đường: </label>
					<input required type="text" name="street" >
					<label>Quận/huyện: </label>
					<input required type="text" name="district" >
					<label>Tỉnh/ thành phố: </label>
					<input required type="text" name="province" >
					<label>Số điện thoại: </label>
					<input required maxlength="10" type="number" name="phone" >
					<input type="submit" name="" value="Lưu thông tin" class="submit">
				{!! Form::close() !!}
			@endif
			</div>
		</section>
@endsection