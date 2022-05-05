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
                                            <h5>Add Event</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <form method="POST" action="/updateEvent" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="event_id" value="{{$product->event_id}}">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Event Name</label>
      <input type="text" name="event_name"class="form-control" value="{{$product->event_name}}" id="inputEmail4" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4"> Event Category</label> <br>
     <select name="event_category" id="" value="{{$product->category_id}}"class="form-control">
     <option value="">--Select--</option>
     @foreach($categorys as $category)
         <option value="{{$category->category_id}}">{{$category->category_name}}</option>
         @endforeach
     </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Upload Event Banner</label>
      <input name="event_bsnner"type="file" value=""class="form-control" id="inputEmail4" >
    </div>
  </div>
  <hr>
  <h5>When is your event</h5>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Event Date</label>
      <input type="date"name="event_date"  value="{{$product->event_date}}" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Time</label>
     <input type="time"name="starting_time"  value="{{$product->starting_time}}" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Duration</label>
      <input type="date" name="duration" value="{{$product->duration}}" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Duration Time</label>
      <input type="time" name="duration_time" value="{{$product->duration_time}}" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ticket Price</label>
      <input type="text"name="ticketprice" value="{{$product->ticketprice}}"class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> Totel No. Of Ticket Available</label> 
      <input type="text"name="totel_ticket" value="{{$product->totel_ticket}}"class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group ">
      <!-- <label for="inputPassword4">Discount</label>  -->
      <input type="hidden" name="discount" value="none" class="form-control" id="inputEmail4" >
    </div>
    <div class="form-group ">
      <!-- <label for="inputPassword4">Discount End</label>  -->
      <input type="hidden" name="discount_end" value="none" class="form-control" id="inputEmail4" >
    </div>
</div>
<div class="form-row">
   <label for="">Event Discription</label>
        <textarea name="event_discription"   class="form-group col-md-12" rows="3">{{$product->event_discription}}</textarea>

</div>
  <button type="submit" class="btn btn-primary">Update Event</button>
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