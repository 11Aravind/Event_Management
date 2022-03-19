@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Catering Services </h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>
<div class="row">
@foreach($Cateringkycs as $Cateringkyc)

<div class="col-lg-4 col-md-6">
<a href="/FoodCategoryDetails/{{$Cateringkyc->user_id}}">
<div class="single_place">

<div class="thumb">
<img src="images/place-x1.png.pagespeed.ic._C7q_9jAJk.jpg" alt="">
<span class="prise">{{$Cateringkyc->user_id}}</</span >
</div>
<div class="place_info">
<h3>{{$Cateringkyc->cateringservicename}}</h3>
<p>{{$Cateringkyc->username}}</p>
<small>Locality-{{$Cateringkyc->locality}}</small>
</div>
</div>
</a>
</div>

@endforeach

</div>
</div>
<!-- </div>  -->
@endsection