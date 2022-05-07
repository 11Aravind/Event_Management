@extends('Layout.User_Homepage')
@section('content')
<img src="https://dibms.org/image/complaint-banner.jpg" style="width: 100%;
    height: 416px;" alt="slider">

<div class="container shadow-none p-3 mb-5 bg-light rounded ">
<h1 class="text-center ">Complaints</h1>
@if(Session::get('msg'))

<h1 class="text-center" style="color:{{Session::get('color')}}">{{Session::get('msg')}}</h1>
@endif

<form method="POST" action="/RegisterComplaints" enctype="multipart/form-data" >
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Proof(Optional)</label>
    <input type="file" name="proof" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Complaint</label>
    <textarea class="form-control" name="complaint" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button style="float:right;    margin-top: 14px;" class="btn btn-primary">File Complaint</button>
</form>
</div>
@endsection