<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $index) {
            DB::table('hoa_dons')->insert([
                'ten_khach_hang' => Str::random(10) . ' ' . Str::random(5),
                'ngay_mua' => now()->subDays(rand(1, 30)), // Random date within the last 30 days
                'dia_chi' => Str::random(30),
                'sdt' => '0' . rand(100000000, 999999999), // Random phone number
                'email' => Str::random(5) . '@example.com',
                'tong_tien' => rand(1000, 1000000) / 100,
                'trang_thai' => $index % 2 == 0 ? 'Đã thanh toán' : 'Chưa thanh toán',
                'id_khach_hang' => rand(1, 10), // Adjust based on your user IDs
                'id_khuyen_mai' => rand(1, 5), // Adjust based on your khuyen mai IDs
            ]);
        }
    }
}
