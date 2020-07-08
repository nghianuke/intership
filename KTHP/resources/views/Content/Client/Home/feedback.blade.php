@extends('Content.Client.Layouts.main')
@section('content')
	<section class="contact-content">
			<div class="product-detail-redirect">
				<a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
				<p>Liên hệ</p>
			</div>
			<div class="contact-body">
				<div class="main-contact text-center">
					<h2>LIÊN HỆ</h2>
					<a href="#">0349 233 012</a>
					<p>Làm việc 24/7</p>
					<span>Bạn cần trợ giúp, hãy gửi lời nhắn cho chúng tôi</span>
					{!! Form::open(['url' => 'feedback', 'method' => 'post']) !!}
						<input name="name" type="text" placeholder="Họ và tên" required="required">
						<input name="email" type="email" placeholder="Email" required="required">
						<textarea name="content" id="" placeholder="Nội dung"  required></textarea>
						<input type="submit" value="Gửi liên hệ" class="submit">
					{!! Form::close() !!}
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2711.5079471004815!2d108.22010923511296!3d16.031656880024332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdc63233587e2d88!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyDEkMO0bmcgw4E!5e0!3m2!1svi!2s!4v1593240812933!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</section>
@endsection