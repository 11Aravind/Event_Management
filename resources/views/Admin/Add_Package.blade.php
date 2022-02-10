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
                                            <h5>Add Package</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <!-- <div class="col-md-6"> -->
                                                    <form enctype="multi-part form/data">
                                                         <!-- product tables start -->
                                                    <table class="table table-striped" id="MyTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Amount</th>
      <th scope="col">Select</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>120</td>
      <td><input type="checkbox"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>234</td>
      <td><input type="checkbox"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>444</td>
      <td><input type="checkbox"></td>
    </tr>
  </tbody>
</table>
<!-- product table end -->
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Package Use</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Product Name">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">PAckage Image</label>
                                                            <input type="file" class="form-control" id="exampleInputEmail1"  >
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Package Type</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                             </select>
                                                        </div>
</div>
<div class="col-md-6" style="float: right;margin-top: -269px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Rent Amount</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Product Price">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Totel Amount</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Quentity">
                                                         </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Product Description" rows="3"></textarea>
                                                        </div>
    

</div>
                                                   
<button type="submit"style="float:right"class="btn btn-primary">Add Package</button>

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