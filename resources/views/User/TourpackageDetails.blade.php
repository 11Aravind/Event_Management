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
    .day{
       color:rgb(214, 139, 139);
    }
</style>
<img alt="slider" src="../images/Kerala.jpg"  style="width: 100%;
    height: 416px;" >
    <button class="btn btn-primary">Bus Details</button>  <button class="btn btn-primary">tourst place details</button>  <button class="btn btn-primary">Bus Details</button>
    <!-- new template start -->
    busname- {{$tourdetails->busnamefun->busname}} <br>
    taxi_pic- {{$tourdetails->busnamefun->taxi_pic}} <br>
    <div id="container">
    @php
$i=1;
@endphp
    @foreach($daysdets as $daysdet)
        
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <h4 class="day">DAy {{$i}} </h4>
            <h3>Morning place</h3>
        </div>
        <!-- section end -->
        <!-- sectioncontainer start-->
        <div class="sectioncontainer">
            <br>
            <br>
            <br>
            <p>{{$daysdet->Mornigtoureplace}}  </p>
        </div>
        </div>
        <hr class="hr">
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <!-- <h4 class="day">DAy {{$i}} </h4> -->
            <h3>Afternoon place</h3>
        </div>
        <!-- section end -->
        <!-- sectioncontainer start-->
        <div class="sectioncontainer">
            <br>
            <br>
            <br>
            <p>{{$daysdet->Afternoon}} </p>
        </div>
        </div>
        <hr class="hr">
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <!-- <h4 class="day">DAy {{$i}} </h4> -->
            <h3>NightPrograms place</h3>
        </div>
        <!-- section end -->
        <!-- sectioncontainer start-->
        <div class="sectioncontainer">
            <br>
            <br>
            <br>
            <p>{{$daysdet->NightPrograms}} <br>hotelname place- {{$daysdet->hotelname}} </p>
            <button>Hotel Details</button>
        </div>
        </div>
        <hr class="hr">
        <!-- sectioncontainer end -->
    </div>
    <!-- new template end -->
    @php
$i=$i+1;
@endphp
    @endforeach
  

    <button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button>
    &nbsp&nbsp&nbsp&nbsp
    <a href="/BuyNow" class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>
Buy Now</a>
@endsection