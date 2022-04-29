@extends('Layout.User_Homepage')
@section('content')
<style>
    .form{
        box-shadow: 0 0 30px 0 rgb(0 0 0 / 10%);
    z-index: 9;
    padding: 30px;
    background: #ffffff;
    margin-top: -50px;
    position: relative;
    }
</style>
<!-- <body> -->
    <img src="images/Kerala.jpg"  style="width: 100%;
    height: 416px;"alt="slider">


<div class="popular_destination_area" style="padding-top: 61px;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Popular Destination</h3>
<!-- <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p> -->
</div>
</div>
</div>
@if($tourdetails->isEmpty())
<H1>Tour Package not Added</H1>
@else
<div class="row">
@foreach($tourdetails as $tourdetail)
<div class="col-lg-4 col-md-6">
<a href="/TourpackageDetails/{{$tourdetail->tour_id}}">
<div class="single_place" style="height: 300.5px;">
<div class="thumb">
<img src="uploaded_images\{{$tourdetail->banner}}" style="width:362px;height:204px" alt="banner">
<h3 class="prise">{{$tourdetail->days}} Days</h3>
<!-- <a href="#" class="prise">$500</a> -->
</div>
<div class="place_info">
<h3>{{$tourdetail->MainDescription}} </h3>
<div class="rating_days d-flex justify-content-between">

</div>
</div>
</div>
</a>
</div>

@endforeach
@endif





</div>

</div>
</div>

@endsection