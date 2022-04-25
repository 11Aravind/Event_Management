@extends('Layout.Travel')
@section('travelcontent')
<div class="contentsss">
        <div class="cont">
            <h4>Travel Kyc</h4>
            <small>Fill travel owner details</small>
            <hr>
            <form action="/TravelKyc" method="POST" enctype="multipart/form-data">
  @csrf
            <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Owner Name</label>
      <input type="text" class="form-control"  name="owner_name"id="inputEmail4" placeholder="Owner Name">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Travel Agency Name</label>
      <input type="text"class="form-control" name="Tagencyname" id="input4" placeholder="Travel Agency Name">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Landline</label>
      <input type="text" class="form-control" name="landline"id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Mobile No</label>
      <input type="text"class="form-control" name="mobile_no" id="input4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Travel Agency Banner</label>
      <input type="file" class="form-control" name="Aphone"id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Licence expire Date</label>
      <input type="text"class="form-control" id="input4" name="expdate" placeholder="Travel Agency Licence expire">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Owner Photo</label>
      <input type="file" class="form-control" name="ownerphoto"id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Travel Agency Licence</label>
      <input type="file"class="form-control"name="licencepic" id="input4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Pincode</label>
      <input type="text" class="form-control" name="pincode"id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Locality</label>
      <input type="text"class="form-control" name="locality"id="input4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">City/Town</label>
      <input type="text" class="form-control"name="city" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">District</label>
      <input type="text"class="form-control" name="district" id="input4" placeholder="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="float:right">ADD</button>
  </div>
</form>
    </div>
   </div>
@endsection