@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<h1>Add Event Details</h1>
<form action="/AddUserFooddet" method="POST" enctype="multipart/form-data">
  @csrf
 
  @foreach($SingleProductdetails as $SingleProductdetails)
 <input type="hidden" id="oneItemPrice"value="{{$SingleProductdetails->product_price}}">
 <input type="hidden" name="product_id" id="product_id"value="{{$SingleProductdetails->product_id}}">
 <input type="hidden" name="Catering_user_id" id="Catering_user_id"value="{{$Catering_user_id}}">
  @endforeach
  
  <!-- UserEvent_id
product_id -->
<!-- <div class="container"> -->

  <div class="row">
    <div class="col">
      <label for="inputEmail4">Date Of Event</label>
      <input type="text" name="dateOfEvent" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputPassword4">Event Location</label>
      <input type="text" name="EventLocation" class="form-control col-6" id="inputPassword4" placeholder="">
  </div>
    </div>
 

  
  <div class="row">
    <div class="col">
    <label for="inputPassword4">food serving starting time</label>
      <input type="text" name="ServingStartingtime" class="form-control" id="inputPassword4" placeholder="">
    </div>
    <div class="col">
    <label for="inputPassword4">food serving ending time</label>
      <input type="text" name="Servingendingtime" class="form-control" id="inputPassword4" placeholder="" >
  </div>
    </div>

    <div class="row">
    <div class="col">
    <label for="inputPassword4">Serving type</label>
      <input type="text" name="servingtype" class="form-control" id="inputPassword4" placeholder="" >
    </div>
    <div class="col">
    <label for="inputEmail4">No Of Gust</label>
      <input type="text" name="noOfGust" onChange="change_send(this.value);" class="form-control" id="noOfGust" placeholder="">
  </div>
    </div>

    <div class="row">
    <div class="col">
    <label for="inputPassword4">No Of Employees</label>
      <input type="text" name="noofemploy" class="form-control" id="inputPassword4" placeholder="">
    </div>
    <div class="col">
    <label for="inputPassword4">Total Price(One Food Product Price Is {{$SingleProductdetails->product_price}})</label>
      <input type="text" name="Totalprice" class="form-control"  id="Totalprice" readonly>
  </div>
    </div>

    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <button class="btn btn-primary" style="float:right;margin-top:25px;">Add Event Details</button>
  </div>
    </div>
  </div>
       


</form>
 
<!-- </div> -->
</div>
</div>
<script type="text/javascript">
function change_send(noOfGust)
{
  $noOfGust=noOfGust;
  $oneItemPrice=$("#oneItemPrice").val();
  $Totalprice=$oneItemPrice*$noOfGust;
   $("#Totalprice").val($Totalprice);
	// alert($Totalprice);

}
</script>

<!-- <script>
  $('#noOFGust').on('change', function() {
    $noOfGust=$("#noOfGust").val(this.value );
    $oneItemPrice=$("#oneItemPrice").val();
    $Totalprice=$oneItemPrice+$noOfGust;
    alert($Totalprice);
 
});
</script> -->
@endsection