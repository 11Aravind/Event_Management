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
                                            <h5>Category Details </h5>
  <a href="/foodcategory"type="button" class="btn btn-primary" title=""  style="float: right;">Add Category</a>
                                            <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                                        
                                    @if(Session::get('success'))
                                
                                    <span style="color:green">
{{Session::get('success')}}
</span>
                                
                                @endif
                           
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped"  id="MyTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Category Name</th>
                                                            <th>Discription</th>
                                                            <!-- <th>Update</th> -->
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($busdetailss as $busdetails)
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$busdetails->category_name}}</td>
                                                            <td>{{$busdetails->discription}}</td>
                                                           
                                                            <!-- <td>
                                                            <a href="#" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="#" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            @if($busdetails->status==1)
                                                            <td>
                                                            <button type="button" class="btn btn-success">Active</button>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <button type="button" class="btn btn-success">Dective</button>
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
                            </div>
                            </div>
@endsection