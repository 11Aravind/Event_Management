@extends('Layout/FoodLayout')
@section('foodcontent')




<div class="contentsss">
        <div class="cont">
        <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
<div class="row">
 <!-- [ stiped-table ] start -->

 <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Order Details </h5>
                           
                                        </div>
                                        </div>
                                        @if($foodorderdetails->isEmpty())
                                        <h1>Order not exist</h1>
                                        @else
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped" id="MyTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Product Name</th>
                                                            <th>Event Date</th>
                                                            <th>Location</th>
                                                            <th>Starting time</th>
                                                            <th>ending time</th>
                                                            <th>serving type</th>
                                                          
                                                            <th>noOfGust</th>
                                                            <th>noofemploy</th>
                                                            <th>Totalprice</th>
                                                            <th>payment_id</th>
                                                            <th> rezorpay_id</th>
                                                            <th> payment_done</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($foodorderdetails as $foodorderdetails)
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$foodorderdetails->dateOfEvent}}</td>
                                                            <td>{{$foodorderdetails->dateOfEvent}}</td>
                                                            <td>{{$foodorderdetails->EventLocation	}}</td>
                                                            <td>{{$foodorderdetails->ServingStartingtime}}</td>
                                                            <td>{{$foodorderdetails->Servingendingtime}}</td>
                                                            <td>{{$foodorderdetails->servingtype}}</td>
                                                            <td>{{$foodorderdetails->noOfGust}}</td>
                                                            <td>{{$foodorderdetails->noofemploy}}</td>
                                                            <td>{{$foodorderdetails->Totalprice}}</td>
                                                            <td>{{$foodorderdetails->payment_id}}</td>
                                                            <td>{{$foodorderdetails->rezorpay_id}}</td>
                                                            <td>
                                                                @if($foodorderdetails->payment_done==1)
<span style="background:green;color:white">success</span>
                                                                @else
                                                                <span style="background:red;color:white">fail</span>
                                                                
                                                                @endif
                                                            </td>
                                                            		
                                                         
                                                        </tr>
                                                     @endforeach
                                                     @endif
                                                                                                                 <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ stiped-table ] end -->
<!-- </div> -->
</div>
</div>
</div>
</div>
</div>
</div>
<div>
</div>
</div>      
</div>
@endsection
