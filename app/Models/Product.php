<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //  THÊM DÒNG NÀY (fix lỗi)
    protected $fillable = ['name', 'img'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orderProducts(){ //  sửa lại tên cho chuẩn
        return $this->hasMany(OrderProduct::class);
    }
}