<?php

namespace App\Providers;

use App\Models\SanPham;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        // chuyển Sản phẩm đổ ra shop thành biến toàn cục sử dụng AppServiceProvider
        view()->composer('user.shop', function ($view) {
            $san_phams = SanPham::orderBy('id', 'desc')->paginate(8);
            $view->with('san_phams', $san_phams);
        });
        // chuyển Sản phẩm đổ ra sản phẩm liên quan của chi tiết sản phẩm thành biến toàn cục sử dụng AppServiceProvider
        view()->composer('user.shopDetail', function ($view) {
            if ($view->getData()['san_pham']) {
                $san_pham = $view->getData()['san_pham'];
                $listSanPham = SanPham::where('danh_mucs_id', $san_pham->danh_mucs_id)
                                          ->where('id', '!=', $san_pham->id)
                                          ->take(4)
                                          ->get();
                $view->with([
                    'san_phams' => $listSanPham,
                ]);
            }
        });

    }
}
