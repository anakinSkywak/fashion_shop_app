<?php

use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\SanphamController;
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


// Route::get('/', function () {
//     return view('welcome');
// })->name('admin.home');
// Route::prefix('admin')
   
//     ->group(function () {
        // Route::prefix('danhmuc')
        //     ->as('danhmuc.')
        //     ->group(function () {
        //         Route::get('/', [DanhMucController::class, 'index'])->name('index');
        //         Route::get('create', [DanhMucController::class, 'create'])->name('create');
        //         Route::post('store', [DanhMucController::class, 'store'])->name('store');
        //         Route::get('show/{id}', [DanhMucController::class, 'show'])->name('show');
        //         Route::get('{id}/edit', [DanhMucController::class, 'edit'])->name('edit');
        //         Route::put('{id}/update', [DanhMucController::class, 'update'])->name('update');
        //         Route::get('{id}/destroy', [DanhMucController::class, 'destroy'])->name('destroy');
            // });
//       Route::resource('sanpham', SanphamController::class);
//       Route::resource('danhmuc', DanhMucController::class);
//       Route::get('/', function () {
//         return view('admin.index');
//     })->name('admin.home');
//     });
 
// });

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');
    
    // Route này dùng để CRUD sanpham
    Route::resource('sanpham', SanphamController::class);
    Route::resource('danhmuc', DanhMucController::class);
});



