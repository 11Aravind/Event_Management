<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    protected $table='employs';
    protected $primaryKey='employ_id';
    use HasFactory;
}
