@extends('Layout.User_Homepage')
@section('content')
<style>
  #col-6{
    padding:18px;
  }
</style>
<img alt="slider" src="../images/Kerala.jpg"  style="width: 100%;
    height: 416px;" >
<form>
  <div class="col-12" style="display:flex">
    <div class="col-6" id="col-6">
      <label for="form-control">name</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-6" id="col-6">
       <label for="form-control">name</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <div class="col-12" style="display:flex">
    <div class="col-6" id="col-6">
      <label for="form-control">name</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-6" id="col-6">
       <label for="form-control">name</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <div class="col-12" style="display:flex">
    <div class="col-6" id="col-6">
      <label for="form-control">name</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-6" id="col-6">
       <label for="form-control">name</label>
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <button class="btn btn-primary">Book Seat</button>
  <!-- </div> -->
</form>
@endsection