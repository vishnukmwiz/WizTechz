<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\FeedbackController;

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



Route::get('Admin/Home',[AdminController::class,'index']);
Route::get('Admin/Orders',[AdminController::class,'orderpage']);
Route::get('Admin/OrderDetails',[AdminController::class,'orderdpage']);
Route::get('Admin/Customers',[AdminController::class,'cuspage']);
Route::get('Admin/CustomerDetails',[AdminController::class,'cusdpage']);
Route::get('Admin/Vendors',[AdminController::class,'vendorpage']);
Route::get('Admin/VendorDetails/{id}',[AdminController::class,'vendordpage']);
Route::get('Admin/AddVendor',[AdminController::class,'vendaddpage']);
Route::get('Admin/EditVendor',[AdminController::class,'vendeditpage']);
Route::get('Admin/ProductList',[AdminController::class,'productpage']);
Route::get('Admin/ProductDetails',[AdminController::class,'productdpage']);
Route::get('Admin/AddProduct',[ProductController::class,'view']);
Route::get('Admin/AddCategory',[AdminController::class,'categoryaddpage']);
Route::get('Admin/AddSubcategory',[AdminController::class,'subcategoryaddpage']);
Route::get('Admin/AddBrand',[AdminController::class,'brandaddpage']);
Route::get('Admin/CategoryList',[AdminController::class,'categorypage']);
Route::get('Admin/SubcategoryList',[AdminController::class,'subcategorypage']);
Route::get('Admin/BrandList',[AdminController::class,'brandpage']);
Route::post('/addcategory',[ProductController::class,'categorystore']);
Route::post('/addsubcategory',[ProductController::class,'subcategorystore']);
Route::post('/addbrand',[ProductController::class,'brandstore']);
Route::post('/addproduct',[ProductController::class,'productstore']);
Route::post('/addvendor',[VendorController::class,'store']);

Route::post('Auth/Reg',[MainController::class,'save']);
Route::post('Auth/Log',[MainController::class,'check']);
Route::get('Auth/Logout',[MainController::class,'logout']);
Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('Auth/Login',[MainController::class,'login']);
    Route::get('Auth/Register',[MainController::class,'register']);
    Route::get('Auth/Home',[MainController::class,'authhome']);
    Route::get('Auth/ProductDetails',[MainController::class,'pd']);
    Route::get('Auth/ProductList',[MainController::class,'pl']);
    Route::get('User/Home',[MainController::class,'userhome']);
});
