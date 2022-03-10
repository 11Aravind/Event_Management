@extends('Layout.User_Homepage')
@section('content')
<section class="speakers section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">Speakers</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">Employs</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="all-speakers">
<div class="row">
@foreach($Employdetais as $Employdetail)
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">

<div class="single-speaker">
<div class="top-content">
<div class="image">
<!-- <img src="Template_asset/images/speaker1.jpg" alt="#"> -->

 <img src="uploaded_images/{{$Employdetail->employ_photo}}" style="width:261px;height:257px" alt="#employ_pic">
</div>
</div>
<div class="name">
<h3><a href="javascript:void(0)">{{$Employdetail->employ_name}}</a></h3>
<span>{{$Employdetail->job_position}}</span>
</div>
</div>

</div>
@endforeach
<!--<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">

<div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker2.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
 </li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Melisa Lundryn</a></h3>
<span>Lead Designer</span>
</div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s;">

<div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker3.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
</li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Andrio Limuya</a></h3>
<span>Web Developer</span>
</div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s;">
 -->
<!-- <div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker4.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
</li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Agaton Johnsson</a></h3>
<span>Expert Developer</span>
</div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">

 <div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker5.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
</li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Rebecca Henrikon</a></h3>
<span>Founder, Cards</span>
</div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">

<div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker6.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
</li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Lundryn Melisa</a></h3>
<span>Graphics Designer</span>
</div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s;"> -->

<!-- <div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker7.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
</li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Julia Milon</a></h3>
<span>Ui/Ux Designer</span>
</div>
</div> -->

<!-- </div> -->
<!-- <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s;"> -->

<!-- <div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker8.jpg" alt="#">
</div>
<ul class="social">
<li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
<li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
</li>
</ul>
</div>
<div class="name">
<h3><a href="javascript:void(0)">Digolia Sujiyan</a></h3>
<span>Founder, Edilta</span>
</div>
</div> -->

</div>
</div>
</div>
</div>
</section>
@endsection