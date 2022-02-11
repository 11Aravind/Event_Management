<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
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

Route::get('/', function () {
    return view('Homepagecontent');
});
Route::get('/User', function () {
    return view('Homepagecontent');
});
Route::get('/Admin', function () {
    return view('Admin_homepage',["title"=>"Admin_dashbord"]);
});
Route::get('SignUp',function(){
    return view('SignUp');
});
Route::post('SignUp/',[AuthenticationController::class,'store']);
// login page
Route::get('/Login', function () {
    return view('Login');
});
//login checking
Route::post('/Login',[AuthenticationController::class,'check']);
Route::get('/Employ', function () {
    return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);
});
//category
Route::get('Add_category',[AdminController::class,'index']);
Route::post('Add_category',[AdminController::class,'store']);
Route::get('DisplayCategory',[AdminController::class,'DisplayCategory']);

//product
Route::get('Add_Product',[AdminController::class,'getcategorydet']);
Route::post('Add_Product',[AdminController::class,'store_product']);

Route::get('Display_Product',[AdminController::class,'display_product']);

Route::get('Add_Package',[PackageController::class,'showpackageproduct',"title"=>"Add_Package page"]);


Route::get('EventChart', function () {
    return view('User/EventChart',["title"=>"EventChart page"]);
});
Route::get('EventBooking', function () {
    return view('User/TicketBooking',["title"=>"TicketBooking page"]);
});
// Logout
// /Logout
Route::get('/Logout',[AuthenticationController::class,'logout']);
//tourist
Route::get('TourView', function () {
    return view('User/TourView',["title"=>"TourView page"]);
});
//PackageLayout.blade.php
Route::get('Premium', function () {
    return view('Layout/PackageLayout',["title"=>"Premium Package Page"]);
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
