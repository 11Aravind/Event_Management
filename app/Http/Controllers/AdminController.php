<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AddProduct;
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
$storecategory->status=0;
$save=$storecategory->save();
if($save){
    return back()->with('successmsg','New Category was added');
}else{
return back()->with('failmsg','New Category was not added try again');
}
    }
    public function getcategorydet(){
        
$getcategory=Category::all();
return view('Admin/Add_Product',["title"=>"Add_Product page","getcategorys"=>$getcategory]);
    }
    public function store_product(Request $request)
    {
$store_product=new AddProduct();
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
    public function display_product()
    {
        $fetch=AddProduct::all();
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
    $fetch=Category::all();
    return view('Admin.DisplayCategory',["fetchs"=>$fetch,"title"=>"DisplayCategory Page"]);
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

}
