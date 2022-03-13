<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusDetail extends Model
{
    use HasFactory;
    protected $table='bus_details';
    protected $primaryKey = 'bus_id';
    protected $fillable = [
        'towner_id '
   ];
   public function travelkyc()
   {
    //    return $this->belongsTo('App\Category','category_id');
    return $this->belongsTo(TravelKyc::class,'towner_id ');
   }
  
}
