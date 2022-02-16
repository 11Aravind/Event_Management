<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;
use Session;
class UserController extends Controller
{
    //
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
        // $address->delivarplace=request('delivarplace');

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
}
