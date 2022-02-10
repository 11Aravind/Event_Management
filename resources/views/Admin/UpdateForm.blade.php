@extends('Layout/Admin_layout')
@section('Admin_content')
<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
<div class="row">
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <!-- <div class="card-header">
                                            <h5>Basic Componant</h5>
                                        </div> -->
                                        <div class="card-body">
                                            <h5>Update Product
                                            </h5>
                                            @if(Session::get('fail'))
                                {
                                    <span style="color:red">
{{Session::get('fail')}}
</span>
                                }
                                @endif
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="col-md-6">
                                                
                                                    <form action="../UpdateForm/{{$fetch->product_id}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Product Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$fetch->product_name}}" name="product_name" placeholder="Product Name">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Product Image</label>
                                                            <input type="file" class="form-control"  name="product_image" id="exampleInputEmail1"  >
                                                         </div>
                                                     <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Select Category</label>
                                                            <select class="form-control" value="{{$fetch->product_category}}" name="product_category"id="exampleFormControlSelect1">
                                                            <option >{{$fetch->product_category}}</option>  
                                                            @foreach($getcategorys as $getcategory)
                                                            <option>{{$getcategory->category_name}}</option>
                                                            @endforeach  
                                                          
                                                             </select>
                                                        </div>
</div>
<div class="col-md-6" style="float: right;margin-top: -269px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Price</label>
                                                            <input type="text"value="{{$fetch->product_price}}" class="form-control" name="product_price" id="exampleInputEmail1"  placeholder="Product Price">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Quentity</label>
                                                            <input type="text" value="{{$fetch->product_quentity}}" class="form-control" name="product_quentity" id="exampleInputEmail1"  placeholder="Quentity">
                                                         </div>
                                                                                                            <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                 <textarea class="form-control" name="product_description"id="exampleFormControlTextarea1" placeholder="Product Description" rows="3">
                                                            {{$fetch->product_discription}}
                                                            </textarea>
                                                        </div>
                                                       
                                                        <button type="submit"style="float:right"class="btn btn-primary">Update Prodct</button>

</div>
                                                    </form>
                                                </div>
                                         
                                            </div>
</div>
</div>
</div>
<div>
</div>
</div>
<div>
@endsection