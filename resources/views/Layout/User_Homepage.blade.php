
<!DOCTYPE html>
<!-- saved from url=(0045)# -->
<html class="no-js" lang="zxx"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>EventGrids - Conference and Event HTML Template.</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- example start -->
<link rel="stylesheet" href="../Template_asset/css/bootstrap.min.css">
<link rel="stylesheet" href="../Template_asset/css/LineIcons.3.0.css">
<link rel="stylesheet" href="../Template_asset/css/animate.css">
<link rel="stylesheet" href="../Template_asset/css/tiny-slider.css">
<link rel="stylesheet" href="../Template_asset/css/glightbox.min.css">
<link rel="stylesheet" href="../Template_asset/css/main.css">
<link rel="stylesheet" href="../Template_asset/css/css-A.style.css.pagespeed.cf.9BisuD497W.css">
<!-- example end -->
<link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWxq0BifrLE2ztsvXcrC2NGp1rF4s3RMEglA&usqp=CAU" type="image/x-icon"/>


<link rel="stylesheet" href="Template_asset/css/bootstrap.min.css">
<link rel="stylesheet" href="Template_asset/css/LineIcons.3.0.css">
<link rel="stylesheet" href="Template_asset/css/animate.css">
<link rel="stylesheet" href="Template_asset/css/tiny-slider.css">
<link rel="stylesheet" href="Template_asset/css/glightbox.min.css">
<link rel="stylesheet" href="Template_asset/css/main.css">
<link rel="stylesheet" href="Template_asset/css/css-A.style.css.pagespeed.cf.9BisuD497W.css">
<!-- Template_asset/css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
#main_menu{
    /* border-bottom: 2px solid; */
    /* border-color: rgba(215,38,122,0.3); */
    /* padding-bottom: 3px; */
    /* transition: all 0.2s ease; */
    FONT-SIZE: medium;
}
</style></head>
<body style="font-family: sans-serif;">
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class="preloader" style="opacity: 0; display: none;">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<header class="header navbar-area sticky">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="nav-inner">

<nav class="navbar navbar-expand-lg">
<!-- <a class="navbar-brand" href="#index.html">
<img src="Template_asset/images/images.png" alt="Logo">
</a> -->
<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ms-auto">
<li class="nav-item">
<a href="/" class="active" id="main_menu"aria-label="Toggle navigation">HOME</a>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" 
aria-controls="navbarSupportedContent" aria-expanded="false" id="main_menu"aria-label="Toggle navigation">PACKAGES</a>
<ul class="sub-menu collapse" id="submenu-1-1">
<li class="nav-item"><a href="/Premium">PREMIUM</a></li>
<li class="nav-item"><a href="/Medium">MEDIUM</a></li>
<li class="nav-item"><a href="/Regular">REGULAR</a></li>
<!-- <li class="nav-item"><a href="#sponsors.html">CUSTOM</a></li> -->

</ul>
</li>
<li class="nav-item">
<a href="#schedule.html"id="main_menu" aria-label="Toggle navigation">RENT</a>
</li>
<li class="nav-item">
<a href="/Displayemploydet"id="main_menu" aria-label="Toggle navigation">EMPLOYS </a>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
 aria-expanded="false" id="main_menu"aria-label="Toggle navigation">EVENTS</a>
<ul class="sub-menu collapse" id="submenu-1-2">
<li class="nav-item"><a href="/Events">TICKET BOOKING</a>
</li>
<li class="nav-item"><a href="/EventChart">UPCOMING EVENTS</a></li>
</ul>
</li>
<li class="nav-item">
<a href="/TourView"id="main_menu" aria-label="Toggle navigation">TOUR</a>
</li>
<li class="nav-item">
<a href="/Fooddisplay"id="main_menu" aria-label="Toggle navigation">Food</a>
</li>
<li class="nav-item">
<a href="/ViewTravelPage"id="main_menu" aria-label="Toggle navigation">Travel</a>
</li>
@if(Session::get('user_id'))

<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
 aria-expanded="false" aria-label="Toggle navigation">Account</a>
<ul class="sub-menu collapse" id="submenu-1-2">
<li class="nav-item"><a href="#blog-grid.html">Profile</a>
</li>
<li class="nav-item"><a href="/Logout">Logout</a></li>
</ul>
</li>

</ul>
<a href="/CardPage"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a>

 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<i class="fa fa-heart" aria-hidden="true"></i>
Fav
@else
</ul>
<!-- <div class="button"> -->
<a href="/Login" class="btn btn-primary">Login</a>
<!-- </div> -->
@endif
</div>
</nav>

</div>
</div>
</div> 
</div> 
</header>

@yield('content')

<footer class="footer">

<div class="footer-top">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-4 col-md-6 col-12">

<div class="single-footer f-about">
<div class="logo">
<a href="#index.html">
<img src="Template_asset/images/images.png" alt="#">
</a>
</div>
<p>A business conference organize by EventGrids In. World’s most influential media,
entertainment &amp; technology.</p>
<span class="social-title">
Follow Us On:
</span>
<ul class="social">
<li>
<a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
</ul>
</div>

 </div>
<div class="col-lg-2 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Quick Links</h3>
<ul>
<li><a href="javascript:void(0)">Get Direction</a></li>
<li><a href="javascript:void(0)">Sponsor</a></li>
<li><a href="javascript:void(0)">What We Offer</a></li>
<li><a href="javascript:void(0)">Ricent Projects</a></li>
<li><a href="javascript:void(0)">Insights</a></li>
</ul>
</div>

</div>
<div class="col-lg-2 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Know More</h3>
<ul>
<li><a href="javascript:void(0)">About Us</a></li>
<li><a href="javascript:void(0)">Our Pricing</a></li>
<li><a href="javascript:void(0)">Faq</a></li>
<li><a href="javascript:void(0)">Guides</a></li>
<li><a href="javascript:void(0)">Contact Us</a></li>
</ul>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-footer newsletter">
<h3>Subscribe to our newsletter</h3>
<form action="##" method="get" target="_blank" class="newsletter-form">
<input name="name" placeholder="Your Name*" required="required" type="text">
<input name="email" placeholder="Email address*" required="required" type="text">
<div class="button">
<button class="btn">Subscribe
</button>
</div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>


<div class="copyright">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-12">
<p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a>
</p>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="##" class="scroll-top" style="display: flex;">
<i class="lni lni-chevron-up"></i>
</a>
<script src="assets\js\jquery-3.5.1.js"></script>
<script src="Template_asset/js/bootstrap.min.js.download"></script>
<script src="Template_asset/js/wow.min.js.download"></script>
<script src="Template_asset/js/tiny-slider.js.download"></script>
<script src="Template_asset/js/glightbox.min.js.download"></script>
<script src="Template_asset/js/count-up.min.js.download"></script>
<script src="Template_asset/js/main.js.download"></script>
<script>
$( document ).ready(function() {
    $('#newaddressform').slideUp();
});
$("#cancel").click(function(){
        $('#newaddressform').slideUp();
      });
      $("#addaddressBtn").click(function(){
        $('#newaddressform').show();
      });
    //   ordersummary
    </script>
<!-- <script>
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=Gxw45q3Ga3k',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });
    </script> -->
<!-- <script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script> -->

</body></html>