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
                                            <h5>Tour Packages</h5> 
 <a href="/Add_tourpackage"type="button" class="btn btn-primary" title=""  style="float: right;">Add Tour Package</a>
  
 
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
                                                            <th>Main Description</th>
                                                            <th>days</th>
                                                            <th>Price</th>
                                                            <th>dateofDeparture </th>
                                                            <!-- <th>package_image</th> -->
                                                            <th>dateofarrival</th>
                                                            
                                                            <!-- <th>Update</th> -->
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($tourdet as $tourdet)
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$tourdet->MainDescription}}</td>
                                                            <td>{{$tourdet->days}}</td>
                                                            <td>{{$tourdet->Price}}</td>
                                                            <td>{{$tourdet->dateofDeparture}}</td>
                                                            <td>{{$tourdet->dateofarrival}}</td>
                                                            <!-- <td> <img id="myImg" style="width: 60px;height: 37px;" src="../images/{{$tourdet->banner}}" alt=""> </td> -->
                                                        
                                                          
                                                            <!-- <td>
                                                            <a href="updateEvent/{{$tourdet->event_id}}" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="DeleteTour/{{$tourdet->tour_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            <!-- condition vekkanam  -->
                                                            @if($tourdet->status==1)
                                                            <td>
                                                            <a href="Deactivetour/{{$tourdet->tour_id }}" class="btn btn-danger"> Dective</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="Activetour/{{$tourdet->tour_id }}" class="btn btn-success">Active</a>
                                                            </td>
                                                           @endif 
                                                            
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
                                        

                                        
                                   
                                        