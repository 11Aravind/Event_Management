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
      $Employ->employ_photo=request('employ_photo');
      $Employ->id_proof=request('id_proof');
      $Employ->qualification=request('qualification');
      $Employ->experience=request('experience');
      $Employ->cirtificate=request('cirtificate');
$Employ->save();
return "<script>alert('Your data is added successfuly')</script>";

    }
    
}
