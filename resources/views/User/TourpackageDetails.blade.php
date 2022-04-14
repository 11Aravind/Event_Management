@extends('Layout.User_Homepage')
@section('content')
<style>
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
</style>
<img alt="slider" src="../images/Kerala.jpg"  style="width: 100%;
    height: 416px;" >
<!-- <h1>qqqqqqqqqqqqqqqqqqqqq</h1> -->
<!-- <div style="margin-top:300px;"></div> -->
DAys-{{$tourdetails->days}} <br>
busname- {{$tourdetails->busnamefun->busname}} <br>
<!-- bus pic- <img src="../uploaded_images/{{$tourdetails->busnamefun->taxi_pic}}" alt="buspic"> -->
@php
$i=1;
@endphp
    @foreach($daysdets as $daysdet)
  <div class="containerForDays">
        <span class="dayDisplay"style="">DAy {{$i}}</span>
    <div  class="content"style=";">
    Morning place- {{$daysdet->Mornigtoureplace}} 
</div>

<div class="content">
Afternoon place- {{$daysdet->Afternoon}}
</div>

<div class="content">
NightPrograms place- {{$daysdet->NightPrograms}}
hotelname place- {{$daysdet->hotelname}}
<button class="btn btn-primary">Show Hotel Details</button>
</div>
    </div>
   @php
$i=$i+1;
@endphp
    @endforeach
    
    <button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button>
    &nbsp&nbsp&nbsp&nbsp
    <a href="/BuyNow" class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>
Buy Now</a>
@endsection