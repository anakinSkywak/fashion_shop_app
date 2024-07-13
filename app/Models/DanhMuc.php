<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhMuc extends Model
{
    use HasFactory;

    public function getDanhMuc(){
       $danh_mucs =  DB::table('danh_mucs')->get();

       return $danh_mucs;
       
    }
}
