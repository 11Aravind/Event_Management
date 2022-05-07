<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomPackage extends Model
{
    use HasFactory;
    protected $casts=[
        'PackageProducts'=>'array'
        ];
        protected $primaryKey='package_id';
}
