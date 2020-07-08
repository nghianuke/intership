<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - W6Sharing</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	@yield('seo')
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://kit.fontawesome.com/9d5d980696.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
		<section>
		<a class="hotline" href="#">
			<div class="tel"><i class="fa fa-phone"></i></div>
			<p>Hotline<br>0123456789</p>
		</a>
		<span class="messenger" onclick="fastContact();">
			<i class="fab fa-facebook-messenger"></i>
		</span>
		<a class="back-to-top" style="display: none;">
			<i class="fas fa-arrow-up"></i>
		</a>
		<div id="fast-contact" style="display: none;">
			<div class="contact-head">
				<h6>Send message</h6>
				<p>Please fill out the form below and we will get back to you as soon as possible.</p>
			</div>
			<div class="contact-content">
				<form action="">
					<input type="text" placeholder="*Name">
					<input type="text" placeholder="*Email">
					<textarea placeholder="*Message"></textarea>
					<input type="submit" class="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>
	@include('Content.Client.Layouts.header')

	<div class="content-public">
		@yield('content')
	</div>
	

	@include('Content.Client.Layouts.footer')
</body>
@include('Content.Client.Layouts.scripts')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0" nonce="NjXPLDcv"></script>
<script>
      @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"

      
      switch(type){
          case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
          case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
          case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
          case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
      @endif
  </script>
</html>