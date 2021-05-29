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
        
        $ucount=Admin::where('phone','NOT LIKE',"0123456789")->count();
        $pcount=Item::all()->count();
        $ocount=Morder::all()->count();
        $vcount=Vendor::all()->count();
        $ccount=Category::all()->count();
        $sccount=Subcategory::all()->count();
        $bcount=Brand::all()->count();
        return view('Admin/Home',$data,compact('ucount','pcount','ocount','vcount','ccount','sccount','bcount'));
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
        $ccount=Category::all()->count();
        $sccount=Subcategory::all()->count();
        $bcount=Brand::all()->count();
        $dataproduct=Item::all();
        return view('Admin/ProductList',compact('dataproduct','ccount','sccount','bcount'));
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
        $datacategory=Category::all();
        return view('Admin/CategoryList',compact('datacategory'));
    }
    public function subcategorypage()
    {
        $datasubcategory=Subcategory::all();
        return view('Admin/SubcategoryList',compact('datasubcategory'));
    }public function brandpage()
    {
        $databrand=Brand::all();
        return view('Admin/BrandList',compact('databrand'));
    }
    public function cateditpage($id)
    {
        $datacategory=Category::find($id);
        return view('Admin/EditCategory',compact('datacategory'));
    }
    public function scateditpage($id)
    {
        $datasubcategory=Subcategory::find($id);
        return view('Admin/EditSubcategory',compact('datasubcategory'));
    }
    public function brandeditpage($id)
    {
        $databrand=Brand::find($id);
        return view('Admin/EditBrand',compact('databrand'));
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
