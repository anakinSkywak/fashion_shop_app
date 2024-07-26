<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        return view('admin.taikhoan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [

            'Ten_tai_khoan' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'so_dien_thoai' => 'required',
            'role' => 'required'
        ]);

        // tra ve thong bao khi dang ky khong thanh cong
        if($validator->fails()){
            return redirect()->route('account.register')->withInput()->withErrors($validator);
        }

        $user = new User();

        $user->Ten_tai_khoan = $request->Ten_tai_khoan;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ;
        $user->so_dien_thoai = $request->so_dien_thoai;
        $user->role = $request->role;

        $user->save();

        return redirect()->route('taikhoan.index');

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
        $user = User::query()->where('id', $id)->first();

        return view('admin.taikhoan.update', [
            'user' => $user,
        ]
    );
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

    // hiển thị trang login admin
    public function login(){
        return view('admin.login');
    }

    // thực hiện việc đăng nhập
    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.login')->withInput()->withErrors($validator);
        }
dd(Auth::attempt());
        if(Auth::attempt(['email' => $request->email , 'password' => $request->password])) {
            return redirect()->route('admin.home');
        }
        else{
            return redirect()->route('admin.login')->with('error', 'Đăng nhập thất bại');
        }     
    }

    // thực hiện logout
    public function logout() {
        Auth::logout();
        return redirect()->route('account.login');
    }


}
