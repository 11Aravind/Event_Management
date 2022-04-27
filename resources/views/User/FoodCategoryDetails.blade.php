@extends('Layout.User_Homepage')
@section('content')

<!-- <div class="popular_places_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section_title text-center mb_70">
<h3>Food Category Menu </h3>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>
</div>
</div>
<div class="row">
@foreach($categorydets as $categorydet)
<a href="/FoodProductDetails/{{$categorydet->category_id}}">
<div class="col-lg-4 col-md-6">
<div class="single_place">
<div class="thumb">
<img src="../images/place-x1.png.pagespeed.ic._C7q_9jAJk.jpg" alt="">

</div>
<div class="place_info">
<h3>{{$categorydet->category_name}}</h3>
<p>{{$categorydet->discription}}</p>

</div>
</div>
</div>
</a>
@endforeach

</div>
</div> -->
<div id="fulldetailDiv" style="margin-top: 88px;    padding: 61px;">
<h1>{{$FoodCategoryDetails}} </h1>
   <p>Roast Chicken, Burger, Afghan <br>
    Kunnamkulam Locality, Kunnamkulam</p>
    <!-- <span style="color:red">Main Category</span> -->
    <hr>
    <div id="containerTotel" style="display: flex;">
        <div id="foodcategory" style="color:red;flex:.2;border-right: 1px solid red;">
        <!-- category display start -->
        <ul>
     
            @if($categorydets)
      
        @foreach($categorydets as $categorydet)
      
            <li><a href="/FoodProductDetails/{{$FoodCategoryDetails}}/{{$categorydet->category_id}}/{{$categorydet->user_id}}">{{$categorydet->category_name}}</a></li>
            @endforeach
            @endif
            <!-- <li><a href="#">noodils</a></li>
            <li><a href="#">noodils</a></li> -->
        </ul>
        <!-- category display end -->
    </div>
        <!-- hhh -->
       
        <div class="product" style="flex:1;margin-left:3px;margin-left:33px;">
        @foreach($foodproductdets as $foodproductdet)
        <div class="productfull" style="display: flex; margin: 12px;">
   
            <div class="productdet" style=""><img src="../../../uploaded_images/{{$foodproductdet->product_photo}}" style="width: 135px;height: 116px;" alt="productimg">
            <!-- E:\xampp\htdocs\Perfect_Stom_Moments\public\uploaded_images\1650521983.jpg -->
            </div>
            <div class="productcontent" style="margin-left:3px"><h4>{{$foodproductdet->product_name}} </h4>
                <!-- 395 votes <br> -->
                ₹{{$foodproductdet->product_price}}<br>
                {{$foodproductdet->product_discription}}<br>
                <!-- <button ><a href="/AddUserFooddet" style="color:red">Add To Cart</a> </button> -->
            
                <button ><a href="/AddUserFooddet/{{$foodproductdet->product_id}}/{{$Catering_user_id}}" style="color:red">Book Now</a> </button>
            </div> 
                
        </div>
        @endforeach
        </div>
        
       <!-- hhhh --> <br>
    </div>
</div>

@endsection