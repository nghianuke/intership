@extends('Content.Admin.Layouts.main')
@section('title','Chi tiết đơn hàng')
@section('content')

<div class="container">
	<table class="table table-hover table-bordered text-center"">
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
		<li class="list-group-item">Trạng thái đơn hàng: {{Form::open(['route'=>['order.update',$order->id],'method'=>'put'])}}
			{{ Form::select('status',array(
				'0' => 'Không xác nhận',
				'1' => 'Chấp nhận đơn hàng',
				'2' => 'Đã giao hàng',
				),$order->status,['class'=>'form-control col-md-6']) }}
				{{ Form::submit('Cập nhật',['class' => 'btn btn-primary']) }}
			{{ Form::close() }}</li>
			<li class="list-group-item">Ghi chú: {{ $order->message }}</li>
			<li class="list-group-item">Tổng tiền: {{ $order->total_amount }} đ
			</li>
		</ul>
	</div>
	@endsection