@extends('Layout.User_Homepage')
@section('content')
<style>
    .EventCategory{
        display:flex;
        color:black;
    }
    .EventCategory li{ 
    padding: 0px 16px;
    }
    .EventCategory li a.active {
        border-bottom: 4px solid #14ede3;
    }
</style>
<img src="Template_asset\images\event_banner.png" alt="event banner">
<div class="popular_destination_area">
<div class="container">
    <!-- <div class="EventCategory"> -->
        <ul class="EventCategory"style="">
            <li><a href="#">All</a></li>
            <li><a href="#">Business</a></li>
            <li>Art</li>
        </ul>
    <!-- </div> -->
<div class="row justify-content-center">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="Template_asset\images\pub.jpg" alt="">
<!-- <a href="#" class="prise">$500</a> -->
</div>
<div class="place_info">
<a href="destination_details.html"><h3>Public Speaking Strategy For Success</h3></a>
<span>Free</span>
<span>4 remaining</span>
<div class="rating_days d-flex justify-content-between">
<span class="d-flex justify-content-center align-items-center">
Monday 4.30PM
<!-- <a href="#">(20 Review)</a> -->
</span>
<div class="days">
<i class="fa fa-clock-o"></i>
<a href="#">5 Days</a>
<br>
<a href="#" style="color:red">More>></a>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="col-lg-3 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="Template_asset\images\pub.jpg" alt="">
<a href="#" class="prise">$500</a>
</div>
<div class="place_info">
<a href="destination_details.html"><h3>Korola Megna</h3></a>
<p>United State of America</p>
<div class="rating_days d-flex justify-content-between">
<span class="d-flex justify-content-center align-items-center">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<a href="#">(20 Review)</a>
</span>
<div class="days">
<i class="fa fa-clock-o"></i>
<a href="#">5 Days</a>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x3.png.pagespeed.ic.fbiqkH0MMY.jpg" alt="">
<a href="#" class="prise">$500</a>
</div>
<div class="place_info">
<a href="destination_details.html"><h3>London</h3></a>
<p>United State of America</p>
<div class="rating_days d-flex justify-content-between">
<span class="d-flex justify-content-center align-items-center">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<a href="#">(20 Review)</a>
</span>
<div class="days">
<i class="fa fa-clock-o"></i>
<a href="#">5 Days</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x3.png.pagespeed.ic.fbiqkH0MMY.jpg" alt="">
<a href="#" class="prise">$500</a>
</div>
<div class="place_info">
<a href="destination_details.html"><h3>London</h3></a>
<p>United State of America</p>
<div class="rating_days d-flex justify-content-between">
<span class="d-flex justify-content-center align-items-center">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<a href="#">(20 Review)</a>
</span>
<div class="days">
<i class="fa fa-clock-o"></i>
<a href="#">5 Days</a>
</div>
</div>
</div>
</div>
</div> -->

</div>
</div>
</div>
</div>

@endsection