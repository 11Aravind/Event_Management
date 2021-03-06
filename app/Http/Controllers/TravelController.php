<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\TravelKyc;
use App\Models\BusDetail;
use App\Models\BusBookingDetails;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\FoodservingInfo;
use Monolog\SignalHandler;
use Razorpay\Api\Api;

use Razorpay\Api\Errors\SignatureVerificationError;

class TravelController extends Controller
{
    //
    public function viewkycform()
    {
        return view('Travel/TravelKyc',["title"=>"TravelKyc"]);
    }
    public function storekycdetails(Request $request)
    {
      $TravelKyc= new TravelKyc();
      $TravelKyc->ownername=request('owner_name');
      $ccc=Session::get('user_id');
      // dd($ccc);
            $TravelKyc->user_id=$ccc;
      $TravelKyc->Tagency_name=request('Tagencyname');
      $TravelKyc->landline=request('landline');
      $TravelKyc->moblieno=request('mobile_no');
      // $TravelKyc->alternate_no=request('Aphone');

      
          // $files=request('Aphone');
          // $extensions=$files->getClientOriginalExtension();
          // $filenames=time().'.'.$extensions;
          // $files->move('uploaded_images/',$filenames);
          // $TravelKyc->alternate_no=$filenames;
  
          $new_Aphone=$request->file('Aphone')->getClientOriginalName();
          $request->Aphone->move(public_path('uploaded_images/'),$new_Aphone);
          $TravelKyc->alternate_no=$new_Aphone;


      $TravelKyc->licence_expiredate=request('expdate');
      // $TravelKyc->owner_photo=request('ownerphoto');
// $owner_photo=request('ownerphoto');
// if($owner_photo)
// {
  // $file=request('ownerphoto');
  // $extension=$file->getClientOriginalExtension();
  // $filename=time().'.'.$extension;
  // $file->move('uploaded_images/',$filename);
  // $TravelKyc->owner_photo=$filename;

  $new_ownerphoto=$request->file('ownerphoto')->getClientOriginalName();
          $request->ownerphoto->move(public_path('uploaded_images/'),$new_ownerphoto);
          $TravelKyc->owner_photo=$new_ownerphoto;

       // $TravelKyc->licencepic=request('licencepic');
      // $licencefile=request('licencepic');
      // $ext=$licencefile->getClientOriginalExtension();
      // $fname=time().'.'.$ext;
      // $licencefile->move('uploaded_images/',$licencefile);
      // $TravelKyc->licencepic=$fname;
      $new_licencepic=$request->file('licencepic')->getClientOriginalName();
      $request->licencepic->move(public_path('uploaded_images/'),$new_licencepic);
      $TravelKyc->licencepic=$new_licencepic;
      
      $TravelKyc->pincode=request('pincode');
      $TravelKyc->locality=request('locality');
      $TravelKyc->city=request('city');
      $TravelKyc->district=request('district');
      $save=$TravelKyc->save();
      $towner_id=$TravelKyc->towner_id;
Session::put('towner_id');
      if($save)
      {
        Session::put('towner_id',$TravelKyc->towner_id);
        return redirect('Travel')->with('successmsg','Your TravelKyc is successfully submited');
      }
      else
      return redirect('Travel')->with('errormsg','Travel Kyc Not Submitted,Something Went Wrong Please Try Again');
      
     
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
$user_id=Session::get('user_id');

$TravelKyc=TravelKyc::where('user_id',$user_id)->first();
$owner_id=$TravelKyc->towner_id;
$bus_detaile->towner_id=$owner_id;


$bus_detaile->towner_id=$owner_id;
// $att->student->stud_name
$bus_detaile->Taxi_type=request('Taxi_type');
$bus_detaile->Taxi_number=request('Taxi_number');
$bus_detaile->seating_capacity=request('seating_capacity');
// $bus_detaile->taxi_pic=request('taxi_pic');
$taxi_pic=request('taxi_pic');
$ext=$taxi_pic->getClientOriginalExtension();
$fname=time().'.'.$ext;
$taxi_pic->move('uploaded_images/',$fname);
$bus_detaile->taxi_pic=$fname;
$bus_detaile->taxi_category=request('taxi_category');
$bus_detaile->price=request('price');
$save=$bus_detaile->save();
if($save)
{
Session::put('towner_id',$bus_detaile->towner_id);
// Session::put('user_id',$userinfo->user_id);
return redirect('Businfo');
}
else{
  return "data not inserted";
}
// return "Forigin key de sambhavam ready alla man bakki ellam set ane";
    }
    public function Businfo()
    {
      // -----
      $user_id=Session::get('user_id');
        $busdetails=DB::table('travelkyc')->join('bus_details','travelkyc.towner_id','=','bus_details.towner_id')
        ->where('travelkyc.user_id',$user_id)->get();
      // --------
      // $busdetails=BusDetail::all();

      return view('Travel/Display_busdetails',["busdetailss"=>$busdetails,"title"=>"bus datailes page"]);
    }
   public function busbooking_form($towner_id,$bus_id)
   {
   $BusDetail=BusDetail::where('bus_id','=',$bus_id)->first();
    return view('User/busbooking_form',["title"=>"bus datailes page","towner_id"=>$towner_id,"bus_id"=>$bus_id,"BusDetail"=>$BusDetail,"starting"=>"../../"]);

   }
   public function busbookingdet_store()
   {
    $amount=request('totelprice');
    $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
    $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
    $orderId = $order['id']; 
    // 
    $BusBookingDetails=new BusBookingDetails();
    // $towner_id =request('towner_id');
    // $bus_id =request('bus_id ');

$BusBookingDetails->name=request('name');
$BusBookingDetails->contact=request('contact_no');
$BusBookingDetails->email=request('email');
    $BusBookingDetails->user_id =Session::get('user_id');
    $BusBookingDetails->towner_id =request('towner_id');
    $BusBookingDetails->bus_id =request('bus_id');
    $BusBookingDetails->dateOfEvent=request('dateOfEvent');

    $BusBookingDetails->time=request('time');
    $BusBookingDetails->startingplace=request('startingplace');
    $BusBookingDetails->arrivalplace=request('arrivalplace');
    $BusBookingDetails->kolometers=request('kolometers');
    $BusBookingDetails->totelprice=$amount;
    $BusBookingDetails->payment_id = $orderId;
    $save=$BusBookingDetails->save();
//     $BusBookingDetails=$FoodservingInfo->id;
//     $FoodservingInfo=FoodservingInfo::where('id','=',$foodserving_id)->get();
// $foodProductdet=AddProduct::where('product_id','=',$product_id)->get();
if($save){
  $msg='Data is successfuly added';
  $color='green';
}
else{
  $msg='Data is not added added';
  $color='red';
}  
    $data = array(
        'order_id' => $orderId,
        'amount' => $amount,
        'msg'=>$msg,
        'color'=>$color
    );
    // return redirect('/BusbookingSummary')->with('data', $data);
    return back()->with('data', $data);

   }
   public function BusbookingSummary()
   {
    return view('Layout/product_summary',['starting'=>"../"]);
   }
   public function bookpay(Request $request)
   {
    $data = $request->all();
    // dd($data);
    $user = BusBookingDetails::where('payment_id', $data['razorpay_order_id'])->first();
    $user->payment_done = true;
    $user->rezorpay_id = $data['razorpay_payment_id'];
    $save=$user->save();
    if($save)
        return redirect('/OrderDetails');
    else
        return view('/error');
}
// Travel
public function Travel()
{
    $user_id=Session::get('user_id');
    $registered=TravelKyc::where('user_id',$user_id)->get();
    Session::put('registered',$registered);
    // return view('Food/Fooddashbord',["title"=>"Food Dashbord"]);
    return view('Travel/KycForm',["title"=>"Travel Agency_dashbord"]);
}
public function UpdateBus($id)
{
  $busdetails=BusDetail::findOrFail($id);  
    // $getcategorys=Category::all();
    return view('Travel/UpdateForm',["busdetails"=>$busdetails,"title"=>"Update Bus details"]);
}
public function UpdateBus_store($id)
{
  $bus_detaile=BusDetail::findOrFail($id);
  $bus_detaile->busname=request('busname');
  $owner_id=Session::get('towner_id');
  
  $user_id=Session::get('user_id');
  $TravelKyc=TravelKyc::where('user_id',$user_id)->first();
  $owner_id=$TravelKyc->towner_id;
  $bus_detaile->towner_id=$owner_id;

  $bus_detaile->Taxi_type=request('Taxi_type');
  $bus_detaile->Taxi_number=request('Taxi_number');
  $bus_detaile->seating_capacity=request('seating_capacity');
  
  $taxi_pic=request('taxi_pic');
  $ext=$taxi_pic->getClientOriginalExtension();
  $fname=time().'.'.$ext;
  $taxi_pic->move('uploaded_images/',$fname);
  $bus_detaile->taxi_pic=$fname;
  $bus_detaile->taxi_category=request('taxi_category');
  $bus_detaile->price=request('price');
  $save=$bus_detaile->save();
  if($save)
  {
  Session::put('towner_id',$bus_detaile->towner_id);
  return redirect('Businfo');
  }
  else{
    return "data not inserted";
  }
}
public function BusBooking_details()
{
  // $BusBookingDetails=BusBookingDetails::all();
  $busdetails=DB::table('travelkyc')->join('bus_booking_details','travelkyc.towner_id','=','bus_booking_details.towner_id')->get();
        
// return $busdetails;
  return view('Travel.BusBooking_details',['title'=>"bus booking details",'BusBookingDetails'=>$busdetails,'busdetails'=>$busdetails]);
  
}
}
