@extends('Layout.User_Homepage')
@section('content')
<!-- <style>
.dayDisplay{
    background: black;
    color: white;
    padding: 13px;
    border-radius: 27px;
}
.content{
    width: 90%;
    margin: 54px;
    padding: -20px;
    box-shadow: inset 4px 0px 8px 0px;
    height: 155px;
}
</style> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<style>
    .fullsection{
        flex: warp;
        display: flex;
        flex: 1;
        padding: 4px 94px;
    }

    #section {
    
        width: 20%;
        font-family: 'Poppins', sans-serif;
    }

    .sectioncontainer {
        width: 80%;
        font-family: 'Roboto', sans-serif;
    }
.hr{
    margin: 3px 94px;
}
.a{
    padding: 16px;
}
    .day{
       /* color:rgb(214, 139, 139); */
       padding: 8px 20px;
    background: #999;
    font: 1.07143em "Lato Bold";
    display: inline-block;
    margin: 10px 0 5px 0;
    color: #fff;
    }
	 #chatWrapper {
                position: fixed;
                border: 0px !important;
                height: 421px;
                width: 320px;
                z-index: 1000;
                bottom: 0;
                right: 0;
            }
     @media only screen and (max-width: 768px) {
     	#chat-overlay{
     		display: none;
     	}
     	.vendorPackage #chat-overlay{
     		display: block;
     	}
     }
.left-column.ng-scope {
    float: left;
    width: 71%;
    margin: 0 0 5px 0!important;
}
.flL {
    float: left;
}
.topbar {
	padding: 60px;
}
.gray{
    display: inline-block;
    background: #333;
    color: #fff;
    padding-left: 10px;
    padding-right: 10px;
}
/* .route .my-nav>li>a {
    border-bottom: 4px solid transparent;
} */
     </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!-- <link rel="stylesheet" type="text/css" href="https://css.yatracdn.com/content/holidays/responsive/details_page/resources/css/packages-details-responsive.min.css?v=28.10.2021"	/> -->

<img alt="slider" src="../images/Kerala.jpg"  style="width: 100%;
    height: 416px;" >
   <!-- top start -->
   
<div class="topbar row">
	<div class="route row">
		<!-- ngIf: isDesktop --><div class="left-column ng-scope" ng-if="isDesktop">
			<div id="leftSect" style="float: left;
width: 75%;">
				<h2 class="ng-binding">{{$tourdetails->MainDescription}}</h2>
				<p class="hidden-md">
				
<span class="gray" style="">
						{{$tourdetails->days}} Days
					</span>
				</p>
			</div>
			<div class="right-column" style="float: right;
margin: 0!important;
width: auto!important;">
				<!-- ngIf: holidayData.startFromPrice > 0 -->
                <div class="cost ng-scope" data-ng-if="holidayData.startFromPrice > 0" style="display: inline-block;
padding-right: 17px;
margin: 0!important;margin-right: 3%;
position: relative;">
					<span class="block" style="display: block;">One Seat Rate</span> 
					<span class="price ng-binding" style="font: 1.85714em &quot;Lato Bold&quot;;
position: relative;"><i class="rs" style="font-family: &quot;RupeeSign&quot;;">Rs.</i>{{$tourdetails->Price}}</span> 
					
					<!-- ngIf: holidayData.strikeOffPrice > 0 -->
				</div><!-- end ngIf: holidayData.startFromPrice > 0 -->							
				
			</div>
		</div><!-- end ngIf: isDesktop -->
<!-- ngIf: !isDesktop -->
		<div class="offer flL" style="width:25%;float:left">
        <button class="btn btn-danger" style="margin-bottom:15px;">
        <a href="/TourUserInfo/{{$tourdetails->tour_id}}" class="btn btn-danger">Book Now</a>
			</button>
			  
			<!-- <button class="btn btn-dark" style="">Submit Query</button> -->
		</div>
		<ul class="" style="display: inline-flex;">
<li class="photos ng-scope">
				<a href="#gallery" class="a">Photos</a>
			</li>
			<li class="hidden-md flightHotels">
				<a class="a">Hotels & Transport</a>
			</li>
            <li class="hidden-md flightHotels">
				<a  class="a"><i class="fa-solid fa-eyes"></i>Day Menu</a>
                
			</li>
			
				</ul>
			
		
	</div>
</div>
   <!-- top end -->
    <!-- new template start --> 
    
    <br>
    tour id-{{$tourdetails->tour_id}}
    
    busname- {{$tourdetails->busnamefun->busname}} <br>
    seating capacity-{{$tourdetails->busnamefun->seating_capacity}}  <br> 
    <!-- taxi_pic- {{$tourdetails->busnamefun->taxi_pic}} <br> -->
 
    <img src="../uploaded_images/{{$tourdetails->busnamefun->taxi_pic}}" width="200px" height="200px" alt="taxi_pic">
    <div id="container">
    @php
$i=1;
@endphp
    @foreach($daysdets as $daysdet)
        
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <h4 class="day">DAy {{$i}} </h4>
            <br>
            <strong> <i class="fa-solid fa-hotel"></i>SIGHTSEEING</strong>
        </div>
        <!-- section end -->
        <!-- sectioncontainer start-->
        <div class="sectioncontainer">
         <br><br>
             <p>{{$daysdet->Mornigtoureplace}}  </p>
            <p>{{$daysdet->Afternoon}} </p>
            <p>{{$daysdet->NightPrograms}} </p>
            <p>{{$daysdet->NightPrograms}}</p>
        </div>
        </div>
        <hr class="hr">
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <!-- <h4 class="day">DAy {{$i}} </h4> -->
            <strong> <i class="fa-regular fa-eyes"></i>HOTEL</strong>
        </div>
        <!-- section end -->
        <!-- sectioncontainer start-->
        <div class="sectioncontainer">
            <br>
            <br>
            <br>
            <p>{{$daysdet->hotelname}} </p>
            {{$daysdet->Locality}} <br>
            hotelname Locality-{{$daysdet->Hpic}}
        </div>
        </div>
        <hr class="hr">
        
    </div>
    <!-- new template end -->
    @php
$i=$i+1;
@endphp
    @endforeach
  

    <!-- <button class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Wishlist</button> -->
    &nbsp&nbsp&nbsp&nbsp
    <a href="/TourUserInfo/{{$tourdetails->tour_id}}" class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>Book Now</a>
@endsection