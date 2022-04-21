@extends('Layout/FoodLayout')
@section('foodcontent')
<div class="contentsss">
        <div class="cont">
<h1>Food sectionDashBord</h1> 
<span style="color:green">
			@if(Session::get('success'))
			{{ Session::get('success')}}
			@endif</span>
                        <span style="color:red">
			@if(Session::get('failmsg'))
			{{ Session::get('failmsg')}}
			@endif</span>
    </div>
   </div> 
   @endsection