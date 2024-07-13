<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanphamController extends Controller
{

    public $san_phams;
    public $danh_mucs;

    public function __construct()
    {
        $this->san_phams = new SanPham();
        $this->danh_mucs = new DanhMuc();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $listSanPham = $this->san_phams->getAll();
        $listSanPham = SanPham::paginate(10);
        // đưa hết dữ liệu trong $listSanPham đổ về trang sản phẩm
        return view('admin.sanpham.index', [
            'san_phams' => $listSanPham
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $danh_mucs = $this->danh_mucs->getDanhMuc();

        return view('admin.sanpham.add', [
            'danh_mucs' => $danh_mucs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Xử lý hình ảnh
    if($request->hasFile('anh_san_pham')){
        $fileName = $request->file('anh_san_pham')->store('uploads/sanpham', 'public');
    } else {
        $fileName = null;
    }

    $dataInsert = [
        'ten_san_pham' => $request->ten_san_pham,
        'so_luong' => $request->so_luong,
        'gia' => $request->gia,
        'mo_ta' => $request->mo_ta,
        'danh_mucs_id' => $request->danh_mucs_id,
        'anh_san_pham' => $fileName,
    ];

    $this->san_phams->createSanPham($dataInsert);

    return redirect()->route('sanpham.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $san_pham = $this->san_phams->find($id);
        $danh_mucs = $this->danh_mucs->getDanhMuc();

        // khi sản phẩm ko tồn tại thì trở về trang sản phẩm
        if(!$san_pham){
            return redirect()->route('sanpham.index');
        }

        return view('admin.sanpham.update', [
            'san_pham' => $san_pham,
            'danh_mucs' => $danh_mucs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
