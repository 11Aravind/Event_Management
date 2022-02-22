<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\AddProduct;
use App\Models\Event;
class AdminController extends Controller
{
    //
    public function index(){
        return view('Admin/Add_category',["title"=>"Add_category page"]);
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
        
        // $fetch=AddProduct::all();
        $fetch=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where('categorys.cat_type','=','Product')->get();
        
      // product table il ninnode category table il ninnu cat_type eduth compare cheyth nokkanam ennittu avashyam ullath eduthal mathi
        return view('Admin/Display_Product',["title"=>"Display_Product","fetchs"=>$fetch]);
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
//DisplayCategory
public function DisplayCategory()
{
    // $fetch=Category::all();
    
    $addcategorytype="../Add_category";
$headding="Product Category Details";
    $fetch=Category::where('cat_type','=','Product')->get();
    return view('Admin.DisplayCategory',["fetchs"=>$fetch,"headding"=>$headding,"addcategorytype"=>$addcategorytype,"title"=>"DisplayCategory Page"]);
}
//display event category
public function DisplayEventCategory()
{
    // $fetch=Category::all();
    $addcategorytype="../Add_event_category";
    $headding="Event Category Details";
    $fetch=Category::where('cat_type','=','Event')->get();
    return view('Admin.DisplayCategory',["fetchs"=>$fetch,"headding"=>$headding,"addcategorytype"=>$addcategorytype,"title"=>"DisplayEventCategory Page"]);
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
}
//display evetn details
public function Event_details()
{
    // return "Event_details";
    $fetch=DB::table('categorys')->join('events','categorys.category_id','=','events.category_id')
    ->where('categorys.cat_type','=','Event')->get();

    return view('Food/Display_Event',["title"=>"Display_Product","fetchs"=>$fetch]);

}
// UpdateForm product
public function UpdateForm($id)
{
    $fetch=AddProduct::findOrFail($id);  
    $getcategorys=Category::all();
    return view('Admin/UpdateForm',["fetch"=>$fetch,"getcategorys"=>$getcategorys,"title"=>"Update Product Page"]);
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
$store_product->product_category=$request->product_category;
$store_product->product_discription=$request->product_description;
$store_product->status=0;
$store_product->save();
return redirect('Display_Product');
}
public function DeactiveProduct($id,Request $req){
   $finddata=AddProduct::findOrFail($id);
   $finddata->status=0;
   $finddata->save();
   return redirect('Display_Product');
}
public function ActiveProduct($id,Request $req){
    $finddata=AddProduct::findOrFail($id);
    $finddata->status=1;
    $finddata->save();
    return redirect('Display_Product');
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


}
