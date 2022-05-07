@extends('Layout.User_Homepage')
@section('content')
<section>
<div class="popular_places_area">
<div class="container">
<h1>Bus Booking Details </h1>
<form action="/busbooking_forms" method="POST" enctype="multipart/form-data">
  @csrf
 
<input type="hidden" name="towner_id" value="{{$towner_id}}"> 
<input type="hidden" name="bus_id" value="{{$bus_id}}">
<input type="hidden" name="oneKilometerPrice" id="oneKilometerPrice" value="{{$BusDetail->price}}">

<div class="row">
    <div class="col-4">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col-4">
      <label for="inputPassword4">Contact No</label>
      <input type="text" name="contact_no" class="form-control col-6" id="inputPassword4" placeholder="">
  </div>
  <div class="col-4">
      <label for="inputPassword4">Email</label>
      <input type="text" name="email" class="form-control col-6" id="inputPassword4" placeholder="">
  </div>
    </div>
    


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
      <input type="text" onChange="change_send(this.value);" name="kolometers" class="form-control col-6" id="kolometers" placeholder="">
    </div>
    <div class="col">
      <label for="inputPassword4">Total Price(for one kilometer price is({{$BusDetail->price}})</label>
 

      <input type="text" name="totelprice" class="form-control " id="totelprice" placeholder="" readonly>
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
<script type="text/javascript">
function change_send(kolometers)
{
  $kolometers=kolometers;
  $oneKilometerPrice=$("#oneKilometerPrice").val();
  $totelprice=$oneKilometerPrice*$kolometers;
   $("#totelprice").val($totelprice);
	// alert($totelprice);

}
</script>
</section>
@if(Session::has('data'))
<style>
    section{
        opacity: .2;
    }
    nav{
        opacity: .2;
    }
</style>
<div class="wrapper" style="opacity: 1;">
<h1 class="button text-center" style="text-align: center;margin-left: 94px;top: 31%;left: 38%;color:{{Session::get('data.color')}}">{{Session::get('data.msg')}}</h1> <br>
    <!-- <button class="button btn btn-warning">payment button</button> -->
    <div class="container tex-center mx-auto button">
    <form action="/pay" method="POST" class="text-center mx-auto mt-5">
      
      <script
          src="https://checkout.razorpay.com/v1/checkout.js"
          data-key="rzp_test_iKlM2rsXjuV7R1"
    data-amount="{{Session::get('data.amount')}}" 
          data-currency="INR"
    data-order_id="{{Session::get('data.order_id')}}"
          data-buttontext="Pay with Razorpay"
          data-name="FESTIVA EVENTS"
          data-description="Test transaction"
         
          data-theme.color="#182fa3"
      ></script>
      <input type="hidden" custom="Hidden Element" name="hidden">
      </form>
</div>
</div>


@endif
@endsection