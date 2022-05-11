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
                                            <h5>Packages</h5> 
 <a href="../Add_Package"type="button" class="btn btn-primary" title=""  style="float: right;">Add  Package</a>
 @if(Session::get('msg'))
<span style="color:{{Session::get('color')}}">{{Session::get('msg')}}</span>                             
 @endif
 </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped" id="MyTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>package_use</th>
                                                            <!-- <th>type</th> -->
                                                            <th>total_amount</th>
                                                            <!-- <th>package_image</th> -->
                                                            <th>PackageProducts</th>
                                                            
                                                           
                                                            <th> status</th>
                                                        </tr>
                                                    </thead>
                                                    @php $i=1 @endphp
                                                   @foreach($packagedet as $packagedets)
                                                    <tbody>
                                                        <tr>
                                                            <td>@php echo $i; @endphp</td>
                                                            <td>{{$packagedets->package_use}}</td>
                                                            <!-- <td>{{$packagedets->type}}</td> -->
                                                            <td>{{$packagedets->total_amount}}</td>
                                                            
                                                        
                                                            <td>{{$packagedets->total_amount}}</td>
                                                          
                                                           
                                                            <!--  -->
                                                            @if($packagedets->status==0)
                                                            <td>
                                                            <a href="Approvecusomepackage/{{$packagedets->package_id }}" class="btn btn-success">Approve</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="Rejectcusomepackage/{{$packagedets->package_id }}" class="btn btn-danger">Reject</a>
                                                            </td>
                                                            @endif
                                            
                                                        </tr>
                                                        @php $i=$i+1; @endphp
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
  @endsection
                                        
                                   
                                        