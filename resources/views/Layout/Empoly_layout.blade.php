<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        background: linear-gradient(to right, #ff9800, yellow);

    color: white;
    height: 100%;
    position: absolute;
    width: 216px;
    }
    .side-navbar li a{
        color:white;
        text-decoration:none;
    }
    .top-bar{
        display:flex;
        
        background: linear-gradient(to right, #ff9800, yellow);
    /* height: 65px; */
    /* padding: 21px; */
    padding: 21px 21px 2px 21px;

    color:white;
    }
    .top-bar a{
        color:white;
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
    .dropdown-menu a{
        color:black;
    }
</style>
<body>
   <div id="container">
   <div class="top-bar">
       <span class="logo">Employ</span>
        <span class="top-menu">
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
            <!-- <a href="#">Account</a>
            <a href="/Logout">Logout</a> -->

        </span>
    </div>
   <div class="side-navbar">
        <ul class="side-menu">
            <li style="margin-top: 28px;"><a href="Empoly">Dashboard</a></li>
            @if(!Session::get('check')->isEmpty())
            <li><a href="/Profile">Profile</a></li>
            <li><a href="/job_order">Job Vecancy</a></li>
            
            @else
            <li><a href="Add_employ">Employ Kyc</a></li>
            @endif

          <!-- @if(Session::get('check'))
          <li>{{Session::get('check')}}</li>
          @endif -->
            <!-- <li>Profile</li>
            <li>Job Vaccancy</li>
            <li>Request</li> -->
        </ul>
    </div>
    <div class="contentsss">
        <div class="cont">
            @if(Session::get('msg')) 
            <span style="color:{{Session::get('color')}}">{{Session::get('msg')}} </span>
        @endif
        
            @yield('employ_content')
           
        </div>
    </div>
   </div>
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