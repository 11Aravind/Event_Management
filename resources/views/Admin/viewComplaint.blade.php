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
                                                            <!-- <th>Update</th> -->
                                                            <th>user_id</th>
                                                            <th>subject</th>
                                                            <th>proof</th>
                                                            <th> complaint</th>
                                                            <!-- <th> status</th> -->
                                                        </tr>
                                                    </thead>
                                                    @php $i=1;@endphp
                                                   @foreach($Complaint as $Complaint)
                                                    <tbody>
                                                        <tr>
                                                            <td> @php echo $i; @endphp</td>
                                                            <td>{{$Complaint->user_id}}</td>
                                                            <td>{{$Complaint->subject}}</td>
                                                           <td>{{$Complaint->proof}}</td>
                                                           <td>{{$Complaint->complaint}}</td>
                                                        </tr>
                                                        @php $i=$i+1;@endphp
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