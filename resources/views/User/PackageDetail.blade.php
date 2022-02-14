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
</style>
<img src="images/businessevn.jpg"  style="width: 100%;
    height: 416px;"alt="slider">
<div class="packagedetailcontainer">
<h1>Package Details</h1>
<hr>
<div class="description">
<h4>Discription</h4>
<p>Health Action International (HAI) is an independent non-profit organisation. Our staff and global network conduct research and advocacy to advance policies that enable access to safe, effective, affordable and 
    quality-assured medicines and rational medicine use. For everyone, everywhere.
    Health Action International (HAI) is an independent non-profit organisation. Our staff and global network conduct research and advocacy to advance policies that enable access to safe, effective, affordable
     and quality-assured medicines and rational medicine use. For everyone, everywhere.</p>
</div>


<h1>Product Details</h1>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product_name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($first as $first)
    <tr>
      <th scope="row">1</th>
      
      <td>{{$first->product_name}}</td>
      <td>{{$first->product_price}}</td>
      <td>{{$first->product_discription}}</td>
    </tr>
  
   @endforeach
  
  </tbody>
</table>
<button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button> &nbsp&nbsp&nbsp
    <a href="/BuyNow"class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>
Buy Now</a>
</div> 
@endsection