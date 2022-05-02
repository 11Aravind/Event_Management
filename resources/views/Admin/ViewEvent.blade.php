@extends('Layout/Admin_layout')
@section('Admin_content')
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
                                            <h5>Events</h5> 
 <a href="../Add_Event"type="button" class="btn btn-primary" title=""  style="float: right;">Add  Event</a>
 @if(Session::get('msg'))
                                {
                                    <span style="color:{{Session::get('color')}}">
{{Session::get('msg')}}
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
                                                            <th>Name</th>
                                                            <th>event_date</th>
                                                            <th>starting <br> time</th>
                                                            <!-- <th>package_image</th> -->
                                                            <th>duration</th>
                                                            <th>ticket <br> price</th>
                                                            <th>totel <br> ticket</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($eventdet as $eventdet)
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$eventdet->event_name}}</td>
                                                            <td>{{$eventdet->event_date}}</td>
                                                            <td>{{$eventdet->starting_time}}</td>
                                                            <!-- <td> <img id="myImg" style="width: 60px;height: 37px;" src="../images/{{$eventdet->event_banner}}" alt=""> </td> -->
                                                        
                                                            <td>{{$eventdet->duration}}</td>
                                                            <td>{{$eventdet->ticketprice}}</td>
                                                            <td>{{$eventdet->totel_ticket}}</td>
                                                            <td>
                                                            <a href="updatePackage/{{$eventdet->event_id}}" class="btn btn-primary">Update</a>
                                                            </td>
                                                            <td>
                                                            <a href="DeletePackage/{{$eventdet->event_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                           
                                                            <!-- <td>
                                                            <a href="DeactiveProduct/{{$eventdet->event_id }}" class="btn btn-danger"> Dective</a>
                                                            </td> -->
                                                            
                                                            <td>
                                                            <a href="ActiveProduct/{{$eventdet->event_id }}" class="btn btn-success">Active</a>
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
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  @endsection
                                        
                                   
                                        