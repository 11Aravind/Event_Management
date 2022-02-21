<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AddProduct;
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
    return redirect('foodcategory')->with('success','New Category was added');
}else{
return back()->with('failmsg','New Category was not added try again');
    }
    }
    public function DisplayCategory()
    {
        // $fetch=Category::all();
        $fetch=Category::where('cat_type','=','FoodProduct')->get();
        return view('Food.DisplayCategory',["fetchs"=>$fetch,"title"=>"DisplayCategory Page"]);
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
return redirect('/Add_Food');
    }
    public function Display_Foodproduct()
    {
        $full=AddProduct::all();
        $fetchs=AddProduct::where($full->categorydet->cat_type,'=','FoodProduct')->first();
        // ->first();;
        // User::where('id', 1)
        // ->with(['educationDetails', 'languageDetails', 'certificationDetails'])
        // ->first();
        $arr=array();
        $i=0;
foreach($fetchs as $fetch)
{
    $arr[]=$fetch->categorydet->cat_type; 
}
        return $arr;
        // $fetch=AddProduct::where($full->category->cat_type,'=','FoodProduct');
        // return view('Food/Display_Product',["title"=>"Display_Product","fetchs"=>$fetch]);
    }
}
