<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\AddProduct;
use App\Models\Event;
use App\Models\Employ;
use App\Models\Tour;
use App\Models\Packages;
use App\Models\Complaint;
use App\Models\TravelKyc;
use App\Models\CustomPackage;
use Session;
class AdminController extends Controller
{
    //
    public function Admin_dashbord()
    {
        return view('Admin_homepage',["title"=>"Admin_dashbord"]);
    }
    public function index(){
        return view('Admin/Add_category',["title"=>"Add_category page"]);
    }
    public function Add_event_category()
    {
        return view('Admin/Add_event_category',["title"=>"TicketBooking page"]);
    }
    public function store(Request $request)
    {
        //validation start
        $validate=$request->validate([
            'category_name'=>'required|unique:categorys',
'description'=>'required'
        ]);
        //validation end
    $storecategory=new Category();
    $storecategory->user_id=Session::get('user_id');
$storecategory->category_name=$request->category_name;
$storecategory->discription=$request->description;
$storecategory->cat_type="Product";
$storecategory->status=0;
$save=$storecategory->save();
if($save){
    return redirect('DisplayCategory')->with('success','New Category was added');
}else{
return back()->with('failmsg','New Category was not added try again');
}
    }
    public function getcategorydet(){
        
$getcategory=Category::where('cat_type','=','Product')->get();
return view('Admin/Add_Product',["title"=>"Add_Product page","getcategorys"=>$getcategory]);
    }
    public function store_product(Request $request)
    {
$store_product=new AddProduct();
$store_product->category_id=$request->product_category;
$store_product->product_name=$request->product_name;
$store_product->product_price=$request->product_price;
if($request->hasfile('product_image'))
{
    $file=$request->product_image;
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploaded_images/',$filename);
    $store_product->product_photo=$filename;
}
$store_product->product_quentity=$request->product_quentity;
$store_product->product_discription=$request->product_description;
$store_product->status=0;
$store_product->save();
return redirect('Display_Product');
    }
    public function display_product()
    {
      
        // $busdetails=AddProduct::all();
        $busdetails=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where('categorys.cat_type','=','Product')->get();
        
      // product table il ninnode category table il ninnu cat_type eduth compare cheyth nokkanam ennittu avashyam ullath eduthal mathi
        return view('Admin/Display_Product',["title"=>"Display_Product","busdetailss"=>$busdetails]);
    }
//delete product
public function DeleteProduct($id)
{
   $find=AddProduct::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if( $delete)
   {
    return redirect('Display_Product')->with('success',"The product was deleted");
   }
else{
    return back()->with('fail',"The product was not deleted Try Again");

}
}
//delete event ticket booking

public function DeleteEvent($id)
{
   $find=Event::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if( $delete)
   {
    return redirect('ViewEvent')->with('msg',"The Event was deleted",'color',"green");
   }
else{
    return back()->with('msg',"The Event was not deleted Try Again",'color','red');

}
}
// delete tour package

public function DeleteTour($id)
{
   $find=Tour::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if($delete)
   {
    return redirect('Tour_details')->with('msg',"The tour package was deleted",'color',"green");
   }
else{
    return back()->with('msg',"The tour package was not deleted Try Again",'color','red');

}
}
//TravelagencyDelete
public function TravelagencyDelete($id)
{
   $find=TravelKyc::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if($delete)
   {
    return redirect('Travelagency_det')->with('msg',"The  Travel agency was deleted",'color',"green");
   }
else{
    return back()->with('msg',"The Travel agency was not deleted Try Again",'color','red');

}
}
//delete packages
public function DeletePackage($id)
{
    $find=Packages::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if( $delete)
   {
    return redirect('ViewAdminPackage')->with('msg',"The product was deleted",'color','green');
   }
else{
    return back()->with('msg',"The product was not deleted Try Again",'color','red');

}  
}
//delete category
public function DeleteCategory($id)
{
    $find=Category::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if( $delete)
   {
    if($find->cat_type=='Event')
    return redirect('DisplayEventCategory');
    else if($find->cat_type=='FoodProduct')
    return redirect('foodDetails')->with('msg',"The category item was deleted",'color','green');
    else
    return redirect('DisplayCategory')->with('msg',"The category item was deleted",'color','green');
   }
else{
    return back()->with('msg',"The category item was not deleted Try Again",'color','red');

} 
}
//DisplayCategory
public function DisplayCategory()
{
    // $busdetails=Category::all();
    
    $addcategorytype="../Add_category";
$headding="Product Category Details";
    $busdetails=Category::where('cat_type','=','Product')->get();
    return view('Admin.DisplayCategory',["busdetailss"=>$busdetails,"headding"=>$headding,"addcategorytype"=>$addcategorytype,"title"=>"DisplayCategory Page"]);
}
//display event category
public function DisplayEventCategory()
{
    // $busdetails=Category::all();
    $addcategorytype="../Add_event_category";
    $headding="Event Category Details";
    $busdetails=Category::where('cat_type','=','Event')->get();
    return view('Admin.DisplayCategory',["busdetailss"=>$busdetails,"headding"=>$headding,"addcategorytype"=>$addcategorytype,"title"=>"DisplayEventCategory Page"]);
}
//display event form
public function Add_EventForm(){
    $category=Category::where('cat_type','=','Event')->get();
    return view('Admin/Add_EventForm',["categorys"=>$category,"title"=>"Add_EventForm page"]);

}
//store event form data
public function Add_Event()
{
    $event_obj=new Event();
$event_obj->category_id=request('event_category');
$event_obj->event_name=request('event_name');
// $event_obj->event_category=request('event_category');
// $event_obj->event_banner=request('event_bsnner');

$file=request('event_bsnner');
$extension=$file->getClientOriginalExtension();
$filename=time().$extension;
$file->move('uploaded_images/',$filename);
$event_obj->event_banner=$filename;

$event_obj->event_date=request('event_date');
$event_obj->starting_time=request('starting_time');
$event_obj->duration=request('duration');
$event_obj->duration_time=request('duration_time');
$event_obj->ticketprice=request('ticketprice');
$event_obj->totel_ticket=request('totel_ticket');
$event_obj->discount=request('discount');
$event_obj->discount_end=request('discount_end');
$event_obj->event_discription=request('event_discription');
$event_obj->save();
return redirect('/ViewEvent');
}
// upddate event form
public function updateEvent_store()
{
    $event_id=request('event_id');
    $event_obj=Event::findOrFail($event_id);
$event_obj->category_id=request('event_category');
$event_obj->event_name=request('event_name');
// $event_obj->event_category=request('event_category');
// $event_obj->event_banner=request('event_bsnner');

$file=request('event_bsnner');
$extension=$file->getClientOriginalExtension();
$filename=time().$extension;
$file->move('uploaded_images/',$filename);
$event_obj->event_banner=$filename;

$event_obj->event_date=request('event_date');
$event_obj->starting_time=request('starting_time');
$event_obj->duration=request('duration');
$event_obj->duration_time=request('duration_time');
$event_obj->ticketprice=request('ticketprice');
$event_obj->totel_ticket=request('totel_ticket');
$event_obj->discount=request('discount');
$event_obj->discount_end=request('discount_end');
$event_obj->event_discription=request('event_discription');
$event_obj->save();
return redirect('/ViewEvent');
}
//display evetn details
public function Event_details()
{
    // return "Event_details";
    $busdetails=DB::table('categorys')->join('events','categorys.category_id','=','events.category_id')
    ->where('categorys.cat_type','=','Event')->get();

    return view('Food/Display_Event',["title"=>"Display_Product","busdetailss"=>$busdetails]);

}
// UpdateForm product
public function UpdateForm($id)
{
    $busdetails=AddProduct::findOrFail($id);  
    $getcategorys=Category::all();
    return view('Admin/UpdateForm',["busdetails"=>$busdetails,"getcategorys"=>$getcategorys,"title"=>"Update Product Page"]);
}
// UpdateProduct
public function UpdateProduct(Request $request,$id)
{
    // dd($request);
    $store_product=AddProduct::findOrFail($id);
    $store_product->product_name=$request->product_name;
$store_product->product_price=$request->product_price;
if($request->hasfile('product_image'))
{
    $file=$request->product_image;
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploaded_images/',$filename);
    $store_product->product_photo=$filename;
}
$store_product->product_quentity=$request->product_quentity;
$store_product->category_id=$request->product_category;
$store_product->product_discription=$request->product_description;
$store_product->status=0;
$save=$store_product->save();
return redirect('Display_Product');
}
//

public function DeactiveProduct($id,Request $req){
   $finddata=AddProduct::findOrFail($id);
   $finddata->status=0;
   $finddata->save();
   return redirect('Display_Foodproduct');
}
// Rejectcusomepackage
public function Rejectcusomepackage($id,Request $req){
    $finddata=CustomPackage::findOrFail($id);
    $finddata->status=0;
    $finddata->save();
    return redirect('VieCustomPackage');
 }
// TravelagencyDeactive
public function TravelagencyDeactive($id,Request $req){
    $finddata=TravelKyc::findOrFail($id);
    $finddata->status=0;
    $finddata->save();
    return redirect('Travelagency_det');
 }
// DeactiveEvent
public function DeactiveEvent($id,Request $req){
    $finddata=Event::findOrFail($id);
    $finddata->status=0;
    $finddata->save();
    return redirect('ViewEvent');
 }
// Deactivetour
public function Deactivetour($id,Request $req){
    $finddata=Tour::findOrFail($id);
    $finddata->status=0;
    $finddata->save();
    return redirect('Tour_details');
 }
// Deactivatepackage
public function Deactivatepackage($id)
{
    $finddata=Packages::findOrFail($id);
    $finddata->status=0;
    $finddata->save();
    return redirect('ViewAdminPackage');   
}
public function DeactiveCategory($id)
{
    $finddata=Category::findOrFail($id);
   $finddata->status=0;
   $finddata->save();
   if($finddata->cat_type=='Event')
        return redirect('DisplayEventCategory');
        else
   return redirect('DisplayCategory'); 
}
public function ActiveProduct($id,Request $req){
    $finddata=AddProduct::findOrFail($id);
    $finddata->status=1;
    $finddata->save();
    return redirect('Display_Foodproduct');
 }
//  TravelagencyActive
public function TravelagencyActive($id,Request $req){
    $finddata=TravelKyc::findOrFail($id);
    $finddata->status=1;
    $finddata->save();
    return redirect('/Travelagency_det');
 }
 //Activetour
 public function Activetour($id,Request $req){
    $finddata=Tour::findOrFail($id);
    $finddata->status=1;
    $finddata->save();
    return redirect('Tour_details');
 }
 public function Activatepackage($id)
 {
    $finddata=Packages::findOrFail($id);
    $finddata->status=1;
    $finddata->save();
    return redirect('ViewAdminPackage'); 
 }
 public function Approvecusomepackage($id)
 {
    $finddata=CustomPackage::findOrFail($id);
    $finddata->status=1;
    $finddata->save();
    return redirect('VieCustomPackage');   
 }
//  ActiveEvent
public function ActiveEvent($id)
{
   $finddata=Event::findOrFail($id);
   $finddata->status=1;
   $finddata->save();
   return redirect('ViewEvent'); 
}
 public function ActiveCategory($id)
 {
    $finddata=Category::findOrFail($id);
    $finddata->status=1;
   $save=$finddata->save();
    if($save)
    {
        if($finddata->cat_type=='Event')
        return redirect('DisplayEventCategory');
        else
     return redirect('DisplayCategory')->with('msg',"The category was active",'color','green');
    }
 else{
     return back()->with('msg',"Activation not done  Try Again",'color','red');
 }
    
 }
 public function store_event(Request $request)
 {
     //validation start
     $validate=$request->validate([
         'category_name'=>'required|unique:categorys',
'description'=>'required'
     ]);
     //validation end
 $storecategory=new Category();
 $storecategory->user_id=Session::get('user_id');
$storecategory->category_name=$request->category_name;
$storecategory->discription=$request->description;
$storecategory->cat_type="Event";
$storecategory->status=0;
$save=$storecategory->save();
if($save){
 return redirect('DisplayEventCategory')->with('success','New Category was added');
}else{
return back()->with('failmsg','New Category was not added try again');
}
 }
public function Displayemploydet()
{
    $employdet=Employ::where('status','=','0')->get();
    return view('Admin/Displayemploydet',["employdets"=>$employdet,"title"=>"Displayemploydet page"]);
    // return $employdet;
}
public function ViewPackage()
{
    $packagedet=Packages::all();
    return view('Admin/ViewPackage',["title"=>'View package Details','packagedet'=>$packagedet]);
}
public function ViewEvent()
{
    $eventdet=Event::all();
    return view('Admin/ViewEvent',["title"=>'View package Details','eventdet'=>$eventdet]);
}
public function viewComplaint()
{
    $Complaint=Complaint::all();
    return view('Admin/viewComplaint',["title"=>'View package Details','Complaint'=>$Complaint]);  
}
public function Travelagency_det()
{
    $TravelKyc=TravelKyc::all();
    return view('Admin/Travelagency_det',["title"=>'View Travelagency_det','TravelKyc'=>$TravelKyc]);   
}
public function VieCustomPackage(){
    $packagedets=CustomPackage::all();
    return view('Admin.VieCustomPackage',['title'=>'VieCustomPackage','packagedet'=>$packagedets]);
}

}
