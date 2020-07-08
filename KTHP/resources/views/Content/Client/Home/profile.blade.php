@extends('Content.Client.Layouts.main')
@section('title','Khách hàng')
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
					<th style="width: 5%;">STT</th>
					<th>Mã đơn hàng</th>
					<th>Ngày giao dịch</th>
					<th>Trạng thái</th>
					<th>Thành tiền</th>
					<th>Mã đơn hàng</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $key => $order)
				<tr>
					<td>{{ ++$key }}</td>
					<td>{{ $order->order_code }}</td>
					<td>{{ date('H:i:s d-m-Y',strtotime($order->transaction_date)) }}</td>
					<td>
						@if($order->status==0)
						<h5><span class="badge badge-danger">Chưa xác nhận <i class="fa fa-info-circle" aria-hidden="true"></i></span></h5>
						@elseif($order->status==1)
						<h5><span class="badge badge-info">Đã xác nhận <i class="fa fa-check-circle" aria-hidden="true"></i></span></h5>
						@else
						<h5><span class="badge badge-success">Đã giao hàng <i class="fa fa-money" aria-hidden="true"></i></span></h5>
						@endif
					</td>
					<td>{{ $order->total_amount }} đ</td>
					<td><a href="{{ route('order_detail',$order->id) }}">Xem chi tiết</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
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