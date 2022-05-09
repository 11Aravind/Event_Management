<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\Packages;
use App\Models\BusDetail;
use App\Models\Tour;
use App\Models\Day;
use App\Models\CustomPackage;
use App\Models\PackageBookInfo;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Session;
use Illuminate\Support\Facades\DB;
class PackageController extends Controller
{
    
    public function showpackageproduct()
    {
// $busdetailsproductdetails=AddProduct::all();
$busdetailsproductdetails=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where('categorys.cat_type','=','Product')->get();
        return view('Admin/Add_Package',["busdetailsproductdetails"=>$busdetailsproductdetails,'title'=>'Add PackagePage']);
    }
    public function updatePackage($id)
    {
        $Packages=Packages::findOrFail($id);
        $busdetailsproductdetails=AddProduct::all();
        return view('Admin/Update_Package',["busdetailsproductdetails"=>$busdetailsproductdetails,'Packages'=>$Packages,'title'=>'Add PackagePage']);

    }
    public function custompackage_store()
    {
        $amount=request('totalamount');
        $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
        $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
        $orderId = $order['id']; 
        $package=new CustomPackage();
        $package->user_id=Session::get('user_id');
     $package->name=request('name');
     $package->address=request('address');
     $package->contactno=request('contactno');
        $package->package_use=request('packageuse');
        $package->total_amount=request('totalamount');
        $package->discription=request('discription');
        $package->PackageProducts=request('packageProduct');
        $package->payment_id = $orderId;
         $save=$package->save();
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
    return back()->with('data', $data); 
    }
    public function payCusome(Request $request)
    {
     $data = $request->all();
     // dd($data);
     $user = CustomPackage::where('payment_id', $data['razorpay_order_id'])->first();
     $user->payment_done = true;
     $user->rezorpay_id = $data['razorpay_payment_id'];
     $save=$user->save();
     if($save)
         return redirect('/OrderDetails');
     else
         return view('/error');
 }
    public function addpackageproduct(Request $request)
    {
        $package=new Packages();
        $package->package_use=request('packageuse');
        $package->rent_amount=request('rentamount');

        $file=request('img');
        if($file){
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images/',$filename);
            $package->package_image=$filename;
                 }
        $package->total_amount=request('totalamount');

        $package->type=request('type');
        $package->discription=request('discription');
        $package->PackageProducts=request('packageProduct');
        
        $files = [];
        if($request->hasfile('subbanners'))
         {
            foreach($request->file('subbanners') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
         $package->subbanners = json_encode($files);
         $save=$package->save();
         if($save)
         return redirect('ViewAdminPackage');
        
    }
    public function updatePackage_store($package_id,Request $request)
    {
        $package=Packages::findOrFail($package_id);
        $package->package_use=request('packageuse');
        $package->rent_amount=request('rentamount');

        $file=request('img');
        if($file){
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images/',$filename);
            $package->package_image=$filename;
                 }
        $package->total_amount=request('totalamount');

        $package->type=request('type');
        $package->discription=request('discription');
        $package->PackageProducts=request('packageProduct');
        
        $files = [];
        if($request->hasfile('subbanners'))
         {
            foreach($request->file('subbanners') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
         $package->subbanners = json_encode($files);
         $save=$package->save();
         if($save)
         return redirect('/ViewAdminPackage');   
    }
    public function ViewPackage()
    {
        $packagedetails=Packages::all();
        return view('Admin/Packagedetails',["title"=>"packagedetails page","packagedetails"=>$packagedetails]);
    }
    public function Premium()
    {
     
       
        $Premium=Packages::where([
            ['type','=','Premium'],
            ['status','=','1']
        ])->get();
        return view('Layout/PackageLayout',["title"=>"Premium Package Page","starting"=>"../","Premiums"=>$Premium,"type"=>"Premium"]);
    }
    public function Medium()
    {
       
        $Medium=Packages::where([
            ['type','=','Medium'],
            ['status','=','1']
        ])->get();
        return view('Layout/PackageLayout',["title"=>"Medium Package Page","starting"=>"../","Premiums"=>$Medium,"type"=>"Medium"]);
    }
    public function Regular()
    {
        
        $Regular=Packages::where([
            ['type','=','Regular'],
            ['status','=','1']
        ])->get();
        return view('Layout/PackageLayout',["title"=>"Regular Package Page","starting"=>"../","Premiums"=>$Regular,"type"=>"Regular"]);  
    }
    public function custompackage()
    {
        // $busdetailsproductdetails=AddProduct::all();
        $busdetailsproductdetails=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where('categorys.cat_type','=','Product')->get();
        return view('User/custompackage',["title"=>"custom Package Page","starting"=>"../",'busdetailsproductdetails'=>$busdetailsproductdetails]);  
    }
    public function PackageDetail($id)
    {
        $packagedetail=Packages::findOrFail($id);
        $products=$packagedetail->PackageProducts;
        $fullproduct=array();
        // $first=["key"=>$val,"key"=>$val,];
        // $products[1]
        // $first=AddProduct::findOrFail($products[1]);
        $i=0;
        foreach($products as $product)
        {
            $fullproduct[]=AddProduct::findOrFail($products[$i]);   
            $i++;
        }
        // foreach($products as $product)

        return view('User.PackageDetail',["first"=>$fullproduct,'package_details'=>$packagedetail,"starting"=>"../",]);
    }
public function PackageDetail_store(Request $req)
{
    // bookpackage_id
    $amount=$req->input('total_amount');
                $api = new Api('rzp_test_iKlM2rsXjuV7R1', 'ajKNMNZY1Q6NDIrk4N5jEaMP');
                $order  = $api->order->create(array('receipt' => '123', 'amount' =>$amount*100 , 'currency' => 'INR')); // Creates order
                $orderId = $order['id']; 

    $PackageBookInfo=new PackageBookInfo();
    $PackageBookInfo->user_id=Session::get('user_id');
    $PackageBookInfo->package_id=$req->input('package_id');
    $PackageBookInfo->name=$req->input('name');
    $PackageBookInfo->mobile_no=$req->input('mobile_no');
    $PackageBookInfo->locality=$req->input('locality');
    $PackageBookInfo->address=$req->input('address');
    $PackageBookInfo->event_date=$req->input('event_date');
    $PackageBookInfo->time=$req->input('time');
    $PackageBookInfo->Duration=$req->input('Duration');
    $PackageBookInfo->total_amount=$req->input('total_amount');
    $PackageBookInfo->payment_id = $orderId;
    $save=$PackageBookInfo->save();
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
return back()->with('data', $data);
     
}
    
public function PackageDetail_pay(Request $request)
{
    $data = $request->all();
    // dd($data);
    $user = PackageBookInfo::where('payment_id', $data['razorpay_order_id'])->first();
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
    //tour package details view (in admin side
    public function Tour_details()
    {
      $tourdet=Tour::all();  
return view('Admin.Tour_details',["title"=>"Tour_details page",'tourdet'=>$tourdet]);
    }
    public function Add_tourpackage()
    {
        $busdetails=BusDetail::all();

        return view('Admin.Add_tourpackage',["title"=>"Add_tourpackage page","busdetails"=>$busdetails]);       
    }
    public function store_tourpackage(Request $request)
    {
        // dd($request);
        $tourpackage=new Tour();
        $tourpackage->bus_id=request('busname');    
        $tourpackage->dateofDeparture=request('Departuretime');
        $tourpackage->dateofarrival=request('arrivedtime');
        $tourpackage->days=request('days');

        // $tourpackage->days=request('banner');
 
    $file=request('banner');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploaded_images/',$filename);
    $tourpackage->banner=$filename;

        $tourpackage->MainDescription=request('Maindesc');
        $tourpackage->Price=request('price');
        $tourpackage->PriceDescription=request('pricedesc');
        $days=request('days');
        $save=$tourpackage->save();
        if($save){
            Session::put('days', $days);
        $tour_id=$tourpackage->tour_id;
        Session::put('tour_id', $tour_id);
        return redirect('/Add_dayPlan');
        }
        else
        return "data not inserted";
    }
    public function Add_dayPlan()
    {
        return view('Admin.Add_dayPlan',["title"=>"Add tour day today program"]);
    }
    public function store_dayplanes()
    {

$tour_id=Session::get('tour_id');
$days=Session::get('days');
$count=Day::where('tour_id','=',$tour_id)->count();
if($count<$days) //0<2 ,1<2 
{
$store_day_plan=new Day();
$store_day_plan->tour_id =$tour_id;
        $store_day_plan->Mornigtoureplace=request('Moringplace');
        $store_day_plan->Afternoon=request('Afteplace');
        $store_day_plan->NightPrograms=request('Nightprgm');
        $store_day_plan->hotelname=request('Hotelname');

        // $store_day_plan->Hpic=request('hotelpic');
            $file=request('hotelpic');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploaded_images/',$filename);
            $store_day_plan->Hpic=$filename;
    


        $store_day_plan->locality=request('locality');
        $save=$store_day_plan->save();
        if($save) 
        {
            // if($count+1<$days-1) 
            // return redirect('Tour_details');
            // else
            return redirect('/Add_dayPlan')->with('count',$count);
        }
        // return redirect('/Add_dayPlan');
        else
        return "data not inserted";
}
else
return redirect('Tour_details');
    }
   

}
