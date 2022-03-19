@extends('Layout.User_Homepage')
@section('content')
<style>
    .option{
        background: white;
        margin: 22px 89px;
    padding: 14px;
    }
    .checkoutcontainer{
        /* margin:47px 0px; */
        padding:75px 0px;
        background:#f1f3f6
    }
    .newaddressform{
        background:#f5faff;
        padding: 85px;
    }
    .option h4{
        margin-bottom:19px;
    }
</style>

    <div class="checkoutcontainer" style="">
        <div class="option">
            <h4>Login<i class="fa fa-check" aria-hidden="true"></i></h4>
        </div>
        <div class="option" style="">
        <h4>  Delivary Address</h4>
        <div class="delivaryaddress" id="delivaryaddress" style="">
            <form action="">
              @foreach($addressdets as $addressdet)
            <div class="form-check">
  <input class="form-check-input" type="radio" name="name" id="exampleRadios1"  checked>
  <label class="form-check-label" for="exampleRadios1">
    {{$addressdet->name}} Home {{$addressdet->mobileno}} <button class="btn btn-link" style="float:right">Edit</button>
    <br>
    {{$addressdet->address}}, {{$addressdet->locality}}, {{$addressdet->city}}, {{$addressdet->district}}, Kerala 
    <br>  {{$addressdet->pincode}} <br>
    <button class="btn btn-warning">DELIVER HERE</button>
  </label>
</div>
@endforeach
 <!-- </form> -->
 <!-- <form action=""> -->
  
 </form>
 
        </div>
        </div>
        <!-- <div class="option">
        <h4></h4>
        </div> -->
        <!-- <div class="option">
            <h4>Event Details</h4>
            <form action="">
              Event Details
              
              <input type="text">
            </form>
        </div> -->
        <div class="option">
        <h4 id="addaddressBtn" style="cursor: pointer;"><i class="fa fa-plus" aria-hidden="true"></i>
Add new address </h4>

<div class="newaddressform" id="newaddressform" style="">

<form action="/AddAddress"method="POST" enctype="multipart/form-date">
  @csrf
 
<div class="form-group">
  <!-- <div class="col-md-12"> -->
      <div class="col-md-6">
        <label for="">Name</label>
      <input type="text" class="form-control" name="name" placeholder="">
    </div>
    <!-- </div> -->
    <div class=" col-md-6">
    <!-- <div class="col"> -->
        <label for="">Mobile No</label>
      <input type="text" class="form-control" name="mobileno"placeholder="">
    <!-- </div> -->
    <!-- </div> -->
</div>
</div>
<div class="form-row">
    <div class="col">
        <label for="">Pincode</label>
      <input type="text" name="pincode" class="form-control" placeholder="">
    </div>
    <div class="col">
    <label for="">Locality</label>
      <input type="text" name="locality" class="form-control" placeholder="">
    </div>
</div>
<!-- <div class="form-row"> -->
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" placeholder="(area and street)" rows="3"></textarea>
  </div>
  <!-- </div> -->
<div class="form-row">
  <div class="col">
      <label for="">City/District/Town</label>
      <input type="text" name="city" class="form-control" placeholder="">
    </div>
    <div class="col">
        <label for="">District</label>
      <input type="text" name="district" class="form-control" placeholder="">
    </div>
    </div>
    
<div class="form-row">
   
    <div class="col">
        <label for="">Alternate Phone(Optional)</label>
      <input type="text" name="Aphoneno" class="form-control" placeholder="">
    </div>
</div>
    <br>    
 <div class="form-row">
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="delivarplace" id="inlineRadio1" value="Home">
  <label class="form-check-label" for="inlineRadio1">Home(All day Delivary)</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="delivarplace" id="inlineRadio2" value="Auditorium">
  <label class="form-check-label" for="inlineRadio2">Auditorium(Delivary between 10AM-5PM)</label>
</div>
 </div>
<div class="form-row">
    <button class="btn btn-warning">Save And Delivary Hear</button>
    <span id="cancel" style="cursor: pointer;">cancel</span>
</div>
    
</form>
</div>
        
        </div>
        <div class="option">
        <h4>Order Summary</h4>
        <div class="ordersummary" id="ordersummary"style="display:flex;">
    <div class="img" style="width:49px;height:100px;margin-right: 41px;">
        <img src="https://rukminim1.flixcart.com/image/416/416/k4a7c7k0/mouse/m/h/t/dell-ms116-wired-optical-mouse-3yrs-warranty-original-imafmktgxyt5ge9k.jpeg?q=70" alt="productimage">
    </div>
<div class="productcontent">
DELL MS 116 Wired Optical Mouse
1234
<br>
usb:black
<br>  <br>
<i class="fa fa-inr" aria-hidden="true"></i>
260
<br>
<a href="#">Remove</a>
</div>
</div>
        </div>
        <div class="option">
        <h4>Payment Options</h4>
        <h6>strip</h6>
        </div> 
    </div>

    @endsection