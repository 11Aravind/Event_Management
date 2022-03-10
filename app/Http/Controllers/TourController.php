<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
        public function TourView()
        {
$tourdetails=Tour::all();
// return $tourdetails;
            return view('User/TourView',["title"=>"TourView page","tourdetails"=>$tourdetails]);
        }
    
}
