<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
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
        
        $vname=request("name");
        $vroom=request("room");
        $vcity=request("city");
        $vdistrict=request("district");
        $vpin=request("pin");
        $vphone=request("phone");
        $vemail=request("email");
        $vstatus='active';
        $this->validate($request,[
            'name'=>'required',
        ]);

        $vendor = new Vendor();

        $vendor->name=$vname;
        $vendor->room=$vroom;
        $vendor->city=$vcity;
        $vendor->district=$vdistrict;
        $vendor->pin=$vpin;
        $vendor->phone=$vphone;
        $vendor->email=$vemail;
        $vendor->status=$vstatus;

        $vendor->save();
        echo "<script>alert('Successfully Added Category');window.location='Admin/Vendors';</script>";
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
        $vendor = Vendor::find($id);

        $vname=request("name");
        $vroom=request("room");
        $vcity=request("city");
        $vdistrict=request("district");
        $vpin=request("pin");
        $vphone=request("phone");
        $vemail=request("email");
        $vstatus='active';
        $this->validate($request,[
            'name'=>'required',
        ]);

        

        $vendor->name=$vname;
        $vendor->room=$vroom;
        $vendor->city=$vcity;
        $vendor->district=$vdistrict;
        $vendor->pin=$vpin;
        $vendor->phone=$vphone;
        $vendor->email=$vemail;
        $vendor->status=$vstatus;

        $vendor->save();
        echo "<script>alert('Successfully edited vendor');window.location='/Admin/VendorDetails/{$id}';</script>";
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
