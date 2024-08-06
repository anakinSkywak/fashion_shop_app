<?php


use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\TaikhoanController;
use App\Http\Controllers\TrangchuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SoLuongController;
use App\Http\Controllers\TrangChuUserController;

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

Route::get('/',                [TrangChuUserController::class, 'index',])->name('web.home');
Route::get('/shop',            [TrangChuUserController::class, 'shop',])->name('web.shop');
Route::get('/shopDetail/{id}', [TrangChuUserController::class, 'shopDetail',])->name('web.shopDetail');
Route::get('/login',           [TrangChuUserController::class, 'login',])->name('web.login');
Route::post('/login',          [TrangChuUserController::class, 'auth'])->name('web.auth');
Route::get('/logout',          [TrangChuUserController::class, 'logout'])->name('web.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/cartProduct', [CartProductController::class, 'cartProduct'])->name('web.cartProduct');
    Route::post('/addCart',    [CartProductController::class, 'addCart'])->name('web.addCart');
    Route::post('/updateCart', [CartProductController::class, 'updateCart'])->name('web.updateCart');
});
Route::middleware('auth')->prefix('donhangs')
->as('donhangs.')
->group(function () {
    Route::get('/',            [OrderController::class, 'index'])->name('index');
    Route::get('create',       [OrderController::class, 'create'])->name('create');
    Route::post('store',       [OrderController::class, 'store'])->name('store');
    Route::get('show/{id}',    [OrderController::class, 'show'])->name('show');
    Route::get('edit/{id}',    [OrderController::class, 'edit'])->name('edit');
    Route::put('update/{id}',  [OrderController::class, 'update'])->name('update');
});

Route::prefix('admin')->group(function () {
    Route::get('/',            [SoLuongController::class, 'count'])->name('admin.home');

    Route::get('login', function () {
        return view('admin.login');
    })->name('admin.login');

    Route::post('auth',         [UserController::class, 'auth'])->name('admin.auth');
    Route::get('logout',        [UserController::class, 'logout'])->name('admin.logout');

    // Các tuyến dùng để CRUD sản phẩm
    Route::resource('sanpham',  SanphamController::class);
    Route::resource('taikhoan', UserController::class);
    Route::resource('danhmuc',  DanhMucController::class);
    Route::resource('donhang',  DonHangController::class);
});
// Route::controller(TrangchuController::class)
//     ->name('trangchu.')
//     ->prefix('user/trangchu')
//     ->group(function(){
//         Route::get('/', 'index')->name('index');
//         // Route::get('/create', 'create')->name('index');
//         // Route::post('/store', 'store')->name('store');
//         // Route::get('/{id}/edit', 'edit')->name('edit')->where('id','[0+9]+');
//         // Route::get('/{id}/update', 'update')->name('update')->where('id','[0+9]+');
//         // Route::get('/{id}/destroy', 'destroy')->name('destroy')->where('id','[0+9]+');


// });
