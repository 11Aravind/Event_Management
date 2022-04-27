<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employ;
use Session;
class EmployController extends Controller
{
    //
    public function Add_employ()
    {
return view('Employ/Add_employ');
    }
    public function store_emly_Det()
    {
      $Employ=new Employ();
      $Employ->user_id=Session::get('user_id');
      $Employ->employ_name=request('employ_name');
      $Employ->email=request('email');
      $Employ->contact_no=request('contact_no');
      $Employ->job_position=request('job_position');
    //   $Employ->employ_photo=request('employ_photo');
      
      $file=request('employ_photo');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploaded_images/',$filename);
    $Employ->employ_photo=$filename;
    

      $Employ->id_proof=request('id_proof');

      $file=request('id_proof');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploaded_images/',$filename);
      $Employ->id_proof=$filename;


      $Employ->qualification=request('qualification');
      $Employ->experience=request('experience');
      $Employ->cirtificate=request('cirtificate');
      $Employ->status=0;
$save=$Employ->save();
if($save)
{
    Session::put('employ_id',$Employ->employ_id);
    return redirect('/Empoly')->with('msg','Your Data added successfuly','color','green');
}
else{
    return redirect('/Empoly')->with('msg','Something went Wrong.Please Try Again','color','red');
}

    }
    
    public function Displayemploydet()
    {
        $Employdetais=Employ::where('status','=','1')->get();   
        // return  $Employdetais;
        return view('User/Displayemploydet',['Employdetais'=>$Employdetais,'starting'=>"../"]);
    }
    public function EmployActive($id)
    {
$approve=Employ::findOrFail($id);
$approve->status=1;
$approve->save();
return redirect('/Employdetails');
    }
    public function EmployDeactive($id)
    {
$approve=Employ::findOrFail($id);
$approve->status=0;
$approve->save();
return redirect('/Employdetails');
    }
    public function Profile()
    {
        return view('Layout.Profile_layout');
    }
    public function Empoly()
    {
        $user_id=Session::get('user_id');
    $check=Employ::where('user_id',$user_id)->get();
    Session::put('check',$check);
    return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);
    }
    public function ApprovedEmploys()
    {
        // $user_id=Session::get('user_id');
        $ApprovedEmploys=Employ::where('status',1)->get();
        // Session::put('check',$check);
        // return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);  
                return view('Admin/ApprovedEmploydet',["title"=>"ApprovedEmploydet",'employdets'=>$ApprovedEmploys]);  

        
    }
    public function EmployDelete($id)
    {
        $find=Employ::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if( $delete)
   {
    return redirect('Employdetails')->with('msg',"Employ detailsis successfuly deleted",'color','green');
   }
else{
    return back()->with('msg',"Employ detailsis was not deleted Try Again",'color','red');

} 
    }
   
}
