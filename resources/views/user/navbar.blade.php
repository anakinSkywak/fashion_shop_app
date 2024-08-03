<div class="header_btm_area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a class="logo" href="index.html"> <img alt="" src="{{asset('assetsAdmin/img/logo.png')}}"></a>
            </div><!--  End Col -->

            <div class="col-xs-12 col-sm-12 col-md-9 text-right">
                <div class="menu_wrap">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="index.html">Trang chủ</a>
                                </li>

                                <li><a href="{{ route('web.shop') }}">Cửa Hàng</a>
                                    <!-- Sub Menu -->
                                    {{-- <ul class="sub-menu">
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="shop.html">Thể Loại<i class="fa fa-angle-down"></i></a>
                                    <!-- Mega Menu -->
                                    <div class="mega-menu mm-4-column mm-left">
                                        @foreach ($danh_mucs as $danh_muc)
                                            
                                        <div class="mm-column mm-column-link float-left">
                                            <a href="#">{{ $danh_muc->ten_danh_muc }}</a>
                                            {{-- <a href="#">Jackets</a>
                                            <a href="#">Collections</a>
                                            <a href="#">T-Shirts</a>
                                            <a href="#">jens pant’s</a>
                                            <a href="#">sports shoes</a> --}}
                                        </div>
                                        @endforeach

                                    </div>
                                </li>
                                

                                <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                    <!-- Sub Menu -->
                                    <ul class="sub-menu">
                                        <li><a href="left-sidebar-blog.html">Left Sidebar Blog</a></li>
                                        <li><a href="right-sidebar-blog.html">Right Sidebar Blog</a></li>
                                        <li><a href="full-width-blog.html">Full Width Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Liên hệ chúng tôi</a></li>
                            </ul>
                        </nav>
                    </div> <!--  End Main Menu -->

                    <div class="mobile-menu text-right ">
                        <nav>
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li><a href="#">Cửa Hàng</a>
                                    <!-- Sub Menu -->
                                    <ul>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Thể loại</a>
                                    <ul>
                                        <li><a href="#">Blazers</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Collections</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">jens pant’s</a></li>
                                        <li><a href="#">sports shoes</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Women</a>
                                    <ul>
                                        <li><a href="#">gagets</a></li>
                                        <li><a href="#">laptop</a></li>
                                        <li><a href="#">mobile</a></li>
                                        <li><a href="#">lifestyle</a></li>
                                        <li><a href="#">jens pant’s</a></li>
                                        <li><a href="#">sports items</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Liên hệ chúng tôi</a></li>
                            </ul>
                        </nav>
                    </div> <!--  End mobile-menu -->

                    <div class="right_menu">
                        <ul class="nav justify-content-end">
                            <li>
                                <div class="search_icon">
                                    <i class="fa fa-search search_btn" aria-hidden="true"></i>
                                    <div class="search-box">
                                        <form action="#" method="get">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  placeholder="enter keyword"/>
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="cart_menu_area">
                                    <div class="cart_icon">
                                        <a href="#"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
                                        <span class="cart_number">2</span>
                                    </div>


                                    <!-- Mini Cart Wrapper -->
                                    <div class="mini-cart-wrapper">
                                        <!-- Product List -->
                                        <div class="mc-pro-list fix">
                                            <div class="mc-sin-pro fix">
                                                <a href="#" class="mc-pro-image float-left"><img src="img/mini-cart/1.jpg" alt="" /></a>
                                                <div class="mc-pro-details fix">
                                                    <a href="#">This is Product Name</a>
                                                    <span>1x$25.00</span>
                                                    <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="mc-sin-pro fix">
                                                <a href="#" class="mc-pro-image float-left"><img src="img/mini-cart/2.jpg" alt="" /></a>
                                                <div class="mc-pro-details fix">
                                                    <a href="#">This is Product Name</a>
                                                    <span>1x$25.00</span>
                                                    <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sub Total -->
                                        <div class="mc-subtotal fix">
                                            <h4>Subtotal <span>$50.00</span></h4>
                                        </div>
                                        <!-- Cart Button -->
                                        <div class="mc-button">
                                            <a href="#" class="checkout_btn">checkout</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--  End Col -->
        </div>
    </div>
</div>