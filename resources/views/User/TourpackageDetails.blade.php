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
    <!-- new template start -->
    busname- {{$tourdetails->busnamefun->busname}} <br>
    <div id="container">
        <div class="fullsection">
        <!-- section start-->
        <div id="section">
            <h4 class="day">Day {{$tourdetails->days}} </h4>
            <h3>Hai</h3>
        </div>
        <!-- section end -->
        <!-- sectioncontainer start-->
        <div class="sectioncontainer">
            <br>
            <br>
            <br>
            <p>sectioncontainer sectioncontainer sectioncontainer sectioncontainer </p>
        </div>
        </div>
        <hr class="hr">
        <!-- sectioncontainer end -->
    </div>
    <!-- new template end -->
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
<!-- DAys-{{$tourdetails->days}} <br> -->

<!-- bus pic- <img src="../uploaded_images/{{$tourdetails->busnamefun->taxi_pic}}" alt="buspic"> -->

    
    <button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button>
    &nbsp&nbsp&nbsp&nbsp
    <a href="/BuyNow" class="btn btn-danger"><i class="fa fa-bolt" aria-hidden="true"></i>
Buy Now</a>
@endsection