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
}
