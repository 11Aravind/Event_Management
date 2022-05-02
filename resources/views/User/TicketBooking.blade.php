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
<img src="images\eventbanner1.jpg" alt="event banner" style="width:100%">
<!-- E:\xampp\htdocs\Perfect_Stom_Moments\public\images\eventbanner1.jpg -->
<div class="popular_destination_area"  style="    padding-top: 61px;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Main Events</h3>
<!-- <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p> -->
</div>
</div>
</div>
    
<div class="all-speakers">
<div class="row">
@foreach($event_dets as $event_det)
<div class="col-lg-3 col-md-6">
<a href="Eventdetails/{{$event_det->event_id}} " style="">
<div class="single_place">
<div class="thumb">
<img src="uploaded_images/{{$event_det->event_banner}}" style="height: 212px;"alt="eventimg">
</div>
<div class="place_info">
<h3>{{$event_det->event_name}}</h3>
<span>Free</span>
<span>{{$event_det->totel_ticket}} remaining</span>
<div class="rating_days d-flex justify-content-between">
<span class="d-flex justify-content-center align-items-center">
{{$event_det->starting_time}}
</span>
<div class="days">
<i class="fa fa-clock-o"></i>
<a href="#">{{$event_det->duration}} end </a>
<br>
</div>
</div>
</div>
</div>
</a>
</div>

@endforeach


</div>
</div>
</div>
</div>

@endsection