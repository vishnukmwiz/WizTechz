<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Item;
use App\Models\Vendor;
use App\Models\Customer;
use App\Models\Corder;
use App\Models\Morder;
use App\Models\Cpurchase;
use App\Models\Mpurchase;
use App\Models\Sale;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        return view('Admin/Home',$data);
    }

    public function orderpage()
    {
        return view('Admin/Orders');
    }
    public function orderdpage()
    {
        return view('Admin/OrderDetails');
    }
    public function cuspage()
    {
        return view('Admin/Customers');
    }
    public function cusdpage()
    {
        
        return view('Admin/CustomerDetails');
    }
    public function vendorpage()
    {
        $datavendor=Vendor::all();
        return view('Admin/Vendors',compact('datavendor'));
    }
    public function vendordpage($id)
    {
        $datavendor=Vendor::find($id);
        return view('Admin/VendorDetails',compact('datavendor'));
    }
    public function vendaddpage()
    {
        return view('Admin/AddVendor');
    }
    public function vendeditpage($id)
    {
        $datavendor=Vendor::find($id);
        return view('Admin/EditVendor',compact('datavendor'));
    }
    public function productpage()
    {
       
        $dataproduct=Item::all();
        return view('Admin/ProductList',compact('dataproduct'));
    }
    public function productdpage()
    {
        return view('Admin/ProductDetails');
    }
    public function productaddpage()
    {
        return view('Admin/AddProduct');
    }
    public function categoryaddpage()
    {
        return view('Admin/AddCategory');
    }
    public function subcategoryaddpage()
    {
        return view('Admin/AddSubcategory');
    }
    public function brandaddpage()
    {
        return view('Admin/AddBrand');
    }public function categorypage()
    {
        return view('Admin/CategoryList');
    }
    public function subcategorypage()
    {
        return view('Admin/SubcategoryList');
    }public function brandpage()
    {
        return view('Admin/BrandList');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
