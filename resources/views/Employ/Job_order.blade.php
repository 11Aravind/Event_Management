@extends('Layout/Empoly_layout')
@section('employ_content')
<h1 style="">Job Orders</h1>
<button class="btn btn-green">Active</button>
<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">work_type</th>
      <th scope="col">contact_no</th>
      <th scope="col">date</th>
      <th>time</th>
      <th>address</th>
    </tr>
  </thead>
  <tbody>
  <!-- order -->
  @if($order->isEmpty())
  @else
  @foreach($order as $order)
    <tr>
      <th scope="row">1</th>
      <td>{{$order->work_type}}</td>
      <td>{{$order->contact_no}}</td>
      <td>{{$order->date}}</td>
      <td>{{$order->time}}</td>
      <td>{{$order->address}}</td>
    </tr>
    @endforeach
@endif
  </tbody>
</table>
@endsection