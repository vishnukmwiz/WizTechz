<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;
class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('LoggedUser') && ($request->path() !='Auth/Login' && $request->path() !='Auth/Register' && $request->path() !='Auth/Home' && $request->path() !='Auth/ProductList')){
            return redirect('Auth/Login')->with('fail','You must be logged in');
        }
        $data =  Admin::where('id','=',session('LoggedUser'))->first();
        if($data != NULL){    
            if($data->phone == '0123456789'){
                
                if(session()->has('LoggedUser') && ($request->path() == 'Auth/Login' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/Register' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/Home' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/ProductDetails/{id}' ) ){
                    return redirect('Admin/ProductDetails/{id}');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/ProductList' ) ){
                    return redirect('Admin/ProductList');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/AddAddress' ) ){
                    return redirect('Admin/Customers');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/Addresses' ) ){
                    return redirect('Admin/Customers');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/Cart' ) ){
                    return redirect('Admin/ProductList');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/CartEmpty' ) ){
                    return redirect('Admin/ProductList');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/ChangePassword' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/EditAddress' ) ){
                    return redirect('Admin/Customers');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/EditProfile' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/Home' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/MyOrder' ) ){
                    return redirect('Admin/Orders');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/OrderConfirm' ) ){
                    return redirect('Admin/Orders');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/OrderDetails/{id}' ) ){
                    return redirect('Admin/OrderDetails/{id}');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/ProductDetails/{id}' ) ){
                    return redirect('Admin/ProductDetails/{id}');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/ProductList' ) ){
                    return redirect('Admin/ProductList');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/Profile' ) ){
                    return redirect('Admin/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'User/Checkout' ) ){
                    return redirect('Admin/Home');
                }else{
                }
            }
            else{

                if(session()->has('LoggedUser') && ($request->path() == 'Auth/Login' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/Register' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/Home' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/ProductDetails' ) ){
                    return redirect('User/ProductDetails');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/ProductList' ) ){
                    return redirect('User/ProductList?cat=0&sub=0&brand=0');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/Home' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/Orders' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/OrderDetails' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/Customers' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/CustomerDetails/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/Vendors' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/VendorDetails/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/AddVendor' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/EditVendor/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/EditCategory/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/EditSubcategory/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/EditBrand/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/EditProduct/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/ProductList' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/ProductDetails/{id}' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/AddProduct' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/AddCategory' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/AddSubcategory' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/AddBrand' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/CategoryList' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/SubcategoryList' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/BrandList' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/PurchaseReport' ) ){
                    return redirect('User/Home');
                }elseif(session()->has('LoggedUser') && ($request->path() == 'Admin/Reports' ) ){
                    return redirect('User/Home');
                }else{
                }
            }
        }
        
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
