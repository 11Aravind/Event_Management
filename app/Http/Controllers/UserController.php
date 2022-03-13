<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;
use App\Models\Category;
use App\Models\Event;
use App\Models\Authentication;
use App\Models\TravelKyc;
use App\Models\BusDetail;
use App\Models\Cateringkyc;
use Illuminate\Support\Facades\DB;
use Session;
class UserController extends Controller
{
    //
    public function EventList()
    {
        $category=Category::where('cat_type','Event')->get();
        $event_det=Event::all();
        // return $event_det;
        return view('User/TicketBooking',["title"=>"TicketBooking page",'categorys'=>$category,"event_dets"=>$event_det]);
    }
    public function store()
    {
        $address=new address();
        $user_id=Session::get('user_id');
        $address->user_id=$user_id;
        $address->name=request('name');
        $address->mobileno=request('mobileno');
        $address->pincode=request('pincode');
        $address->locality=request('locality');
        $address->address=request('address');
        $address->city=request('city');
        $address->district=request('district');
        $address->Aphoneno=request('Aphoneno');
        $address->delivarplace=request('district');

        $address->save();
        return redirect('/BuyNow');
    }
    public function viewaddress() 
    {
        $user_id=Session::get('user_id');
        // dd($user_id);
        $addressdet=address::where('user_id','=',$user_id)->get();
        // dd($addressdet);
        return view('User/BuyNow',["addressdets"=>$addressdet,"title"=>"TicketBooking page"]);
    }
    public function Eventdetails($id)
    {
       
        $event_det=Event::findOrFail($id);
        
        return view('User/Eventdetails',["title"=>"Eventdetails page","event_det"=>$event_det]);
    }
    public function eventdynamic($event)
    {
// $routtchange=Event::where(,'=',$event)->first();
return $event;
    }
    public function Fooddisplay()
    {
$Authentication=Cateringkyc::all();
return view('User/Fooddisplay',["title"=>"Eventdetails page","Authentications"=>$Authentication]);

    }
    public function ViewTravelPage()
    {
        $TravelKycdet=TravelKyc::all();
        return view('User/TravelKycdet',["title"=>"Eventdetails page","TravelKycdets"=>$TravelKycdet]);   
    }
    public function TravelAgenctDetails($id)
    {
        $busdetails=DB::table('travelkyc')->join('bus_details','travelkyc.towner_id','=','bus_details.towner_id')
        ->where('bus_details.towner_id','=',$id)->get();
        $travelagencyname=TravelKyc::findOrFail($id);
        // return $busdetails;
        // $TravelKycdet=TravelKyc::all();
        return view('User/TravelAgenctDetails',["title"=>"TravelAgenctDetails page","busdetails"=>$busdetails,"travelagencyname"=>$travelagencyname]);  
    }
    public function SingleBusDetails($id)
    {
        $SingleBusDetails=BusDetail::findOrFail($id);
        return view('User/SingleBusDetails',["title"=>"SingleBusDetails page","SingleBusDetails"=>$SingleBusDetails]);  
    }
}

