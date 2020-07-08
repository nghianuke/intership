@extends('Content.Client.Layouts.main')

@section('content')
        <section class="login-content">
            <div class="product-detail-redirect">
                <a href="#">Trang chủ </a><i class="fas fa-caret-right"></i>
                <p>Đăng nhập tài khoản</p>
            </div>
            <div class="main-login">
                <h4>Đăng nhập tài khoản</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <input type="submit" value="Đăng nhập" class="input-group submit text-center">
                </form>
                <a href="{{ url('password/reset') }}">Quên mật khẩu</a>
                <p class="register">Bạn chưa có tài khoản, vui lòng đăng ký <a href="register">tại đây</a></p>
            </div>
        </section>

@endsection
