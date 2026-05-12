<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $productList = Product::all();
        $data = array(
            'productList' => $productList
        );
        return view ('home', $data);
    }
}
