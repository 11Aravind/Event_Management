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
use App\Models\TouruserInfo;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\BusBookingDetails;
use App\Models\Tour;
use App\Models\PackageBookInfo;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Session;
class UserController extends Controller
{
    //
    public function EventList()
    {
        // $category=Category::where('cat_type','Event')->get();
        $event_det=Event::all();
        // return $event_det;
        return view('User/TicketBooking',["title"=>"TicketBooking page","starting"=>"../","event_dets"=>$event_det]);
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
public function Eventdetails_store($id)
{
//hihi
$amount=request('totalamount');
    $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
    $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
    $orderId = $order['id']; 
    $UserEventDetails=new UserEventDetails();
    $UserEventDetails->user_id =Session::get('user_id');

    $UserEventDetails->event_id =request('event_id');
    $event_id=request('event_id');
    $UserEventDetails->noofseat =request('noofseat');
    $UserEventDetails->totalamount=request('totalamount');
    $UserEventDetails->payment_id = $orderId;
    $UserEventDetails->save();
    $data = array(
        'order_id' => $orderId,
        'amount' => $amount,
    );
    return back()->with('data', $data);

}
public function payEvent(Request $request)
   {
    $data = $request->all();
    // dd($data);
    $user = UserEventDetails::where('payment_id', $data['razorpay_order_id'])->first();
    $user->payment_done = true;
    $user->rezorpay_id = $data['razorpay_payment_id'];
    $save=$user->save();
    if($save)
        return redirect('/success');
    else
        return view('/error');
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
        return view('User/SingleBusDetails',["title"=>"SingleBusDetails page","starting"=>"../","SingleBusDetails"=>$SingleBusDetails]);  
    }
    public function FoodCategoryDetails($FoodCategoryDetails,$id)
    {
        $Catering_user_id=$id;//catering karude id ane
        // $foodproductdet=AddProduct::where('category_id','=',$id)->get();//venda bad logic
        $categorydet=Category::where('user_id','=',$id)->get();
        $FoodCategoryDetails=$FoodCategoryDetails;
        $starting="../../";
// join start
$foodproductdet=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
->where([
    ['categorys.user_id','=',$id],
    ['addproducts.status', '1']
])->get();


// join end

        // $Cateringkyc=Cateringkyc::findOrFail($Catering_id);
        return view('User/FoodCategoryDetails',["title"=>"FoodCategoryDetails page","starting"=>$starting,
        "FoodCategoryDetails"=>$FoodCategoryDetails,
        "foodproductdets"=>$foodproductdet,"categorydets"=>$categorydet,'Catering_user_id'=>$Catering_user_id]);  
    }
    public function FoodProductDetails($FoodCategoryDetails,$id,$user_id)
    {
        $foodproductdet=AddProduct::where([
            ['category_id','=',$id],
            ['status', '1']
        ])->get();
        
        $categorydet=Category::where('user_id','=',$user_id)->get();//venda bad logic
        // return view('User/FoodProductDetails',["title"=>"FoodProductDetails page","foodproductdets"=>$foodproductdet]);  
        // FoodCategoryDetails
        $starting="../../../";
return view('User/FoodCategoryDetails',["title"=>"FoodCategoryDetails page","starting"=>$starting,'Catering_user_id'=>$user_id,"FoodCategoryDetails"=>$FoodCategoryDetails,"categorydets"=>$categorydet,"foodproductdets"=>$foodproductdet]);  

    }
    // public function SingleProductdetails($id)
    // {
    //     $SingleProductdetails=AddProduct::where('product_id','=',$id)->get();
    //     return view('User/SingleProductdetails',["title"=>"SingleProductdetails page","SingleProductdetails"=>$SingleProductdetails]);  
        
    // }
    public function AddUserFooddet($id,$Catering_user_id)
    {
        $SingleProductdetails=AddProduct::where('product_id','=',$id)->get();
        $Catering_user_id=$Catering_user_id;
        return view('User/AddUserFooddet',["title"=>"SingleProductdetails page","starting"=>"../../","SingleProductdetails"=>$SingleProductdetails,'Catering_user_id'=>$Catering_user_id]);
    }
    public function AddUserFooddet_store()
    {
       $amount=request('Totalprice');
        $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
        $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
        $orderId = $order['id']; 
        // 
        $FoodservingInfo=new FoodservingInfo();
        $product_id=request('product_id');
        
        $FoodservingInfo->user_id=request('Catering_user_id');
$FoodservingInfo->customer_id=Session::get('user_id');
        // $FoodservingInfo->user_id=Session::get('user_id');
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
        $foodserving_id=$FoodservingInfo->id;
        $FoodservingInfo=FoodservingInfo::where('id','=',$foodserving_id)->get();
$foodProductdet=AddProduct::where('product_id','=',$product_id)->get();
        // $busdetails=DB::table('foodserving_infos')->join('addproducts','foodserving_infos.product_id','=','addproducts.product_id')
        // ->where('foodserving_infos.product_id','=','addproducts.product_id')->get();



        $data = array(
            'order_id' => $orderId,
            'amount' => $amount,
            'FoodservingInfo'=>$FoodservingInfo,
            'foodProductdet'=>$foodProductdet
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
        return view('User/CartPage',["starting"=>"../"]);
    }
    public function RegisterComplaints()
    {
        return view('User/RegisterComplaints',["starting"=>"../"]);
    }
    public function store_RegisterComplaints(Request $request)
    {
        $fileComplaint=new Complaint();
        $fileComplaint->user_id=Session::get('user_id');
        $fileComplaint->subject=request('subject');

        $file=$request->proof;
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploaded_images/',$filename);
        $fileComplaint->subject=$filename;

        $fileComplaint->proof=$request->proof;
        $fileComplaint->complaint=$request->complaint;
        $save=$fileComplaint->save();
        return "<script>alert('complaint is successfully sended')</script>";
    }
    public function OrderDetails()
    {
        $user_id=Session::get('user_id');
        // tour details start 
        $TouruserInfo=TouruserInfo::where('user_id',$user_id)->get();
        if(!$TouruserInfo->isEmpty())
        {
        foreach($TouruserInfo as $TouruserInfo)
        {
          $tour_id= $TouruserInfo->tour_id;
        }
        $tourorderdetails=DB::table('tours')->join('touruser_infos','tours.tour_id','=','touruser_infos.tour_id')
        ->where('tours.tour_id','=',$tour_id)->get();
        }
        else 
        // $tourorderdetails=[];
        $tourorderdetails=collect(new TouruserInfo);
          // tour details end 
      
        //event details start
        $UserEventDetails=UserEventDetails::where('user_id',$user_id)->get();
        if(!$UserEventDetails->isEmpty())
        {
        foreach($UserEventDetails as $UserEventDetails)
        {
          $event_id= $UserEventDetails->event_id;
        }
        $eventorderdetails=DB::table('events')->join('user__event_dets','events.event_id','=','user__event_dets.event_id')
        ->where('events.event_id','=',$event_id)->get();
    }
    else
    // $eventorderdetails=[];collect(new Post)
    $eventorderdetails = collect(new UserEventDetails);
        //event details end
        //travel agency start
        $BusBookingDetails=BusBookingDetails::where('user_id',$user_id)->get();
        if(!$BusBookingDetails->isEmpty())
        {
        foreach($BusBookingDetails as $BusBookingDetails)
        {
          $bus_id= $BusBookingDetails->bus_id;
        }
        $BusBookingDetails=DB::table('bus_details')->join('bus_booking_details','bus_details.bus_id','=','bus_booking_details.bus_id')
        ->where('bus_details.bus_id','=',$bus_id)->get();
    }
    else
    // $BusBookingDetails=[];collect(new Post)
    $BusBookingDetails=collect(new BusBookingDetails);
        //travel agency end
        // package booking start 
        $PackageBookInfo=PackageBookInfo::where('user_id',$user_id)->get();
        if(!$PackageBookInfo->isEmpty())
        {
        foreach($PackageBookInfo as $PackageBookInfo)
        {
          $package_id= $PackageBookInfo->package_id;
        }
        $PackageBookInfo=DB::table('add_package')->join('package_book_infos','add_package.package_id','=','package_book_infos.package_id')
        ->where('add_package.package_id','=',$package_id)->get();
    }
    else
    // $PackageBookInfo=[];collect(new Post)
    $PackageBookInfo=collect(new PackageBookInfo);
        // package booking end 
        //FoodservingInfo start
        $FoodservingInfo=FoodservingInfo::where('customer_id',$user_id)->get();
        if(!$FoodservingInfo->isEmpty())
        {
        foreach($FoodservingInfo as $FoodservingInfo)
        {
          $product_id= $FoodservingInfo->product_id;
        }
        $FoodservingInfo=DB::table('addproducts')->join('foodserving_infos','addproducts.product_id','=','foodserving_infos.product_id')
        ->where('addproducts.product_id','=',$product_id)->get();
    }
    else
    // $FoodservingInfo=[];collect(new Post)
    $FoodservingInfo=collect(new FoodservingInfo);
        // FoodservingInfo end 
        return view('User/OrderDetails',["starting"=>"../",'tourorderdetails'=>$tourorderdetails,'eventorderdetails'=>$eventorderdetails,
    'BusBookingDetails'=>$BusBookingDetails,'PackageBookInfo'=>$PackageBookInfo,'FoodservingInfo'=>$FoodservingInfo]); 

    
    }
    public function Ticketlayout($event_id,$noofseat)
    {
       $Event=Event::findOrFail($event_id); 
       
       
        return view('Layout/Ticketlayout',['Event'=>$Event,'noofseat'=>$noofseat]);
    }
}



