@extends('layout.user.user')

@section('main')

<!-- Login Page -->
<div class="login_page_area">
    <div class="container">
        <h1>Đăng nhập</h1>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="create_account_area">
                    <h2 class="caa_heading">Chào mừng đến với website của chúng tôi</h2>
                    <div class="caa_form_area">
                        <form action="{{ route('web.auth') }}" method="post">
                            @csrf
                            <div class="caa_form_group">
                                <div class="login_email">
                                    <label>Email </label>
                                    <div class="input-area">
                                        <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror" />
                                        @error('email')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="login_password">
                                    <label>Password</label>
                                    <div class="input-area">
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" />
                                        @error('password')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <p class="forgot_password">
                                    <a href="#" title="Recover your forgotten password" rel="">Forgot your password?</a>
                                </p>
                                <button type="submit" id="acc_Login" class="btn btn-default acc_btn"> 
                                    <span> <i class="fa fa-lock btn_icon"></i> Sign in </span> 
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>	
@endsection