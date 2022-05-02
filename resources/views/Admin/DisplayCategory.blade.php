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
                                            <h5>{{$headding}} </h5>
  <a href="{{$addcategorytype}}"type="button" class="btn btn-primary" title=""  style="float: right;">Add Category</a>
                                            <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                                        
                                    @if(Session::get('msg'))
                                
                                    <span style="color:{{Session::get('color')}}">
{{Session::get('msg')}}
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
                                                    @php
                                                    $i=1;
                                                    @endphp
                                                   @foreach($busdetailss as $busdetails)
                                                    <tbody>
                                                        <tr>
                                                            <td> @php
                                                    echo $i;
                                                    @endphp</td>
                                                            <td>{{$busdetails->category_name}}</td>
                                                            <td>{{$busdetails->discription}}</td>
                                                           
                                                            <!-- <td>
                                                            <a href="#" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="DeleteCategory/{{$busdetails->category_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            @if($busdetails->status==1)
                                                            <td>
                                                            <a href="DeactiveCategory/{{$busdetails->category_id}}" type="button" class="btn btn-danger"> Dective</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="ActiveCategory/{{$busdetails->category_id}}" class="btn btn-success">Active</a>
                                                            </td>
                                                            
                                                            @endif
                                                        </tr>
                                                        @php
                                                    $i=$i+1;
                                                    @endphp
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