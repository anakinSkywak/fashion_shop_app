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
       $danh_mucs =  DB::table('danh_mucs')->get();

       return $danh_mucs;
       
    }
    // lấy ra 1 danh mục theo id
    public function getOneDanhMuc($id){
       $danh_muc =  DB::table('danh_mucs')->where('id', $id);

       return $danh_muc;
       
    }
}
