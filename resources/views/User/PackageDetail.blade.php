@extends('Layout.User_Homepage')
@section('content')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
<style>
    .packagedetailcontainer{
        padding:77px;
    }
  .description  {
        background: #eded78;
    padding: 23px;
    border-radius: 14px;
    }
    .mainpic{
      width: 600px;
    height: 400px;
    border-radius: 13px;
    }
    .phto_album{
      font-size: 24px;
    line-height: 4.5em;
    }
    /* .li{
      display: contents;
    padding: 6px;
    } */
    .piclist .li{
    display: inline-block;
    width: 105px;
    /* height: 114px; */
    border: 1px solid #eee;
}
.piclist li img{
    width: 97%;
    height: auto;
}

</style>
<section>
<img src="images/businessevn.jpg"  style="width: 100%;
    height: 416px;"alt="slider">
<div class="packagedetailcontainer">
<!-- <h1>Package Details</h1> -->
<!-- <hr> -->
<div class="maincontainer" style="display:flex">
<div class="packagecontent" style="flex:.6">
<img src="../images/{{$package_details->package_image}}" class="mainpic" alt="product_photo">
<h3 class="font-weight-bold phto_album">Photo Albums </h3>

<ul class="piclist">
  @foreach(json_decode($package_details->subbanners) as $singlepic)
                  <li class="li"><img src="../files\{{$singlepic}}" data-toggle="modal" data-target="#exampleModalCenter" alt="subbanner"></li>
        @endforeach
               </ul>
      
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     hai
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end model    -->
<h3 class="font-weight-bold phto_album">Pricing</h3>
<p class="font-weight-light ">Package Price</p>
₹{{$package_details->total_amount}}
<p class=" font-weight-normal">PAYMENT POLICY</p>

<p class="">40% - At the Time of booking</p>
<p class="">60% - On Event date</p>




<h1 class="font-weight-bold phto_album">Product Details</h1>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product_name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @php
    $i=1;
    @endphp
    @foreach($first as $first)
    
    <tr>
      <th scope="row">
    {{$i}}
      </th>
      
      <td>{{$first->product_name}}</td>
      <td>{{$first->product_price}}</td>
      <td>{{$first->product_discription}}</td>
      <td>
       <img src="../uploaded_images/{{$first->product_photo}}" style="width:100px;height:67px;" alt="image"> 
  
      <!-- E:\xampp\htdocs\Perfect_Stom_Moments\public\\1650467209.jpg -->
    </td>
    </tr>
    @php
      $i=$i+1;
    
    @endphp
   @endforeach
  
  </tbody>
</table>
<!-- <button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button> &nbsp&nbsp&nbsp
    <a href="/BuyNow"class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i> -->
<!-- Buy Now</a> -->
</div>
<!-- payment_content start -->
<div class="payment_content" style="flex:.4">
<div class="container col-4" id="payment_content" style="position: fixed;">
<h2>Book Package</h2>
<!-- Total Price -₹{{$package_details->total_amount}} -->
<form action="/PackageDetail"method="POST" enctype="multipart/form-date">
  @csrf
  <input type="hidden" name="package_id" value="{{$package_details->package_id}}">
  <input type="hidden" name="total_amount" value="{{$package_details->total_amount}}">
  
<div class="form-group">
  <!-- <div class="col-md-12"> -->
      <div class="col">
        <label for="">Name</label>
      <input type="text" class="form-control" name="name" placeholder="">
    </div>

    <!-- </div> -->
    <div class="form-row" style="display:flex">
    <div class="col-6" style="margin-right: 15px;">
    <label for="">Mobile No</label>
      <input type="text" class="form-control" name="mobile_no"placeholder="">   
     </div>
    <div class="col-6">
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
  <div class="form-row" style="display:flex">
    <div class="form-group col-md-4">
      <label for="inputCity">Event Date</label>
      <input type="date" name="event_date"class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Time</label>
      <input type="time" name="time"class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Duration</label>
      <input type="text" name="Duration"class="form-control" id="inputZip">
    </div>
  </div>
          <div class="form-row">
          <!-- <p class="font-weight-light ">Package Price</p> -->


    <button class="btn btn-warning" style="    margin-top: 14px;
    float: right;">Save And Delivary Hear</button>
    <!-- <span id="cancel" style="cursor: pointer;">cancel</span> -->
</div>
    
</form>
</div>
</div> 
<!-- payment_content end -->
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
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
<h1 class="button text-center" style="text-align: center;margin-left: 94px;top: 31%;left: 35%;color:{{Session::get('data.color')}}">{{Session::get('data.msg')}}</h1> <br>
    <!-- <button class="button btn btn-warning">payment button</button> -->
    <div class="container tex-center mx-auto button">
    <form action="/PackageDetail_pay" method="POST" class="text-center mx-auto mt-5">
      
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