<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $roles = ['admin', 'user'];

    DB::table('users')->insert([
        'Ten_tai_khoan' => Str::random(10),
        'email' => Str::random(10).'@example.com',
        'password' => Hash::make('password'),
        'so_dien_thoai' => Str::random(10),
        'role' => $roles[array_rand($roles)],
    ]);
}

}
