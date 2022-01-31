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
    public function store()
    {
$storecategory=new Category();
$storecategory->category_name=request('category_name');
$storecategory->discription=request('description');
$storecategory->status=0;
$save=$storecategory->save();
if($save){
    return back()->with('successmsg','New Category was added');
}else{
return back()->with('failmsg','New Category was not added try again');
}

    }

}
