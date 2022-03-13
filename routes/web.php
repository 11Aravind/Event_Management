<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\TourController;
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
Route::get('Empoly', function () {
    return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);
});
//Employ
Route::get('Add_employ',[EmployController::class,'Add_employ']);
Route::post('/Add_employ',[EmployController::class,'store_emly_Det']);

Route::get('/Displayemploydet',[EmployController::class,'Displayemploydet']);
// Employdetails
// employdetactive
Route::get('/employActive/{id}',[EmployController::class,'EmployActive']);
Route::get('/EmployDeactive/{id}',[EmployController::class,'EmployDeactive']);
// EmmployDeactive
Route::get('/Employdetails',[AdminController::class,'Displayemploydet']);
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
// 
Route::get('/Add_Food_package',[FoodController::class,'Add_Food_package']);
//Authentication
Route::get('SignUp',function(){
    return view('SignUp');
});
Route::post('/SignUp',[AuthenticationController::class,'store']);
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



// Route::get('/{event}',[UserController::class,'eventdynamic']);

Route::get('/Events', [UserController::class,'EventList']);
Route::get('Eventdetails/{id}', [UserController::class,'Eventdetails']);
Route::get('Add_event_category', function () {
    return view('Admin/Add_event_category',["title"=>"TicketBooking page"]);
});
Route::post('Add_event_category', [AdminController::class,'store_event']);
Route::get('DisplayEventCategory', [AdminController::class,'DisplayEventCategory']);
Route::get('/Add_Event', [AdminController::class,'Add_EventForm']);
Route::post('/Add_Event', [AdminController::class,'Add_Event']);
Route::get('/Event_details', [AdminController::class,'Event_details']);



Route::get('/BuyNow', [UserController::class,'viewaddress']);

//tour display
Route::get('TourView',[TourController::class,'TourView']);

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
Route::get('/Businfo',[TravelController::class,'Businfo']); 


// Route::get('BusDetails', function () {
//     return view('Travel/BusDetails',["title"=>"BusDetails"]);
// });
Route::post('/AddAddress',[UserController::class,'store']);

Route::get('/Fooddisplay',[UserController::class,'Fooddisplay']);


Route::get('Tour_details',[PackageController::class,'Tour_details']);
Route::get('/Add_tourpackage',[PackageController::class,'Add_tourpackage']);
Route::post('/Add_tourpackage',[PackageController::class,'store_tourpackage']);
Route::get('/Add_dayPlan',[PackageController::class,'Add_dayPlan']);

Route::post('/Add_daysplane',[PackageController::class,'store_dayplanes']);
Route::get('/TourpackageDetails/{id}',[TourController::class,'TourpackageDetails']);

Route::get('/Cateringkyc',[FoodController::class,'Cateringkyc']);
Route::post('/Cateringkyc',[FoodController::class,'Cateringkycdet_store']);


Route::get('/ViewTravelPage',[UserController::class,'ViewTravelPage']);

Route::get('/TravelAgenctDetails/{id}',[UserController::class,'TravelAgenctDetails']);

Route::get('/SingleBusDetails/{id}',[UserController::class,'SingleBusDetails']);



