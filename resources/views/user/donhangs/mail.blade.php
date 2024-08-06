@component('mail::message')
# Xác Nhận Đơn Hàng

Xin chào {{ $donhang->ten_nguoi_nhan }},

Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi. Đơn hàng của bạn đã được xác nhận và chúng tôi đang chuẩn bị giao hàng.

## Thông Tin Đơn Hàng
**Mã Đơn Hàng:** {{ $donhang->ma_don_hang  }}  
**Tên Người Nhận:** {{ $donhang->ten_nguoi_nhan }}  
**Email Người Nhận:** {{ $donhang->email_nguoi_nhan }}  
**Số Điện Thoại Người Nhận:** {{ $donhang->so_dien_thoai_nguoi_nhan }}  
**Địa Chỉ Nhận Hàng:** {{ $donhang->dia_chi_nguoi_nhan }}  

## Chi Tiết Sản Phẩm
@component('mail::table')
| Tên Sản Phẩm       | Số Lượng    | Đơn Giá     | Thành Tiền  |
|:------------------ |:-----------:| -----------:| -----------:|
@foreach ($donhang->chiTietdonhang as $item)
| {{ $item->sanPham->ten_san_pham }} | {{ $item->so_luong }} | {{ number_format($item->don_gia, 0, '', '.') }} VND | {{ number_format($item->thanh_tien, 0, '', '.') }} VND |
@endforeach
@endcomponent

**Tổng Tiền Hàng:** {{ number_format($donhang->tien_hang, 0, '', '.') }} VND  
**Phí Vận Chuyển:** {{ number_format($donhang->tien_ship, 0, '', '.') }} VND  
**Tổng Thanh Toán:** {{ number_format($donhang->tong_tien, 0, '', '.') }} VND  

Nếu bạn có bất kỳ câu hỏi nào về đơn hàng, xin vui lòng liên hệ với chúng tôi qua email này.

Cảm ơn bạn một lần nữa vì đã chọn chúng tôi!

Trân trọng,  
@endcomponent
