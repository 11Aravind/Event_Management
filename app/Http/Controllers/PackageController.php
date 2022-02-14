<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\Packages;
class PackageController extends Controller
{
    
    public function showpackageproduct()
    {
$fetchproductdetails=AddProduct::all();
        return view('Admin/Add_Package',["fetchproductdetails"=>$fetchproductdetails,'title'=>'Add PackagePage']);
    }
    public function addpackageproduct()
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
        // dd(request('packageProduct'));
         $save=$package->save();
         if($save)
         return redirect('Add_Package');
    }
    public function ViewPackage()
    {
        $packagedetails=Packages::all();
        return view('Admin/Packagedetails',["title"=>"packagedetails page","packagedetails"=>$packagedetails]);
    }
    public function Premium()
    {
        $Premium=Packages::where('type','=','Premium')->get();
        return view('Layout/PackageLayout',["title"=>"Premium Package Page","Premiums"=>$Premium,"type"=>"Premium"]);
    }
    public function Medium()
    {
        $Medium=Packages::where('type','=','Medium')->get();
        return view('Layout/PackageLayout',["title"=>"Medium Package Page","Premiums"=>$Medium,"type"=>"Medium"]);
    }
    public function Regular()
    {
        $Regular=Packages::where('type','=','Regular')->get();
        return view('Layout/PackageLayout',["title"=>"Regular Package Page","Premiums"=>$Regular,"type"=>"Regular"]);  
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

        return view('User.PackageDetail',["first"=>$fullproduct]);
    }
}
