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
                                            <h5>Add Product</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form enctype="multi-part form/data">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Product Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Product Name">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Product Image</label>
                                                            <input type="file" class="form-control" id="exampleInputEmail1"  >
                                                         </div>
                                                     <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Select Category</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>--Select--</option>  
                                                            @foreach($getcategorys as $getcategory)
                                                            <option>{{$getcategory->category_name }}</option>
                                                            @endforeach  
                                                          
                                                             </select>
                                                        </div>
</div>
<div class="col-md-6" style="float: right;margin-top: -269px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Price</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Product Price">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Quentity</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Quentity">
                                                         </div>
                                                        <!-- <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div> -->
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Product Description" rows="3"></textarea>
                                                        </div>
                                                        <button type="submit"style="float:right"class="btn btn-primary">Add Prodct</button>

</div>
                                                    </form>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <form> -->
                                                        <!-- <div class="form-group">
                                                            <label>Text</label>
                                                            <input type="text" class="form-control" placeholder="Text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Example select</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div> -->
                                                        <!-- <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div> -->
                                                    <!-- </form>
                                                </div> -->
                                            </div>
</div>
</div>
</div>
<div>
</div>
</div>
<div>
@endsection