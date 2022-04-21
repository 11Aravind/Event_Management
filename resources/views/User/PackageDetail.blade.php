@extends('Layout.User_Homepage')
@section('content')
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
    height: 114px;
    border: 1px solid #eee;
}
.piclist li img{
    width: 97%;
    height: auto;
}

</style>
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
                  <li class="li"><img src="https://s.fotorama.io/1.jpg" alt=""></li>
                  <li class="li"><img src="https://s.fotorama.io/2.jpg" alt=""></li>
                  <li class="li"><img src="https://s.fotorama.io/3.jpg" alt=""></li>
                  <li class="li"><img src="https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/" alt=""></li>
               </ul>
<h3 class="font-weight-bold phto_album">Pricing</h3>
<p class="font-weight-light ">Package Price</p>
₹1200
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
<div class="container col-4" style="position: fixed;">
<h2>Book Package</h2>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-danger">₹Get Quotation</button>
</form>
</div>
</div> 
<!-- payment_content end -->
</div>

</div>
@endsection