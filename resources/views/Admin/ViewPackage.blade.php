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
                                                            <th>package_use</th>
                                                            <th>type</th>
                                                            <th>total_amount</th>
                                                            <th>package_image</th>
                                                            <th>PackageProducts</th>
                                                            
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($packagedet as $packagedets)
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$packagedets->package_use}}</td>
                                                            <td>{{$packagedets->type}}</td>
                                                            <td>{{$packagedets->total_amount}}</td>
                                                            <td> <img id="myImg" style="width: 60px;height: 37px;" src="../images/{{$packagedets->package_image}}" alt=""> </td>
                                                        
                                                            <td>{{$packagedets->total_amount}}</td>
                                                          
                                                            <td>
                                                            <a href="updatePackage/{{$packagedets->package_id}}" class="btn btn-primary">Update</a>
                                                            </td>
                                                            <td>
                                                            <a href="DeletePackage/{{$packagedets->package_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                           
                                                            <!-- <td>
                                                            <a href="DeactiveProduct/{{$packagedets->package_id }}" class="btn btn-danger"> Dective</a>
                                                            </td> -->
                                                            
                                                            <td>
                                                            <a href="ActiveProduct/{{$packagedets->package_id }}" class="btn btn-success">Active</a>
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
  @endsection
                                        
                                   
                                        