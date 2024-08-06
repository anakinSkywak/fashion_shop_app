@extends('layout.user.user')

@section('main')
<div class="cart-main-wrapper section_padding border-1">
    <div class="container">
        <div class="section-bg-color">
            <div class="row">
                <div class="col-lg-12">
                    <div class="info">
                        <h3>Thông tin đơn Hàng: <Span class="text-danger">{{$donHang->ma_don_hang}}</Span></h3> <hr>
                    </div>
                    <div class="">
                        <p>Tên người nhận: <strong>{{ $donHang->ten_nguoi_nhan }}</strong></p>
                        <p>Email người nhận: <strong>{{ $donHang->email_nguoi_nhan }}</strong></p>
                        <p>Số điện thoại người nhận: <strong>{{ $donHang->so_dien_thoai_nguoi_nhan }}</strong></p>
                        <p>Địa chỉ người nhận: <strong>{{ $donHang->dia_chi_nguoi_nhan }}</strong></p>
                        <p>Ngày đặt hàng: <strong>{{ $donHang->created_at->format('d-m-Y') }}</strong></p>
                        <p>Trạng thái đơn hàng: <strong>{{ $trangThai[$donHang->trang_thai_don_hang] }}</strong></p>
                        <p>Trạng thái thanh toán: <strong>{{ $trangThaiThanhToan[$donHang->trang_thai_thanh_toan] }}</strong></p>
                        <p>Tiền hàng: <strong>{{ number_format($donHang->tien_hang, 0, '', '.') }} VND</strong></p>
                        <p>tiền Ship: <strong>{{ number_format($donHang->tien_ship, 0, '', '.') }} VND</strong></p>
                        <p>Tổng tiền: <strong>{{ number_format($donHang->tong_tien, 0, '', '.') }} VND</strong></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="">
                        <table class="table cart_prdct_table text-center">
                            <thead>
                                <tr>
                                    <th class="cpt_img">Hình ảnh</th>
                                    <th class="cpt_pn"> Mã Sản phẩm</th>
                                    <th class="cpt_q">Tên sản phẩm</th>
                                    <th class="cpt_p">Đơn giá</th>
                                    <th class="cpt_t">Số lượng</th>
                                    <th class="cpt_r">thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donHang->chiTietDonHang as  $item)
                                @php
                                    $sanPham = $item->sanPham;
                                @endphp
                                    
                                <tr>
                                    <td>
                                        <a href="#" class="cp_img"><img width="100" src="{{ Storage::url($sanPham->anh_san_pham) }}" alt="" />
                                        </a>
                                    </td>
                                    <td>
                                        {{ $sanPham->ten_san_pham }}
                                       
                                        </td>
                                    <td>
                                        {{ number_format($item->don_gia, 0, '', '.') }} VND
                                    </td>
                                    <td>
                                        {{ $item->so_luong }}
                                    </td>
                                    <td>
                                        {{ number_format($item->thanh_tien, 0, '', '.') }} VND
                                    </td>
                                
                                    <td><a class="btn btn-default cp_remove"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection