<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='addproducts';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'category_id'
   ];
   public function categorydet()
   {
    //    return $this->belongsTo('App\Category','category_id');
    return $this->belongsTo(Category::class,'category_id');
    // return $this->hasMany(Category::class);
    
   }
//    public function Category()
//    {
//      return $this->hasMany(Category::class, 'category_id');
//    }

}
