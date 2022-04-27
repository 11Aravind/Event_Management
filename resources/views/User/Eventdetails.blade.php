@extends('Layout.User_Homepage')
@section('content')
<link rel="stylesheet" href="css/style.css" />
<!-- <script src="https://js.stripe.com/v3/"></script> -->
@if ($message = Session::get('success'))
    <div class="success">
        <strong>{{ $message }}</strong>
    </div>
@endif
 
 
@if ($message = Session::get('error'))
    <div class="error">
        <strong>{{ $message }}</strong>
    </div>
@endif
<style>
.event-banner-wrap {
    height: 572px;
	box-sizing: border-box;
    overflow: hidden;
}
.event-banner-wrap>.d-flex {
    margin: -5px;
}
.full-height {
    height: 100%;
}
.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}
.width-50 {
    width: 50%;
    max-width: 50%;
}
.img-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
img {
    max-width: 100%;
        vertical-align: middle;
    border-style: none;
}
.event-banner-wrap .banner-thumb {
    border: 3px solid #fff;
}
.height-50 {
    height: 50%;
    max-height: 50%;
}
.aboutevent{
    padding: 0px 103px 0px 0px;

}
</style>
<img src="../uploaded_images/1651068066png" alt="event banner" style="width:100%">
<!-- E:\xampp\htdocs\Perfect_Stom_Moments\public\uploaded_images\1651068066png -->
   
    <div class="maincontentdiv" style="display: flex;margin-top: 23px;padding: 57px;">
     <div class="aboutevent" style="flex:2">
         <div class="img-container">
        <span>
            <!-- <img style=" width: 65px;
    height: 65px;
    border-radius: 55px;" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="img"> 
        </span>
       <span>
Organised by 
Midge Maisel</span> -->
<h1>{{$event_det->event_name}}</h1>
<hr>
    </div>
     <h3>
    About This Event
</h3>

Event Date:-{{$event_det->event_date}} <br>
Starting Time:-{{$event_det->starting_time}} <br>
Ending Date:-{{$event_det->duration}} <br>
Ending Time:-{{$event_det->duration_time}} <br>
Ticket Price:-{{$event_det->ticketprice}} <br>
Totel Ticket Available:-{{$event_det->totel_ticket}} <br>
<p>{{$event_det->event_discription}}</p>
    </div>
    <div style="flex:1">
            <h2>BOOKING Ticket</h2>
            <!-- <p>    Take the chance to delve deeper into elements of formal online learning, and find out how online assessment and teaching is carried out. -->
</p>
<!-- <a href=""></a> -->
<form method="POST" action="/Eventdetails/{{$event_det->event_id}}">
    @csrf
    <input type="hidden" id="" name="event_id"value="{{$event_det->event_id}}">

    <input type="hidden" id="ticketprice"value="{{$event_det->ticketprice}}">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">No Of Seat</label>
      <input type="text" onchange="change_send(this.value);" class="form-control" name="noofseat" id="noofseat" placeholder="">
    </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputPassword4">Date Of Event</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="">
    </div> -->
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Amount</label>
      <input type="text" name="totalamount" id="totalamount"class="form-control"  readonly/>
    </div>
    <button class="btn btn-danger" style="margin-top: 14px;"> BOOK NOW</button>

  </div>
</form>
</div>
    </div>     
    </div>
        
</div>
<script type="text/javascript">
function change_send(noofseat)
{
  $noofseat=noofseat;
  $ticketprice=$("#ticketprice").val();
  $totelprice=$ticketprice*$noofseat;
   $("#totalamount").val($totelprice);
	// alert($totelprice);

}
</script>	
@endsection