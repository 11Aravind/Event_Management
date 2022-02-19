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
      <label for="inputPassword4">Taxi type(bus/traveler)</label>
      <input type="text"  name="Taxi_type"class="form-control" id="inputEmail4" placeholder="Bus Name">
      <!-- <select name="Taxi_type" class="form-control"id="">
        <option value="">Car</option>
        <option value="">Traveler</option>
        <option value="Bus">Bus</option>
      </select> -->
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Taxi Number</label>
      <input type="text" name="Taxi_number" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Seating capacity</label>
      <input type="text" name="seating_capacity"class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Taxi Photo</label>
      <input type="file" name="taxi_pic"class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ac/Non AC</label>
<select name="taxi_category" class="form-control" id="">
  <option value="AC">AC</option>
  <option value="Non_AC">Non-AC</option>
</select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Taxi Rate(1 KM)</label>
      <input type="text" name="price"class="form-control" id="inputEmail4" placeholder="">
    </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputPassword4">Taxi Photos</label>
      <input type="file"class="form-control" id="inputPassword4" placeholder="">
    </div> -->
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