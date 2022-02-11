<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
class PackageController extends Controller
{
    
    public function showpackageproduct()
    {
$fetchproductdetails=AddProduct::all();
        return view('Admin/Add_Package',["fetchproductdetails"=>$fetchproductdetails,'title'=>'Add PackagePage']);
    }
}
