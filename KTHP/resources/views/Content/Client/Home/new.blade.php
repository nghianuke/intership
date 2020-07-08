@extends('Content.Client.Layouts.main')
@section('title','Tin tức')
@section('content')
		<section class="news-content">
			<div class="product-detail-redirect">
				<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
				<p>Tin tức</p>
			</div>
			<div class="list-news">
				<h5>Tin tức</h5>
				@foreach($news as $news)
				<div class="news-item">
					<a href="{{ route('new_detail',$news->id) }}"><img src="{{ asset('images/news/thumbnails/'.$news->thumbnail) }}" alt=""></a>
					<a href="{{ route('new_detail',$news->id) }}" class="news-title">{{ $news->title }}</a>
					<p>
						{{ $news->content }}
					</p>
				</div>
				@endforeach
			</div>
		</section>
@endsection