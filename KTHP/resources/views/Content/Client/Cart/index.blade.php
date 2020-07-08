@extends('Content.Client.Layouts.main')

@section('title','Cart')

@section('content')
<script type="text/javascript">
	function myFunction() {
		var result = confirm("NOTE: Bạn có chắc là bạn muốn đặt hàng?");
		if (result) {
			window.location.replace('checkout');
		}
		
	}
</script>
<section class="shopping-cart-content">
	<div class="product-detail-redirect">
		<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
		<p>Giỏ hàng</p>
	</div>
	<div class="your-cart">
		<h3>Giỏ hàng của bạn </h3><span> ({{ Cart::count() }} sản phẩm)</span>
	</div>
	<div class="main-shopping">
		<div class="product">
			<table>
				<thead>
					<tr class="mt-3 mb-3">
						<th class="product-col">Sản phẩm</th>
						<th class="price-col">Giá</th>
						<th class="amount-cot text-center">Số lượng</th>
						<th class="quantity-col">Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cart as $cart)
					<tr>
						<td><a href="{{ route('detail',$cart->id) }}"><img src="{{ asset('images/product/thumbnails/'.$cart->options->img) }}" alt=""></a></td>
						<td class="text-center">
							<a href="#" class="title-product">{{ $cart->name }}</a>
							<div class="price">
								<p>{{ $cart->price }}<span style="text-decoration: underline;"> đ</span></p>
							</div>
							<a href="{{ route('delcart',$cart->rowId) }}" class="delete-product"><i class="fas fa-trash-alt"></i> Xóa sản phẩm</a>
						</td>
						<td class="text-center">
							{!! Form::open(['url' => 'setquantity', 'method' => 'post']) !!}
							{{ Form::number('quantity', $cart->qty,['class' => 'form-control float-left','min'=>'1'])}}
							{{ Form::text('rowId', $cart->rowId,['class' => 'form-control','hidden'=> 'hidden'])}}
							<button type="submit" style="background: #f96a0b;height: 39px; border: 0; width: 39px; color: white" class="float-left form"><i class="fa fa-check" aria-hidden="true"></i></button>
							{!! Form::close() !!}
						</td>
						<td class="text-center content-quantity-col"><p style="color: #f96a0b; font-size: 16px;">{{ $cart->price*$cart->qty }}<span style="text-decoration: underline;">đ</span></p></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="exchange">
			<div class="quantity">
				<h6>Thành tiền:</h6>
				<p class="float-right">{{ Cart::total() }}<span style="text-decoration: underline;">đ</span></p>
			</div>
			<a onclick="myFunction()" class="buy">Tiến hành thanh toán</a>
			<a href="{{ route('home') }}" class="continue">Tiếp tục mua hàng</a>
		</div>
	</div>
</section>


@endsection

