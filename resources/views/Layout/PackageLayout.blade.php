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
<body>
    <img src="images/businessevn.jpg"  style="width: 100%;
    height: 416px;"alt="slider">

</div>
</div>
<div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Other {{ $type}} Package</h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>
<div class="row">
    @foreach($Premiums as $Premium)
    <a href="PackageDetail/{{$Premium->package_id}}">

<div class="col-lg-4 col-md-6">
<div class="single_place" style="height: 367.5px;">
<div class="thumb">
<!-- 356 × 201 p -->
<img src="images/{{$Premium->package_image}}"  style="width:356px;height:201px"alt="premium package">
<h3 class="prise">{{$Premium->total_amount}}</h3>
</div>
<div class="place_info">
<h3>{{$Premium->package_use}}</h3>
<p>{{$Premium->discription}}</p>
<div class="rating_days d-flex justify-content-between">
<!-- <span class="d-flex justify-content-center align-items-center"> -->
<!-- <i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i> -->
<!-- <a href="#">(20 Review)</a> -->
<!-- </span> -->
<div class="days">
<i class="fa fa-clock-o"></i>
<!-- More>></a> -->
</div>
</div>
</div>
</div>
</a>
</div>
@endforeach

</div>
<div class="row">
<div class="col-lg-12">
<div class="more_place_btn text-center">
<a class="boxed-btn4" href="#">More Packages</a>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="recent_trip_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Recent Trips</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single_trip">
<div class="thumb">
<img src="images/trip-x1.png.pagespeed.ic.8QbVwnQzjI.jpg" alt="">
</div>
<div class="info">
<div class="date">
<span>Oct 12, 2019</span>
</div>
<a href="#">
<h3>Journeys Are Best Measured In
New Friends</h3>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_trip">
<div class="thumb">
<img src="images/trip-x2.png.pagespeed.ic.D_-MpLnpCh.jpg" alt="">
</div>
<div class="info">
<div class="date">
<span>Oct 12, 2019</span>
</div>
<a href="#">
<h3>Journeys Are Best Measured In
New Friends</h3>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_trip">
<div class="thumb">
<img src="images/trip-x3.png.pagespeed.ic.RmfAcV7rf9.jpg" alt="">
</div>
<div class="info">
<div class="date">
<span>Oct 12, 2019</span>
</div>
<a href="#">
<h3>Journeys Are Best Measured In
New Friends</h3>
</a>
</div>
</div>
</div>
</div>
</div>
</div> -->
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="serch_form">
<input type="text" placeholder="Search">
<button type="submit">search</button>
</div>
</div>
</div>
</div>
@endsection