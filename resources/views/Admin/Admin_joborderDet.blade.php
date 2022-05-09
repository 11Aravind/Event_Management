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
                                            <h5>Order Details </h5>
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
                                                            <th>work_type</th>
                                                            
                                                            <th>contact_no</th>
                                                            <!-- <th>Update</th> -->
                                                            <th>date</th>
                                                            <th> time</th>
                                                            <th>Address</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                    $i=1;
                                                    @endphp

                                                    @if($StoreOrder->isEmpty())
                                                    <h1>Order Not Added</h1>
                                                    @else
                                                   @foreach($StoreOrder  as $StoreOrder )
                                                    <tbody>
                                                        <tr>
                                                            <td> @php
                                                    echo $i;
                                                    @endphp</td>
                                                            <td>{{$StoreOrder ->work_type}}</td>
                                                            <td>{{$StoreOrder ->contact_no}}</td>
                                                            <td>{{$StoreOrder ->date}}</td>
                                                            <td>{{$StoreOrder ->time}}</td>
                                                            <td>{{$StoreOrder ->address}}</td>
                                                    
                                                        </tr>
                                                        @php
                                                    $i=$i+1;
                                                    @endphp
                                                     @endforeach
                                                     @endif
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