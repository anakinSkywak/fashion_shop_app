@extends('user')
@section('main')
<!-- Start Slider Area -->
<section id="slider_area" class="text-center">
			<div class="slider_active owl-carousel">
				<div class="single_slide" style="background-image: url(img/slider/1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-left slider-animated-1">
									<p class="animated">New Year 2018</p>
									<h1 class="animated">best shopping</h1>
									<h4 class="animated">Big Sale of This Week 50% off</h4>
									<a href="#" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="single_slide" style="background-image: url(img/slider/2.jpg); background-size: cover; background-position: center ;">
					<div class="container">
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-center slider-animated-2">
									<p class="animated">Women fashion</p>
									<h1 class="animated">popular style</h1>
									<h4 class="animated">Big Sale of This Week 50% off</h4>
									<a href="#" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="single_slide" style="background-image: url(img/slider/3.jpg); background-size: cover; background-position: center ;">
					<div class="container">
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-right slider-animated-3">
									<p class="animated">Men Collection</p>
									<h1 class="animated">popular style</h1>
									<h4 class="animated">Big Sale of This Week 50% off</h4>
									<a href="#" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Slider Area -->

		<!--  Promo ITEM STRAT  -->
		<section id="promo_area" class="section_padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<a href="#">
							<div class="single_promo">
								<img src="img/promo/1.jpg" alt="">
								<div class="box-content">
									<h3 class="title">Men</h3>
									<span class="post">2018 Collection</span>
								</div>
							</div>
						</a>
					</div><!--  End Col -->

					<div class="col-lg-4 col-md-6 col-sm-12">
						<a href="#">
							<div class="single_promo">
								<img src="img/promo/2.jpg" alt="">
								<div class="box-content">
									<h3 class="title">Shoe</h3>
									<span class="post">2018 Collection</span>
								</div>
							</div>
						</a>

						<a href="#">
							<div class="single_promo">
								<img src="img/promo/4.jpg" alt="">
								<div class="box-content">
									<h3 class="title">Watch</h3>
									<span class="post">2018 Collection</span>
								</div>
							</div>
						</a>

					</div><!--  End Col -->

					<div class="col-lg-4 col-md-6 col-sm-12">
						<a href="#">
							<div class="single_promo">
								<img src="img/promo/3.jpg" alt="">
								<div class="box-content">
									<h3 class="title">Women</h3>
									<span class="post">2018 Collection</span>
								</div>
							</div>
						</a>
					</div><!--  End Col -->

				</div>
			</div>
		</section>
		<!--  Promo ITEM END -->


		<!-- Start product Area -->
		<section id="product_area" class="section_padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">
							<h2>Our <span>Products</span></h2>
							<div class="divider"></div>
						</div>
					</div>
				</div>

				<div class="text-center">
					<div class="product_filter">
						<ul>
							<li class=" active filter" data-filter="all">ALL</li>
							<li class="filter" data-filter=".sale">Sale</li>
							<li class="filter" data-filter=".bslr">Bestseller</li>
							<li class="filter" data-filter=".ftrd">Featured</li>
						</ul>
					</div>

					<div class="product_item">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 mix sale">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/1.jpg" alt=""/>
										<div class="new_badge">New</div>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>

									</div>
								</div>

							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6  mix ftrd">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/2.jpg" alt=""/>
										<div class="new_badge">New</div>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6  mix">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/3.jpg" alt=""/>
										<div class="new_badge">New</div>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6  mix sale bslr">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/4.jpg" alt=""/>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6  mix ftrd">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/5.jpg" alt=""/>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/6.jpg" alt=""/>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/7.jpg" alt=""/>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

							<div class="col-lg-3 col-md-4 col-sm-6 mix sale bslr">
								<div class="single_product">
									<div class="product_image">
										<img src="img/product/8.jpg" alt=""/>
										<div class="box-content">
											<a href="#"><i class="fa fa-heart-o"></i></a>
											<a href="#"><i class="fa fa-cart-plus"></i></a>
											<a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>

									<div class="product_btm_text">
										<h4><a href="#">Product Title</a></h4>
										<div class="p_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span class="price">$123.00</span>
									</div>
								</div>
							</div> <!-- End Col -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End product Area -->

		<!-- Special Offer Area -->
		<div class="special_offer_area gray_section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="special_img text-left">
							<img src="img/special.png" width="370" alt="" class="img-responsive">
							<span class="off_baudge text-center">30% <br /> Off</span>
						</div>
					</div>

					<div class="col-md-7 text-left">
						<div class="special_info">
							<h3>Men Collection 2018</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum</p>
							<a href="#" class="btn main_btn">Shop Now</a>
						</div>
					</div>
				</div>

			</div>
		</div> <!-- End Special Offer Area -->

		<!-- Start Featured product Area -->
		<section id="featured_product" class="featured_product_area section_padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">
							<h2>Featured <span> Products</span></h2>
							<div class="divider"></div>
						</div>
					</div>
				</div>

				<div class="row text-center">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/1.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/2.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/3.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/4.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/5.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/6.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/7.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single_product">
							<div class="product_image">
								<img src="img/product/8.jpg" alt=""/>
								<div class="box-content">
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-cart-plus"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>

							<div class="product_btm_text">
								<h4><a href="#">Product Title</a></h4>
								<div class="p_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="price">$123.00</span>
							</div>
						</div>
					</div> <!-- End Col -->
				</div>
			</div>
		</section>
		<!-- End Featured Products Area -->
@endsection
