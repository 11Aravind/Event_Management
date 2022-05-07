@extends('Layout.User_Homepage')
@section('content')
<img src="images\travelbanner.webp" alt="event banner" style="width:100%;    height: 416px;">
<div class="popular_places_area"  style="    padding-top: 61px;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Travel Agency</h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>
<div class="row">
@foreach($TravelKycdets as $TravelKycdet)

<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<!-- <img src="../uploaded_images/{{$TravelKycdet->licencepic}}" alt="banner">
 -->
<a href="/TravelAgenctDetails/{{$TravelKycdet->towner_id}}">
<img src="uploaded_images/{{$TravelKycdet->alternate_no}}" alt="travelagency_pic" style="width:358px;height:201px">
<!-- E:\xampp\htdocs\Perfect_Stom_Moments\public\uploaded_images\1651949573.jpg -->
<!-- <a href="#" class="prise">ownername-{{$TravelKycdet->ownername}}</</a> -->
</div>
<div class="place_info">
<h3>{{$TravelKycdet->Tagency_name}}</h3>
<p>Tagency_name-{{$TravelKycdet->Tagency_name}}</p>
</a>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
@endsection