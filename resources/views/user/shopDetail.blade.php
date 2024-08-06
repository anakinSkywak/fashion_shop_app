@extends('layout.user.user')

<style>
	icon-shape {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    vertical-align: middle;
}

.icon-sm {
    width: 2rem;
    height: 2rem;
    
}
	.icon-sm {
    width: 2rem;
    height: 2rem;
    
}
</style>

@section('main')

	<!-- Product Details Area  -->
	<div class="prdct_dtls_page_area">
		<div class="container">
			<div class="row">
				<!-- Product Details Image -->
				<div class="col-md-6 col-xs-12">
					<div class="pd_img fix">
						<a class="venobox" href="">
                            <img width="540" src="{{ Storage::url($san_pham->anh_san_pham) }}" alt="">
                        </a>
					</div>
				</div>
				<!-- Product Details Content -->
				<div class="col-md-6 col-xs-12">
					<div class="prdct_dtls_content">
						<h3 class="pd_title" >{{ $san_pham->ten_san_pham }}</h3>
						<div class="pd_price_dtls fix">
							<!-- Product Price -->
							<div class="pd_price">
								<span class="new">{{ number_format($san_pham->gia, 0, '', '.') }} VND</span>
								<span class="old">(60.00)</span>
							</div>
							<!-- Product Ratting -->
							<div class="pd_ratng">
								<div class="rtngs">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
						<div class="pd_text">
							<h4>overview:</h4>
							<p>{{ $san_pham->mo_ta }}</p>
						</div>
						<div class="pd_img_size fix">
							<h4>size:</h4>
							<a href="#">s</a>
							<a href="#">m</a>
							<a href="#">l</a>
							<a href="#">xl</a>
							<a href="#">xxl</a>
						</div>

						<form action="{{ route('web.addCart') }}" method="post">
							@csrf
							<div class="pd_clr_qntty_dtls fix">
								<div class="pd_qntty_area">
									<h4>quantity:</h4>
									<div class="pd_quantity">
										<button type="button" class="minus btn btn-outline-secondary rounded-circle mx-1" data-field="quantity">-</button>
										<input type="text" value="1" name="quantity" id="quantityInput" min="1" class="form-control text-center mx-1" style="width: 60px;">
										<button type="button" class="plus btn btn-outline-secondary rounded-circle mx-1" data-field="quantity">+</button>
										<input type="hidden" name="product_id" value="{{ $san_pham->id }}">
									</div>
									
								</div>
							</div>
							<!-- Product Action -->
							<div class="pd_btn fix">
								<button type="submit" class="btn btn-default acc_btn">Thêm vào giỏ hàng</button>
								<a class="btn btn-default acc_btn btn_icn"><i class="fa fa-heart"></i></a>
								<a class="btn btn-default acc_btn btn_icn"><i class="fa fa-refresh"></i></a>
							</div>
						</form>
						<div class="pd_share_area fix">
							<h4>share this on:</h4>
							<div class="pd_social_icon">
								<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
								<a class="google_plus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
								<a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">					
					<div class="pd_tab_area fix">									
						<ul class="pd_tab_btn nav nav-tabs" role="tablist">
						  <li>
							<a class="active" href="#description" role="tab" data-toggle="tab">Description</a>
						  </li>
			
						  <li>
							<a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
						  </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="description">
								{{ $san_pham->mo_ta }}
							</div>

							

								<div role="tabpanel" class="tab-pane fade" id="reviews">
									<div class="pda_rtng_area fix">
										<h4>4.5 <span>(Overall)</span></h4>
										<span>Based on 9 Comments</span>
									</div>
									<div class="rtng_cmnt_area fix">
										<div class="single_rtng_cmnt">
											<div class="rtngs">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											<span>(4)</span>
											</div>
											<div class="rtng_author">
												<h3>John Doe</h3>
												<span>11:20</span>
												<span>6 January 2017</span>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
										</div>

									</div>
									<div class="col-md-6 rcf_pdnglft">
										<div class="rtng_cmnt_form_area fix">
											<h3>Thêm bình luận của bạn</h3>
											<div class="rtng_form">
												<form action="#">
													<div class="input-area"><input type="text" placeholder="Type your name" /></div>
													<div class="input-area"><input type="text" placeholder="Type your email address" /></div>
													<div class="input-area"><textarea name="message" placeholder="Write a review"></textarea></div>
													<input class="btn border-btn" type="submit" value="Add Review" />
												</form>
											</div>
										</div>
									</div>				  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- Related Product Area -->
	<div class="related_prdct_area text-center">
		<div class="container">		
				<!-- Section Title -->
				<div class="rp_title text-center"><h3>Các sản phẩm cùng loại</h3></div>
				
				<div class="row">
                    @foreach ($san_phams as $san_pham)
                        
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="single_product card h-100">
							<div class="product_image position-relative">
								<img src="{{ Storage::url($san_pham->anh_san_pham) }}" class="card-img-top" alt="{{ $san_pham->ten_san_pham }}">
								<div class="box-content position-absolute top-50 start-50 translate-middle">
									{{-- <a href="#"><i class="fa fa-heart-o"></i></a> --}}
									<form action="{{ route('web.addCart') }}" method="post" class="d-inline">
										@csrf
										<input type="hidden" name="product_id" value="{{ $san_pham->id }}">
										<input type="hidden" name="quantity" value="1">
										<button type="submit" class="btn btn-link p-0"><a><i class="fa fa-cart-plus"></a></i></button>
									</form>
									<a href="{{ route('web.shopDetail', $san_pham->id) }}" class="btn btn-link p-0"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product_btm_text card-body text-center">
								<h4 class="card-title"><a href="{{ route('web.shopDetail', $san_pham->id) }}">{{ $san_pham->ten_san_pham }}</a></h4>
								<span class="price">{{ number_format($san_pham->gia, 0, '', '.') }} VND</span>
							</div>
						</div>
					</div> 	
					 <!-- End Col -->			
                    @endforeach
				
			</div>
		</div>
	</div>  


	<script>
		var minus = document.querySelector('.minus');
		var plus = document.querySelector('.plus');
		var quantityInput = document.querySelector('#quantityInput');

		// Xử lý sự kiện click cho nút trừ
		minus.addEventListener('click', function () {
			var currentValue = parseInt(quantityInput.value, 10);
			if (currentValue > 1) {
				quantityInput.value = currentValue - 1;
			} else {
				alert('Bạn không thể giảm giá trị xuống dưới 1.');
			}
		});

		// Xử lý sự kiện click cho nút cộng
		plus.addEventListener('click', function () {
			var currentValue = parseInt(quantityInput.value, 10);
			quantityInput.value = currentValue + 1;
		});

		// Kiểm tra giá trị khi ô nhập số thay đổi
		quantityInput.addEventListener('input', function () {
			var value = parseInt(quantityInput.value, 10);
			if (isNaN(value) || value < 1) {
				alert('Bạn hãy nhập số lớn hơn 1');
				quantityInput.value = 1; // Đặt lại giá trị về 1 nếu giá trị không hợp lệ
			}
		});



	</script>

@endsection