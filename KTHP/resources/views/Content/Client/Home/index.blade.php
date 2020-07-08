@extends('Content.Client.Layouts.main')

@section('title','Trang chủ')

@section('content')
	<section class="content-home container-fluid">
		<div id="carouselBanner" class="carousel slide" data-ride="carousel" data-interval="false" data-touch="true">
			<ol class="carousel-indicators">
			    <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselBanner" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
			    <div class="carousel-item active">
			        <a href="#"><img src="images/banner_1.jpg" class="d-block" alt=""></a>
			    </div>
			    <div class="carousel-item">
			        <a href="#"><img src="images/banner_2.jpg" class="d-block" alt=""></a>
			    </div>
			</div>
			<a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
			    <span class="fas fa-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
		    	<span class="fas fa-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="top-author">
			<h5>TÁC GIẢ NỔI BẬT</h5>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
			<div class="box-content-1">
				<a href="#"><img src="images/img_content_1.jpg" alt="">
					<p>Lan Rùa</p>
				</a>
			</div>
		</div>
		<div class="top-book">
			<div class="box-content-2">
				<a href="#"><img src="images/img_content_2.jpg" alt=""></a>
				<a class="category" href="#">Kinh tế - Kỹ năng</a>
			</div>
			<div class="box-content-2">
				<a href="#"><img src="images/img_content_2.jpg" alt=""></a>
				<a class="category" href="#">Kinh tế - Kỹ năng</a>
			</div>
			<div class="box-content-2">
				<a href="#"><img src="images/img_content_2.jpg" alt=""></a>
				<a class="category" href="#">Kinh tế - Kỹ năng</a>
			</div>
			<div class="box-content-2">
				<a href="#"><img src="images/img_content_2.jpg" alt=""></a>
				<a class="category" href="#">Kinh tế - Kỹ năng</a>
			</div>
		</div>
		<div class="top-search">
			<a href="#">TÌM KIẾM HÀNG ĐẦU</a>
			<div class="top-search-item">
				@foreach($products as $product)
				<div class="box-content-3">
					<a href="{{ route('detail',$product->id) }}" class="top-search-item-top">
						<img class="sale" src="images/sale.png" alt="">
						<p>- {{ $product->discount }}%</p>
						<img class="img-content" src="images/product/thumbnails/{{ $product->thumbnail }}" alt="">
					</a>
					<a href="addcart/{{$product->id }}"><i class="fas fa-shopping-cart"></i></a>
					<a href="{{ route('detail',$product->id) }}"><i class="fas fa-search-plus"></i></a>
					<div class="top-search-item-bottom text-center">
						<a class="title-content" href="#">{{ $product->name }}</a>
						<div class="price">
							<p class="new-price">{{ $product->price }}<span style="text-decoration: underline;">đ</span></p>
							
						</div>
						<div class="rating text-left" data-score="0" data-number="5" title="Not rated yet!">
							<i data-alt="1" class="fas fa-star" title="Not rated yet!"></i>
							<i data-alt="2" class="fas fa-star" title="Not rated yet!"></i>
							<i data-alt="3" class="fas fa-star" title="Not rated yet!"></i>
							<i data-alt="4" class="fas fa-star" title="Not rated yet!"></i>
							<i data-alt="5" class="fas fa-star" title="Not rated yet!"></i>
							<input name="score" type="hidden" readonly="">
						</div>
					</div>
				</div>
				@endforeach
				<div class="see-more text-center">
					<a href="{{ route('more_product') }}">Xem thêm</a>
				</div>
			</div>
		</div>
	</section>
@endsection