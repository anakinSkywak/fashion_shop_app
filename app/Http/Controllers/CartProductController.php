<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartProductController extends Controller
{
    //

    public function cartProduct(){
        return view('user.shopDetail');
    }
}
