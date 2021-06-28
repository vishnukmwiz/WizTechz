<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
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
use App\Models\Sale;


class AdminController extends Controller
{
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
        $morder=Morder::all();
        return view('Admin/Orders',compact('morder'));
    }
    public function orderdpage()
    {
        return view('Admin/OrderDetails');
    }
    public function cuspage()
    {
        $datacustomer=Admin::where('phone','NOT LIKE',"0123456789")->get();
        return view('Admin/Customers',compact('datacustomer'));
    }
    public function cusdpage($id)
    {
        $datauser=Admin::find($id);
        $datacustomer=Customer::where('cid','=',$id)->first();
        $datamorder=Morder::where('cid','=',$id)->get();
        return view('Admin/CustomerDetails',compact('datauser','datacustomer','datamorder'));
    }
    public function vendorpage()
    {
        $datavendor=Vendor::all();
        return view('Admin/Vendors',compact('datavendor'));
    }
    public function vendordpage($id)
    {
        $datavendor=Vendor::find($id);
        $dataproduct=Item::where('vid','=',$id)->get();
        return view('Admin/VendorDetails',compact('datavendor','dataproduct'));
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
    public function productdpage($id)
    {
        $dataproduct=Item::find($id);
        $datavendor=Vendor::where('id','=',$dataproduct->vid)->first();
        $datacategory=Category::where('id','=',$dataproduct->cid)->first();
        $datasubcategory=Subcategory::where('id','=',$dataproduct->scid)->first();
        $databrand=Brand::where('id','=',$dataproduct->bid)->first();
        return view('Admin/ProductDetails',compact('dataproduct','datavendor','datacategory','datasubcategory','databrand'));
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
        $cdata=Category::all();
        return view('Admin/AddSubcategory',compact('cdata'));
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
        $cdata=Category::all()->where('id','!=',$datasubcategory->cid);
        return view('Admin/EditSubcategory',compact('datasubcategory','cdata'));
    }
    public function brandeditpage($id)
    {
        $databrand=Brand::find($id);
        return view('Admin/EditBrand',compact('databrand'));
    }

    public function reportindex()
    {
        $dataproduct=Item::all();
        return view('Admin/PurchaseReport',compact('dataproduct'));
    }
    public function reportstore(Request $request)
    {
        $date1=request('date1');
        $date2=request('date2');
        $dataproduct=Item::select('*')->whereBetween('created_at', [$date1, $date2])->get();
        return view('Admin/PurchaseReport',compact('dataproduct'));
    }
    public function reports()
    {
        return view('Admin/Reports');
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
