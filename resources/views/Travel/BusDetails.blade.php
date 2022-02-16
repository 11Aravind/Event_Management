@extends('Layout.Travel')
@section('travelcontent')
<div class="contentsss">
        <div class="cont">
            <h4>Bus Details</h4>
            <small>Fill BusDetails</small>
            <hr>
            <form action="/BusDetails" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Taxi Name</label>
      <input type="text"  name="busname"class="form-control" id="inputEmail4" placeholder="Bus Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Taxi type</label>
      <select name="" class="form-control"id="">
        <option value="">Car</option>
        <option value="">Car</option>
        <option value="">Car</option>
      </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">seating capacity</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Seating capacity</label>
      <input type="text"class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Taxi Photo</label>
      <input type="file" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ac/Non AC</label>
<select name="" class="form-control" id="">
  <option value="">AC</option>
  <option value="">Non-AC</option>
</select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Owner Photo</label>
      <input type="file" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Travel Agency Licence</label>
      <input type="file"class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <!-- <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Pincode</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Locality</label>
      <input type="text"class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">City/District/Town</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">District</label>
      <input type="text"class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div> -->
  </div>
  <button type="submit" class="btn btn-primary" style="float:right">ADD</button>
</form>
    </div>
   </div>
@endsection