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
    <img src="images/Kerala.jpg"  style="width: 100%;
    height: 416px;"alt="slider">
    @if($tourdetails->isEmpty())
<H1>tour package not exist</H1>
@else

<div class="popular_destination_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Popular Destination</h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>

<div class="row">

@foreach($tourdetails as $tourdetail)
<!-- <div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x1.png.pagespeed.ic.U45P3KOe98.png" alt="">
</div>
<div class="content">
<a href="/TourpackageDetails/{{$tourdetail->tour_id}}">
<p class="d-flex align-items-center">{{$tourdetail->MainDescription}}  {{$tourdetail->days}} Days </p>

</a>
</div>
</div>
</div> -->
<div class="col-lg-4 col-md-6">
<div class="single_place">
<a href="/TourpackageDetails/{{$tourdetail->tour_id}}">
<div class="thumb">
<img src="images/place-x1.png.pagespeed.ic._C7q_9jAJk.jpg" alt="">
<!-- <a href="#" class="prise">$500</a> -->
</div>
<div class="place_info">
<h3>{{$tourdetail->MainDescription}} </h3>
<p>{{$tourdetail->days}} Days</p>
</div>
</a>
</div>
</div>
@endforeach
@endif
</div>

</div>
</div>

<!-- 
<div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Popular Places</h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x1.png.pagespeed.ic._C7q_9jAJk.jpg" alt="">

</div>
<div class="place_info">
<a href="destination_details.html"><h3>California</h3></a>
<p>United State of America</p>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x2.png.pagespeed.ic.khTpNP4t31.jpg" alt="">
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
</div>
<div class="col-lg-4 col-md-6">
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
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x4.png.pagespeed.ic.pt7Ftg7YsW.jpg" alt="">
<a href="#" class="prise">$500</a>
</div>
<div class="place_info">
<a href="destination_details.html"><h3>Miami Beach</h3></a>
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
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x5.png.pagespeed.ic.6L3jWhpG-C.jpg" alt="">
<a href="#" class="prise">$500</a>
</div>
<div class="place_info">
<a href="destination_details.html"><h3>California</h3></a>
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
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="images/place-x6.png.pagespeed.ic.nb2nV2i8kX.jpg" alt="">
<a href="#" class="prise">$500</a>
</div>
<div class="place_info">
<a href="destination_details.html"><h3>Saintmartine Iceland</h3></a>
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
</div>
<div class="row">
<div class="col-lg-12">
<div class="more_place_btn text-center">
<a class="boxed-btn4" href="#">More Places</a>
</div>
</div>
</div>
</div>
</div>
<div class="recent_trip_area">
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
</div>
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="serch_form">
<input type="text" placeholder="Search">
<button type="submit">search</button>
</div>
</div>
</div>
</div> -->
@endsection