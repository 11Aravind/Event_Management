<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//user
Route::get('/', function () {
    return view('Homepagecontent');
});
Route::get('/User', function () {
    return view('Homepagecontent');
});
Route::get('/Admin', function () {
    return view('Admin_homepage',["title"=>"Admin_dashbord"]);
});
Route::get('Employ', function () {
    return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);
});
Route::get('Travel', function () {
    return view('Travel/KycForm',["title"=>"Employ_dashbord"]);
});
Route::get('Food', function () {
    return view('Food/Fooddashbord',["title"=>"Food Dashbord"]);
});
Route::get('/foodcategory', function () {
    return view('Food/foodcategory',["title"=>"Food Dashbord"]);
});
Route::post('/foodcategory',[FoodController::class,'store']);

Route::get('/foodDetails',[FoodController::class,'DisplayCategory']);
Route::get('/Add_Food',[FoodController::class,'add_food_form']);
Route::post('/Add_Food',[FoodController::class,'store_food']);
Route::get('/Display_Foodproduct',[FoodController::class,'Display_Foodproduct']);


//Authentication
Route::get('SignUp',function(){
    return view('SignUp');
});
Route::post('SignUp/',[AuthenticationController::class,'store']);
Route::get('/Login', function () {
    return view('Login');
});
Route::post('/Login',[AuthenticationController::class,'check']);
Route::get('/Logout',[AuthenticationController::class,'logout']);

//category
Route::get('Add_category',[AdminController::class,'index']);
Route::post('Add_category',[AdminController::class,'store']);
Route::get('DisplayCategory',[AdminController::class,'DisplayCategory']);

//product
Route::get('Add_Product',[AdminController::class,'getcategorydet']);
Route::post('Add_Product',[AdminController::class,'store_product']);
Route::get('Display_Product',[AdminController::class,'display_product']);

//package
Route::get('Add_Package',[PackageController::class,'showpackageproduct',"title"=>"Add_Package page"]);
Route::post('Add_Package',[PackageController::class,'addpackageproduct',"title"=>"Add_Package page"]);
Route::get('ViewPackage',[PackageController::class,'ViewPackage',"title"=>"ViewPackage page"]);
Route::get('PackageDetail/{id}',[PackageController::class,'PackageDetail',"title"=>"PackageDetail page"]);

//PackageLayout.blade.php //primium
Route::get('/Premium',[PackageController::class,'Premium',"title"=>"Add_Package page"]);
Route::get('/Medium',[PackageController::class,'Medium',"title"=>"Medium Package"]);
Route::get('/Regular',[PackageController::class,'Regular',"title"=>"Regular Package"]);


Route::get('EventChart', function () {
    return view('User/EventChart',["title"=>"EventChart page"]);
});
Route::get('Events', function () {
    return view('User/TicketBooking',["title"=>"TicketBooking page"]);
});
Route::get('/BuyNow', [UserController::class,'viewaddress']);

//tourist
Route::get('TourView', function () {
    return view('User/TourView',["title"=>"TourView page"]);
});

// PackageController

// DeleteProduct
Route::get('DeleteProduct/{id}',[AdminController::class,'DeleteProduct']);

// UpdateForm/3
Route::get('UpdateForm/{id}',[AdminController::class,'UpdateForm']);
Route::post('UpdateForm/{id}',[AdminController::class,'UpdateProduct']);
//ADeactiveProductproduct
Route::match(['get','post'],'DeactiveProduct/{id}',[AdminController::class,'DeactiveProduct']);
// ActiveProduct
Route::match(['get','post'],'ActiveProduct/{id}',[AdminController::class,'ActiveProduct']);


//Travel

Route::get('TravelKyc',[TravelController::class,'viewkycform']); 
Route::post('/TravelKyc',[TravelController::class,'storekycdetails']); 
Route::get('BusDetails',[TravelController::class,'BusDetailsform']); 
Route::post('/BusDetails',[TravelController::class,'storeBusDetails']); 
// Route::get('BusDetails', function () {
//     return view('Travel/BusDetails',["title"=>"BusDetails"]);
// });
Route::post('/AddAddress',[UserController::class,'store']);
