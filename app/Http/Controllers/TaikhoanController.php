<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaikhoanController extends Controller
{

    public $tai_khoans;

    public function __construct()
    {
        $this->tai_khoans = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tai_khoans = $this->tai_khoans->all();
        $tai_khoans = User::paginate(10);

        return view('admin.taikhoan.index', [
            'tai_khoans' => $tai_khoans
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
