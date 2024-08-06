@extends('layout.user.user')

@section('main')
		<!-- Page item Area -->
		<div id="page_item_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-left">
						<h3>My order</h3>
					</div>		

					<div class="col-sm-6 text-right">
						<ul class="p_items">
							<li><a href="#">home</a></li>
							<li><a href="#">category</a></li>
							<li><span>Checkout</span></li>
						</ul>					
					</div>	
				</div>
			</div>
		</div>
		
		

	<!-- Checkout Page -->
	<section class="checkout_page">
            <div class="container">
                <form action="{{ route('donhangs.store') }}" method="post">
                    @csrf
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="title">
                                <h3>Billing Details</h3>
                            </div>
                        
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                
                                <div class="form-group">      
                                    <input name="ten_nguoi_nhan" placeholder="Tên người nhận" class="form-control" type="text" value="{{ Auth::user()->Ten_tai_khoan }}">    
                                    @error('ten_nguoi_nhan')
                                        <p>{{ $message }}</p>
                                    @enderror                     
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input name="email_nguoi_nhan" placeholder="Địa chỉ email" class="form-control" type="email" value="{{ Auth::user()->email }}">
                                        @error('email_nguoi_nhan')
                                        <p>{{ $message }}</p>
                                    @enderror 
                                    </div>
                            
        
                                    <div class="form-group col-md-6">
                                        <input name="so_dien_thoai_nguoi_nhan" placeholder="Phone number" class="form-control" type="text" value="{{ Auth::user()->so_dien_thoai }}">
                                        @error('so_dien_thoai_nguoi_nhan')
                                        <p>{{ $message }}</p>
                                    @enderror 
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="address">Địa chỉ nhận hàng:</label>    
                                    <textarea rows="3" name="dia_chi_nguoi_nhan" id="address" placeholder="Mỹ Đình, Nam Từ Liêm, Hà Nội" class="form-control">{{ Auth::user()->dia_chi }}</textarea>
                                    @error('dia_chi_nguoi_nhan')
                                        <p>{{ $message }}</p>
                                    @enderror 
                                </div>
                            

                                <div class="form-group">
                                    <label for="address">Ghi chú:</label>    
                                    <textarea rows="3" name="street" placeholder="Order note" class="form-control"></textarea>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">SHIP TO A DIFFERENT ADDRESS?</label>
                                    </div>                             
                                </div>
                            
                        </div>
                        
                        
                        <div class="col-md-6">
                            <div class="title">
                                <h3>your order</h3>
                            </div>
                            
                            <div class="your-order-table table-responsive">
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $key => $item)
                                    
                                        <tr>
                                            <td class="product-name">{{ $item['ten_san_pham'] }} x {{ $item['so_luong'] }}</td>
                                            <td class="product-total"><span>{{  number_format($item['gia'], 0, '', '.') }} VND</span></td>
                                        </tr>
                                        @endforeach 
                                        
                                        <tr class="sub-total">
                                            <td class="product-name">Sub Total</td>
                                            <td class="product-total"><span>{{  number_format($subTotal, 0, '', '.') }} VND</span></td>
                                            <input type="hidden" name="tien_hang" value="{{ $subTotal }}">
                                        </tr>
                                        <tr class="sub-total">
                                            <td class="product-name">Phí ship</td>
                                            <td class="product-total"><span>{{  number_format($shipping, 0, '', '.') }} VND</span></td>
                                            <input type="hidden" name="tien_ship" value="{{ $shipping }}">
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <td><span class="amount">${{  number_format($total, 0, '', '.') }} VND</span></td>
                                            <input type="hidden" name="tong_tien" value="{{ $total }}">
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                            <div class="payment_method">           
                                <ul>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Chuyển khoản trực tiếp</label>
                                            <p>chuyên khoản trực tiếp khi nhận hàng</p>
                                        </div>						
                            
                                    </li>
                                    
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Thanh toán Online</label>
                                        </div>	
                                    </li>
                                </ul>     
                            </div>
                            
                            <div class="qc-button">
                                <button type="submit" class="btn border-btn" tabindex="0">Đặt Hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
@endsection 