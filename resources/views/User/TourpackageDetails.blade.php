@extends('Layout.User_Homepage')
@section('content')
<img alt="slider" src="../images/Kerala.jpg"  style="width: 100%;
    height: 416px;" >
<!-- <h1>qqqqqqqqqqqqqqqqqqqqq</h1> -->
<!-- <div style="margin-top:300px;"></div> -->
DAys-{{$tourdetails->days}} <br>
busname- {{$tourdetails->busnamefun->busname}} <br>
bus pic- <img src="../uploaded_images/{{$tourdetails->busnamefun->taxi_pic}}" alt="buspic">
@php
$i=1;
@endphp
    @foreach($daysdets as $daysdet)
    <h3>Day {{ $i}}</h3>
    <br>   Morning place- {{$daysdet->Mornigtoureplace}} <br> Afternoon place- {{$daysdet->Afternoon}} <br> 
   NightPrograms place- {{$daysdet->NightPrograms}}
   <h3>Hotel Details</h3>
   <br>   hotelname place- {{$daysdet->hotelname}} <br>
     Locality place- {{$daysdet->Locality}} <br>
   <!-- <br>   hotelname place- {{$daysdet->hotelname}} <br> -->
   @php
$i=$i+1;
@endphp
    @endforeach
    <button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button>
    &nbsp&nbsp&nbsp&nbsp
    <a href="/BuyNow" class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>
Buy Now</a>
@endsection