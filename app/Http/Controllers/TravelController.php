<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\TravelKyc;
use App\Models\BusDetail;
class TravelController extends Controller
{
    //
    public function viewkycform()
    {
        return view('Travel/TravelKyc',["title"=>"TravelKyc"]);
    }
    public function storekycdetails()
    {
      $TravelKyc= new TravelKyc();
      $TravelKyc->ownername=request('owner_name');
      $ccc=Session::get('user_id');
      // dd($ccc);
            $TravelKyc->user_id=$ccc;
      $TravelKyc->Tagency_name=request('Tagencyname');
      $TravelKyc->landline=request('landline');
      $TravelKyc->moblieno=request('mobile_no');
      $TravelKyc->alternate_no=request('Aphone');
      $TravelKyc->licence_expiredate=request('expdate');
      // $TravelKyc->owner_photo=request('ownerphoto');
$owner_photo=request('ownerphoto');
// if($owner_photo)
// {
  $file=request('ownerphoto');
  $extension=$file->getClientOriginalExtension();
  $filename=time().'.'.$extension;
  $file->move('uploaded_images/',$filename);
  $TravelKyc->owner_photo=$filename;
  // $file=$request->product_image;
  // $extension=$file->getClientOriginalExtension();
  // $filename=time().'.'.$extension;
  // $file->move('uploaded_images/',$filename);
  // $store_product->product_photo=$filename;
// }

      // $TravelKyc->licencepic=request('licencepic');
      $licencefile=request('licencepic');
      $ext=$licencefile->getClientOriginalExtension();
      $fname=time().'.'.$ext;
      $licencefile->move('uploaded_images/',$licencefile);
      $TravelKyc->licencepic=$fname;
      $TravelKyc->pincode=request('pincode');
      $TravelKyc->locality=request('locality');
      $TravelKyc->city=request('city');
      $TravelKyc->district=request('district');
      $TravelKyc->save();
      return redirect('Travel');
    }
    public function BusDetailsform()
    {
      return view('Travel/BusDetails',["title"=>"BusDetails"]);
    }
    public function storeBusDetails()
    {
      // return "hai";
      // $owner_id=Session::get('');
      $bus_detaile=new BusDetail();
$bus_detaile->busname=request('busname');
$bus_detaile->towner_id=1;

// $att->student->stud_name
$bus_detaile->Taxi_type=request('Taxi_type');
$bus_detaile->Taxi_number=request('Taxi_number');
$bus_detaile->seating_capacity=request('seating_capacity');
// $bus_detaile->taxi_pic=request('taxi_pic');

$taxi_pic=request('taxi_pic');
$ext=$taxi_pic->getClientOriginalExtension();
$fname=time().'.'.$ext;
$taxi_pic->move('uploaded_images/',$taxi_pic);
$bus_detaile->taxi_pic=$fname;


$bus_detaile->taxi_category=request('taxi_category');
$bus_detaile->price=request('price');
$save=$bus_detaile->save();
if($save)
{
Session::put('towner_id',$bus_detaile->towner_id);
// Session::put('user_id',$userinfo->user_id);
return redirect('TravelKyc');
}
else{
  return "data not inserted";
}
// return "Forigin key de sambhavam ready alla man bakki ellam set ane";
    }
   
}
