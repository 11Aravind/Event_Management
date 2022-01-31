<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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

}
