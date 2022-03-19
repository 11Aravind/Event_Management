@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Food Category Menu </h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>
<div class="row">
@foreach($categorydets as $categorydet)
<a href="/FoodProductDetails/{{$categorydet->category_id}}">
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="../images/place-x1.png.pagespeed.ic._C7q_9jAJk.jpg" alt="">

</div>
<div class="place_info">
<h3>{{$categorydet->category_name}}</h3>
<p>{{$categorydet->discription}}</p>

</div>
</div>
</div>
</a>
@endforeach

</div>
</div>
<!-- </div>  -->
@endsection