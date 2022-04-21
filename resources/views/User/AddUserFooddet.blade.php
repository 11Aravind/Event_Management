@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<h1>Add Event Details</h1>
<form action="/AddUserFooddet" method="POST" enctype="multipart/form-data">
  @csrf
 
  @foreach($SingleProductdetails as $SingleProductdetails)
 <input type="hidden" id="oneItemPrice"value="{{$SingleProductdetails->product_price}}">
 <input type="hidden" name="product_id"id="product_id"value="{{$SingleProductdetails->product_id}}">
  @endforeach
  
  <!-- UserEvent_id
product_id -->
<!-- <div class="container"> -->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date Of Event</label>
      <input type="text" name="dateOfEvent" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Event Location</label>
      <input type="text" name="EventLocation" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>

  <div class="form-group col-md-6">
      <label for="inputPassword4">food serving starting time
</label>
      <input type="text" name="ServingStartingtime" class="form-control" id="inputPassword4" placeholder="">
    </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">food serving ending time</label>
      <input type="text" name="Servingendingtime" class="form-control" id="inputPassword4" placeholder="" >
    </div>


<div class="form-group col-md-6">
      <label for="inputPassword4">Serving type</label>
      <input type="text" name="servingtype" class="form-control" id="inputPassword4" placeholder="" >
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">No Of Gust</label>
      <input type="text" name="noOfGust" class="form-control" id="noOFGust" placeholder="">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">No Of Employees</label>
      <input type="text" name="noofemploy" class="form-control" id="inputPassword4" placeholder="">
    </div>

  <!-- <button type="submit" class="btn btn-primary">BuyNow</button> -->
  <div class="form-group col-md-6">
      <label for="inputPassword4">Total Price</label>
      <input type="text" name="Totalprice" class="form-control" value="300" id="inputPassword4" placeholder="" readonly>
    </div>

  <button class="btn btn-primary">BuyNow</button>
</form>
 
<!-- </div> -->

</div>
</div>
@endsection