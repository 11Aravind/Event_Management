@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container col-5">
<h1> Tour Details</h1>
<form action="#" method="POST" enctype="multipart/form-data">
  @csrf
 
  
  <input type="hidden" value="tour_id" name="tour_id">
  <!-- UserEvent_id
product_id -->
<!-- <div class="container"> -->
<div class="row">
    <div class="col">
      <label for="inputEmail4">Name</label>
      <input type="text" name="dateOfEvent" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputEmail4">Contact No</label>
      <input type="text" name="dateOfEvent" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    </div>
    <div class="row">
    
    <div class="col">
      <label for="inputPassword4">Address</label>
      <textarea type="text" name="EventLocation" class="form-control col-6" id="inputPassword4"  row="4"placeholder=""></textarea>
  </div>
    </div>
  <div class="row">
    <div class="col">
      <label for="inputEmail4">No Of Seat</label>
      <input type="text" name="dateOfEvent" class="form-control col-6" id="inputEmail4" placeholder="">
    </div>
    <div class="col">
      <label for="inputPassword4">Total Price</label>
      <input type="text" name="EventLocation" class="form-control col-6" id="inputPassword4" placeholder="" readonly>
  </div>
    </div>
 

  
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <button class="btn btn-primary" style="float:right;margin-top:25px;">Add Tour Details</button>
  </div>
    </div>
  </div>
       


</form>
 
<!-- </div> -->
</div>
</div>
<script type="text/javascript">
function change_send(noOfGust)
{
  $noOfGust=noOfGust;
  $oneItemPrice=$("#oneItemPrice").val();
  $Totalprice=$oneItemPrice*$noOfGust;
   $("#Totalprice").val($Totalprice);
	// alert($Totalprice);

}
</script>

<!-- <script>
  $('#noOFGust').on('change', function() {
    $noOfGust=$("#noOfGust").val(this.value );
    $oneItemPrice=$("#oneItemPrice").val();
    $Totalprice=$oneItemPrice+$noOfGust;
    alert($Totalprice);
 
});
</script> -->
@endsection