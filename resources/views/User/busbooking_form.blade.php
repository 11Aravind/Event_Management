@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<h1>Bus Booking Details </h1>
<form action="/AddUserFooddet" method="POST" enctype="multipart/form-data">
  @csrf
 
<input type="hidden" name="towner_id" value="{{$towner_id}}"> 
<input type="hidden" name="bus_id" value="{{$bus_id}}">
  
  <!-- UserEvent_id
product_id -->
<!-- <div class="container"> -->

  <div class="row">
    <div class="col">
      <label for="inputEmail4">Date Of Event</label>
      <input type="date" name="dateOfEvent" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputPassword4">Time</label>
      <input type="time" name="time" class="form-control col-6" id="inputPassword4" placeholder="">
  </div>
    </div>
 

  
  <div class="row">
    <div class="col">
    <label for="inputPassword4">Starting Place address</label>
      <textarea type="text" name="startingplace" class="form-control" cols="10" rows="3" id="inputPassword4" placeholder=""> </textarea>
    
    </div>
    <div class="col">
    <label for="inputPassword4">arrival place Address</label>
      <textarea type="text" name="arrivalplace" class="form-control" cols="10" rows="3" id="inputPassword4" placeholder="" ></textarea>
  </div>
    </div> 


    
  <div class="row">
    <div class="col">
      <label for="inputEmail4">Kilometers</label>
      <input type="text" name="kolometers" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputPassword4">Total Price</label>
      <input type="text" name="totelprice" class="form-control col-6" id="inputPassword4" placeholder="" readonly>
  </div>
    </div>


    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <button class="btn btn-primary" style="float:right;margin-top:25px;">Submit</button>
  </div>
    </div>
  </div>
       


</form>
 
<!-- </div> -->
</div>
</div>
@endsection