<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhMuc extends Model
{
    use HasFactory;

    // lấy ra tất cả danh mục
    public function getDanhMuc(){
      $danh_mucs = DB::table('danh_mucs')->orderByDesc('id')->get();

       return $danh_mucs;
       
    }
    // lấy ra 1 danh mục theo id
    public function getOneDanhMuc($id){
       $danh_muc =  DB::table('danh_mucs')->where('id', $id)->first();

       return $danh_muc;
       
    }
   //  lấy số lượng danh mục
    public function getCountDanhMuc(){
       $sl_danh_muc =  DB::table('danh_mucs')->count();

       return $sl_danh_muc;
       
    }

   //  thêm mới danh mục

   public function addDanhMuc($data){
      DB::table('danh_mucs')->insert([
         'ten_danh_muc' => $data['ten_danh_muc']
      ]);

   }


   // update danh mục

   public function updateDanhMuc($data, $id){
      DB::table('danh_mucs')->where('id', $id)->update([
         'ten_danh_muc' => $data['ten_danh_muc']
      ]);
   }

   public function deleteDanhMuc($id)
   {
      DB::table('danh_mucs')->where('id', $id)->delete();
   }
}
