	<section class="header container-fluid">
		<div class="top-header">
			<p>Chào mừng bạn đến với W6sharing.vn
			@if(Auth::check() && Auth::user()->role<=1)
			<a href="{{ url('admin') }}">Bảng điều khiển</a>
			</p>
			@endif
		</div>
		<div class="main-header">
			<a href="{{ url('/') }}">W6sharing</a>
			{!! Form::open(['url' => 'search', 'method' => 'get']) !!}
				<input name="keyword" type="search" placeholder="Tìm sản phẩm hay tác giả mong muốn...">
				<a href="#"><button><span class="fas fa-search"></span></button></a>
			{!! Form::close() !!}
			<div class="login">
				@if(Auth::guest())
				<div class="dropdown">
					<p>Tài khoản<span class="fas fa-chevron-down"></span></p>
					<div class="dropdown-content">
						<div class="arrow-up"></div>
						<a href="{{ url('login')}}">Đăng nhập</a>
						<a href="{{ url('register')}}">Đăng ký</a>
					</div>
				</div>
				@endif
				@if(Auth::check())
								<div class="dropdown">
					<p>Khách hàng<span class="fas fa-chevron-down"></span></p>
					<div class="dropdown-content">
						<div class="arrow-up"></div>
						<a href="{{ url('profile')}}">Hồ sơ</a>
						<a href="{{ url('logout')}}">Đăng xuất</a>
					</div>
				</div>
				@endif
				<div class="cart">
					<a href="cart"><p>{{ Cart::count() }}</p><img src="{{ asset('images/icon_hovercart.png') }}" alt=""><span>Giỏ hàng</span></a>
				</div>
			</div>
		</div>
		<div class="navbar-menu-header" style="background-image: url('{{ asset('images/bg_header.png') }}')">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('about_us') }}">Giới thiệu</a>
						</li>
						@if(empty($categories))
						@else
						<li class="nav-item dropdown">
							<a class="nav-link" href="#">Danh mục&nbsp;&nbsp; <i class="fas fa-caret-down"></i></a>
							<div class="dropdown-content">
								@foreach($categories as $cate)
								<a href="{{route('productincate', $cate->id)}}"> {{$cate->name}} </a>
								@endforeach()
							</div>
						</li>
						@endif
						<li class="nav-item">
							<a class="nav-link" href="{{ route('new') }}">Tin tức</a>
						</li>    
						<li class="nav-item">
							<a class="nav-link" href="{{ route('feedback_us') }}">Liên hệ</a>
						</li>    
						<li class="nav-item">
							<a class="nav-link" href="{{ route('faq') }}">FAQs</a>
						</li>    
					</ul>
				</div>  
			</nav>
		</div>
	</section>
	<section class="header-mobile container-fluid" style="background-image: url('{{ asset('images/bg_header.png') }}')">
		<div id="header-mobile-sidenav" class="sidenav">
			<a href="#" class="home-sidebar">W6sharing</a>
			<a href="javascript:void(0)" onclick="closeMenu()" class="close fas fa-angle-double-left"></a>
			<ul>
				<li><a href="#">TRANG CHỦ</a></li>
				<li><a href="#">GIỚI THIỆU</a></li>
				<li class="product" style="height: auto;"><a class="border-0" href="#">SẢN PHẨM</a>
					<a class="float-left more-sidebar fas fa-plus" id="more-sidebar"></a>
					<a class="float-left less-sidebar fas fa-minus" style="display: none;" id="less-sidebar"></a>
					<ul id="more-product" style="display: none;" class="mb-3">
						<li class="border-0"><a class="border-0" href="#">Tìm kiếm hàng đầu</a></li>
						<li class="border-0"><a class="border-0" href="#">Kinh tế - Kỹ năng</a></li>
						<li class="border-0"><a class="border-0" href="#">Tiểu thuyết ngôn tình</a></li>
						<li class="border-0"><a class="border-0" href="#">Văn học - Tản văn</a></li>
						<li class="border-0"><a class="border-0" href="#">Tiểu thuyết kinh điển</a></li>
						<li class="border-0"><a class="border-0" href="#">Tất cả sản phẩm</a></li>
					</ul>
				</li>
				<li><a href="#">TIN TỨC</a></li>
				<li><a href="#">LIÊN HỆ</a></li>
				<li><a href="#">FAQS</a></li>
				<li><a href="#"><span class="fas fa-user"></span>ĐĂNG NHẬP</a></li>
				<li class="border-0"><a class="border-0" href="#"><span class="fas fa-user-plus"></span>ĐĂNG KÝ</a></li>
			</ul>
		</div>
		<p onclick="openMenu();"><span class="fas fa-bars"></span> Danh mục</p>
		<span class="search-mobile fas fa-search" onclick="searchMobile();"></span>
		<div class="mobile-cart">
			<a href="#"><p>0</p><img src="{{ asset('images/icon_hovercart.png') }}" alt=""></a>
		</div>
		<form id="form-search-mobile" action="" style="display: none;">
			<input type="search" placeholder="Nhập từ khóa tìm kiếm và ấn enter ...">
		</form>
	</section>
