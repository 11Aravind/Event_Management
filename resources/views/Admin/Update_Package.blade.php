@extends('Layout/Admin_layout')
@section('Admin_content')

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
                                            <h5>Add Package</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <!-- <div class="col-md-6"> -->
                                                    <form method="POST" action="/updatePackage/{{$Packages->package_id}}" enctype="multipart/form-data" >
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
                                                            <input type="text"value="{{$Packages->package_use}}" class="form-control" id="exampleInputEmail1" name="packageuse" placeholder="Product Name">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">PAckage Image</label>
                                                            <input type="file"value="{{$Packages->package_image}}" class="form-control" name="img" id="exampleInputEmail1"  >
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Package Type</label>
                                                            <select value="{{$Packages->type}}"class="form-control" name="type"id="exampleFormControlSelect1">
                                                            <option>--Select--</option>   
                                                            <option>Premium</option>
                                                                <option>Medium</option>
                                                                <option>Regular</option>
                                                             </select>
                                                        </div>
</div>
<div class="col-md-6" style="float: right;margin-top: -269px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Rent Amount</label>
                                                            <input type="text" value="{{$Packages->rent_amount}}"class="form-control" name="rentamount"id="exampleInputEmail1"  placeholder="Product Price">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Totel Amount</label>
                                                            <input type="text" value="{{$Packages->total_amount}}"class="form-control" name="totalamount" id="exampleInputEmail1"  placeholder="Quentity">
                                                         </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" name="discription" id="exampleFormControlTextarea1" placeholder="Product Description" rows="3">{{$Packages->discription}}</textarea>
                                                        </div>
                                                        
                                                            </div>
                                                            <div class="form-group col-6">
                                                            <label for="exampleInputEmail1">subbanners</label>
                                                            <input type="file" class="form-control"value="{{$Packages->x}}" name="subbanners[]" multiple id="exampleInputEmail1"  placeholder="Quentity">
                                                         </div>      
<button type="submit"style="float:right"class="btn btn-primary">Add Package</button>

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
@endsection