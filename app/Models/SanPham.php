<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;
    public function getAll(){
      $san_phams =  DB::table('san_phams')
      ->join('danh_mucs', 'san_phams.danh_mucs_id', '=', 'danh_mucs.id')
      ->select('san_phams.*', 'danh_mucs.ten_danh_muc')
      ->orderByDesc('san_phams.id')
      ->get();
      return $san_phams;
    }
}
