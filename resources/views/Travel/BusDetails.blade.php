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
      <label for="input4">Taxi type(bus/traveler)</label>
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
      <label for="input4">Seating capacity</label>
      <input type="text" name="seating_capacity"class="form-control" id="input4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Taxi Photo</label>
      <input type="file" name="taxi_pic"class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Ac/Non AC</label>
<select name="taxi_category" class="form-control" id="">
<option  selected="true" disabled="disabled">--Select--</option>
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
  </div>
  <button type="submit" class="btn btn-primary" style="float:right">ADD</button>

  </div>
</form>
    </div>
   </div>
@endsection