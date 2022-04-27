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
                                            <h5>Employ Details</h5>
                                            @if(Session::get('msg')) 
            <span style="color:{{Session::get('color')}}">{{Session::get('msg')}}</span>
        @endif
                                        
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
                                                <table class="table table-striped"  id="MyTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Employ Name</th>
                                                            
                                                            <th>Position</th>
                                                            <!-- <th>Update</th> -->
                                                            <th>qualification</th>
                                                            <th>email</th>
                                                            <th>contact_no</th>
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                            <th>Issue orde</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($employdets as $employdet)
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$employdet->employ_name}}</td>
                                                            <td>{{$employdet->job_position}}</td>

                                                            
                                                            <td>{{$employdet->qualification}}</td>
                                                           <td>{{$employdet->email}}</td>
                                                           <td>{{$employdet->contact_no}}</td>

                                                            <!-- <td>
                                                            <a href="#" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="/EmployDelete/{{$employdet->employ_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            @if($employdet->status==1)
                                                            <td>
                                                            <a href="/EmployDeactive/{{$employdet->employ_id}}"  class="btn btn-danger"> Dective</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="/employActive/{{$employdet->employ_id}}" class="btn btn-success">Active</a>
                                                            </td>
                                                            
                                                            @endif
                                                            <td>
                                                            <a href="#" class="btn btn-warning">Issue order</a>
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
@endsection