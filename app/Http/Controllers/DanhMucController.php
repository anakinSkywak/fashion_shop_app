<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $danh_mucs;
    public function __construct()
    {
        $this->danh_mucs = new DanhMuc;
    }
    public function index()
    {
        //
        $listDanhMuc = $this->danh_mucs->getDanhMuc();
        $listDanhMuc = DanhMuc::paginate(10);
        return view('admin.danhmuc.index', [
            'danh_mucs' => $listDanhMuc
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.danhmuc.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $danh_muc = [
            'ten_danh_muc' => $request->ten_danh_muc
        ];

        $this->danh_mucs->addDanhMuc($danh_muc);

        return redirect()->route('admin.danhmuc.index');
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
        $danh_muc = $this->danh_mucs->getOneDanhMuc($id);

        return view('admin.danhmuc.update', [
            'danh_muc' => $danh_muc
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $danh_muc = [
            'ten_danh_muc' => $request->ten_danh_muc
        ];
        $this->danh_mucs->updateDanhMuc($danh_muc, $id);

        return redirect()->route('danhmuc.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->danh_mucs->deleteDanhMuc($id);

        // Delete the resource
        // $danh_muc->delete();

        // // Redirect with success message
        return redirect()->route('danhmuc.index');
    }
}
