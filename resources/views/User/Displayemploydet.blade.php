@extends('Layout.User_Homepage')
@section('content')
<section class="speakers section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<!-- <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">Speakers</h3> -->
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">Our Employs</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
@if($Employdetais->isEmpty())
<h1>Employs Not Registred</h1>
@else
<div class="all-speakers">
<div class="row">
@foreach($Employdetais as $Employdetail)
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">

<div class="single-speaker">
<div class="top-content">
<a href="singleEmployDet/{{$Employdetail->employ_id}}">
<div class="image">

<img src="uploaded_images/{{$Employdetail->employ_photo}}" style="width:261px;height:257px" alt="#employ_pic">

</div>

</a>
</div>
<div class="name">
<h3><a href="/singleEmployDet/{{$Employdetail->employ_id}}">{{$Employdetail->employ_name}}</a></h3>
<span>{{$Employdetail->job_position}}</span>
</div>
</div>

</div>
@endforeach
@endif
</div>
</div>
</div>
</div>
</section>
@endsection