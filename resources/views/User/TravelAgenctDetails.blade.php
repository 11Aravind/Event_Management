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
@if($busdetails->isEmpty())
<h1>Vehicles Are Not Added</h1>
@else

<div class="row">
@foreach($busdetails as $busdetail)
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<a href="/SingleBusDetails/{{$busdetail->bus_id}}">
<img src="../uploaded_images/{{$busdetail->taxi_pic}}" style="width: 358px;height: 201px;" alt="buspic">
<!-- uploaded_images/1650889212.jpg -->
<!-- <a href="#" class="prise">hi hi</</a> -->
</div>
<div class="place_info">
<h3>{{$busdetail->busname}}</h3>
<p>seating capacity-{{$busdetail->seating_capacity}}</p>
</a>
<!-- <div class="rating_days d-flex justify-content-between"> -->
</div>
</div>
</div>
@endforeach
@endif
</div>
</div>
</div>

@endsection