<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
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

Route::get('/hai', function () {
    return view('example');
});

Route::get('/Admin', function () {
    return view('Admin_homepage',["title"=>"Admin_dashbord"]);
});
Route::post('SignUp/',[AuthenticationController::class,'store']);
// login page
Route::get('/Login', function () {
    return view('Login');
});
//login checking
Route::post('/Login', [AuthenticationController::class,'check']);

Route::get('/Employ', function () {
    return view('Layout/Empoly_layout',["title"=>"Employ_dashbord"]);
});
Route::get('Add_category',[AdminController::class,'index']);
Route::post('Add_category',[AdminController::class,'store']);

Route::get('Add_Product', function () {
    return view('Admin/Add_Product',["title"=>"Add_Product page"]);
});
Route::get('Add_Package', function () {
    return view('Admin/Add_Package',["title"=>"Add_Package page"]);
});
