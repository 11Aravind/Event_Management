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
Route::get('/Admin',[AdminController::class,'Admin_dashbord'])->middleware('isAdmin');
Route::get('Empoly',[EmployController::class,'Empoly'])->middleware('isEmploy');


//Employ
Route::get('Add_employ',[EmployController::class,'Add_employ'])->middleware('isEmploy');
Route::post('/Add_employ',[EmployController::class,'store_emly_Det']);
Route::get('/Profile',[EmployController::class,'Profile'])->middleware('isEmploy');


Route::get('/Displayemploydet',[EmployController::class,'Displayemploydet']);
// Employdetails
// employdetactive
Route::get('/employActive/{id}',[EmployController::class,'EmployActive']);
Route::get('/EmployDeactive/{id}',[EmployController::class,'EmployDeactive']);
// TravelagencyActive
Route::get('/TravelagencyActive/{id}',[AdminController::class,'TravelagencyActive']);
// TravelagencyDeactive
Route::get('/TravelagencyDeactive/{id}',[AdminController::class,'TravelagencyDeactive']);
// EmployDelete
Route::get('/EmployDelete/{id}',[EmployController::class,'EmployDelete']);
// TravelagencyDelete
Route::get('/TravelagencyDelete/{id}',[AdminController::class,'TravelagencyDelete']);

Route::get('/ApprovedEmploys',[EmployController::class,'ApprovedEmploys'])->middleware('isAdmin');
Route::post('/ApprovedEmploys',[EmployController::class,'ApprovedEmploys_store']);
// job_order
Route::get('/job_order',[EmployController::class,'job_order'])->middleware('isEmploy');

Route::get('/IssueOrder/{employ_id}',[EmployController::class,'IssueOrder']);

// EmmployDeactive
Route::get('/Employdetails',[AdminController::class,'Displayemploydet'])->middleware('isAdmin');
Route::get('/ViewAdminPackage',[AdminController::class,'ViewPackage'])->middleware('isAdmin');

// updatePackage
Route::get('/ViewEvent',[AdminController::class,'ViewEvent']);

Route::get('/DeleteEvent/{id}',[AdminController::class,'DeleteEvent']);
//DeleteTour
Route::get('/DeleteTour/{id}',[AdminController::class,'DeleteTour']);
// TravelController
Route::get('Travel',[TravelController::class,'Travel'])->middleware('isTravel');

// Route::get('Travel', function () {
//     return view('Travel/KycForm',["title"=>"Travel Agency_dashbord"]);
// });


/////////food routs start
// Route::get('Food', function () {

//     return view('Food/Fooddashbord',["title"=>"Food Dashbord"]);
// });
Route::get('Food',[FoodController::class,'Fooddashbord'])->middleware('isLoggedIn');
Route::get('UpdateFood/{id}',[FoodController::class,'UpdateFood']);
Route::post('UpdateFood/{id}',[FoodController::class,'UpdateFood_store']);
Route::get('/foodcategory',[FoodController::class,'foodcategory'] )->middleware('isFood');
Route::post('/foodcategory',[FoodController::class,'store']);
Route::get('/Ticketlayout/{event_id}/{noofseat}',[UserController::class,'Ticketlayout']);

// Ticketlayout
Route::get('/foodorderdetails',[FoodController::class,'foodorderdetails'])->middleware('isFood');
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

Route::get('/foodDetails',[FoodController::class,'DisplayCategory'])->middleware('isFood');
Route::get('/Add_Food',[FoodController::class,'add_food_form'])->middleware('isFood');
Route::post('/Add_Food',[FoodController::class,'store_food']);
Route::get('/Display_Foodproduct',[FoodController::class,'Display_Foodproduct'])->middleware('isFood');
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
Route::get('Add_category',[AdminController::class,'index'])->middleware('isAdmin');
Route::post('Add_category',[AdminController::class,'store']);
Route::get('DisplayCategory',[AdminController::class,'DisplayCategory'])->middleware('isAdmin');

//product
Route::get('Add_Product',[AdminController::class,'getcategorydet'])->middleware('isAdmin');
Route::post('Add_Product',[AdminController::class,'store_product']);
Route::get('Display_Product',[AdminController::class,'display_product'])->middleware('isAdmin');

//package
Route::get('Add_Package',[PackageController::class,'showpackageproduct',"title"=>"Add_Package page"])->middleware('isAdmin');
Route::post('Add_Package',[PackageController::class,'addpackageproduct',"title"=>"Add_Package page"]);

Route::get('/updatePackage/{id}',[PackageController::class,'updatePackage']);
Route::post('/updatePackage/{package_id}',[PackageController::class,'updatePackage_store']);


Route::get('ViewPackage',[PackageController::class,'ViewPackage',"title"=>"ViewPackage page"]);
Route::get('PackageDetail/{id}',[PackageController::class,'PackageDetail',"title"=>"PackageDetail page"])->middleware('isUser');
// PackageDetail
Route::post('PackageDetail',[PackageController::class,'PackageDetail_store',"title"=>"PackageDetail page"]);
//PackageLayout.blade.php //primium
Route::get('/Premium',[PackageController::class,'Premium',"title"=>"Add_Package page"]);
Route::get('/Medium',[PackageController::class,'Medium',"title"=>"Medium Package"]);
Route::get('/Regular',[PackageController::class,'Regular',"title"=>"Regular Package"]);
Route::get('/custompackage',[PackageController::class,'custompackage',"title"=>"custompackage Package"])->middleware('isUser');
Route::post('/custompackage',[PackageController::class,'custompackage_store',"title"=>"custompackage Package"]);

Route::get('EventChart', function () {
    return view('User/EventChart',["title"=>"EventChart page"]);
});

//OrderDetails
Route::get('/OrderDetails', [UserController::class,'OrderDetails'])->middleware('isUser');

// Route::get('/{event}',[UserController::class,'eventdynamic']);

Route::get('/Events', [UserController::class,'EventList']);
Route::get('Eventdetails/{id}', [UserController::class,'Eventdetails'])->middleware('isUser');
Route::post('Eventdetails/{id}', [UserController::class,'Eventdetails_store']);

Route::get('/addeventbookdet', [UserController::class,'addeventbookdet']);




Route::get('Add_event_category', [AdminController::class,'Add_event_category'])->middleware('isAdmin');
Route::post('Add_event_category', [AdminController::class,'store_event']);
Route::get('DisplayEventCategory', [AdminController::class,'DisplayEventCategory'])->middleware('isAdmin');
Route::get('/Add_Event', [AdminController::class,'Add_EventForm'])->middleware('isAdmin');
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
// Travelagency_det
Route::get('Travelagency_det',[AdminController::class,'Travelagency_det'])->middleware('isAdmin');

Route::get('TravelKyc',[TravelController::class,'viewkycform'])->middleware('isTravel'); 
Route::post('/TravelKyc',[TravelController::class,'storekycdetails']); 
Route::get('BusDetails',[TravelController::class,'BusDetailsform'])->middleware('isTravel'); 
Route::post('/BusDetails',[TravelController::class,'storeBusDetails']); 
Route::get('/Businfo',[TravelController::class,'Businfo'])->middleware('isTravel');
// UpdateBus
// BusBooking_details
Route::get('/BusBooking_details',[TravelController::class,'BusBooking_details'])->middleware('isTravel');; 

Route::get('/UpdateBus/{id}',[TravelController::class,'UpdateBus']); 
Route::post('/UpdateBus_store/{id}',[TravelController::class,'UpdateBus_store']); 


Route::get('/busbooking_form/{towner_id}/{bus_id}',[TravelController::class,'busbooking_form'])->middleware('isUser');
Route::post('/busbooking_forms',[TravelController::class,'busbookingdet_store']); 
Route::get('/BusbookingSummary',[TravelController::class,'BusbookingSummary']); 

Route::post('/payEvent',[UserController::class,'payEvent']); 

Route::post('/bookpay',[TravelController::class,'bookpay']);
Route::post('/payCusome',[PackageController::class,'payCusome']);

// Route::get('BusDetails', function () {
//     return view('Travel/BusDetails',["title"=>"BusDetails"]);
// });
Route::post('/AddAddress',[UserController::class,'store']);

Route::get('/Fooddisplay',[UserController::class,'Fooddisplay']);


Route::get('Tour_details',[PackageController::class,'Tour_details'])->middleware('isAdmin');
Route::get('/Add_tourpackage',[PackageController::class,'Add_tourpackage'])->middleware('isAdmin');
Route::post('/Add_tourpackage',[PackageController::class,'store_tourpackage']);
Route::get('/Add_dayPlan',[PackageController::class,'Add_dayPlan'])->middleware('isAdmin');

Route::post('/Add_daysplane',[PackageController::class,'store_dayplanes']);
Route::get('/TourpackageDetails/{id}',[TourController::class,'TourpackageDetails'])->middleware('isUser');
Route::post('/TourpackageDetails',[TourController::class,'TourpackageDetails_store']);


Route::get('/Cateringkyc',[FoodController::class,'Cateringkyc'])->middleware('isFood');
Route::post('/Cateringkyc',[FoodController::class,'Cateringkycdet_store']);
Route::get('/Cateringkyc_activate/{id}',[FoodController::class,'Cateringkyc_activate']);
Route::get('/Cateringkyc_deactivate/{id}',[FoodController::class,'Cateringkyc_deactivate']);
Route::get('/Cateringkyc_delete/{id}',[FoodController::class,'Cateringkyc_delete']);





Route::get('/Catering_details',[FoodController::class,'Catering_details'])->middleware('isAdmin');


Route::get('/ViewTravelPage',[UserController::class,'ViewTravelPage']);

Route::get('/TravelAgenctDetails/{id}',[UserController::class,'TravelAgenctDetails']);

Route::get('/SingleBusDetails/{id}',[UserController::class,'SingleBusDetails']);


Route::get('/FoodCategoryDetails/{FoodCategoryDetails}/{id}',[UserController::class,'FoodCategoryDetails']);
Route::get('/FoodProductDetails/{FoodCategoryDetails}/{id}/{user_id}',[UserController::class,'FoodProductDetails']);

Route::get('/SingleProductdetails/{id}',[UserController::class,'SingleProductdetails']);

Route::get('/AddUserFooddet/{id}/{Catering_user_id}',[UserController::class,'AddUserFooddet'])->middleware('isUser');
Route::post('/AddUserFooddet',[UserController::class,'AddUserFooddet_store']);
//

// RegisterComplaints
Route::get('/RegisterComplaints',[UserController::class,'RegisterComplaints'])->middleware('isUser');
Route::post('/RegisterComplaints',[UserController::class,'store_RegisterComplaints']);
Route::get('/viewComplaint',[AdminController::class,'viewComplaint'])->middleware('isAdmin');


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


