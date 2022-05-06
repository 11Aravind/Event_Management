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
                                            <h5>Issue Order</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                         
                    <form action="/ApprovedEmploys" method="POST">
                        @csrf
                        <input type="hidden" name="employ_id" value="{{$employ_id}}">
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputPassword4">Work Type</label>
      <input type="text" class="form-control" id="inputPassword4"  name="work_type">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Contact_Number</label>
      <input type="text" class="form-control" id="inputZip" name="contact_no">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Date</label>
      <input type="date" class="form-control" id="inputCity" name="date">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputZip">Time</label>
      <input type="time" class="form-control" id="inputZip" name="time">
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress"  name="address">
  </div> 
  </div>
      <!-- <div class="modal-footer"> -->
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Issue Order</button>
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