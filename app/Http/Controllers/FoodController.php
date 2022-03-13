<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\Cateringkyc;
use Session;
class FoodController extends Controller
{
    //
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
$storecategory->cat_type="FoodProduct";
$storecategory->status=0;
$save=$storecategory->save();
if($save){
    return redirect('foodDetails')->with('success','New Category was added');
}else{
return back()->with('failmsg','New Category was not added try again');
    }
    }
    public function DisplayCategory()
    {
        // $busdetails=Category::all();
        $busdetails=Category::where('cat_type','=','FoodProduct')->get();
        return view('Food.DisplayCategory',["busdetailss"=>$busdetails,"title"=>"DisplayCategory Page"]);
    }
    public function add_food_form()
    {
                
$getcategory=Category::where('cat_type','=','FoodProduct')->get();
return view('Food/Add_Food',["title"=>"Add_Product page","getcategorys"=>$getcategory]);
    }
    public function store_food()
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
return redirect('/Display_Foodproduct');
    }
    public function Display_Foodproduct()
    {

        $busdetails=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where('categorys.cat_type','=','FoodProduct')->get();;
        return view('Food/Display_Event',["title"=>"Display_Product","busdetailss"=>$busdetails]);
    }
    public function Add_Food_package()
    {
        $busdetailsproductdetails=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where('categorys.cat_type','=','FoodProduct')->get();;
        // return view('Food/Display_Event',["title"=>"Display_Product","busdetailss"=>$busdetails]);
        return view('Food/Add_Food_package',["busdetailsproductdetails"=>$busdetailsproductdetails,'title'=>'Add PackagePage']);
    }
    public function Cateringkyc()
    {
        return view('Food/Cateringkyc',["title"=>"Cateringkyc page"]);
    }
    public function Cateringkycdet_store(Request $request)
    {
       $Cateringkycdet=new Cateringkyc();
       
$Cateringkycdet->user_id=Session::get('user_id');
$Cateringkycdet->cateringservicename=$request->cateringservicename;
$Cateringkycdet->ownername=$request->ownername;
$Cateringkycdet->mobileno=$request->mobileno;
$Cateringkycdet->alterphoneno=$request->alterphoneno;
if($request->hasfile('bannerpic'))
{
$file=$request->bannerpic;
$ext=$file->getClientOriginalExtension();
$filename=time().'.'.$ext;
$file->move('uploaded_images',$filename);
$Cateringkycdet->bannerpic=$filename;
}
if($request->hasfile('owner_pic'))
{
$file=$request->owner_pic;
$ext=$file->getClientOriginalExtension();
$filename=time().'.'.$ext;
$file->move('uploaded_images',$filename);
$Cateringkycdet->owner_pic=$filename;
}

// $Cateringkycdet->bannerpic=$request->bannerpic;
// $Cateringkycdet->owner_pic=$request->owner_pic;
$Cateringkycdet->pincode=$request->pincode;
$Cateringkycdet->locality=$request->locality;
$Cateringkycdet->city=$request->city;
$Cateringkycdet->district=$request->district;
$save=$Cateringkycdet->save();
if($save)
return redirect('/Cateringkyc');
    }
}
