<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'categorys';
    // protected $table='addproducts';
    protected $primaryKey = 'category_id';
    public function AddProduct()
  {
    return $this->hasMany(AddProduct::class, 'category_id');
  }
}
