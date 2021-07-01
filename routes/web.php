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



Route::get('/',[MainController::class,'index']);
Route::post('Auth/Reg',[MainController::class,'save']);
Route::post('Auth/Log',[MainController::class,'check']);
Route::get('Auth/Logout',[MainController::class,'logout']);
Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('Auth/Login',[MainController::class,'login']);
    Route::get('Auth/Register',[MainController::class,'register']);
    Route::get('Auth/Home',[MainController::class,'authhome']);
    Route::get('Auth/ProductList',[MainController::class,'pl']);
    Route::get('User/Home',[MainController::class,'userhome']);
    Route::get('User/Profile',[CustomerController::class,'userprofile']);
    Route::get('User/Addresses',[CustomerController::class,'address']);
    Route::get('User/AddAddress',[CustomerController::class,'addaddress']);
        
    Route::get('Admin/Home',[AdminController::class,'index']);
    Route::get('Admin/Orders',[AdminController::class,'orderpage']);
    Route::get('Admin/OrderDetails/{id}',[AdminController::class,'orderdpage']);
    Route::get('Admin/Customers',[AdminController::class,'cuspage']);
    Route::get('Admin/CustomerDetails/{id}',[AdminController::class,'cusdpage']);
    Route::get('Admin/Vendors',[AdminController::class,'vendorpage']);
    Route::get('Admin/VendorDetails/{id}',[AdminController::class,'vendordpage']);
    Route::get('Admin/AddVendor',[AdminController::class,'vendaddpage']);
    Route::get('Admin/EditVendor/{id}',[AdminController::class,'vendeditpage']);
    Route::get('Admin/EditCategory/{id}',[AdminController::class,'cateditpage']);
    Route::get('Admin/EditSubcategory/{id}',[AdminController::class,'scateditpage']);
    Route::get('Admin/EditBrand/{id}',[AdminController::class,'brandeditpage']);
    Route::get('Admin/EditProduct/{id}',[ProductController::class,'editpro']);
    Route::get('Admin/ProductList',[AdminController::class,'productpage']);
    Route::get('Admin/ProductDetails/{id}',[AdminController::class,'productdpage']);
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
    Route::post('/editcategory/{id}',[ProductController::class,'categoryupdate']);
    Route::post('/editsubcategory/{id}',[ProductController::class,'subcategoryupdate']);
    Route::post('/editbrand/{id}',[ProductController::class,'brandupdate']);
    Route::post('/editproduct/{id}',[ProductController::class,'productupdate']);
    Route::post('/addstock/{id}',[ProductController::class,'updatestock']);

    Route::post('/addvendor',[VendorController::class,'store']);
    Route::post('/editvendor/{id}',[VendorController::class,'update']);

    Route::get('Admin/PurchaseReport',[AdminController::class,'reportindex']);
    Route::post('Admin/PurchaseReport',[AdminController::class,'reportstore']);

    Route::get('Admin/Reports',[AdminController::class,'reports']);


    Route::get('User/EditAddress/{id}',[CustomerController::class,'editaddress']);
    Route::get('User/EditProfile',[CustomerController::class,'editprofile']);
    Route::get('User/Cart',[CustomerController::class,'cart']);
    Route::get('User/MyOrder',[CustomerController::class,'myorder']);
    Route::get('User/CartEmpty',[CustomerController::class,'cart']);
    Route::get('User/ProductList',[ProductController::class,'productlist']);
    Route::get('User/OrderConfirm',[CustomerController::class,'orderconfirm']);
    Route::get('User/ProductDetails/{id}',[ProductController::class,'productdetails']);
    Route::post('/editprofile/{id}',[CustomerController::class,'update']);
    Route::post('/editaddress/{id}',[CustomerController::class,'updateaddress']);
    Route::get('/deleteaddress/{id}',[CustomerController::class,'deleteaddress']);
    Route::get('User/ChangePassword',[CustomerController::class,'passpage']);
    Route::post('/changepassword',[CustomerController::class,'changepassword']);
    Route::post('/addaddress',[CustomerController::class,'addaddresses']);
    Route::get('User/Logout',[MainController::class,'logout']);
    Route::get('/addtocart/{id}',[CustomerController::class,'addtocart']);
    Route::get('/checkout/{id}',[CustomerController::class,'checkout']);
    Route::post('/addtoqty/{id}',[CustomerController::class,'addtoqty']);
    Route::get('/removecart/{id}',[CustomerController::class,'removecart']);
    Route::get('User/Checkout',[CustomerController::class,'checkout']);
    Route::get('User/Checkout/{id}',[CustomerController::class,'buynow']);
    Route::post('User/ProductList',[CustomerController::class,'search']);
    Route::post('Auth/ProductList',[CustomerController::class,'search2']);
    Route::get('viewcat/{id}',[CustomerController::class,'viewcat']);
    Route::get('viewcat/{id}',[CustomerController::class,'viewcat']);
    
    Route::post('/addsales',[CustomerController::class,'addsales']);
});
