<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\TouruserInfo;
use Illuminate\Http\Request;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Illuminate\Support\Facades\DB;
use Session;
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
        public function TourpackageDetails_store(Request $request)
        {
                // dd($request);
                $amount=request("total_price");
                $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
                $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
                $orderId = $order['id']; 
                $TourpackageDetails_store=new TouruserInfo();
                $TourpackageDetails_store->user_id=Session::get("user_id");
                $TourpackageDetails_store->tour_id=request("tour_id");
                $TourpackageDetails_store->name=request("name");
                $TourpackageDetails_store->contact_no=request("contact_no");
                $TourpackageDetails_store->address=request("address");
                $TourpackageDetails_store->no_of_seat=request("no_of_seat");
                $TourpackageDetails_store->total_price=request("total_price");
                $TourpackageDetails_store->payment_id = $orderId;
                $save=$TourpackageDetails_store->save();
                if($save){
                        $msg='Data is successfuly added';
                        $color='green';
                }
                
                else{
                        $msg='Data is not added added';
                        $color='red';
                }
               
        //         $foodserving_id=$FoodservingInfo->id;
        //         $FoodservingInfo=FoodservingInfo::where('id','=',$foodserving_id)->get();
        // $foodProductdet=AddProduct::where('product_id','=',$product_id)->get();
                // $busdetails=DB::table('foodserving_infos')->join('addproducts','foodserving_infos.product_id','=','addproducts.product_id')
                // ->where('foodserving_infos.product_id','=','addproducts.product_id')->get();        
                $data = array(
                    'order_id' => $orderId,
                    'amount' => $amount,
                    'msg'=>$msg,
                    'color'=>$color
                   
                );
        
        
                return back()->with('data', $data);
                // return redirect('/BuyNow',['foodserving_id'=>$foodserving_id]); 
        // $UserEventDetails=new UserEventDetails();
          
                
        }

        public function TourpackageDetails_pay(Request $request){
                $data = $request->all();
                // dd($data);
                $user = TouruserInfo::where('payment_id', $data['razorpay_order_id'])->first();
                $user->payment_done = true;
                $user->rezorpay_id = $data['razorpay_payment_id'];
                $save=$user->save();
                if($save)
                {
                    return redirect('/OrderDetails');
                }
                else
                {
                    return redirect('/error');
                }        
            }
//         public function TourUserInfo($id)
//         {
// return view("User.TourUserInfo",["title"=>"TourView page","starting"=>"../../"]);
//         }
    
}
