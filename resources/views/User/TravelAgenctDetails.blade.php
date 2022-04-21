@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>{{$travelagencyname->Tagency_name}}</h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>

<div class="row">
@foreach($busdetails as $busdetail)
<a href="/SingleBusDetails/{{$busdetail->bus_id}}">
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="../images/place-x1.png.pagespeed.ic._C7q_9jAJk.jpg" alt="">
<!-- <a href="#" class="prise">hi hi</</a> -->
</div>
<div class="place_info">
<h3>{{$busdetail->busname}}</h3>
<p>seating capacity-{{$busdetail->seating_capacity}}</p>
<!-- <div class="rating_days d-flex justify-content-between"> -->

</div>
</div>
</div>
</a>
@endforeach
</div>
</div>
</div>

@endsection