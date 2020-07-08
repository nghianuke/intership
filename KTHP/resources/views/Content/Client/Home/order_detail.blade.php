@extends('Content.Client.Layouts.main')
@section('title','Chi tiết đơn hàng')
@section('content')
<section class="list-od-content">
	<div class="product-detail-redirect">
		<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
		<p>Danh sách đơn hàng</p>
	</div>
	<div class="list-od">
		<table class="table-bordered">
			<thead>
				<tr>
					<th>Hình ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tbody>
				@foreach($order_detail as $order_detail)
				<tr>
					<td><img width="60px" src="{{ asset('images/product/thumbnails/'.$order_detail->product->thumbnail) }}"></td>
					<td>{{ $order_detail->product->name }}</td>
					<td>{{ $order_detail->product->price }} đ</td>
					<td> {{ $order_detail->quantity }}</td>
					<td>{{ $order_detail->sub_total }} đ</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<ul class="list-group">
			<li class="list-group-item">Mã đơn hàng: {{ $order->order_code }}</li>
			<li class="list-group-item">Thời gian giao dịch: {{ date('H:i:s d-m-Y',strtotime($order->transaction_date)) }}</li>
			<li class="list-group-item">Trạng thái đơn hàng: {{ $order->status }}</li>
			<li class="list-group-item">Ghi chú: {{ $order->message }}</li>
			<li class="list-group-item">Tổng tiền: {{ $order->total_amount }} đ
			</li>
		</ul>
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
</section>
@endsection