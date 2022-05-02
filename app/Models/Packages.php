<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
   protected $table="add_package";
   protected $fillable = [
    'subbanners'
];
public function setFilenamesAttribute($value)
{
    $this->attributes['subbanners'] = json_encode($value);
}
protected $casts=[
'PackageProducts'=>'array'
];
protected $primaryKey='package_id';
}
