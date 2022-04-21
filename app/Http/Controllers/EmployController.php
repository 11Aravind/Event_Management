<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employ;
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
$Employ->save();
return "<script>alert('Your data is added successfuly')</script>";
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
}
