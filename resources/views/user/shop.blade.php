@extends('layout.user.user')

@section('main')

		<!-- Page item Area -->
		<div id="page_item_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-left">
						<h3>Shop</h3>
					</div>		

					<div class="col-sm-6 text-right">
						<ul class="p_items">
							<li><a href="{{ route('web.home') }}">home</a></li>
							<li><a href="#">category</a></li>
							<li><span>Shop</span></li>
						</ul>					
					</div>			
				</div>
			</div>
		</div>
		
		
		<!-- Shop Product Area -->
		<div class="shop_page_area">
			<div class="container">
				<div class="shop_bar_tp fix">
					<div class="row">
						<div class="col-sm-6 col-xs-12 short_by_area">
							<div class="short_by_inner">
								<label>short by:</label>
								<select class="sort-select">
									<option>Name Descending</option>
									<option>Date Descending</option>
									<option>Price Descending</option>
								</select>
							</div>
						</div>

						<div class="col-sm-6 col-xs-12 show_area">
							<div class="show_inner">
								<label>show:</label>
								<select class="show-select">
									<option>8</option>
									<option>12</option>
									<option>30</option>
									<option>ALL</option>
								</select>
							</div>
						</div>
					</div>
				</div>	
					
				<div class="shop_details text-center">
					<div class="row">		
                        @foreach ($san_phams as $san_pham)
                            
						<div class="col-md-3 col-sm-6">
							<div class="single_product">
								<div class="product_image">
									<img width="100" src="{{ Storage::url($san_pham->anh_san_pham) }}" alt="">
									<div class="box-content">
										{{-- <a href="#"><i class="fa fa-heart-o"></i></a> --}}
										<a href="#"><i class="fa fa-cart-plus"></i></a>
										<a href="{{ route('web.shopDetail', $san_pham->id) }}"><i class="fa fa-search"></i></a>
									</div>										
								</div>

								<div class="product_btm_text">
									<h4><a href="{{ route('web.shopDetail', $san_pham->id) }}">{{ $san_pham->ten_san_pham }}</a></h4>
									<span class="price">{{ $san_pham->gia }} VND</span>
								</div>
							</div>								
						</div> <!-- End Col -->						
                        @endforeach		

											
													
					</div>
				</div>
					
				<!-- Blog Pagination -->
				<div class="col-xs-12">
					<div class="blog_pagination pgntn_mrgntp fix">
						<div class="pagination text-center">
							{{ $san_phams->links('pagination::bootstrap-5') }}
						</div>
					</div>
				</div>	
			</div>
		</div>

@endsection