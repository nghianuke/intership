@extends('Content.Admin.Layouts.main')
@section('title','Khách hàng')
@section('content')
	<div class="container">
		<table id="dataTable" class="table table-hover table-bordered text-center">
			<thead style="background: #fbb034">
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
					<td><a href="{{ route('order.show',$order->id) }}">Xem chi tiết</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@endsection