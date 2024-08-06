<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;

class SoLuongController extends Controller
{
    public $danh_mucs;
    public $san_phams;

    public function __construct()
    {
        $this->danh_mucs = new DanhMuc();
        $this->san_phams = new SanPham();
    }

    public function count()
    {
        $so_luong_danh_muc = $this->danh_mucs->getCountDanhMuc();
        $so_luong_san_pham = $this->san_phams->getCountSanPham();
        $so_luong_user = User::query()->count();
        return view('admin.index', [
            'so_luong_danh_muc' => $so_luong_danh_muc,
            'so_luong_san_pham' => $so_luong_san_pham,
            'so_luong_user' => $so_luong_user,
        ]);
    }
}
