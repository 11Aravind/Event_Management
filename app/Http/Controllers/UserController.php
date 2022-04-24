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
use App\Models\AddProduct;
use App\Models\UserEventDetails;
use App\Models\FoodservingInfo;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

use Session;
class UserController extends Controller
{
    //
    public function EventList()
    {
        $category=Category::where('cat_type','Event')->get();
        $event_det=Event::all();
        // return $event_det;
        return view('User/TicketBooking',["title"=>"TicketBooking page","starting"=>"../",'categorys'=>$category,"event_dets"=>$event_det]);
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
        $starting ="../";
        return view('User/BuyNow',["addressdets"=>$addressdet,"starting"=>$starting,"title"=>"TicketBooking page"]);
    }
    public function Eventdetails($id)
    {
       
        $event_det=Event::findOrFail($id);
        return view('User/Eventdetails',["title"=>"Eventdetails page","starting"=>"../","event_det"=>$event_det]);
    }
    public function eventdynamic($event)
    {
// $routtchange=Event::where(,'=',$event)->first();
return $event;
    }
    public function Fooddisplay()
    {
$Cateringkyc=Cateringkyc::where('status','=','1')->get();
$starting="";
return view('User/Fooddisplay',["title"=>"Eventdetails page","starting"=>$starting,"Cateringkycs"=>$Cateringkyc]);

    }
    public function ViewTravelPage()
    {
        $TravelKycdet=TravelKyc::all();
        return view('User/TravelKycdet',["title"=>"Eventdetails page","starting"=>"../","TravelKycdets"=>$TravelKycdet]);   
    }
    public function TravelAgenctDetails($id)
    {
        $busdetails=DB::table('travelkyc')->join('bus_details','travelkyc.towner_id','=','bus_details.towner_id')
        ->where('bus_details.towner_id','=',$id)->get();
        $travelagencyname=TravelKyc::findOrFail($id);
        // return $busdetails;
        // $TravelKycdet=TravelKyc::all();
        return view('User/TravelAgenctDetails',["title"=>"TravelAgenctDetails page","starting"=>"../","busdetails"=>$busdetails,"travelagencyname"=>$travelagencyname]);  
    }
    public function SingleBusDetails($id)
    {
        $SingleBusDetails=BusDetail::findOrFail($id);
        return view('User/SingleBusDetails',["title"=>"SingleBusDetails page","SingleBusDetails"=>$SingleBusDetails]);  
    }
    public function FoodCategoryDetails($FoodCategoryDetails,$id)
    {
        // $foodproductdet=AddProduct::where('category_id','=',$id)->get();//venda bad logic
        $categorydet=Category::where('user_id','=',$id)->get();
        $FoodCategoryDetails=$FoodCategoryDetails;
        $starting="../../";
// join start
$foodproductdet=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
->where('categorys.user_id','=',$id)->get();
// join end

        // $Cateringkyc=Cateringkyc::findOrFail($Catering_id);
        return view('User/FoodCategoryDetails',["title"=>"FoodCategoryDetails page","starting"=>$starting,"FoodCategoryDetails"=>$FoodCategoryDetails,
        "foodproductdets"=>$foodproductdet,"categorydets"=>$categorydet]);  
   
    }
    public function FoodProductDetails($FoodCategoryDetails,$id,$user_id)
    {
        $foodproductdet=AddProduct::where('category_id','=',$id)->get();
        $categorydet=Category::where('user_id','=',$user_id)->get();//venda bad logic
        // return view('User/FoodProductDetails',["title"=>"FoodProductDetails page","foodproductdets"=>$foodproductdet]);  
        // FoodCategoryDetails
        $starting="../../../";
return view('User/FoodCategoryDetails',["title"=>"FoodCategoryDetails page","starting"=>$starting,"FoodCategoryDetails"=>$FoodCategoryDetails,"categorydets"=>$categorydet,"foodproductdets"=>$foodproductdet]);  

    }
    // public function SingleProductdetails($id)
    // {
    //     $SingleProductdetails=AddProduct::where('product_id','=',$id)->get();
    //     return view('User/SingleProductdetails',["title"=>"SingleProductdetails page","SingleProductdetails"=>$SingleProductdetails]);  
        
    // }
    public function AddUserFooddet($id)
    {
        $SingleProductdetails=AddProduct::where('product_id','=',$id)->get();
        return view('User/AddUserFooddet',["title"=>"SingleProductdetails page","starting"=>"../","SingleProductdetails"=>$SingleProductdetails]);
    }
    public function AddUserFooddet_store()
    {
       $amount=request('Totalprice');
        $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
        $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
        $orderId = $order['id']; 
       
        $FoodservingInfo=new FoodservingInfo();
 
        $FoodservingInfo->product_id=request('product_id');
        $FoodservingInfo->dateOfEvent=request('dateOfEvent');
        $FoodservingInfo->EventLocation=request('EventLocation');
        $FoodservingInfo->ServingStartingtime=request('ServingStartingtime');
        $FoodservingInfo->Servingendingtime=request('Servingendingtime');
        $FoodservingInfo->servingtype=request('servingtype');
        $FoodservingInfo->noOfGust=request('noOfGust');
        $FoodservingInfo->noofemploy=request('noofemploy');
        $FoodservingInfo->Totalprice=request('Totalprice');
        $FoodservingInfo->payment_id = $orderId;
        $FoodservingInfo->save();
        $foodserving_id=$FoodservingInfo->foodserving_infos;

        $data = array(
            'order_id' => $orderId,
            'amount' => $amount
        );
        return redirect('/foodproductSummary')->with('data', $data,'foodserving_id',$foodserving_id);
        // return redirect('/BuyNow',['foodserving_id'=>$foodserving_id]); 
// $UserEventDetails=new UserEventDetails();

    }
    public function addeventbookdet()
    {
        return view('User/addeventbookdet',["starting"=>"../"]);
    }
    public function singleEmployDet($id)
    {
    return view("User/singleEmployDet");
    }
    public function CardPage()
    {
        return view('User/CartPage');
    }
    public function RegisterComplaints()
    {
        return view('User/RegisterComplaints',["starting"=>"../"]);
    }
    public function store_RegisterComplaints(Request $request)
    {
        $fileComplaint=new Complaint();
        $fileComplaint->user_id=Session::get('user_id');
        // $fileComplaint->subject=request('subject');

        $file=$request->subject;
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploaded_images/',$filename);
        $$fileComplaint->subject=$filename;

        $fileComplaint->proof=$request->proof;
        $fileComplaint->complaint=$request->complaint;
        $save=$fileComplaint->save();
        return('complaint is successfully sended"');
    }
}

