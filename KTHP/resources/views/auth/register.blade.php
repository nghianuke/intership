@extends('Content.Client.Layouts.main')

@section('content')
<section class="login-content">
    <div class="product-detail-redirect">
        <a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
        <p>Đăng ký tài khoản</p>
    </div>
    <div class="main-login">
        <h4>Đăng ký tài khoản</h4>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input placeholder="Họ và tên" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input placeholder="Mật khẩu" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input placeholder="Nhập lại mật khẩu" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <input type="submit" value="Đăng ký" class="input-group submit text-center">
        </form>
    </div>
</section>

@endsection
