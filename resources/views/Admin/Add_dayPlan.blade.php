@extends('Layout/Admin_layout')
@section('Admin_content')
<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
<div class="row">
    <h1>ready ayo da</h1>
    <br>
        <form method="POST" action="/Add_daysplane" enctype="multipart/form-data">
 @csrf
      <h4> Day </h4><hr>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText4">Morning Visite Tourist Place </label>
      <input type="text" name="Moringplace"class="form-control" id="inputText4" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText4">Afternoon Tour Plase</label>
      <input type="text"name="Afteplace" class="form-control" id="inputText4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4">Night Programs</label>
      <input type="text" name="Nightprgm"class="form-control" id="inputText4" placeholder="hotel name for stay">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText4"> Hotel Name </label>
      <input type="text" name="Hotelname"class="form-control" id="inputText4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4"> hotel picture </label>
      <input type="file" name="hotelpic"class="form-control" id="inputText4" placeholder="hotel name for stay">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputText4"> Hotel Locality </label>
      <input type="text" name="locality"class="form-control" id="inputText4" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4">Room Type</label>
      <select class="form-control" name="" id="">
      <option value="">--Select--</option>
          <option value="">Ac</option>
          <option value="">Non Ac</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add Place</button>
</form>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
@endsection