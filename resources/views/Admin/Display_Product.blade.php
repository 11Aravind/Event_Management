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
                                            <h5>Product Details </h5>
                                            <a href="../Add_Product"type="button" class="btn btn-primary" title=""  style="float: right;">Add Product</a>
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
                                                            <th>Product Name</th>
                                                            <th>Category</th>
                                                            <th>Category Type</th>
                                                            <th>Image</th>
                                                            <th>Quentity</th>
                                                            <th>Price</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($busdetailss as $busdetails)
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$busdetails->product_name}}</td>
                                                            <td>{{$busdetails->category_name}}</td>
                                                            <td>{{$busdetails->cat_type}}</td>
                                                            <td> <img id="myImg" style="width: 60px;height: 37px;" src="uploaded_images/{{$busdetails->product_photo}}" alt=""> </td>

                                                            <td>{{$busdetails->product_quentity}}</td>
                                                            <td>{{$busdetails->product_price}}</td>
                                                            <td>
                                                            <a href="UpdateForm/{{$busdetails->product_id}}" class="btn btn-primary">Update</a>
                                                            </td>
                                                            <td>
                                                            <a href="DeleteProduct/{{$busdetails->product_id }}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            @if($busdetails->status==1)
                                                            <td>
                                                            <a href="DeactiveProduct/{{$busdetails->product_id }}" class="btn btn-danger"> Dective</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="ActiveProduct/{{$busdetails->product_id }}" class="btn btn-success">Active</a>
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