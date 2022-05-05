@extends('Layout.User_Homepage')
@section('content')

<img alt="slider" src="../uploaded_images\{{$tourdetails->banner}}"  style="width: 100%;height: 416px;margin-top: 97px;" >

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
					<input type="hidden" value="{{$tourdetails->Price}}" id="oneseatprice">

					<!-- ngIf: holidayData.strikeOffPrice > 0 -->
				</div><!-- end ngIf: holidayData.startFromPrice > 0 -->							
				
			</div>
		</div><!-- end ngIf: isDesktop -->
<!-- ngIf: !isDesktop -->
		<div class="offer flL" style="width:25%;float:left">
        <!-- <button class="btn btn-danger" style="margin-bottom:15px;"> -->
        <!-- <a href="/TourUserInfo/{{$tourdetails->tour_id}}" class="btn btn-danger">Book Now</a> -->
        <button class="btn btn-danger" id="Booknow">Book Now</button>
			<!-- </button> -->
			  
			<!-- <button class="btn btn-dark" style="">Submit Query</button> -->
		</div>
		<ul class="" style="display: inline-flex;">
<li class="photos ng-scope a" id="dayMenu"> Day Menu
				<!-- <a href="#gallery" class="a"> </a> -->
			</li>
			<li class="hidden-md flightHotels a" id="hotelmenu">Hotels 
				<!-- <a href="#hotelDiv"class="a"></a> -->
			</li>
            <li class="hidden-md flightHotels a" id="TrasportMenu">Transport
				<!-- <a  class="a"><i class="fa-solid fa-eyes"></i> </a> -->
                
			</li>
				</ul>
	</div>
</div>

   <!-- top end -->

    <!-- new template start --> 
    
    <br>
    <!-- bus details start -->
    <div id="busdetailsDiv">
    <div class="mainconainers">
        <div class="leftcontainers">
        <img src="../uploaded_images/{{$tourdetails->busnamefun->taxi_pic}}" style="width:100%;height:100%" alt="buspic">
        </div>
        <div class="rightcontainers">
            busname- {{$tourdetails->busnamefun->busname}} <br>
            {{$tourdetails->busnamefun->Taxi_type}} <br>
        {{$tourdetails->busnamefun->Taxi_number}} <br>
        {{$tourdetails->busnamefun->seating_capacity}} <br>
        {{$tourdetails->busnamefun->taxi_category}} <br>
        {{$tourdetails->busnamefun->price}} <br>
    </div>
    </div>                      
    </div>
    <!-- bus details end -->
    <!-- hotel details start -->
    <div id="hotelDiv" style="padding: 20px 89px;">
 
    <div class="mainconainers">
    @php
    $i=1;
    @endphp
    @foreach($daysdets as $daysdet)
  
        <div class="leftcontainers">
        <img src="../uploaded_images/{{$daysdet->Hpic}}" style="width:100%;height:100%" alt="buspic">
        </div>
        <div class="rightcontainers" style="    padding: 4px 4px 4px 21px;">
            Day-@php
    echo $i;
    @endphp <br>
             {{$daysdet->hotelname}} <br>
            {{$daysdet->Locality}} <br>
     
    </div>  
    @php
    $i=$i+1;
    @endphp 
    @endforeach                   
    </div>
</div>
    <!-- hotel details end -->
    <!-- day menu start -->
    <div id="Daymenu">
    @php
$i=1;
@endphp
    @foreach($daysdets as $daysdet)
        
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <h4 class="day">Day {{$i}} </h4>
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
        <!-- <div class="fullsection"> -->
        <!-- section start-->
        <!-- <div id="section"> -->
            <!-- <h4 class="day">DAy {{$i}} </h4> -->
            <!-- <strong> <i class="fa-regular fa-eyes"></i>HOTEL</strong> -->
        <!-- </div> -->
        <!-- section end -->
        <!-- sectioncontainer start-->
        <!-- <div class="sectioncontainer">
            <br>
            <br>
            <br>
            <p>{{$daysdet->hotelname}} </p>
            {{$daysdet->Locality}} <br>
            hotelname Locality-{{$daysdet->Hpic}} -->
        <!-- </div>
        </div> -->
        <!-- <hr class="hr"> -->
        
   
    <!-- new template end -->
    @php
$i=$i+1;
@endphp
    @endforeach
    </div>

    <!-- <button class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Wishlist</button> -->
    <!-- &nbsp&nbsp&nbsp&nbsp -->
    <!-- <a href="/TourUserInfo/{{$tourdetails->tour_id}}" class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>Book Now</a> -->
   
    <!-- user details div start -->
    <!-- <div id="UserInformationformDiv">
    <div class="popular_places_area"> -->
    <div id="UserInformationformDiv" style="display: none;padding: 53px 30px;background: #f5faff;">
<div class="container col-5">
<h1> Tour Details</h1>
<form action="/TourpackageDetails" method="POST" enctype="multipart/form-data">
  @csrf
 
  
  <input type="hidden" value="{{$tourdetails->tour_id}}" name="tour_id">
  <!-- UserEvent_id
product_id -->
<!-- <div class="container"> -->
<div class="row">
    <div class="col">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputEmail4">Contact No</label>
      <input type="text" name="contact_no" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    </div>
    <div class="row">
    <div class="col">
      <label for="inputPassword4">Address</label>
      <textarea type="text" name="address" class="form-control col-6" id="inputPassword4"  row="4"placeholder=""></textarea>
  </div>
    </div>
  <div class="row">
    <div class="col">
      <label for="inputEmail4">No Of Seat</label>
      <input type="text" name="no_of_seat" onChange="change_send(this.value);" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputPassword4">Total Price</label>
      <input type="text" name="total_price" class="form-control col-6" id="Totalprice" placeholder="" readonly>
  </div>
    </div>
 

  
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <button class="btn btn-warning" style="float:right;margin-top:25px;">Add Tour Details</button>
  </div>
    </div>
  </div>
       
</form>
 
    </div>
        <!-- user details div end -->
        <script type="text/javascript">
function change_send(noofseat)
{
  $noofseat=noofseat;
  $oneseatprice=$("#oneseatprice").val();
  $Totalprice=$oneseatprice*$noofseat;
  
   $("#Totalprice").val($Totalprice);
	// alert($oneseatprice);

}
</script>

@if(Session::has('data'))
<span style="color:{{Session::get('data.color')}}" class="text-center">{{Session::get('data.msg')}}</span>
<style>
  #cont{
    display:none;
  }
  #Daymenu{
    display:none;
  }
  #UserInformationformDiv{
    display:none;    
  }
</style>
<div class="container tex-center mx-auto">
    <form action="/TourpackageDetails_pay" method="POST" class="text-center mx-auto mt-5">
      
      <script
          src="https://checkout.razorpay.com/v1/checkout.js"
          data-key="rzp_test_iKlM2rsXjuV7R1"
    data-amount="{{Session::get('data.amount')}}" 
          data-currency="INR"
    data-order_id="{{Session::get('data.order_id')}}"
          data-buttontext="Pay with Razorpay"
          data-name="My Shop"
          data-description="Test transaction"
         
          data-theme.color="#182fa3"></script>
      <input type="hidden" custom="Hidden Element" name="hidden">
      </form>
</div>
</div>
@endif
@endsection