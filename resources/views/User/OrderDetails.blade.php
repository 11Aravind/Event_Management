@extends('Layout.User_Homepage')
@section('content')
<style>
  .span{
  margin-left: 24px;
    margin-top: 17px;
}
</style>
<div class="div" style=" margin-top: 127px;"></div>
@if(!$tourorderdetails->isEmpty())
@foreach($tourorderdetails as $TouruserInfo)
<!-- <img src="images\eventbanner1.jpg" alt="event banner" style="width:100%"> -->
<div class="container shadow-lg p-3 mb-5 bg-white rounded" style="margin: 45px;    margin-top: 127px;" >
<div class="d-flex flex-row" style="">
  <div class="p-2 col-4" style="    display: inline-flex;"> 
      <img src="uploaded_images/{{$TouruserInfo->banner}}" width="100px" height="100px"alt="img">

    <span class="span"> {{$TouruserInfo->MainDescription}} <br> {{$TouruserInfo->days}}  <br> dateofDeparture {{$TouruserInfo->dateofDeparture}}
    <br>Arival Date {{$TouruserInfo->dateofarrival}} <br>
      Booked: {{$TouruserInfo->no_of_seat}} Seat</span>
    </div>
  <div class="p-2 col-4"><span class="span">total_price:₹{{$TouruserInfo->total_price}}  <br>   
   {{$TouruserInfo->PriceDescription}} 
  </span></div>
  <div class="p-2 col-4"><span class="span">{{$TouruserInfo->payment_id}} 
  @if($TouruserInfo->payment_done==1)  
  <span style="background:green;color:white">Payment successfuly done</span>
  @else
  <span>Payment successfuly not done</span>
  @endif
 </span> <br>
<span></span></div>
</div>
</div>
@endforeach
@endif
<!-- //event -->
@if(!$eventorderdetails->isEmpty())
@foreach($eventorderdetails as $eventorderdetails)
<!-- <img src="images\eventbanner1.jpg" alt="event banner" style="width:100%"> -->
<div class="container shadow-lg p-3 mb-5 bg-white rounded" style="margin: 45px; margin-top: -21px;  " >
<div class="d-flex flex-row" style="">
  <div class="p-2 col-4" style="    display: inline-flex;"> 
      <img src="uploaded_images/{{$eventorderdetails->event_banner}}" width="100px" height="100px"alt="img">

    <span class="span"> {{$eventorderdetails->event_name}} <br> event_date{{$eventorderdetails->event_date}}  <br> starting_time {{$eventorderdetails->starting_time}}
    <br>duration {{$eventorderdetails->duration}} <br>
      Booked: {{$eventorderdetails->noofseat}} Seat <br>Ticket Price{{$eventorderdetails->ticketprice}}</span>
    </div>
  <div class="p-2 col-4"><span class="span">total_price:₹{{$eventorderdetails->totalamount}}  <br>   
   {{$eventorderdetails->event_discription}} 
  </span></div>
  <div class="p-2 col-4"><span class="span">{{$eventorderdetails->payment_id}} 
  @if($eventorderdetails->payment_done==1)  
  <span style="background:green;color:white">Payment successfuly done</span>
  @else
  <span>Payment successfuly not done</span>
  @endif
 </span> <br>
<span></span></div>
</div>
</div>
@endforeach
@endif
<button class="btn btn-warning" style="margin-left: 46%;margin-bottom: 36px;" > No More Results To Display</button>
@endsection