<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KhienMaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('khien_mais')->insert([
                'ma_khien_mai' => Str::random(10),
                'mo_ta_khien_mai' => Str::random(50),
                'gia_tri_khien_mai' => rand(1, 100)
            ]);

    }
}
