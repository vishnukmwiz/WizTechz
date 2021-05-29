<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;
use App\Models\Vendor;
use App\Models\Item;

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
        $vdata=Vendor::all();
        $cdata=Category::all();
        $scdata=Subcategory::all();
        $bdata=Brand::all();
        return view('Admin/AddProduct',compact('vdata','cdata','scdata','bdata'));
    }
    public function editpro($id)
    {
        $dataproduct=Item::find($id);
        $vdata=Vendor::all();
        $cdata=Category::all();
        $scdata=Subcategory::all();
        $bdata=Brand::all();
        return view('Admin/EditProduct',compact('dataproduct','vdata','cdata','scdata','bdata'));
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
    public function productstore(Request $request)
    {
        $vname=request("vid");
        $cname=request("cid");
        $sname=request("scid");
        $bname=request("bid");
        $pmodel=request("model");
        $ppackage=request("package");
        $pname=request("name");
        $psize=request("size");
        $pcolor=request("color");
        $pdesc=request("desc");
        $psprice=request("sprice");
        $pcprice=request("cprice");
        $pimage=$request->file('image');
        $name=$pimage->getClientOriginalName();
        $pimage->move(public_path('assets/images'),$name);

        $this->validate($request,[
            'name'=>'required',
        ]);

        $vendor = Vendor::where('name','=', $vname)->first();
        $category = Category::where('name','=', $cname)->first();
        $scategory = Subcategory::where('name','=', $sname)->first();
        $brand = Brand::where('name','=', $bname)->first();
        
        $product = new Item();

        $product->vid=$vendor->id;
        $product->cid=$category->id;
        $product->scid=$scategory->id;
        $product->bid=$brand->id;
        $product->model=$pmodel;
        $product->package=$ppackage;
        $product->name=$pname;
        $product->size=$psize;
        $product->color=$pcolor;
        $product->desc=$pdesc;
        $product->stock='0';
        $product->sprice=$psprice;
        $product->cprice=$pcprice;
        $product->image=$name;

        $product->save();
        echo "<script>alert('Successfully Added Category');window.location='Admin/ProductList';</script>";
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
    
    public function categoryupdate(Request $request, $id)
    {
        $category = Category::find($id);
        
        $cname=request("name");
        $cdesc=request("desc");
        $cimage=$request->file('cimage');
        $name=$cimage->getClientOriginalName();

        $cimage->move(public_path('assets/images'),$name);

        $this->validate($request,[
            'name'=>'required',
        ]);


        $category->name=$cname;
        $category->desc=$cdesc;
        $category->image=$name;

        $category->save();
        echo "<script>alert('Successfully Added Category');window.location='/Admin/CategoryList';</script>";
         echo "success";

    }
    public function subcategoryupdate(Request $request, $id)
    {
        $scategory = Subcategory::find($id);
        $scname=request("name");
        $scdesc=request("desc");

        $this->validate($request,[
            'name'=>'required',
        ]);

        

        $scategory->name=$scname;
        $scategory->desc=$scdesc;

        $scategory->save();
        echo "<script>alert('Successfully Added Category');window.location='/Admin/SubcategoryList';</script>";
         echo "success";

    }
    public function brandupdate(Request $request, $id)
    {
        
        $brand = Brand::find($id);
        $bname=request("name");
        $bdesc=request("desc");
        $bimage=$request->file('cimage');
        $name=$bimage->getClientOriginalName();

        $bimage->move(public_path('assets/images'),$name);

        $this->validate($request,[
            'name'=>'required',
        ]);

        

        $brand->name=$bname;
        $brand->desc=$bdesc;
        $brand->logo=$name;

        $brand->save();
        echo "<script>alert('Successfully Added Category');window.location='/Admin/BrandList';</script>";
         echo "success";

    }
    public function productupdate(Request $request, $id)
    {
        $product = Item::find($id);
        $vname=request("vid");
        $cname=request("cid");
        $sname=request("scid");
        $bname=request("bid");
        $pmodel=request("model");
        $ppackage=request("package");
        $pname=request("name");
        $psize=request("size");
        $pcolor=request("color");
        $pdesc=request("desc");
        $psprice=request("sprice");
        $pcprice=request("cprice");
        $pimage=$request->file('image');
        $name=$pimage->getClientOriginalName();
        $pimage->move(public_path('assets/images'),$name);

        $this->validate($request,[
            'name'=>'required',
        ]);

        $vendor = Vendor::where('name','=', $vname)->first();
        $category = Category::where('name','=', $cname)->first();
        $scategory = Subcategory::where('name','=', $sname)->first();
        $brand = Brand::where('name','=', $bname)->first();
        
        

        $product->vid=$vendor->id;
        $product->cid=$category->id;
        $product->scid=$scategory->id;
        $product->bid=$brand->id;
        $product->model=$pmodel;
        $product->package=$ppackage;
        $product->name=$pname;
        $product->size=$psize;
        $product->color=$pcolor;
        $product->desc=$pdesc;
        $product->sprice=$psprice;
        $product->cprice=$pcprice;
        $product->image=$name;

        $product->save();
        echo "<script>alert('Successfully Added Category');window.location='/Admin/ProductList';</script>";
         echo "success";

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
