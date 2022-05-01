@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<style>
    /* .mainconainers{
display:flex;
width:100%;

    }
    .leftcontainers{
flex:1;
width:40%;
    }
    .rightcontainers{
        flex:1;
        width:60%;
    } */
</style>
<body>
    <div class="mainconainers">
        <div class="leftcontainers">
        <img src="../uploaded_images/{{$SingleBusDetails->taxi_pic}}" style="width:100%;height:100%" alt="buspic">
        </div>
        <div class="rightcontainers">
            <!-- <h1>{{$SingleBusDetails}}</h1> -->
        {{$SingleBusDetails->busname}} <br>
        {{$SingleBusDetails->Taxi_type}} <br>
        {{$SingleBusDetails->Taxi_number}} <br>
        {{$SingleBusDetails->seating_capacity}} <br>
        {{$SingleBusDetails->taxi_category}} <br>
        {{$SingleBusDetails->price}} <br>
        <a  href="/busbooking_form/{{$SingleBusDetails->towner_id}}/{{$SingleBusDetails->bus_id}}"class="btn btn-danger"> Book Bus</a>
        
    </div>
    </div>
</div>
</div>
@endsection