@extends('Layout/Admin_layout')
@section('Admin_content')
<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
<div class="row">
 <!-- [ stiped-table ] start -->

 <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Tour Packages</h5>
                                            <hr>
                                            <!-- table for bus det -->
                                            <h6>Select A Bus</h6>
<hr>
<form method="POST" action="/Add_tourpackage" enctype="multipart/form-data">
                                                @csrf
                                                    <table class="table table-striped" id="MyTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <!-- <th scope="col">Category</th> -->
      <th scope="col">Taxi name</th>
      <th scope="col">Taxi Pic</th>
      <th scope="col">Taxi Type</th>
      <th scope="col">seating_capacitye</th>
      <th scope="col">price(1KM)</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      @php
      $i=1;
      @endphp
      @foreach($busdetails as $busdetail)
    <tr>
      <th scope="row">@php echo $i @endphp</th>
 
      <td>{{$busdetail->busname}}</td>
      <td><img src="uploaded_images/{{$busdetail->taxi_pic}}"  style="width: 60px;"alt="buspic"></td>
      <td>{{$busdetail->Taxi_type}}</td>
      <td>{{$busdetail->seating_capacity}}</td>
      <td>{{$busdetail->price}}</td>
      <td>
         
          <input type="radio" name="busname"value="{{$busdetail->bus_id}}" name="busid">
        
      </td>
      
    </tr>
    @php  $i=$i+1 @endphp
   @endforeach
  </tbody>
</table>
<h3>
Add details</h3>
                                            
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText4">Main desctinations</label>
      <input type="text" name="Maindesc" class="form-control" id="inputText4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4">Days</label>
      <!-- <input type="text" name="days" class="form-control" id="days" > -->
      <select name="days" id="days" class="form-control">
      <option value="1">--select--</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div>
 
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText4">Date and Time for Departure</label>
      <input type="text"  name="Departuretime"class="form-control" id="inputText4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4">arrived date and time </label>
      <input type="text" name="arrivedtime" class="form-control" id="inputText4" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText4">Price</label>
      <input type="text" name="price" class="form-control" id="inputText4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4">Price Description</label>
      <input type="text" name="pricedesc" class="form-control" id="" >
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add Tour Package</button>
</form>
<hr>



  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  @endsection
                                        
                                   
                                        