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
                                            <h5>Employ Details</h5>
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
                                                            <th>Employ Name</th>
                                                            
                                                            <th>Position</th>
                                                            <!-- <th>Update</th> -->
                                                            <th>qualification</th>
                                                            <th>email</th>
                                                            <th>contact_no</th>
                                                            <th>Delete</th>
                                                            <th> status</th>
                                                            <th>Issue orde</th>
                                                        </tr>
                                                    </thead>
                                                   @foreach($employdets as $employdet)
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{$employdet->employ_name}}</td>
                                                            <td>{{$employdet->job_position}}</td>

                                                            
                                                            <td>{{$employdet->qualification}}</td>
                                                           <td>{{$employdet->email}}</td>
                                                           <td>{{$employdet->contact_no}}</td>

                                                            <!-- <td>
                                                            <a href="#" class="btn btn-primary">Update</a>
                                                            </td> -->
                                                            <td>
                                                            <a href="/EmployDelete/{{$employdet->employ_id}}" style="color:white"class="btn btn-danger">Delete</a>
                                                            </td>
                                                            @if($employdet->status==1)
                                                            <td>
                                                            <a href="/EmployDeactive/{{$employdet->employ_id}}"  class="btn btn-dark"> Dective</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <a href="/employActive/{{$employdet->employ_id}}" class="btn btn-warning">Active</a>
                                                            </td>
                                                            
                                                            @endif
                                                          
                                                            <!-- <a href="#" class="btn btn-warning">Issue order</a> -->
                                                            <td>                                                         
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
Issue order
</button>
</td>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
 
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






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