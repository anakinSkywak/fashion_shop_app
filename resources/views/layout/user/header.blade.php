<header id="header_area">
    <div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="hdr_tp_left">
                        <div class="call_area">
                            <span class="single_con_add"><i class="fa fa-phone"></i> +8423456789</span>
                            <span class="single_con_add"><i class="fa fa-envelope"></i> example@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <ul class="hdr_tp_right text-right">
                        @if (Auth::check())
                        <li class="lan_area"><a href="#"><i class="fa fa-user "></i>{{ Auth::user()->Ten_tai_khoan  }}<i class="fa fa-caret-down"></i></a>
                            <ul class="csub-menu">
                                <li><a href="#">Thông tin</a></li>
                                @if (Auth::user()->role == 'admin')
                                <li><a href="#">Trang Admin</a></li>
                                @endif
                                <li><a href="{{ route('web.logout') }}">Đăng xuất</a></li>
                                <li><a href="{{ route('donhangs.index') }}">Order</a></li>

                            </ul>
                        @else
                        <li class="account_area"><a href="{{ route('web.login') }}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                        <li class="account_area"><a href="{{ route('web.login') }}"><i class="fa fa-lock"></i> Đăng ký</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div> <!--  HEADER START  -->

    {{-- navbar --}}
    @include('user.navbar')
</header>