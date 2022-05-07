@extends('Layout.User_Homepage')
@section('content')
<!-- <style>

</style> -->
<section class="speakers section">
<div class="container">
<!-- <div class="row">
<div class="col-12">
<div class="section-title">
 <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">Speakers</h3> 
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">Our Employs</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div> -->
<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
<div class="row">
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <!-- <div class="card-header">
                                            <h5>Basic Componant</h5>
                                        </div> -->
                                        <div class="card-body">
                                            <h5>Add Your Custom Package</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <!-- <div class="col-md-6"> -->
                                                    <form method="POST" action="custompackage" enctype="multipart/form-data" >
                                                        @csrf
                                                         <!-- product tables start -->
                                                         <h6>Select Products</h6>
<hr>
                                                    <table class="table table-striped" id="MyTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      @php
      $i=1;
      @endphp
    @foreach($busdetailsproductdetails as $busdetailsproductdetail)
    <tr>
      <th scope="row">@php echo $i @endphp</th>
      <td>{{$busdetailsproductdetail->categorydet->category_name}}</td>
      <td>{{$busdetailsproductdetail->product_name}}</td>
      <td>{{$busdetailsproductdetail->product_price}}</td>
      <td>{{$busdetailsproductdetail->product_quentity}}</td>

      <td>
         
          <input type="checkbox" value="{{$busdetailsproductdetail->product_id}}" name="packageProduct[]">
        
      </td>
    </tr>
    @php  $i=$i+1 @endphp
   @endforeach
  </tbody>
</table>
<!-- product table end -->
<hr>
<h6>Add Package Details</h6>
<hr>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Package Use</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" name="packageuse" placeholder="">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" name="discription" id="exampleFormControlTextarea1" placeholder="" rows="3"></textarea>
                                                        </div>
                                                         <!-- <div class="form-group">
                                                            <label for="exampleInputEmail1">PAckage Image</label>
                                                            <input type="file" class="form-control" name="img" id="exampleInputEmail1"  >
                                                         </div> -->
                                                         <!-- <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Package Type</label>
                                                            <select class="form-control" name="type"id="exampleFormControlSelect1">
                                                            <option>--Select--</option>   
                                                            <option>Premium</option>
                                                                <option>Medium</option>
                                                                <option>Regular</option>
                                                             </select>
                                                        </div> -->
</div>
<div class="col-md-6" style="float: right;margin-top: -163px;padding-left:24px">
                                                        <!-- <div class="form-group">
                                                            <label for="exampleInputEmail1">Rent Amount</label>
                                                            <input type="text" class="form-control" name="rentamount"id="exampleInputEmail1"  placeholder="">
                                                         </div> -->
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Totel Amount</label>
                                                            <input type="text" class="form-control" name="totalamount" id="exampleInputEmail1"  placeholder="">
                                                         </div>
                                                       
                                                       
                                                        
                                                            </div>
                                                            <!-- <div class="form-group col-6">
                                                            <label for="exampleInputEmail1">subbanners</label>
                                                            <input type="file" class="form-control" name="subbanners[]" multiple id="exampleInputEmail1"  placeholder="">
                                                         </div>       -->
<button type="submit"style="float:right"class="btn btn-primary">Add Custom Package</button>

                                                    </form>
                                                </div>
                                                
                                            </div>
</div>
</div>
</div>
<div>
</div>
</div>
<div>
</div>
</section>
@if(Session::has('data'))
<style>
    .section{
        opacity: .2;
    }
    .nav{
        opacity: .2;
    }
</style>
<div class="wrapper" style="opacity: 1;">
<h1 class="button text-center" style="text-align: center;margin-left: 94px;top: 31%;left: 38%;color:{{Session::get('data.color')}}">{{Session::get('data.msg')}}</h1> <br>
    <!-- <button class="button btn btn-warning">payment button</button> -->
    <div class="container tex-center mx-auto button">
    <form action="/payCusome" method="POST" class="text-center mx-auto mt-5">
      
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