<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employ;
use App\Models\StoreOrder;
use Session;
class EmployController extends Controller
{
    //
    public function Add_employ()
    {
return view('Employ/Add_employ');
    }
    public function store_emly_Det(Request $request)
    {
      $Employ=new Employ();
      $Employ->user_id=Session::get('user_id');
      $Employ->employ_name=request('employ_name');
      $Employ->email=request('email');
      $Employ->contact_no=request('contact_no');
      $Employ->job_position=request('job_position');
    //   $Employ->employ_photo=request('employ_photo');
      
    //   $file=request('employ_photo');
    // $extension=$file->getClientOriginalExtension();
    // $filename=time().'.'.$extension;
    // $file->move('uploaded_images/',$filename);
    // $Employ->employ_photo=$filename;

    $new_employ_photo=$request->file('employ_photo')->getClientOriginalName();
      $request->employ_photo->move(public_path('uploaded_images/'),$new_employ_photo);
      $Employ->employ_photo=$new_employ_photo;
    

    //   $Employ->id_proof=request('id_proof');

    //   $file=request('id_proof');
    //   $extension=$file->getClientOriginalExtension();
    //   $filename=time().'.'.$extension;
    //   $file->move('uploaded_images/',$filename);
    //   $Employ->id_proof=$filename;

      $new_id_proof=$request->file('id_proof')->getClientOriginalName();
      $request->id_proof->move(public_path('uploaded_images/'),$new_id_proof);
      $Employ->id_proof=$new_id_proof;


      $Employ->qualification=request('qualification');

      $Employ->experience=request('experience');
    //   $Employ->cirtificate=request('cirtificate');
    $new_cirtificate=$request->file('cirtificate')->getClientOriginalName();
    $request->cirtificate->move(public_path('uploaded_images/'),$new_cirtificate);
    $Employ->cirtificate=$new_cirtificate;

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
       
        $user_id=Session::get('user_id');
        $Employ_present=Employ::where('user_id',$user_id)->get();
        if(!$Employ_present->isEmpty())
        {
        foreach($Employ_present as $Employ_present)
        {
          $employ_id= $Employ_present->employ_id;
        }
        $employdet=Employ::findOrFail($employ_id);
        return view('Layout.Profile_layout',['employdet'=>$employdet]);
    }
        // return view('Layout.Profile_layout');
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
        $ApprovedEmploys=Employ::where([
            ['status',1],
            ['available',1]
        ])->get();

       
        // Session::put('check',$check);
        // return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);  
                return view('Admin/ApprovedEmploydet',["title"=>"ApprovedEmploydet",'employdets'=>$ApprovedEmploys]);  

        
    }
    public function orderDet($id)
    {
        $StoreOrder=StoreOrder::where('employ_id',$id)->get();
return  view('Admin/Admin_joborderDet',['StoreOrder'=>$StoreOrder,'title'=>'order det']);
    }
    public function EmployDelete($id)
    {
        $find=Employ::findOrFail($id);
    // {{$request->product_id}}
   $delete=$find->delete();
   if($delete)
   {
    return redirect('Employdetails')->with('msg',"Employ detailsis successfuly deleted",'color','green');
   }
else{
    return back()->with('msg',"Employ detailsis was not deleted Try Again",'color','red');

} 
    }
    public function ApprovedEmploys_store()
    {
$storeOrder=new StoreOrder();
$storeOrder->employ_id=request('employ_id');
        $storeOrder->work_type=request('work_type');
        $storeOrder->contact_no=request('contact_no');
        $storeOrder->date=request('date');
        $storeOrder->time=request('time');
        $storeOrder->address=request('address');
        $storeOrder->save();
        return redirect('/ApprovedEmploys')->with('msg','Order Successfuly issued','color','green');
    }
   public function IssueOrder($employ_id)
   {
return view('Admin.IssueOrder',['title'=>"issue order",'employ_id'=>$employ_id]);
   }
   public function job_order()
   {
       $user_id=Session::get('user_id');
    //    reference
    $Employ_present=Employ::where('user_id',$user_id)->get();
        if(!$Employ_present->isEmpty())
        {
        foreach($Employ_present as $Employ_present)
        {
          $employ_id= $Employ_present->employ_id;
        }
        $order=StoreOrder::where('employ_id',$employ_id)->get(); 
        $btn=Employ::where('available',1)->get();
        if(!$order->isEmpty())
        {
// fetch data
return view('Employ.Job_order',['order'=>$order,'btn'=>$btn]);
        }
        else{
            // $c = 
            $btn=collect(new Employ);
            $order=collect(new Employ);
            return view('Employ.Job_order',['order'=>$order,'btn'=>$btn]);
        }

    }
    else{
        $order=collect(new Employ);;
        return view('Employ.Job_order',['order'=>$order]);
    }
   }
   public function profileOne($id)
   {
       $employdet=Employ::findOrFail($id);
       
    //    E:\xampp\htdocs\Perfect_Stom_Moments\resources\views\.blade.php
       return view('Layout.Profile_layout',['employdet'=>$employdet]);
   }
}
