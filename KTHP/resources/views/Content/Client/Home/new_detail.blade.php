@extends('Content.Client.Layouts.main')
@section('title',$new->title)
@section('seo')
<meta name="DC.title" content="{{ $new->title }}">
<meta name="keywords" content="{{ $new->seo->first()->keyword }}">
<meta name="description" content="{{ $new->seo->first()->description }}">
<meta name="url" content="{{ url(Str::slug($new->name,'-')) }}">
<meta name="robots" content="noodp,index,follow" />
@endsection
@section('content')
<section class="news-detail-content">
	<div class="product-detail-redirect">
		<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
		<a href="#">Tin tức </a><i class="fas fa-caret-right"></i>
		<p>{{ $new->title }}</p>
	</div>
	<div class="container text-center">
		<img width="500" src="{{ asset('images/news/thumbnails/'.$new->thumbnail) }}">
	</div>
	<div class="main-news-detail">
		<h5>{{ $new->title }}</h5>
		<img src="images/new_1.png" alt="">
		<p>
			{{ $new->content }}
		</p>
	</div>
</section>
@endsection