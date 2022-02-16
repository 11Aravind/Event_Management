<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\TravelKyc;
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
   
}
