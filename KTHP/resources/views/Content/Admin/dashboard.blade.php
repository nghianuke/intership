@extends('Content.Admin.Layouts.main')
@section('title','Dashboard')
@section('content')
<div class="col-md-8 mx-auto">
	<h4 style="background: #fbb034" class="btn btn-primary text-center col-md">Thống kê dữ liệu</h4>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>● Sản phẩm</td>
				<td>{{ $product }}</td>
			</tr>
			<tr>
				<td>● Danh mục</td>
				<td>{{ $category }}</td>
			</tr>
			<tr>
				<td>● Tài khoản</td>
				<td>{{ $user }}</td>
			</tr>
			<tr>
				<td>● Đơn hàng</td>
				<td>{{ $product }}</td>
			</tr>
			<tr>
				<td>● Tin tức</td>
				<td>{{ $new }}</td>
			</tr>
						<tr>
				<td>● Tag</td>
				<td>{{ $tag }}</td>
			</tr>
						<tr>
				<td>● Phản hồi</td>
				<td>{{ $feedback }}</td>
			</tr>
		</tbody>
	</table>
	<button style="background: #fbb034" class="btn btn-primary col-md mx-auto"></button>
</div>
<br/>
@endsection