<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;
    // lấy nhiều dữ liệu trong bảng san_phams
    public function getAll(){
      $san_phams = DB::table('san_phams')
        ->join('danh_mucs', 'san_phams.danh_mucs_id', '=', 'danh_mucs.id')
        ->select('san_phams.*', 'danh_mucs.ten_danh_muc')
        ->orderByDesc('san_phams.id')
        ->get();
  
      return $san_phams;
  }
  

    // tạo sản phẩm
    public function createSanPham($data){
       DB::table('san_phams')->insert([
        'ten_san_pham' => $data['ten_san_pham'],
        'so_luong' => $data['so_luong'],
        'gia' => $data['gia'],
        'mo_ta' => $data['mo_ta'],
        'danh_mucs_id' => $data['danh_mucs_id'],
        'anh_san_pham' => $data['anh_san_pham'],
       ]);
    }

    // cập nhật sản phẩm
    public function updateSanPham($data, $id){
       DB::table('san_phams')
       ->where('id', $id)
       ->update([
        'ten_san_pham' => $data['ten_san_pham'],
        'so_luong' => $data['so_luong'],
        'gia' => $data['gia'],
        'mo_ta' => $data['mo_ta'],
        'danh_mucs_id' => $data['danh_mucs_id'],
        'anh_san_pham' => $data['anh_san_pham'],
       ]);
    }

    //  lấy số lượng sản phẩm
    public function getCountSanPham(){
      $sl_san_pham =  DB::table('san_phams')->count();

      return $sl_san_pham;
      
   }




}
