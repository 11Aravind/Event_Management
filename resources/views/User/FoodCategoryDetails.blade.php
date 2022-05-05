@extends('Layout.User_Homepage')
@section('content')
<style>
    #foodcategory li a {
        padding: 7px;
   
    width: 100%;
    }
    #foodcategory li a:hover {
        background: #cdc5c5;
        border-radius: 5px;
    border-right: 3px solid red;
    color:black;
        /* background:red; */
    } 
    #foodcategory li a:active {
        background: #cdc5c5;
        border-radius: 5px;
    border-right: 3px solid red;
    color:white;
        /* background:red; */
    } 
    .but{
        color:white;
    } 
</style>
<div id="fulldetailDiv" style="margin-top: 88px;    padding: 61px;">
<h1>{{$FoodCategoryDetails}} </h1>
   <p>Roast Chicken, Burger, Afghan <br>
    Kunnamkulam Locality, Kunnamkulam</p>
    <!-- <span style="color:red">Main Category</span> -->
    <hr>
    <div id="containerTotel" style="display: flex;">
        <div id="foodcategory" style="color:red;flex:.2;">
        <!-- category display start -->
        <ul>
     <li><a href="#" style="color:red">Our Categorys are</a></li>
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
            
                <a href="/AddUserFooddet/{{$foodproductdet->product_id}}/{{$Catering_user_id}}"  class="btn btn-warning "style="">Book Now</a> 
            </div> 
                
        </div>
        @endforeach
        </div>
        
       <!-- hhhh --> <br>
    </div>
</div>

@endsection