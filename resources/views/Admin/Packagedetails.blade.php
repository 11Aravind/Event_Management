@extends('Layout.Admin_layout')
@section('Admin_content')
<!-- <h1>Packagedetails</h1> -->
<!-- <table class="table table-striped" id="MyTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      @php
      $i=1;
      @endphp
    @foreach($busdetailsproductdetails as $busdetailsproductdetail)
    <tr>
      <th scope="row">@php echo $i @endphp</th>
      <td>{{$busdetailsproductdetail->category->category_name}}</td>
      <td>{{$busdetailsproductdetail->product_name}}</td>
      <td>{{$busdetailsproductdetail->product_price}}</td>
      <td>{{$busdetailsproductdetail->product_quentity}}</td>

      <td>
         
          <input type="checkbox" value="{{$busdetailsproductdetail->product_id}}" name="packageProduct[]">
        
      </td>
    </tr>
    @php  $i=$i+1 @endphp
   @endforeach
  </tbody>
</table> -->

@endsection