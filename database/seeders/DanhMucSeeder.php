<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [];

        for ($i = 0; $i < 9; $i++) {
            $records[] = [
                'ten_danh_muc' => Str::random(10),
            ];
        }

        DB::table('danh_mucs')->insert($records);
    }
}
