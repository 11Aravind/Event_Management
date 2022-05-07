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
                                            <h5>Travel Agency Details</h5>
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
                                                            <th>ownername</th>
                                                            
                                                            <th>Tagency_name</th>
                                                            <!-- <th>Update</th> -->
                                                            <th>landline</th>
                                                            <th>moblieno</th>
                                                            <th>licencepic</th>
                                                            <th>district</th>
                                                            <th> Delete</th>
                                                            <th> Status</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($TravelKyc as $TravelKyc)
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$TravelKyc->ownername}}</td>
                                                            <td>{{$TravelKyc->Tagency_name}}</td>
                                                            <td>{{$TravelKyc->landline}}</td>
                                                           <td>{{$TravelKyc->moblieno}}</td>
                                                           <td>{{$TravelKyc->licencepic}}</td>
                                                           <td>{{$TravelKyc->district}}</td>
                                                            <!-- <td>
                                                            <a href="#" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="/TravelagencyDelete/{{$TravelKyc->towner_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            @if($TravelKyc->status==1)
                                                            <td>
                                                            <a href="/TravelagencyDeactive/{{$TravelKyc->towner_id}}"  class="btn btn-warning"> Dective</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="/TravelagencyActive/{{$TravelKyc->towner_id}}" class="btn btn-success">Active</a>
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