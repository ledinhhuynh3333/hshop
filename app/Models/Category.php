<?php

namespace App\Models;


use finfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    // protected $table = 'danh muc';
// protected $timestmaps = false;
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
