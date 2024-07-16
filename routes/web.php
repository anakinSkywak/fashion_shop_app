<?php

use App\Http\Controllers\SanphamController;
use App\Http\Controllers\TaikhoanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');
    
    // Route này dùng để CRUD sanpham
    Route::resource('sanpham', SanphamController::class);
    Route::resource('taikhoan', TaikhoanController::class);
});


