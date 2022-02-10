<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    use HasFactory;
    protected $table='addproducts';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'category_id'
   ];
   public function category()
   {
    //    return $this->belongsTo('App\Category','category_id');
    return $this->belongsTo(Category::class,'category_id');
   }

}
