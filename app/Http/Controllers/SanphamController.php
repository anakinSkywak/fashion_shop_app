<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanphamController extends Controller
{

    public $san_phams;

    public function __construct()
    {
        $this->san_phams = new SanPham();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $listSanPham = $this->san_phams->getAll();
        
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
