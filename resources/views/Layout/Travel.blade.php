<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
<style>
    *{
        padding:0px;
        margin:0px;
    }
    .side-menu{
        list-style: none;
        padding: 0px 43px;

    }
    .side-menu li{
        padding: 15px 0px;

    }
   .side-navbar{
        /* background: black; */
        background: linear-gradient(to right,rgb(17,203,134), rgb(218,221,227));
    color: white;
    height: 100%;
    position: absolute;
    width: 216px;
    }
    .side-navbar a{
        color:white;
        text-decoration:none;
    }
    .top-bar{
        display:flex;
        /* background: black; */
        background: linear-gradient(to right,rgb(17,203,134), rgb(218,221,227));
    /* height: 65px; */
    padding: 21px 21px 2px 21px;
    color:white;
    }
    .top-bar a{
        color:black;
        padding: 27px;
        text-decoration:none;
    }
    .logo{
        flex: 0.9;
    }
   .contentsss{
        margin-top: 27px;
    margin-left: 230px;
    background: #edeaea;
    width: 80%;
    }
    .cont{
        padding: 20px;
    }
</style>
<body>
   <div id="container">
   <div class="top-bar">
       <span class="logo">Travel</span>
        <span class="top-menu">
            <!-- <a href="#">Account</a>
            <a href="#">Logout</a> -->
            <div class="dropdown">
  <p id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="Template_asset/images/userpic.png" alt="userpic" style="width: 32px;
    height: 22px;">
  </p>
  <div class="dropdown-menu" aria-labelledby="dLabel">
  <a href="#" class="submenu">Account</a> <br>
  <hr>
            <a class="submenu" href="/Logout">Logout</a>
  </div>
</div>
        </span>
    </div>
   <div class="side-navbar">
        <ul class="side-menu">
            <li style="margin-top: 28px;">Home</li>
            <li>DashBord</li>
           
            @if( Session::get('towner_id'))
            <li> <a href="/TravelKyc">KYC Form</a></li>
            @else
            <li> <a href="/TravelKyc">KYC Form</a></li>
            @endif
           
            <!-- <li> <a href="/BusDetails"> ADD Bus </a>  </li> -->
            <li> <a href="/Businfo">Bus Details</a>  </li>
            
            <li>Request</li>
        </ul>
    </div>
    @if(Session::get('successmsg'))
    <div class="contentsss">
        <div class="cont">
    <span style="color:green">{{Session::get('successmsg')}}</span>
</div>
</div>
@endif
@if(Session::get('errormsg'))
    <div class="contentsss">
        <div class="cont">
    <span style="color:red">Session::get('successmsg')</span>
</div>
</div>
@endif
 @yield('travelcontent')
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"><script>
<script src="assets\js\jquery-3.5.1.js"></script>
<script src="Template_asset/js/bootstrap.min.js.download"></script>
<script src="Template_asset/js/wow.min.js.download"></script>
<script src="Template_asset/js/tiny-slider.js.download"></script>
<script src="Template_asset/js/glightbox.min.js.download"></script>
<script src="Template_asset/js/count-up.min.js.download"></script>
<script src="Template_asset/js/main.js.download"></script>
<script>
$('.dropdown-toggle').dropdown();
</script>
</body>
</html>