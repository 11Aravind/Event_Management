@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<h1>Add Event Details</h1>
<form>
  @csrf
  <h1>{{$SingleProductdetails}}</h1>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date Of Event</label>
      <input type="text" name="dateofEvent" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Event Location</label>
      <input type="text" name="" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">No Of Gust</label>
      <input type="text" name="" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">No Of Employees</label>
      <input type="text" name="" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <!-- <button type="submit" class="btn btn-primary">BuyNow</button> -->
  <a href="/AddUserFooddet" class="btn btn-primary">BuyNow</a>
</form>


</div>
</div> 
@endsection