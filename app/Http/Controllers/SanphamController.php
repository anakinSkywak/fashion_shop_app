<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function index(Request $request)
    {
        // Lấy danh sách sản phẩm từ repository
        $listSanPham = $this->san_phams->getAll();

        // Tìm kiếm sản phẩm nếu có từ khóa
        if(!empty($request->keyword)){
            $keyword = $request->keyword;
            $listSanPham = SanPham::where('ten_san_pham', 'like', '%' . $keyword . '%')->paginate(10);
        } else {
            // Nếu không có từ khóa, hiển thị tất cả sản phẩm
            $listSanPham = SanPham::paginate(10);
        }

        // Đưa dữ liệu $listSanPham ra view
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
        // sử lý update
        $san_pham = $this->san_phams->find($id);

        if($request->hasFile('anh_san_pham')){
            if($san_pham->anh_san_pham){
                Storage::disk('public')->delete($san_pham->anh_san_pham);
            }

            // lưu ảnh mới

            $fileName = $request->file('anh_san_pham')->store('uploads/sanpham', 'public');

        }else{
            $fileName = $san_pham->anh_san_pham;
        }

        $dataUpdate = [
            'id' => $id,
            'ten_san_pham' => $request->ten_san_pham,
            'so_luong' => $request->so_luong,
            'gia' => $request->gia,
            'mo_ta' => $request->mo_ta,
            'danh_mucs_id' => $request->danh_mucs_id,
            'anh_san_pham' => $fileName,
        ];

        $this->san_phams->updateSanPham($dataUpdate, $id);

        return redirect()->route('sanpham.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $san_pham = $this->san_phams->find($id);

        if(!$san_pham){
            return redirect()->route('sanpham.index');

        }
        if($san_pham->anh_san_pham){
            Storage::disk('public')->delete($san_pham->anh_san_pham);
        }
        
        $san_pham->delete();
        return redirect()->route('sanpham.index');


    }
}
