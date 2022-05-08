<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\Cateringkyc;
use App\Models\FoodservingInfo;
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
    $storecategory->user_id=Session::get('user_id');
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
        $user_id=Session::get('user_id');
        $busdetails=Category::where([
            ['cat_type','=','FoodProduct'],
            ['user_id',$user_id]
        ])->get();
        
        return view('Food.DisplayCategory',["busdetailss"=>$busdetails,"title"=>"DisplayCategory Page"]);
    }
    public function add_food_form()
    {
        $user_id=Session::get('user_id');          
$getcategory=Category::where([
    ['cat_type','=','FoodProduct'],
    ['user_id',$user_id]
])->get();
return view('Food/Add_Food',["title"=>"Add_Product page","getcategorys"=>$getcategory]);
    }
    public function store_food(Request $request)
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
return redirect('/Display_Foodproduct')->with('success','Product is successfuly added');

    }
    public function Display_Foodproduct()
    {
        $user_id=Session::get('user_id');
        $busdetails=DB::table('categorys')->join('addproducts','categorys.category_id','=','addproducts.category_id')
        ->where([
            ['categorys.cat_type','=','FoodProduct'],
            ['categorys.user_id',$user_id]
        ])->get();
        
        return view('Food/Display_Event',["title"=>"Display_Product","busdetailss"=>$busdetails]);
    }
    // DeleteFood
    public function DeleteFood($cat_type,$id)
    {
        $find=AddProduct::findOrFail($id);
       $delete=$find->delete();
       if( $delete)
       {
           if($req->input('cat_type')=='FoodProduct')
           return redirect('Display_Foodproduct')->with('success',"The product was deleted");
           else
        return redirect('Display_Product')->with('success',"The product was deleted");
       }
    else{
        return back()->with('fail',"The product was not deleted Try Again");
    
    }
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

// $file=$request->file('bannerpic');
// $ext=$file->getClientOriginalExtension();
// $filename=time().'.'.$ext;
// $file->move('uploaded_images/',$filename);
// $Cateringkycdet->bannerpic=$filename;

// $new_bannerpic=time().'.'.$request->bannerpic->getClientOriginalName();
$new_bannerpic=$request->file('bannerpic')->getClientOriginalName();
$request->bannerpic->move(public_path('uploaded_images/'),$new_bannerpic);
$Cateringkycdet->bannerpic=$new_bannerpic;

// $request->file('image');
// $file=$request->file('owner_pic');
// $ext=$file->getClientOriginalExtension();
// $filename=time().'.'.$ext;
// $file->move('uploaded_images/',$filename);
// $Cateringkycdet->owner_pic=$filename;
$new_owner_pic=$request->file('owner_pic')->getClientOriginalName();

$request->owner_pic->move(public_path('uploaded_images/'),$new_owner_pic);

$Cateringkycdet->owner_pic=$new_owner_pic;


$Cateringkycdet->pincode=$request->pincode;
$Cateringkycdet->locality=$request->locality;
$Cateringkycdet->city=$request->city;
$Cateringkycdet->district=$request->district;
$save=$Cateringkycdet->save();
Session::put('Catering_id',$Cateringkycdet->Catering_id);
if($save){

return redirect('/Food')->with('success','Catering KYC is submitted successfully');
}
else{
    return redirect('/Food')->with('failmsg','Catering KYC is not submited please try again');
}
    }

    public function Catering_details()
    {
        $Cateringkyc=Cateringkyc::all();
        return view('Admin/Catering_details',["Cateringkyc"=>$Cateringkyc,"title"=>"Catering service details"]);
    }
    public function Cateringkyc_activate($id)
    {
        $Cateringkyc_activate=Cateringkyc::findOrFail($id);
        $Cateringkyc_activate->status=1;
        $Cateringkyc_activate->save();
        return redirect('Catering_details');
    }
    public function Cateringkyc_deactivate($id)
    {
        $Cateringkyc_activate=Cateringkyc::findOrFail($id);
        $Cateringkyc_activate->status=0;
        $Cateringkyc_activate->save();
        return redirect('Catering_details');
    }
    public function Cateringkyc_delete($id)
    {
        $Cateringkyc_activate=Cateringkyc::findOrFail($id);
      
        $delete=$Cateringkyc_activate->delete();
        if($delete)
         return redirect('Catering_details')->with('success',"The product was deleted");
     else
         return back()->with('fail',"The product was not deleted Try Again");
     
        
    }
    public function foodproductSummary()
    {
        return view('User/foodproductSummary',['starting'=>"../"]);
    }
    public function pay(Request $request){
        $data = $request->all();
        // dd($data);
        $user = FoodservingInfo::where('payment_id', $data['razorpay_order_id'])->first();
        $user->payment_done = true;
        $user->rezorpay_id = $data['razorpay_payment_id'];
        $save=$user->save();
        if($save)
        {
            return redirect('/OrderDetails');
        }
        else
        {
            return view('/error');
        }
    }
    public function success()
    {
        return view('User.success');
    }
    public function error()
    {
        return view('User.error');  
    }
  
    public function foodorderdetails()
    {
        
             $user_id=Session::get('user_id');
       
        $foodorderdetails=FoodservingInfo::where('user_id','=',$user_id)->get();
        return view('Food.FoodOrder_details',["foodorderdetails"=>$foodorderdetails]); 
    }
    public function Fooddashbord()
    {
        $user_id=Session::get('user_id');
        $registered=Cateringkyc::where('user_id',$user_id)->get();
        Session::put('registered',$registered);
        return view('Food/Fooddashbord',["title"=>"Food Dashbord"]);
    }
    public function UpdateFood($id)
{
    $busdetails=AddProduct::findOrFail($id);  
    $getcategorys=Category::all();
    return view('Food/UpdateFood',["busdetails"=>$busdetails,"getcategorys"=>$getcategorys,"title"=>"Update Product Page"]);
}
public function UpdateFood_store(Request $request,$id)
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
return redirect('Display_Foodproduct');
}
public function foodcategory()
{
    return view('Food/foodcategory',["title"=>"Food Dashbord"]);
}
}
