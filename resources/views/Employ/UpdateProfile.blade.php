@extends('Layout/Empoly_layout')
@section('employ_content')
<h1 style="">Update Employ Details</h1>
<hr>
<form method="POST" enctype="multipart/form-data" action="/Add_employ">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" value="{{$Employ->employ_name}}" name="employ_name"class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email"  value="{{$Employ->email}}" name="email"class="form-control" id="inputPassword4" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Contact Number</label>
      <input type="text" value="{{$Employ->contact_no}}" name="contact_no" class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Job Position</label>
      <input type="text" value="{{$Employ->job_position}}" name="job_position"class="form-control" id="inputPassword4" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Employ Photo</label>
      <input type="file" value="{{$Employ->employ_photo}}" name="employ_photo"class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Id Proof</label>
      <input type="file"name="id_proof" value="{{$Employ->id_proof}}" class="form-control" id="inputPassword4" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Qualification</label>
      <input type="text"name="qualification" value="{{$Employ->qualification}}" class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Experiance</label>
      <input type="text"  value="{{$Employ->experience}}"name="experience"class="form-control" id="inputPassword4" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Experiance cirtificate</label>
    <input type="file" value="{{$Employ->cirtificate}}" name="cirtificate"class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
 
  <button type="submit" class="btn btn-primary">Update Details</button>
</form>
@endsection