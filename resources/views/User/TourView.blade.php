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



<div class="search-availablity">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-10">
    <form class="form">
    <div class="row">
    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
        <select style="display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out , box-shadow .15s ease-in-out;">
            <option data-display="Travel type">Travel type </option>
            <option value="1">Some option</option>
            <option value="2">Another option</option>
            </select>  
    </div>
    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
    <input type="text" class="form-control" name="daterange">
    </div>
    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
    <input type="text" class="form-control" placeholder="Enter # of People">
    </div>
    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
    <input type="submit" class="btn btn-primary btn-block" style="color: white;
    background: #00aced;"value="Search">
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>



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
<div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x1.png.pagespeed.ic.U45P3KOe98.png" alt="">
</div>
<div class="content">
<p class="d-flex align-items-center">Italy <a href="travel_destination.html"> 07 Places</a> </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x2.png.pagespeed.ic.8sdFlO1TPt.png" alt="">
</div>
<div class="content">
<p class="d-flex align-items-center">Brazil <a href="travel_destination.html"> 03 Places</a> </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x3.png.pagespeed.ic.jwNAyltY22.png" alt="">
</div>
<div class="content">
<p class="d-flex align-items-center">America <a href="travel_destination.html"> 10 Places</a> </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x4.png.pagespeed.ic.r_nATr2t9d.png" alt="">
</div>
<div class="content">
<p class="d-flex align-items-center">Nepal <a href="travel_destination.html"> 02 Places</a> </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x5.png.pagespeed.ic.cFxonC7kDe.png" alt="">
</div>
<div class="content">
<p class="d-flex align-items-center">Maldives <a href="travel_destination.html"> 02 Places</a> </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single_destination">
<div class="thumb">
<img src="images/destination-x6.png.pagespeed.ic.go4MmVP7pf.png" alt="">
</div>
<div class="content">
<p class="d-flex align-items-center">Indonesia <a href="travel_destination.html"> 05 Places</a> </p>
</div>
</div>
</div>
</div>
</div>
</div>
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
</div>
@endsection