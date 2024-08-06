<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TrangChuUserController extends Controller
{
    public $san_phams;

    public function __construct()
    {
        $this->san_phams = new SanPham();
    }

    public function index()
    {
        //lấy danh mục

        // lấy sản phẩm 8 mới

        $listSanPham = $this->san_phams->orderBy('id', 'desc')->take(8)->get();

        return view('user.index', [

            'san_phams' => $listSanPham,
        ]);
    }


    // shop
    public function shop()
    {
        // $listSanPham = $this->san_phams->orderBy('id', 'desc')->paginate(8);
        // đã đổ dữ liệu từ AppServiceProvider
        return view('user.shop');
    }

    // trang chi tiết sản phẩm
    public function shopDetail($id)
    {

        $san_pham = $this->san_phams->find($id);
        if (!$san_pham) {
            # code...
            return redirect()->with('error', 'Sản phẩm không tồn tại');
        }
        // dữ liệu lấy sản phẩm cùng loại đã có trong AppServiceProvider
        return view('user.shopDetail', [
            'san_pham'  => $san_pham
        ]);
    }

    // login web
    public function login()
    {
        return view('user.login');
    }

    // thực hiện việc đăng nhập
    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('web.login')->withInput()->withErrors($validator);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // dùng intended chuyển hướng về trang trước đó hoặc là trang chủ
            return redirect()->intended(route('web.home'));
        } else {
            return redirect()->route('web.login')->with('error', 'Đăng nhập thất bại');
        }
    }

    // thực hiện logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('web.login');
    }


    // giở hàng

    public function cartProduct()
    {
        return view('user.shopDetail');
    }
}
