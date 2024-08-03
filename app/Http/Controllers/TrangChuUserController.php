<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TrangChuUserController extends Controller
{
    // đổ danh mục và sản phẩm ra trang chủ website

    public $danh_mucs;
    public $san_phams;

    public function __construct()
    {
        $this->danh_mucs = new DanhMuc();
        $this->san_phams = new SanPham();
    }

    public function index()
    {
        //lấy danh mục

        $listDanhMuc = $this->danh_mucs->getDanhMuc();
        // $listDanhMuc = DanhMuc::paginate(10);

        // lấy sản phẩm 8 mới

        $listSanPham = $this->san_phams->orderBy('id', 'desc')->take(8)->get();

        return view('user.index', [
            'danh_mucs' => $listDanhMuc,
            'san_phams' => $listSanPham,
       ]);
    }


    // shop
    public function shop(){

        $listDanhMuc = $this->danh_mucs->getDanhMuc();
        $listSanPham = $this->san_phams->orderBy('id', 'desc')->paginate(8);

        return view('user.shop', [
            'danh_mucs' => $listDanhMuc,
            'san_phams' => $listSanPham,
        ]);
    }

    // trang chi tiết sản phẩm
    public function shopDetail($id){

        $san_pham = $this->san_phams->find($id);

        

        if (!$san_pham) {
            # code...
            return redirect()->with('error', 'Sản phẩm không tồn tại');
        }

        $listDanhMuc = $this->danh_mucs->getDanhMuc();
        $listSanPham = $this->san_phams->where('danh_mucs_id', $san_pham->danh_mucs_id)
                                        ->where('id', '!=', $san_pham->id)
                                        ->take(4)
                                        ->get();

        

        return view('user.shopDetail', [
            'danh_mucs' => $listDanhMuc,
            'san_phams' => $listSanPham,
            'san_pham'  => $san_pham
        ]);
    }

    // login web
    public function login(){

        $listDanhMuc = $this->danh_mucs->getDanhMuc();

        return view('user.login', [
            'danh_mucs' => $listDanhMuc,
        ]);
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
        if(Auth::attempt(['email' => $request->email , 'password' => $request->password])) {
            // dùng intended chuyển hướng về trang trước đó hoặc là trang chủ
            return redirect()->intended(route('web.home'));
        }
        else{
            return redirect()->route('web.login')->with('error', 'Đăng nhập thất bại');
        }     
    }

    // thực hiện logout
    public function logout() {
        Auth::logout();
        return redirect()->route('web.login');
    }
    

    // giở hàng

    public function cartProduct(){
        return view('user.shopDetail');
    }
        
}
