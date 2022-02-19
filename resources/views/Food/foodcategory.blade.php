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
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <!-- <div class="card-header">
                                            <h5>Basic Componant</h5>
                                        </div> -->
                                        <div class="card-body">
                                            <h5>Add Category</h5>
                                                @if(Session::get('successmsg'))
                                                 <h5 style="color:green;" >{{Session::get('successmsg')}}</h5>
                                                 @endif
                                                
                                            
                                            <span>
                                                @if(Session::get('failmsg'))
                                                <h5 style="color:red;" >{{Session::get('failmsg')}}</h5>
                                                        
                                                        @endif
                                                </span>

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="POST" action="Add_category">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Category Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" name="category_name" placeholder="Category Name">
                                 <span style="color:red">
                                 @error('category_name')
                                                            {{ $message }}
                                                            @enderror
                                 </span>
                                                            
                                                         </div>
                                                        <!-- <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="text"class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div> -->
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Category Description"rows="3"></textarea>
                                                            <span style="color:red">
                                                        @error('description')
                                                        {{$message}}
                                                    @enderror</span>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Add Category</button>
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
</div>
</div>
@endsection