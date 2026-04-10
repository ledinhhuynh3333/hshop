<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'img' => $request->img
        ]);

        return "Thêm thành công";
    }
}