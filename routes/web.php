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
use App\Http\Controllers\PaymentController;
use App\Models\Category;
use App\Models\Event;
use App\Models\AddProduct;
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
    return view('Homepagecontent',["starting"=>"../"]);
});
Route::get('/User', function () {
    return view('Homepagecontent',["starting"=>"../"]);
});
Route::get('/Admin', function () {
    return view('Admin_homepage',["title"=>"Admin_dashbord"]);
});
Route::get('Empoly',[EmployController::class,'Empoly']);


//Employ
Route::get('Add_employ',[EmployController::class,'Add_employ']);
Route::post('/Add_employ',[EmployController::class,'store_emly_Det']);
Route::get('/Profile',[EmployController::class,'Profile']);


Route::get('/Displayemploydet',[EmployController::class,'Displayemploydet']);
// Employdetails
// employdetactive
Route::get('/employActive/{id}',[EmployController::class,'EmployActive']);
Route::get('/EmployDeactive/{id}',[EmployController::class,'EmployDeactive']);
// EmployDelete
Route::get('/EmployDelete/{id}',[EmployController::class,'EmployDelete']);
Route::get('/ApprovedEmploys',[EmployController::class,'ApprovedEmploys']);
Route::post('/ApprovedEmploys',[EmployController::class,'ApprovedEmploys_store']);

Route::get('/IssueOrder/{employ_id}',[EmployController::class,'IssueOrder']);

// EmmployDeactive
Route::get('/Employdetails',[AdminController::class,'Displayemploydet']);
Route::get('/ViewAdminPackage',[AdminController::class,'ViewPackage']);

Route::get('/ViewEvent',[AdminController::class,'ViewEvent']);

Route::get('/DeleteEvent/{id}',[AdminController::class,'DeleteEvent']);
//DeleteTour
Route::get('/DeleteTour/{id}',[AdminController::class,'DeleteTour']);
// TravelController
Route::get('Travel',[TravelController::class,'Travel']);

// Route::get('Travel', function () {
//     return view('Travel/KycForm',["title"=>"Travel Agency_dashbord"]);
// });


/////////food routs start
// Route::get('Food', function () {

//     return view('Food/Fooddashbord',["title"=>"Food Dashbord"]);
// });
Route::get('Food',[FoodController::class,'Fooddashbord']);
Route::get('UpdateFood/{id}',[FoodController::class,'UpdateFood']);
Route::post('UpdateFood/{id}',[FoodController::class,'UpdateFood_store']);
Route::get('/foodcategory', function () {
    return view('Food/foodcategory',["title"=>"Food Dashbord"]);
});
Route::post('/foodcategory',[FoodController::class,'store']);
Route::get('/Ticketlayout/{event_id}/{noofseat}',[UserController::class,'Ticketlayout']);

// Ticketlayout
Route::get('/foodorderdetails',[FoodController::class,'foodorderdetails']);
// DeleteFood
Route::get('/DeleteFood/{cat_type}/{id}',[FoodController::class,'DeleteFood']);
// Route::get('/FoodOrder_details',[FoodController::class,'FoodOrder_details']);

//food routs end
// Route::get('/FoodOrder_details',[FoodController::class,'FoodOrder_details']);


// payment

Route::get('/foodproductSummary',[FoodController::class,'foodproductSummary']);
Route::post('/pay',[FoodController::class,'pay']);

Route::post('/TourpackageDetails_pay',[TourController::class,'TourpackageDetails_pay']);


Route::post('/PackageDetail_pay',[PackageController::class,'PackageDetail_pay']);
Route::get('/FoodOrder_details',[FoodController::class,'FoodOrder_details']);
// Route::get('/',[FoodController::class,'']);


Route::get('/success',[FoodController::class,'success']);
Route::get('/error' ,[FoodController::class,'error']);
// payment end

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
// PackageDetail
Route::post('PackageDetail',[PackageController::class,'PackageDetail_store',"title"=>"PackageDetail page"]);
//PackageLayout.blade.php //primium
Route::get('/Premium',[PackageController::class,'Premium',"title"=>"Add_Package page"]);
Route::get('/Medium',[PackageController::class,'Medium',"title"=>"Medium Package"]);
Route::get('/Regular',[PackageController::class,'Regular',"title"=>"Regular Package"]);


Route::get('EventChart', function () {
    return view('User/EventChart',["title"=>"EventChart page"]);
});

//OrderDetails
Route::get('/OrderDetails', [UserController::class,'OrderDetails']);

// Route::get('/{event}',[UserController::class,'eventdynamic']);

Route::get('/Events', [UserController::class,'EventList']);
Route::get('Eventdetails/{id}', [UserController::class,'Eventdetails']);
Route::post('Eventdetails/{id}', [UserController::class,'Eventdetails_store']);

Route::get('/addeventbookdet', [UserController::class,'addeventbookdet']);




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
// TourUserInfo
// Route::get('TourUserInfo/{id}',[TourController::class,'TourUserInfo']);

// PackageController

// DeleteProduct
Route::get('DeleteProduct/{id}',[AdminController::class,'DeleteProduct']);
Route::get('DeletePackage/{id}',[AdminController::class,'DeletePackage']);
Route::get('DeleteCategory/{id}',[AdminController::class,'DeleteCategory']);


// UpdateForm/3
Route::get('UpdateForm/{id}',[AdminController::class,'UpdateForm']);
Route::post('UpdateForm/{id}',[AdminController::class,'UpdateProduct']);
//ADeactiveProductproduct
Route::match(['get','post'],'DeactiveProduct/{id}',[AdminController::class,'DeactiveProduct']);
// ActiveProduct
Route::match(['get','post'],'ActiveProduct/{id}',[AdminController::class,'ActiveProduct']);
//Activetour
Route::get('Activetour/{id}',[AdminController::class,'Activetour']);
// DeactiveEvent
Route::get('DeactiveEvent/{id}',[AdminController::class,'DeactiveEvent']);

// Deactivetour
Route::get('Deactivetour/{id}',[AdminController::class,'Deactivetour']);
// ActiveEvent
Route::get('ActiveEvent/{id}',[AdminController::class,'ActiveEvent']);

// ActiveCategory
Route::get('ActiveCategory/{id}',[AdminController::class,'ActiveCategory']);
// DeactiveCategory
Route::get('DeactiveCategory/{id}',[AdminController::class,'DeactiveCategory']);
// Activatepackage
Route::get('Activatepackage/{id}',[AdminController::class,'Activatepackage']);
// Deactivatepackage
Route::get('Deactivatepackage/{id}',[AdminController::class,'Deactivatepackage']);

//Travel

Route::get('TravelKyc',[TravelController::class,'viewkycform']); 
Route::post('/TravelKyc',[TravelController::class,'storekycdetails']); 
Route::get('BusDetails',[TravelController::class,'BusDetailsform']); 
Route::post('/BusDetails',[TravelController::class,'storeBusDetails']); 
Route::get('/Businfo',[TravelController::class,'Businfo']); 
// UpdateBus
// BusBooking_details
Route::get('/BusBooking_details',[TravelController::class,'BusBooking_details']); 

Route::get('/UpdateBus/{id}',[TravelController::class,'UpdateBus']); 
Route::post('/UpdateBus_store/{id}',[TravelController::class,'UpdateBus_store']); 


Route::get('/busbooking_form/{towner_id}/{bus_id}',[TravelController::class,'busbooking_form']); 
Route::post('/busbooking_forms',[TravelController::class,'busbookingdet_store']); 
Route::get('/BusbookingSummary',[TravelController::class,'BusbookingSummary']); 

Route::post('/payEvent',[UserController::class,'payEvent']); 

Route::post('/bookpay',[TravelController::class,'bookpay']);


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
Route::post('/TourpackageDetails',[TourController::class,'TourpackageDetails_store']);


Route::get('/Cateringkyc',[FoodController::class,'Cateringkyc']);
Route::post('/Cateringkyc',[FoodController::class,'Cateringkycdet_store']);
Route::get('/Cateringkyc_activate/{id}',[FoodController::class,'Cateringkyc_activate']);
Route::get('/Cateringkyc_deactivate/{id}',[FoodController::class,'Cateringkyc_deactivate']);
Route::get('/Cateringkyc_delete/{id}',[FoodController::class,'Cateringkyc_delete']);





Route::get('/Catering_details',[FoodController::class,'Catering_details']);


Route::get('/ViewTravelPage',[UserController::class,'ViewTravelPage']);

Route::get('/TravelAgenctDetails/{id}',[UserController::class,'TravelAgenctDetails']);

Route::get('/SingleBusDetails/{id}',[UserController::class,'SingleBusDetails']);


Route::get('/FoodCategoryDetails/{FoodCategoryDetails}/{id}',[UserController::class,'FoodCategoryDetails']);
Route::get('/FoodProductDetails/{FoodCategoryDetails}/{id}/{user_id}',[UserController::class,'FoodProductDetails']);

Route::get('/SingleProductdetails/{id}',[UserController::class,'SingleProductdetails']);

Route::get('/AddUserFooddet/{id}/{Catering_user_id}',[UserController::class,'AddUserFooddet']);
Route::post('/AddUserFooddet',[UserController::class,'AddUserFooddet_store']);
//

// RegisterComplaints
Route::get('/RegisterComplaints',[UserController::class,'RegisterComplaints']);
Route::post('/RegisterComplaints',[UserController::class,'store_RegisterComplaints']);


// Route::post('/AddUserFooddet',[UserController::class,'AddUserFooddet_store']);
// AddUserFooddet
// Route::get('/AddUserFooddet',[UserController::class,'AddUserFooddet']);

Route::get('/payment',[PaymentController::class,'index']);
Route::post('/charge',[PaymentController::class,'charge']);
Route::get('/confirm',[PaymentController::class,'confirm']);
// singleEmployDet
Route::get('/singleEmployDet/{id}', [UserController::class,'singleEmployDet']);

// Route::get('/CardPage', [UserController::class,'CardPage']);


Route::get('/updateEvent/{id}',function($id){
    $product = Event::findOrFail($id);
    $getcategory=Category::where('cat_type','=','Product')->get();
    return view('Admin.eventsview',["title"=>"Update_Product page","product"=>$product,"categorys"=>$getcategory]);
    
});

Route::post('/updateEvent', [AdminController::class,'updateEvent_store']);


