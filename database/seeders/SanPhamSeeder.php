<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('san_phams')->insert([
            'ten_san_pham' => Str::random(20),
            'anh_san_pham' => 'https://example.com/images/' . Str::random(10) . '.jpg',
            'so_luong' => rand(1, 100),
            'gia' => rand(1000, 1000000) / 100,
            'mo_ta' => Str::random(50),
            'danh_mucs_id' => rand(1, 5), // Assuming you have 5 categories
        ]);
    }
}
