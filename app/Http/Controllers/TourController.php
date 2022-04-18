<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TourController extends Controller
{
        public function TourView()
        {
$tourdetails=Tour::all();
// return $tourdetails;
            return view('User/TourView',["title"=>"TourView page","starting"=>"../","tourdetails"=>$tourdetails]);
        }
        //in user side display tour details
        public function TourpackageDetails($id)
        {
                $tourdetails=Tour::findOrFail($id);
                $daysdet=DB::table('tours')->join('days','days.tour_id','=','tours.tour_id')->where('days.tour_id','=',$id)->get();
        
                return view('User/TourpackageDetails',["title"=>"TourView page","starting"=>"../../","tourdetails"=>$tourdetails,"daysdets"=>$daysdet]);
   
        }
        public function TourUserInfo($id)
        {
return view("User.TourUserInfo",["title"=>"TourView page","starting"=>"../../"]);
        }
    
}
