@extends('Layout/User_Homepage')
@section('content')

<!-- <section class="hero-area">
<div class="main__circle"></div>
<div class="main__circle2"></div>
<div class="main__circle3"></div>
<div class="main__circle4"></div>
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 offset-lg-3 col-md-12 col-12">
<div class="hero-content">
<h5 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;"><i class="lni lni-map-marker"></i> Waterfront Hotel,
London</h5>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">The largest conference in europe 2023</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipisicing
elit. deleniti voluptatum! Natus
beatae laborum veniam distinctio.</p>
<div class="button wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<a href="#pricing.html" class="btn ">Buy Ticket Now</a>
</div>
</div>
</div>
</div>
</div>
</section> -->
<style>
  *{
    margin:0;
    padding:0;
  }
    /* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
   right: 0;

  width: 100vw;
    height: 56.25vw;
    min-height: 100vh;
    min-width: 177.77vh;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.8;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  /* bottom: 0; */
  top:0;
  /* background: rgba(0, 0, 0, 0.5); */
  color: #f1f1f1;
  width: 100%;
  /* padding: 20px; */

  margin: 0;
    /* background: yellow; */
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) 
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
.contens{
  margin-top: 754px;
}
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
<div class="video" style="background:black">
  <video autoplay muted loop id="myVideo">
    <source src="video_banner/video.mp4" type="video/mp4">
  </video>
</div>
  
  <!-- Optional: some overlay text to describe the video -->
  <div class="content">
    <h1 style="font-size: 86px;text-align: center;font-family: sans-serif;color:white">FESTIVA   EVENTS</h1>
  </div>
  <div class="contens"></div>
   
  
<!-- <div class="count-down">
<div class="container">
<div class="row">
<div class="col-12">
<div class="box-head">
<div class="box-content">
<div class="box">
<h1 id="days">383</h1>
<h2 id="daystxt">Days</h2>
</div>
<div class="box">
<h1 id="hours">12</h1>
<h2 id="hourstxt">Hours</h2>
</div>
 <div class="box">
<h1 id="minutes">12</h1>
<h2 id="minutestxt">Minutes</h2>
</div>
<div class="box">
<h1 id="seconds">50</h1>
<h2 id="secondstxt">Secondes</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->

<!-- 
<section class="features section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Why join eventGrids?</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Why you should Join Event</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

<div class="single-featuer">
<img class="shape" src="Template_asset/images/shape.svg" alt="#">
<img class="shape2" src="Template_asset/images/shape2.svg" alt="#">
<span class="serial">01</span>
<div class="service-icon">
<i class="lni lni-microphone"></i>
</div>
<h3>Great Speakers</h3>
<p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
from.</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

<div class="single-featuer">
<img class="shape" src="Template_asset/images/shape.svg" alt="#">
<img class="shape2" src="Template_asset/images/shape2.svg" alt="#">
<span class="serial">02</span>
<div class="service-icon">
<i class="lni lni-users"></i>
</div>
<h3>New People</h3>
<p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
from.</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

<div class="single-featuer">
<img class="shape" src="Template_asset/images/shape.svg" alt="#">
<img class="shape2" src="Template_asset/images/shape2.svg" alt="#">
<span class="serial">03</span>
<div class="service-icon">
<i class="lni lni-bullhorn"></i>
</div>
<h3>Global Event</h3>
<p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
from.</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

<div class="single-featuer">
<img class="shape" src="Template_asset/images/shape.svg" alt="#">
<img class="shape2" src="Template_asset/images/shape2.svg" alt="#">
<span class="serial">04</span>
<div class="service-icon">
<i class="lni lni-heart"></i>
</div>
<h3>Get Inspired</h3>
<p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
from.</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

<div class="single-featuer">
<img class="shape" src="Template_asset/images/shape.svg" alt="#">
<img class="shape2" src="Template_asset/images/shape2.svg" alt="#">
<span class="serial">05</span>
<div class="service-icon">
<i class="lni lni-cup"></i>
</div>
<h3>Networking Session</h3>
<p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
from.</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

<div class="single-featuer">
<img class="shape" src="Template_asset/images/shape.svg" alt="#">
<img class="shape2" src="Template_asset/images/shape2.svg" alt="#">
<span class="serial">06</span>
<div class="service-icon">
<i class="lni lni-happy"></i>
</div>
<h3>Meet New Faces</h3>
<p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
from.</p>
</div>

</div>
</div>
</div>
</section>


<section class="about section">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
<div class="about-image">
<div class="video-head wow fadeIn" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
<a href="https://www.youtube.com/watch?v=Gxw45q3Ga3k" class="glightbox video"><i class="lni lni-play"></i></a>
</div>
<img src="Template_asset/images/about-image.jpg" alt="#">
</div>
</div>
<div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
<div class="content">
<h4>Get Experience</h4>
<h2>About The Event</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
veniam, quis nostrud exercitation.
</p>
<p>Adipiscing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris.
</p>
<div class="date">
<h4><span>25th</span> December’ 2023</h4>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="portfolio-section section">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="section-title">
    <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Case Study</h3>
    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Our Latest Works</h2>
    <p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">There are many variations of passages of Lorem
    Ipsum available, but the majority have suffered alteration in some form.</p>
    </div>
    </div>
    </div>
    <div class="row">
     <div class="col-12">
    <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
    <button class="portfolio-btn active" data-filter="*">All</button>
    <button class="portfolio-btn" data-filter=".branding">Branding</button>
    <button class="portfolio-btn" data-filter=".marketing">Marketing</button>
    <button class="portfolio-btn" data-filter=".web">Web Design</button>
    <button class="portfolio-btn" data-filter=".graphic">Graphic Design</button>
    </div>
    </div>
    </div>
    <div class="row grid" style="position: relative; height: 527.876px;">
    <div class="col-lg-4 col-md-6 grid-item branding marketing" style="position: absolute; left: 0px; top: 0px;">
    <div class="portfolio-item-wrapper">
    <div class="portfolio-img">
    <img src="Template_asset/images/pf-1.jpg" alt="">
    </div>
    <div class="portfolio-overlay">
    <div class="overlay-content">
    <span>Branding</span>
    <h4>Product Branding</h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 grid-item marketing graphic" style="position: absolute; left: 380px; top: 0px;">
    <div class="portfolio-item-wrapper">
    <div class="portfolio-img">
    <img src="Template_asset/images/pf-2.jpg" alt="">
    </div>
    <div class="portfolio-overlay">
    <div class="overlay-content">
    <span>Graphics Design</span>
    <h4>Packaging Design</h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 grid-item branding" style="position: absolute; left: 760px; top: 0px;">
    <div class="portfolio-item-wrapper">
    <div class="portfolio-img">
    <img src="Template_asset/images/pf-3.jpg" alt="">
    </div>
    <div class="portfolio-overlay">
    <div class="overlay-content">
    <span>Branding</span>
    <h4>Product Branding</h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 grid-item web" style="position: absolute; left: 0px; top: 263.938px;">
    <div class="portfolio-item-wrapper">
    <div class="portfolio-img">
    <img src="Template_asset/images/pf-4.jpg" alt="">
    </div>
    <div class="portfolio-overlay">
    <div class="overlay-content">
    <span>Web Development</span>
    <h4>Beauty Care Web Apps</h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 grid-item graphic" style="position: absolute; left: 380px; top: 263.938px;">
    <div class="portfolio-item-wrapper">
    <div class="portfolio-img">
    <img src="Template_asset/images/pf-5.jpg" alt="">
    </div>
    <div class="portfolio-overlay">
    <div class="overlay-content">
    <span>Graphics Design</span>
    <h4>Mocup Design</h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 grid-item web" style="position: absolute; left: 760px; top: 263.938px;">
    <div class="portfolio-item-wrapper">
     <div class="portfolio-img">
    <img src="Template_asset/images/pf-6.jpg" alt="">
    </div>
    <div class="portfolio-overlay">
    <div class="overlay-content">
    <span>App Development</span>
    <h4>Mobile Apps Design</h4>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

<section class="speakers section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Speakers</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Todays Performers</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="all-speakers">
<div class="row">
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">

<div class="single-speaker">
<div class="top-content">
<div class="image">
<img src="Template_asset/images/speaker1.jpg" alt="#">
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
<h3><a href="javascript:void(0)">Fredric Martinsson</a></h3>
<span>Founder, Edilta</span>
</div>
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">

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
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">

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
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">

<div class="single-speaker">
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
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">

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
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">

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
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">

<div class="single-speaker">
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
</div>

</div>
<div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">

<div class="single-speaker">
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
</div>

</div>
</div>
</div>
</div>
</section>


<section class="events-schedule section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Events</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Events Schedule</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-10 offset-lg-1 col-12">

<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">Day 1 <span>Mar 05,
2023</span></button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">Day 2 <span>Mar 10,
2023</span></button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="false">Day 3 <span>Mar 15,
2023</span></button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab" aria-controls="four" aria-selected="false">Day4
<span>Mar 30, 2023</span></button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">

<div class="events-head">

<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>8:00 AM - 08:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event1.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
 </div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>9:00 AM - 09:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event2.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Exercitationem ullam cororis
sure</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>10:00 AM - 10:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event3.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Reprehenderit rui in ea
volutate</a>
 </h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>

</div>

</div>
<div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">

<div class="events-head">

<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>8:00 AM - 08:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event1.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>9:00 AM - 09:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event2.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Exercitationem ullam cororis
sure</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>10:00 AM - 10:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event3.jpg" alt="#">
</div>
<div class="info">
 <h4>
<a href="javascript:void(0)">Reprehenderit rui in ea
volutate</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>

</div>

</div>
<div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">

<div class="events-head">

<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>8:00 AM - 08:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event1.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
 </div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>9:00 AM - 09:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event2.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Exercitationem ullam cororis
sure</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>10:00 AM - 10:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
 <img src="Template_asset/images/event3.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Reprehenderit rui in ea
volutate</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>

</div>

</div>
<div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">

<div class="events-head">

<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>8:00 AM - 08:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event1.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
 USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>9:00 AM - 09:45 AM</span></p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event2.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Exercitationem ullam cororis
sure</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>


<div class="single-event">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12">
<div class="date">
<h2>30</h2>
<p>March<span>10:00 AM - 10:45 AM</span></p>
</div>
 </div>
<div class="col-lg-6 col-md-7 col-12">
<div class="event-info">
<div class="image">
<img src="Template_asset/images/event3.jpg" alt="#">
</div>
<div class="info">
<h4>
<a href="javascript:void(0)">Reprehenderit rui in ea
volutate</a>
</h4>
<ul>
<li><i class="lni lni-user"></i>
<a href="javascript:void(0)"> By: Andio Lexa</a>
</li>
<li><i class="lni lni-map-marker"></i>
<a href="javascript:void(0)"> At: Prism Club,
USA</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-2 col-12 align-right">
<div class="button">
<a class="btn" href="javascript:void(0)">Read More</a>
</div>
</div>
</div>
</div>

</div>

</div>
</div>

</div>
</div>
<div class="row">
<div class="col-12 align-center">
<div class="button details-button">
<a href="#schedule.html" class="btn btn-alt">Load More</a>
</div>
</div>
</div>
</div>
</section>


<section id="pricing" class="pricing-table section overlay">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title white-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">pricing</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Pricing &amp; Plans</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">

<div class="single-table">

<div class="table-head">
<h4 class="title">Regular</h4>
<p>Available tickets for this price</p>
<div class="price">
<h2 class="amount">$10</h2>
</div>
 </div>

<div class="button">
<a href="javascript:void(0)" class="btn">Get Ticket</a>
</div>

<div class="table-content">

<ul class="table-list">
<li>One Day Conference Ticket</li>
<li>Posters Session</li>
<li>Coffee-break &amp; Networking
</li>
<li>Lunch &amp; Networing</li>
<li>Keynote talk</li>
</ul>

</div>

</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">

<div class="single-table middle">

<div class="table-head">
<h4 class="title">Exclusive</h4>
<p>Available tickets for this price</p>
<div class="price">
<h2 class="amount">$99</h2>
</div>
</div>

<div class="button">
<a href="javascript:void(0)" class="btn btn-alt">Get Ticket</a>
</div>

<div class="table-content">

<ul class="table-list">
<li>Three Day Conference Ticket</li>
<li>Posters Session</li>
<li>Coffee-break &amp; Networking
</li>
<li>Lunch &amp; Networing</li>
<li>Keynote talk</li>
</ul>

</div>

</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">

<div class="single-table">

<div class="table-head">
<h4 class="title">Premium</h4>
<p>Available tickets for this price</p>
<div class="price">
<h2 class="amount">$289</h2>
</div>
</div>

<div class="button">
<a href="javascript:void(0)" class="btn">Get Ticket</a>
</div>

<div class="table-content">

<ul class="table-list">
<li>Five Day Conference Ticket</li>
<li>Posters Session</li>
<li>Coffee-break &amp; Networking
</li>
<li>Lunch &amp; Networing</li>
<li>Keynote talk</li>
</ul>
 
</div>

</div>

</div>
</div>
</div>
</section>


<section class="sponsors section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Sponsors</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Our Offcial Sponsors</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 offset-lg-2 col-md-12 col-12">

<a href="javascript:void(0)" class="single-sponsor">
<img src="Template_asset/images/graygrids-logo.svg" alt="#">
</a>


<a href="javascript:void(0)" class="single-sponsor">
<img src="Template_asset/images/lineicons.svg" alt="#">
</a>


<a href="javascript:void(0)" class="single-sponsor">
<img src="Template_asset/images/ayro-logo.svg" alt="#">
</a>


<a href="javascript:void(0)" class="single-sponsor">
<img src="Template_asset/images/plain-admin.svg" alt="#">
</a>


<a href="javascript:void(0)" class="single-sponsor">
<img src="Template_asset/images/uideck-logo.svg" alt="#">
</a>

</div>
</div>
</div>
</section>


<section id="testimonials" class="section testimonials">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Testimonials</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">What people says about us</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="slider-head">
<div class="tns-outer" id="tns1-ow"><div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0" aria-controls="tns1" style="" aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button><button type="button" data-nav="1" tabindex="-1" aria-controls="tns1" style="" aria-label="Carousel Page 2"></button><button type="button" data-nav="2" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 3"></button><button type="button" data-nav="3" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 4"></button><button type="button" data-nav="4" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 5"></button><button type="button" data-nav="5" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 6"></button></div><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">6 to 8</span>  of 6</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="row testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transition-duration: 0s; transform: translate3d(-31.25%, 0px, 0px);"><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-2.png" alt="#">
<h3>
Marleah Eagleston
<span>Founder at Spicenet</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-3.png" alt="#">
<h3>
Phet Putrie
<span>Freelancer</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-2.png" alt="#">
<h3>
Prescott MacCaffery
<span>Writer</span>
</h3>
<ul class="rating">
 <li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-3.png" alt="#">
<h3>
Lara Madrigal
<span>Marketing Specialist</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-1.png" alt="#">
<h3>
Waiapi Karaka
<span>Designer, Freelancer</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-active" id="tns1-item0">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-1.png" alt="#">
<h3>
Aaron Almaraz
<span>CEO &amp; Founder at Gearat</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-active" id="tns1-item1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-2.png" alt="#">
<h3>
Marleah Eagleston
<span>Founder at Spicenet</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-active" id="tns1-item2">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-3.png" alt="#">
<h3>
Phet Putrie
<span>Freelancer</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-2.png" alt="#">
<h3>
Prescott MacCaffery
<span>Writer</span>
</h3>
<ul class="rating">
 <li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item" id="tns1-item4" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-3.png" alt="#">
<h3>
Lara Madrigal
<span>Marketing Specialist</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item" id="tns1-item5" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-1.png" alt="#">
<h3>
Waiapi Karaka
<span>Designer, Freelancer</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-1.png" alt="#">
<h3>
Aaron Almaraz
<span>CEO &amp; Founder at Gearat</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-2.png" alt="#">
<h3>
Marleah Eagleston
<span>Founder at Spicenet</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-3.png" alt="#">
<h3>
Phet Putrie
<span>Freelancer</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-2.png" alt="#">
<h3>
Prescott MacCaffery
<span>Writer</span>
</h3>
<ul class="rating">
 <li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div><div class="col-lg-4 col-md-6 col-12 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">

<div class="single-testimonial">
<div class="top-section">
<img src="Template_asset/images/testi-3.png" alt="#">
<h3>
Lara Madrigal
<span>Marketing Specialist</span>
</h3>
<ul class="rating">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
</ul>
</div>
<p>Time is the most precious thing you have when bootstrapping. You can't take time to
ponder on
design…</p>
</div>

</div></div></div></div></div>
</div>
</div>
</section>


<section class="blog-section section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Blogs</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Our Latest News</h2>
 <p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">

<div class="single-blog-grid">
<div class="blog-img">
<a href="#blog-single.html">
<img src="Template_asset/images/blog1.jpg" alt="#">
</a>
<p class="date">
29
<span class="day">
Nov
</span>
</p>
</div>
<div class="blog-content">
<a class="category" href="javascript:void(0)">Events</a>
<h4>
<a href="#blog-single.html">3 Best Practices for Keeping Your Event Clients
Happy</a>
</h4>
<p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
magna.</p>
<a href="#blog-single.html" class="more-btn">Read Blog <i class="lni lni-arrow-right"></i></a>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">

<div class="single-blog-grid">
<div class="blog-img">
<a href="#blog-single.html">
<img src="Template_asset/images/blog2.jpg" alt="#">
</a>
<p class="date">
15
<span class="day">
Mar
</span>
</p>
</div>
<div class="blog-content">
<a class="category" href="javascript:void(0)">Conference</a>
<h4>
<a href="#blog-single.html">Adding a New Digital Dimension to Your Next Special Event</a>
</h4>
<p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
magna.</p>
<a href="#blog-single.html" class="more-btn">Read Blog <i class="lni lni-arrow-right"></i></a>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">

<div class="single-blog-grid">
<div class="blog-img">
<a href="#blog-single.html">
<img src="Template_asset/images/blog3.jpg" alt="#">
</a>
<p class="date">
30
<span class="day">
Jan
</span>
</p>
</div>
<div class="blog-content">
 <a class="category" href="javascript:void(0)">Marketing</a>
<h4>
<a href="#blog-single.html">West Elm At Evantor 2023 + Room Makeover Competition!</a>
</h4>
<p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
magna.</p>
<a href="#blog-single.html" class="more-btn">Read Blog <i class="lni lni-arrow-right"></i></a>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="call-action overlay">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
<div class="inner-content">
<div class="text">
<h5 class="wow zoomIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Hurry Up!</h5>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Europe’s Leading Conference Book your Seat Now
</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">Entertainment &amp; technology show inspirational
speakers including game changing not just a
large-scale conference but a hub.</p>
</div>
<div class="button wow fadeInUp" data-wow-delay=".8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
<a href="#pricing.html" class="btn">Get Tickets<i class="lni lni-ticket"></i></a>
</div>
</div>
</div>
</div>
</div>
</section> -->
<div class="row">
<div class="col-12">
<div class="section-title">
<!-- <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">Speakers</h3> -->
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">About Us</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Festiva Event Management is a full service event management firm that was created by pairing together our passion for business and events.We not only organize extravagant event,we organize mesmerizing moments for you.Events may be forgotten but moments will last a life time.We are eagerly waiting to lighten your events with our innovation.We offers complete event planning and management solutions ranging from theme 
events,private parties,wedding ceremonies,conferences,business events,outdoor events,etc.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="section-title">
<!-- <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">Speakers</h3> -->
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Our Services</h2>
<p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Festiva Event Management will provide for you all your events needs from A-to-Z sevices,if it is corporate or conference events,wedding ceremonies, business party,you can trust our professional event planners to make your special event a memorable and successful.Festiva provides services such as catering and decoration,tour packages,travel facility,employee details etc</p>
</div>
</div>
</div>

@endsection