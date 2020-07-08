@extends('Content.Client.Layouts.main')
@section('title',$product->name)
@section('seo')
<meta name="DC.title" content="{{ $product->name }}">
	<meta name="keywords" content="{{ $product->seo->first()->keyword }}">
	<meta name="description" content="{{ $product->seo->first()->description }}">
	<meta name="url" content="{{ url(Str::slug($product->name,'-')) }}">
	<meta name="robots" content="noodp,index,follow" />
@endsection
@section('content')
<section class="content-product-detail container-fluid">
	<div class="product-detail-redirect">
		<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
		<a href="#">Sách </a><i class="fas fa-caret-right"></i>
		<p>{{$product->name}}</p>
	</div>
	<div class="shopping-book">
		<div class="product_detail_bg_img">
			<img src="{{ asset('images/product/thumbnails/'.$product->thumbnail) }}">
			<span>
				<img class="sale" src="{{asset('images/sale.png') }}" alt="">
				<p>- {{ $product->discount }}%</p>
			</span>
		</div>
		<div class="main-shopping-book">
			<div class="infor-product">
				<h3>{{ $product->name }}</h3>
				<p>Tác giả: <span>{{ $product->author }}</span></p>
				<p>SKU: <span>{{ $product->sku }}</span></p><br>
				<div class="rating" data-score="0" data-number="5" title="Not rated yet!">
					<i data-alt="1" class="fas fa-star" title="Not rated yet!"></i>
					<i data-alt="2" class="fas fa-star" title="Not rated yet!"></i>
					<i data-alt="3" class="fas fa-star" title="Not rated yet!"></i>
					<i data-alt="4" class="fas fa-star" title="Not rated yet!"></i>
					<i data-alt="5" class="fas fa-star" title="Not rated yet!"></i>
					<input name="score" type="hidden" readonly="">
				</div>
			</div>
			<div class="buy">
				<div class="main-buy">
					<p class="new-price">{{ $product->price }} <span>đ</span></p>
					<p class="old-price"><span></span></p><br><br><br>
					<p class="saving">Tiết kiệm: <span>81% (79.000₫)</span></p>
					<a href="{{ url('addcart/'.$product->id) }}" class="order-product"><span class="fas fa-shopping-cart mr-2"></span>Đặt hàng ngay</a>
				</div>
				<div class="tutorial">
					<p>Hotline đặt hàng: <a href="#">0349233012</a><br><span style="color: #707070;">(8-21h cả T7, CN)</span></p>
					<p>Email: <a href="#">support@w6sharing.vn</a></p>
					<p>Khuyến mãi: 
						<span style="color: #707070;"><br>
							&nbsp;&nbsp;- Hoàn tiền 1.000đ khi quý khách cho phép chúng tôi lấy lại hộp giấy đựng sách lúc giao hàng.<br>
							&nbsp;&nbsp;- Đặt cọc 70% giá bìa.<br>
							&nbsp;&nbsp;- Booksharing.vn cam kết chính hãng 100%.
						</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="book-detail">
	<h3>THÔNG TIN SÁCH</h3>
	<table class="table-bordered">
		<tr>
			<td>Công ty phát hành</td>
			<td><a href="#">{{ $product->issuing }}</a></td>
		</tr>
		<tr>
			<td>Tác giả</td>
			<td>{{ $product->author }}</td>
		</tr>
		<tr>
			<td>Kích thước</td>
			<td>{{ $product->size }}</td>
		</tr>
		<tr>
			<td>Dịch Giả</td>
			<td>{{ $product->translator }}</td>
		</tr>
		<tr>
			<td>Loại bìa</td>
			<td>{{ $product->cover_type }}</td>
		</tr>
		<tr>
			<td>Số trang</td>
			<td>{{ $product->pages }}</td>
		</tr>
		<tr>
			<td>SKU</td>
			<td>{{ $product->sku }}</td>
		</tr>
		<tr>
			<td>Nhà xuất bản</td>
			<td>{{ $product->publishing }}</td>
		</tr>
	</table>
	<div class="book-intro">
		<h6>{{ $product->name }}</h6>
		<p>	
			{{ $product->description }}	
			<br><br>
		</p>
	</div>
</section>
<div class="container-fluid text-center box-image-detail">
	@foreach($images as $img)
	<img class="image-detail" src="{{ asset('images/product/'.$img->image_name) }}">
	@endforeach
</div>

<div class="container-fluid" style="padding: 25px 6.5% 0 7.5%; ">

	@if(count($vote)<1)
	<div class="main-news-detail">
		<div class="comment">
			<h6>Viết bình luận: </h6>
			{!! Form::open(['url' => 'admin/vote', 'method' => 'post']) !!}
			<div class="col-12">
				<label class="tt">Bạn đánh giá mấy sao ? </label>
				<input id="star" type="text" class="star" name="star" hidden="hidden" >
				<i class="icon-star fas fa-star" id="motsao"  onclick="myFunction()"></i>
				<i class="icon-star fas fa-star" id="haisao"  onclick="myFunction()"></i>
				<i class="icon-star fas fa-star" id="basao"  onclick="myFunction()"></i>
				<i class="icon-star fas fa-star" id="bonsao"  onclick="myFunction()"></i>
				<i class="icon-star fas fa-star" id="namsao"  onclick="myFunction()"></i>
				<p id="test">Hãy chọn sao !</p>
				<!-- {{Form::select('star', array('1' => '1 sao', '2' => '2 sao','3' => '3 sao','4' => '4 sao', '5' => '5 sao'), '5') }} -->
			</div>
			<input name="title" type="text" placeholder="Tiêu đề: ">
			<textarea name="comment" id="" placeholder="Viết bình luận: "></textarea>
			<input value="{{ $product->id }}" name="product_id" type="text" hidden="hidden">
			<input type="submit" value="Gửi bình luận" class="submit">
			{!! Form::close() !!}
		</div>
	</div>
	@else
	<div class="main-news-detail">
		<div class="comment">
			<h6>Đánh giá của bạn: </h6>
			<form>
				@foreach($vote as $vote)
				@for($i=1;$i<=$vote->star;$i++)
				<i class="fas fa-star d"style="color: yellow"></i>
				@endfor
				@for($i=1;$i<=5-$vote->star;$i++)
				<i class="fas fa-star d"></i>
				@endfor
				<input value="{{ $vote->title }}" name="title" type="text" placeholder="Tiêu đề: " readonly>
				<textarea name="comment" id="" placeholder="Viết bình luận: " readonly>{{ $vote->comment }}</textarea>
				@endforeach
			</form>
		</div>
	</div>
	@endif
</div>
<script type="text/javascript" src="{{ asset('JS/vote.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/vote.css') }}">
@endsection