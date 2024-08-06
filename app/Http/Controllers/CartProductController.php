<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class CartProductController extends Controller
{

    public function cartProduct()
    {
        $cart = session()->get('cart', []);
        
        $subTotal = 0;

        // vòng lặp tính tống tiền trong mảng giỏ hàng
        foreach ($cart as $item) {  
            # code...
            $subTotal += $item['gia'] * $item['so_luong'];
        }

        // nếu thêm mã khuyến mại thì thêm vào đây
        // $total = $subTotal + 30000;

        return view('user.cartProducts', [
            'cart' => $cart,
            // 'total ' => $total,
            'subTotal' => $subTotal,
        ]);
    }

    public function addCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // dd($request->all());
        $san_pham = SanPham::query()->findOrFail($productId);

        // khởi tạo session chứa thông tin giỏ hàng
        $cart = session()->get('cart', []); 

        if(isset($cart[$productId])){
            // sử lý trường hợp đã tồn tại sản phẩm thì thêm số lượng
            $cart[$productId]['so_luong'] += $quantity;
        }
        else
        {
            // khi chưa có sản phẩm thì thêm vào mảng session
            $cart[$productId] = [
                'ten_san_pham' => $san_pham->ten_san_pham,
                'anh_san_pham' => $san_pham->anh_san_pham,
                'so_luong' => $quantity,
                'gia' => $san_pham->gia,

            ]; 
        }
        session()->put('cart', $cart);

        return redirect()->back();
        // dd($cart);
    }
    public function updateCart(Request $request)
    {
        $newCart = $request->input('cart', []);

        session()->put('cart', $newCart);

        return redirect()->back();
    }
}
