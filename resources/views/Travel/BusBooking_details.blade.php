@extends('Layout/Travel')
@section('travelcontent')
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
                                            <h5>Bus Booking Details </h5>
                                            <a href="../BusDetails"type="button" class="btn btn-primary" title=""  style="float: right;">Add Bus</a>
                                            <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                                        
                                    @if(Session::get('success'))
                                {
                                    <span style="color:green">
{{Session::get('success')}}
</span>
                                }
                                @endif
                           
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped" id="MyTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th> Name</th>
                                                            <th>contact</th>
                                                            <th>email</th>
                                                            <th>dateOfEvent</th>
                                                            <th>time</th>
                                                            <th>startingplace</th>
                                                            <th>arrivalplace</th>
                                                            <th>kolometers</th>
                                                            <th>totelprice</th>
                                                            <th>rezorpay_id</th>
                                                            <th>payment_done</th>
                                                            <!-- <th>Update</th> -->
                                                            <th>Delete</th>
                                                            <!-- <th> status</th> -->
                                                        </tr>
                                                    </thead>
                                                   @foreach($BusBookingDetails as $BusBookingDetails)
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$BusBookingDetails->name}}</td>
                                                            <td>{{$BusBookingDetails->contact}}</td>
                                                            <td>{{$BusBookingDetails->email}}</td>

                                                            <td>{{$BusBookingDetails->dateOfEvent}}</td>
                                                            <td>{{$BusBookingDetails->time}}</td>
                                                            <td>{{$BusBookingDetails->startingplace}}</td>
                                                            <td>{{$BusBookingDetails->arrivalplace}}</td>
                                                            <td>{{$BusBookingDetails->kolometers}}</td>
                                                            <td>{{$BusBookingDetails->totelprice}}</td>
                                                            <td>{{$BusBookingDetails->rezorpay_id}}</td>
                                                            <!-- <td>{{$BusBookingDetails->payment_done}}</td> -->
                                                            @if($BusBookingDetails->payment_done==1)
                                                            <td>
                                                            <a href="#"  style="background:green;color:white"> success</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href=""  style="background:red;color:white">failed</a>
                                                            </td>
                                                            
                                                            @endif
                                                            
                                                            <!-- <td>
                                                            <a href="UpdateBus/{{$BusBookingDetails->bus_id }}" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="DeleteProduct/{{$BusBookingDetails->bus_id  }}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            
                                                        </tr>
                                                     @endforeach
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
@endsection