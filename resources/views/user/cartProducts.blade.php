@extends('layout.user.user')

@section('main')

		<!-- Page item Area -->
		<div id="page_item_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-left">
						<h3>Shop Details</h3>
					</div>		

					<div class="col-sm-6 text-right">
						<ul class="p_items">
							<li><a href="#">home</a></li>
							<li><a href="#">category</a></li>
							<li><span>Cart</span></li>
						</ul>					
					</div>	
				</div>
			</div>
		</div>

		@if (session('error'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				{{ session('error') }}
			</div>
		@endif
		
		<!-- Cart Page -->
		<div class="cart_page_area">
			<div class="container">
				<form action="{{ route('web.updateCart') }}" method="post">
					@csrf

					<div class="row">
						<div class="col-sm-12">
							<div class="cart_table_area table-responsive">
								<table class="table cart_prdct_table text-center">
									<thead>
										<tr>
											<th class="cpt_img">image</th>
											<th class="cpt_pn">product name</th>
											<th class="cpt_q">quantity</th>
											<th class="cpt_p">price</th>
											<th class="cpt_t">total</th>
											<th class="cpt_r">remove</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($cart as $key => $item)
											
										<tr>
											<td>
												<a href="#" class="cp_img"><img width="100" src="{{ Storage::url($item['anh_san_pham']) }}" alt="" />
												</a>
												<input type="hidden" name="cart[{{ $key }}][anh_san_pham]" value="{{ $item['anh_san_pham'] }}">
											</td>
											<td>
												<a href="{{ route('web.shopDetail', $key) }}" class="cp_title">{{ $item['ten_san_pham'] }}
												</a>
												<input type="hidden" name="cart[{{ $key }}][ten_san_pham]" value="{{ $item['ten_san_pham'] }}">
												</td>
											<td>	
												<div class="pd_quantity cp_quntty">	
													<button type="button" class="minus btn btn-outline-secondary rounded-circle mx-1" data-field="quantity">-</button>
													<input type="text" value="{{ $item['so_luong'] }}" data-price="{{ $item['gia'] }}" name="cart[{{ $key }}][so_luong]" min="1" class="quantityInput form-control text-center mx-1" style="width: 60px;">
													<button type="button" class="plus btn btn-outline-secondary rounded-circle mx-1" data-field="quantity">+</button>
													{{-- <input type="hidden" name="product_id" value="{{ $san_pham->id }}"> --}}
												</div>									
												{{-- <div class="cp_quntty">																			
													<input name="quantity" value=""  type="number">													
												</div> --}}
											</td>
											<td>
												<p class="cp_price">{{ number_format($item['gia'], 0, '', '.') }} VND</p>
												<input type="hidden" name="cart[{{ $key }}][gia]" value="{{ $item['gia'] }}">
											</td>
											
											<td> <p class="subTotal cpp_total">{{ number_format($item['gia'] * $item['so_luong'], 0, '', '.') }} VND</p></td>
											<td><a class="btn btn-default cp_remove"><i class="fa fa-trash"></i></a></td>
										</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-8 col-xs-12 cart-actions cart-button-cuppon">
							<div class="row">
								<div class="col-sm-7">
									<div class="cart-action">
										<a href="#" class="btn border-btn">continiue shopping</a>
										<button type="submit" class="btn border-btn">update shopping bag</button>
									</div>
								</div>
								
								<div class="col-sm-5">
									<div class="cuppon-wrap">
										<h4>Discount Code</h4>
										<p>Enter your coupon code if you have</p>
										<form action="#" class="cuppon-form">
											<input type="text" />
											<button class="btn border-btn">apply coupon</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-xs-12 cart-checkout-process text-right">
							<div class="wrap">
								<p><span>Subtotal</span><span class="subTotal">{{ number_format($subTotal, 0, '', '.') }} VND</span></p>
								<h4><span>Grand total</span><span class="amount">{{ number_format($subTotal, 0, '', '.') }} VND</span></h4>
								<a href="{{ route('donhangs.create') }}" class="btn border-btn">process to checkout</a>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				// Chọn tất cả các nút minus và plus
				var minusButtons = document.querySelectorAll('.minus');
				var plusButtons = document.querySelectorAll('.plus');
			
				// Gắn sự kiện cho tất cả các nút minus
				minusButtons.forEach(function(minus) {
					minus.addEventListener('click', function() { 	
						var quantityInput = minus.closest('tr').querySelector('.quantityInput');
						var currentValue = parseInt(quantityInput.value, 10);
						if (currentValue > 1) {
							quantityInput.value = currentValue - 1;
							updateSubtotal(quantityInput);
						} else {
							alert('Bạn không thể giảm giá trị xuống dưới 1.');
						}
					});
				});
			
				// Gắn sự kiện cho tất cả các nút plus
				plusButtons.forEach(function(plus) {
					plus.addEventListener('click', function() {
						var quantityInput = plus.closest('tr').querySelector('.quantityInput');
						var currentValue = parseInt(quantityInput.value, 10);
						quantityInput.value = currentValue + 1;
						updateSubtotal(quantityInput);
					});
				});
			
				// Gắn sự kiện cho tất cả các ô nhập số lượng
				var quantityInputs = document.querySelectorAll('.quantityInput');
				quantityInputs.forEach(function(quantityInput) {
					quantityInput.addEventListener('input', function() {
						var value = parseInt(quantityInput.value, 10);
						if (isNaN(value) || value < 1) {
							alert('Bạn hãy nhập số lớn hơn 1');
							quantityInput.value = 1; // Đặt lại giá trị về 1 nếu giá trị không hợp lệ
						}
						updateSubtotal(quantityInput);
					});
				});
			
				// Hàm cập nhật tổng phụ dựa trên số lượng
				function updateSubtotal(input) {
					var $input = $(input);
					var currentValue = parseInt($input.val(), 10);
					var price = parseFloat($input.data('price')); // Đảm bảo data-price được thiết lập đúng
					var subTotalElement = $input.closest('tr').find('.subTotal');
					var newSubTotal = currentValue * price;
			
					subTotalElement.text(newSubTotal.toLocaleString('vi-VN') + ' VND');
					updateCart() 
				}

				// sử lý xóa sản phẩm trong giỏ hàng
				// đây chỉ là sử lý giao diện
				var deleteButton = document.querySelectorAll('.cp_remove');
				deleteButton.forEach(function (deleteButton) {
					deleteButton.addEventListener('click', function() {
						// chặn thao tác của thẻ a
						event.preventDefault();
						// chọn hàng 
						var $row = $(this).closest('tr');
						// xóa hàng
						$row.remove()
						updateCart() 
					})
				});

				// Hàm update 

				function updateCart() {
					var subTotal = 0;
					var quantityInputs = document.querySelectorAll('.quantityInput'); // sửa selector để chọn class thay vì id

					quantityInputs.forEach(function(quantityInput) {
						var $input = $(quantityInput);
						var currentValue = parseInt($input.val(), 10);
						var price = parseFloat($input.data('price')); // Đảm bảo data-price được thiết lập đúng
						subTotal += currentValue * price;
					});

					var amount = subTotal;
					$('.subTotal').text(amount.toLocaleString('vi-VN') + ' VND');
					$('.amount').text(amount.toLocaleString('vi-VN') + ' VND');
				
				}


			});
			</script>
			
@endsection