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
            <h4>Login<i class="fa fa-check" aria-hidden="true"></i>
</h4>
        </div>
        <div class="option" style="">
        <h4>  Delivary Address</h4>
        <div class="delivaryaddress">
            <form action="">
            <div class="form-check">
  <input class="form-check-input" type="radio" name="name" id="exampleRadios1"  checked>
  <label class="form-check-label" for="exampleRadios1">
    Siva Home 8848310248 <button class="btn btn-link" style="float:right">Edit</button>
    <br>
    Sreenandanam, Muthupilakkad kizhakku, Kunnathur Subdistrict, Kollam District, Kerala 
    <br>  690520 <br>
    <button class="btn btn-warning">DELIVER HERE</button>
  </label>
</div>
 <!-- </form> -->
 <!-- <form action=""> -->
            <div class="form-check">
  <input class="form-check-input" type="radio" name="name" id="exampleRadios1" >
  <label class="form-check-label" for="exampleRadios1">
    Siva Home 8848310248 <button class="btn btn-link" style="float:right">Edit</button>
    <br>
    Sreenandanam, Muthupilakkad kizhakku, Kunnathur Subdistrict, Kollam District, Kerala 
    <br>  690520 <br>
    <button class="btn btn-warning">DELIVER HERE</button>
  </label>
</div>
 </form>
 
        </div>
        </div>
        <!-- <div class="option">
        <h4></h4>
        </div> -->
        
        <div class="option">
        <h4 style=""><i class="fa fa-plus" aria-hidden="true"></i>
Add new address </h4>

<div class="newaddressform" style="">
<form >

  <div class="col-md-12">
      <div class="col-md-6">
        <label for="">Name</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <!-- </div> -->
    <div class=" col-md-6">
    <!-- <div class="col"> -->
        <label for="">Mobile No</label>
      <input type="text" class="form-control" placeholder="Last name">
    <!-- </div> -->
    </div>
</div>
<div class="form-row">
    <div class="col">
        <label for="">Pincode</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
    <label for="">Locality</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
</div>
<!-- <div class="form-row"> -->
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <!-- </div> -->
<div class="form-row">
  <div class="col">
      <label for="">City/District/Town</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
        <label for="">District</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    </div>
<div class="form-row">
    <div class="col">
        <label for="">Landmark</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
        <label for="">Alternate Phone(Optional)</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
</div>
    <br>    
 <div class="form-row">
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Home(All day Delivary)</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Work(Delivary between 10AM-5PM)</label>
</div>
 </div>
<div class="form-row">
    <button class="btn btn-warning">Save And Delivary Hear</button>
    <button class="btn btn-link">cancel</button>
</div>
    
</form>
</div>
        
        </div>
        <div class="option">
        <h4>Order Summary</h4>
        <div class="ordersummary"style="display:flex">
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