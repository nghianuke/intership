@extends('Content.Client.Layouts.main')
@section('title','Sách')
@section('content')
		<section class="content-category container-fluid">
			<div class="content-category-top">
				<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
				<p>Tìm kiếm hàng đầu</p>
				<h4>Tìm kiếm hàng đầu</h4>
			</div>
			
			<div class="main-content-category">
				<div class="search-category">
					<h6>Danh mục sách</h6>
					<ul>
						@foreach($categories as $cate)
						<li><a href="{{route('productincate', $cate->id)}}">{{ $cate->name  }}</a></li>
						@endforeach
					</ul>
					<h6 class="mt-4">Tác giả</h6>
					<ul class="scroll">
						@foreach($authors as $author)
						<li><a href="{{ route('authorinproduct',$author) }}">{{ $author }}</a></li>
						@endforeach
					</ul>
				</div>
				<div id="search_result" class="product-category">
					<div class="product-category-item">
						@foreach($products as $product)
						<div class="box-content">
							<a href="{{ route('detail',$product->id) }}" class="top-search-item-top">
								<img class="sale" src="{{ asset('images/sale.png')}}" alt="">
								<p>- {{ $product->discount }}%</p>
								<img class="img-content" src="{{ asset('images/product/thumbnails/'.$product->thumbnail) }}" alt="">
							</a>
							<a href="{{ url('addcart/'.$product->id) }}"><i class="fas fa-shopping-cart"></i></a>
							<a href="{{ route('detail',$product->id) }}"><i class="fas fa-search-plus"></i></a>
							<div class="top-search-item-bottom text-center">
								<a class="title-content" href="#">{{ $product->name }}</a>
								<div class="price">
									<p class="new-price">{{ $product->price }}<span style="text-decoration: underline;">đ</span></p>
									<p class="old-price"><span style="text-decoration: underline;">đ</span></p>
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
						{{ $products->links() }}
					</div>
				</div>
			</div>
		</section>
@endsection
