<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('chi_tiet_hoa_dons')->insert([
                'ten_san_pham' => Str::random(20),
                'gia' => rand(1000, 100000) / 10,
                'so_luong' => rand(1, 10),
                'tong_tien' => rand(1000, 100000) / 10,
                'anh_san_pham' => 'https://example.com/images/' . Str::random(10) . '.jpg',
                'id_san_pham' => rand(1, 10),
                'id_khuyen_mai' => rand(1, 5),
                'id_hoa_don' => rand(1, 10),
                'updated_at' => now(),
            ]);

    }
}
