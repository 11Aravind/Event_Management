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
    <!-- categorys -->
        <ul class="EventCategory"style="">
            <li>All</li>
            @foreach($categorys as $category)
            <li><a href="#">{{$category->category_name}}</a></li>
          @endforeach
        </ul>
    <!-- </div> -->
<div class="row justify-content-center">
<div class="row">
@foreach($event_dets as $event_det)
<div class="col-lg-3 col-md-6">
<a href="Eventdetails/{{$event_det->event_id}} " style="">
<div class="single_place">
<div class="thumb">
<!-- <img src="Template_asset\images\pub.jpg" alt=""> -->
<img src="uploaded_images/{{$event_det->event_banner}}" alt="">

<!-- <a href="#" class="prise">$500</a> -->
</div>
<div class="place_info">
<h3>{{$event_det->event_name}}</h3>
<span>Free</span>
<span>{{$event_det->totel_ticket}} remaining</span>
<div class="rating_days d-flex justify-content-between">
<span class="d-flex justify-content-center align-items-center">
<!-- Monday 4.30PM -->

{{$event_det->starting_time}}
<!-- <a href="#">(20 Review)</a> -->
</span>
<div class="days">
<i class="fa fa-clock-o"></i>

<a href="#">{{$event_det->duration}} end </a>
<br>
<!-- <a href="Eventdetails/{{$event_det->event_id}} " style="color:red">More>></a> -->
</div>
</div>
</div>
</div>
</a>
</div>
@endforeach
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