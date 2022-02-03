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
$store_product->save();
return redirect('Display_Product');
    }
    public function display_product()
    {
        $fetchproductdet=AddProduct::all();
        return view('Admin/Display_Product',["title"=>"Display_Product","fetchproductdets"=>$fetchproductdet]);
    }

}
