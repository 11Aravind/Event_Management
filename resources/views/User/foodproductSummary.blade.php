<!-- foodproductSummary.blade -->
@extends('Layout.User_Homepage')
@section('content')

<div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h1>payment_button</h1>


@if(Session::has('data'))
{{Session::get('data.FoodservingInfo')}}
{{Session::get('data.foodProductdet')}}

<div class="container tex-center mx-auto">
    <form action="/pay" method="POST" class="text-center mx-auto mt-5">
      
      <script
          src="https://checkout.razorpay.com/v1/checkout.js"
          data-key="rzp_test_iKlM2rsXjuV7R1"
    data-amount="{{Session::get('data.amount')}}" 
          data-currency="INR"
    data-order_id="{{Session::get('data.order_id')}}"
          data-buttontext="Pay with Razorpay"
          data-name="FESTIVA EVENTS"
          data-description="Test transaction"
         
          data-theme.color="#182fa3"
      ></script>
      <input type="hidden" custom="Hidden Element" name="hidden">
      </form>
</div>
<!-- </div> -->
@endif

</div>
</div>
</div>
</div>
</div>
@endsection