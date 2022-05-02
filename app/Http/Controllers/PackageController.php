<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\Packages;
use App\Models\BusDetail;
use App\Models\Tour;
use App\Models\Day;
use Session;
class PackageController extends Controller
{
    
    public function showpackageproduct()
    {
$busdetailsproductdetails=AddProduct::all();
        return view('Admin/Add_Package',["busdetailsproductdetails"=>$busdetailsproductdetails,'title'=>'Add PackagePage']);
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
        // request('');
        // dd(request('packageProduct'));
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
    //tour package details view (in admin side
    public function Tour_details()
    {
return view('Admin.Tour_details',["title"=>"Tour_details page"]);
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
