<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelKyc extends Model
{
    use HasFactory;
    protected $table='travelkyc';
    protected $primaryKey='towner_id';
}
