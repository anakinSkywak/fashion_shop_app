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

		@if (session('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}
			</div>
		@endif
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
											<th class="cpt_img">Mã Đơn Hàng</th>
											<th class="cpt_pn">Ngày đặt</th>
											<th class="cpt_q">Trạng thái</th>
											<th class="cpt_p">Tổng tiền</th>
											<th class="cpt_t">Hành động</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($donHangs as $donHang)
											
										<tr>
                                            <td>
                                                {{ $donHang->ma_don_hang }}
                                            </td>
                                            <td>
                                                {{ $donHang->created_at->format('d-m-Y') }}
                                            </td>
                                            <td>
                                                {{ $trangThai[$donHang->trang_thai_don_hang] }}
                                            </td>
                                            <td>
                                                {{ number_format($donHang->tong_tien, 0, '', '.') }} VND
                                            </td>
                                            <td>
                                                <a class="btn border-btn"  href="{{ route('donhangs.show', $donHang->id ) }}">
                                                    Chi tiết
                                                </a>

                                                <form action="{{ route('donhangs.update', $donHang->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    @if ($donHang->trang_thai_don_hang == $type_cho_xac_nhan)
                                                    <input type="hidden" name="huy_don_hang" value="1">
                                                        <button type="submit" onclick="return confirm('bạn muốn hủy đơn hàng này?')" class="btn btn-danger">Hủy đơn hàng</button>
                                                    @elseif ($donHang->trang_thai_don_hang == $type_dang_vang_chuyen)
                                                        <input type="hidden" name="da_nhan_hang" value="2">
                                                        <button type="submit" onclick="return confirm('bạn đã nhận hàng?')" class="btn btn-success">nhận đơn hàng</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					{{-- <div class="row">
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
						
					</div> --}}
				</form>
			</div>
		</div>
	
		
	
@endsection