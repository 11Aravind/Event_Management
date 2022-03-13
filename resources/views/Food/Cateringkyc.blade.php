@extends('Layout/FoodLayout')
@section('foodcontent')
<div class="contentsss">
        <div class="cont">
            <h1>Cateringkyc Form</h1>
        <form action="/Cateringkyc" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Catering Service Name</label>
      <input type="text"  name="cateringservicename" class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ownder Name</label>
      <input type="text"  name="ownername" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile No</label>
      <input type="text" name="mobileno"  class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Alternate Phone</label>
      <input type="text" name="alterphoneno"  class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Catering Service Banner</label>
      <input type="file" name="bannerpic" class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Owner Pic</label>
      <input type="file" name="owner_pic"class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Pincode</label>
      <input type="text" name="pincode" class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Locality</label>
      <input type="text" name="locality" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">City/Town</label>
      <input type="text" name="city"class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">District</label>
      <input type="text" name="district"class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  

  <!-- <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div> -->
  <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div> -->
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary">ADD</button>
</form>
</div>
</div>
@endsection