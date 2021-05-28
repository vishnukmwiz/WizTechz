<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function view()
    {
        $cdata=Category::all();
        $scdata=Subcategory::all();
        $bdata=Brand::all();
        return view('Admin/AddProduct',compact('cdata','scdata','bdata'));
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
    public function categorystore(Request $request)
    {
        
        $cname=request("name");
        $cdesc=request("desc");
        $cimage=$request->file('cimage');
        $name=$cimage->getClientOriginalName();

        $cimage->move(public_path('assets/images'),$name);

        $this->validate($request,[
            'name'=>'required',
        ]);

        $category = new Category();

        $category->name=$cname;
        $category->desc=$cdesc;
        $category->image=$name;

        $category->save();
        echo "<script>alert('Successfully Added Category');window.location='Admin/CategoryList';</script>";
         echo "success";

    }
    public function subcategorystore(Request $request)
    {
        
        $scname=request("name");
        $scdesc=request("desc");

        $this->validate($request,[
            'name'=>'required',
        ]);

        $scategory = new Subcategory();

        $scategory->name=$scname;
        $scategory->desc=$scdesc;

        $scategory->save();
        echo "<script>alert('Successfully Added Category');window.location='Admin/SubcategoryList';</script>";
         echo "success";

    }
    public function brandstore(Request $request)
    {
        
        $bname=request("name");
        $bdesc=request("desc");
        $bimage=$request->file('cimage');
        $name=$bimage->getClientOriginalName();

        $bimage->move(public_path('assets/images'),$name);

        $this->validate($request,[
            'name'=>'required',
        ]);

        $brand = new Brand();

        $brand->name=$bname;
        $brand->desc=$bdesc;
        $brand->logo=$name;

        $brand->save();
        echo "<script>alert('Successfully Added Category');window.location='Admin/BrandList';</script>";
         echo "success";

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
