<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Morder;
use App\Models\Subcategory;
use App\Models\Brand;
use App\Models\Corder;
use App\Models\Item;
use App\Models\Vendor;
use App\Models\Sale;

class CustomerController extends Controller
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
    public function userprofile()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        return view('User/Profile',$data,compact('datauser','datacustomer','datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
        
    }
    public function editprofile()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        return view('User/EditProfile',$data,compact('datauser','datacustomer','datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
    }
    public function passpage()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        return view('User/ChangePassword',$data,compact('datauser','datacustomer','datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
    }

    public function cart()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $check=Morder::where('cid','=',$data2->id)->where('status','=','oncart')->first();
        if($check == NULL)
        {
            return view('User/CartEmpty',$data,compact('datauser','datacustomer'));
        }
        else{
            $check2=Corder::where('moid','=',$check->id)->count();
            if($check2 == 0 )
            {
                return view('User/CartEmpty',$data,compact('datauser','datacustomer'));
            }
            else{
                $morder=Morder::where('cid','=',$data2->id)->where('status','=','oncart')->first();
                if($morder == NULL)
                {
                    $itemcheck = 0;
                }
                else{
                    $corder=Corder::where('moid','=',$morder->id)->get();
                    $itemcheck=Corder::where('moid','=',$morder->id)->count();
                }
                return view('User/Cart',$data,compact('datauser','datacustomer','morder','corder','itemcheck'));
            }
        }
        
        
    }

    public function address()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $acid=$data2->id;
        $check = Address::where('cid','=',$acid)->count();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $dataaddress=Address::where('cid','=',$datacustomer->id)->get();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        return view('User/Addresses',$data,compact('datauser','datacustomer','dataaddress','check','datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
    }
    public function addaddress()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        
        return view('User/AddAddress',$data,compact('datauser','datacustomer','datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
        
    }
    public function editaddress($id)
    {
        
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $dataaddress=Address::where('id','=',$id)->first();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        return view('User/EditAddress',$data,compact('datauser','datacustomer','dataaddress','datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
    }
    
    public function checkout()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $dataaddress=Address::where('cid','=',$datacustomer->id)->get();
        $check = Address::where('cid','=',$datacustomer->id)->count();
        $morder=Morder::where('cid','=',$data2->id)->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        $buynow='0';
        return view('User/Checkout',$data,compact('datauser','datacustomer','dataaddress','morder','corder','itemcheck','buynow','check'));
    }

    public function buynow($id)
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $dataaddress=Address::where('cid','=',$datacustomer->id)->get();
        $check = Address::where('cid','=',$datacustomer->id)->count();
        $delmorder=Morder::where('cid','=',$data2->id)->where('status','=','buynow')->first();
        
        if($delmorder!=NULL){
            $delcorder=Corder::where('moid','=',$delmorder->id)->first();
            if($delcorder!=NULL){
            $delcorder->delete();
            }
            $delmorder->delete();
        }
        $cartitem = Item::find($id);
        $morder = new Morder();
        $morder->cid = $data2->id;
        $morder->status = "buynow";
        $morder->save();
        $corder =new Corder();
        $corder->moid = $morder->id;
        $corder->iid = $cartitem->id;
        $corder->quantity = '1';
        $save = $corder->save();

        $morder=Morder::where('cid','=',$data2->id)->where('status','=','buynow')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        $buynow='1';
        return view('User/Checkout',$data,compact('datauser','datacustomer','dataaddress','morder','corder','itemcheck','buynow','check'));
    }

    public function search(Request $request)
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $datavendor=Vendor::all();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        $search=request('search');
        $searchsubcategory=Subcategory::where('name','LIKE','%'.$search.'%')->first();
        $searchbrand=Brand::where('name','LIKE','%'.$search.'%')->first();
        if($searchsubcategory == NULL && $searchbrand == NULL)
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->get()->count();
        }
        elseif($searchsubcategory == NULL)
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->orwhere('bid','=',$searchbrand->id)->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->orwhere('bid','=',$searchbrand->id)->get()->count();
        
        }
        elseif($searchbrand == NULL)
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->get()->count();
        }
        else
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->orwhere('bid','=',$searchbrand->id)->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->orwhere('bid','=',$searchbrand->id)->get()->count();
        }
        return view('User/ProductList',$data,compact('datavendor','itemcheck','searchlistcount','datacategory','datasubcategory','databrand','dataitem','searchlist','search'));
        
    }
    public function myorder()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $acid=$data2->id;
        $check = Address::where('cid','=',$acid)->count();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $dataaddress=Address::where('cid','=',$datacustomer->id)->get();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        $mymorder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','Order Confirmed')->get();
        $mycorder=Corder::all();
        $mysales=Sale::all();
        return view('User/MyOrder',$data,compact('datacustomer','itemcheck','datacategory','datasubcategory','mycorder','mymorder','mysales'));
    }
    public function search2(Request $request)
    {
       
        $datavendor=Vendor::all();
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $dataitem=Item::all();
        $morder=Morder::where('cid','=',session('LoggedUser'))->where('status','=','oncart')->first();
        if($morder == NULL)
        {
            $itemcheck = 0;
        }
        else{
            $corder=Corder::where('moid','=',$morder->id)->get();
            $itemcheck=Corder::where('moid','=',$morder->id)->count();
        }
        $search=request('search');
        $searchsubcategory=Subcategory::where('name','LIKE','%'.$search.'%')->first();
        $searchbrand=Brand::where('name','LIKE','%'.$search.'%')->first();
        if($searchsubcategory == NULL && $searchbrand == NULL)
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->get()->count();
        }
        elseif($searchsubcategory == NULL)
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->orwhere('bid','=',$searchbrand->id)->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->orwhere('bid','=',$searchbrand->id)->get()->count();
        
        }
        elseif($searchbrand == NULL)
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->get()->count();
        }
        else
        {
            $searchlist=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->orwhere('bid','=',$searchbrand->id)->get();
            $searchlistcount=Item::where('name','LIKE','%'.$search.'%')->orwhere('scid','=',$searchsubcategory->id)->orwhere('bid','=',$searchbrand->id)->get()->count();
        }
        return view('Auth/ProductList',compact('datavendor','itemcheck','searchlistcount','datacategory','datasubcategory','databrand','dataitem','searchlist','search'));
        
    }

    public function orderconfirm(){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        return view('User/OrderConfirm',$data);
    }
    
    public function addsales(Request $request){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        $smoid = request('moid');
        $aid=request('aid');
        if($aid == 0)
        {
            $saname=request('name');
            $saphone=request('phone');
            $sapin=request('pin');
            $salocality=request('locality');
            $saalternatephone=request('alternatephone');
            $saaddress=request('address');
            $sacity=request('city');
            $sadistrict=request('district');
            $sastate=request('state');
            $salandmark=request('landmark');
            $satype=request('type');
            
            $savecheck = request('check');
            if($savecheck == 'on'){
            $check = Address::where('cid','=',$data2->id)->count();
            if($check<5){
                $aname=request('name');
                $aphone=request('phone');
                $apin=request('pin');
                $alocality=request('locality');
                $aalternatephone=request('alternatephone');
                $aaddress=request('address');
                $acity=request('city');
                $adistrict=request('district');
                $astate=request('state');
                $alandmark=request('landmark');
                $atype=request('type');

                $address = new Address();
                $address->cid = $data2->id;
                $address->name = $aname;
                $address->phone = $aphone;
                $address->pin = $apin;
                $address->locality = $alocality;
                $address->alternatephone = $aalternatephone;
                $address->address = $aaddress;
                $address->city = $acity;
                $address->district = $adistrict;
                $address->state = $astate;
                $address->landmark = $alandmark;
                $address->type = $atype;

                $address->save();
            }
        }
        }
        else{
            $dataaddress=Address::where('id','=',$aid)->first();
            $saname= $dataaddress->name;
            $saphone= $dataaddress->phone;
            $sapin= $dataaddress->pin;
            $salocality= $dataaddress->locality;
            $saalternatephone= $dataaddress->alternatephone;
            $saaddress=$dataaddress->address;
            $sacity=$dataaddress->city;
            $sadistrict=$dataaddress->district;
            $sastate=$dataaddress->state;
            $salandmark=$dataaddress->landmark;
            $satype=$dataaddress->type;
        }
        $spaymode = request('paymode');
        if($spaymode == 'card'){
            $spaystatus = "Paid";
        }
        else{
            $spaystatus = "Not Paid";
        }
        $sdelistatus = "Not Delivered";

        $sale = new Sale();
        $sale->moid = $smoid ;
        $sale->name = $saname;
        $sale->phone = $saphone;
        $sale->pin = $sapin;
        $sale->locality = $salocality;
        $sale->alternatephone = $saalternatephone;
        $sale->address = $saaddress;
        $sale->city = $sacity;
        $sale->district = $sadistrict;
        $sale->state = $sastate;
        $sale->landmark = $salandmark;
        $sale->type = $satype;
        $sale->paymode = $spaymode;
        $sale->paystatus = $spaystatus;
        $sale->delistatus = $sdelistatus;

        $stockmorder = Morder::where('id','=',$smoid)->first();
        $stockcorder = Corder::where('moid','=',$smoid)->get();
        $stockcheck =0;
        foreach($stockcorder as $child){
            $qty=$child->quantity;
            $stockitem=Item::where('id','=',$child->iid)->first();
            $stock=$stockitem->stock;
            if($stock-$qty<0){
                $stockcheck =0;
            }else{
                $stockcheck =1;
            }
        }
        if($stockcheck != 0)
        {
        $sale->save();
        $stockitem->stock = $stock-$qty;
        $stockitem->save();
        $morder = Morder::find($smoid);
        $morder->status = "Order Confirmed";
        $morder->save();
        echo "<script>alert('Order Placed');window.location='User/OrderConfirm';</script>";
        }
        else
        {
        echo "<script>alert('1 or more item in this order is out stock');window.location='User/Cart';</script>";
        }
        

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
    public function addaddresses(Request $request)
    {
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $acid=$data2->id;
        $check = Address::where('cid','=',$acid)->count();
        if($check<5){
        $aname=request('name');
        $aphone=request('phone');
        $apin=request('pin');
        $alocality=request('locality');
        $aalternatephone=request('alternatephone');
        $aaddress=request('address');
        $acity=request('city');
        $adistrict=request('district');
        $astate=request('state');
        $alandmark=request('landmark');
        $atype=request('type');

        $address = new Address();
        $address->cid = $acid;
        $address->name = $aname;
        $address->phone = $aphone;
        $address->pin = $apin;
        $address->locality = $alocality;
        $address->alternatephone = $aalternatephone;
        $address->address = $aaddress;
        $address->city = $acity;
        $address->district = $adistrict;
        $address->state = $astate;
        $address->landmark = $alandmark;
        $address->type = $atype;

        $address->save();
        echo "<script>alert('Address Added');window.location='User/Addresses';</script>";
         echo "success";
        }
        else{
            echo "<script>alert('Only 5 Addresses allowed');window.location='User/Addresses';</script>";
            echo "success";
        }
    }

    public function addtocart($id)
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $cartitem = Item::find($id);
        
        $check = Morder::where('cid','=',$data2->id)->where('status','=','oncart')->count();
        
        if($check == 0)
        {
            $morder = new Morder();
            $morder->cid = $data2->id;
            $morder->status = "oncart";
            $morder->save();
            $corder =new Corder();
            $corder->moid = $morder->id;
            $corder->iid = $cartitem->id;
            $corder->quantity = '1';
            $corder->save();
        }
        else{
            $morder = Morder::where('cid','=',$data2->id)->where('status','=','oncart')->first();
            $corder =new Corder();
            $corder->moid = $morder->id;
            $corder->iid = $cartitem->id;
            $corder->quantity = '1';
            $corder->save();
        }

        return back()->with('success','Product Added to Cart Succesfully');
    }

    public function addtoqty(Request $request,  $id)
    {
        $corder = Corder::find($id);
        $cqty=request('quantity');
        $corder->quantity=$cqty;
        $corder->save();
        return back()->with('saved','Saved!');
    }

    public function removecart($id)
    {
        $corder = Corder::find($id);
        $corder->delete();
        return back();
        
       
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
        $customer = Customer::find($id);
        $cemail = request('email');
        $cgender = request('gender');
        $cusimage=$request->file('cimage');
        $image=$cusimage->getClientOriginalName();
        $cusimage->move(public_path('assets/images'),$image);
        
        $customer->email=$cemail;
        $customer->gender=$cgender;
        $customer->image=$image;
        $customer->save();

        $user=Admin::where('id','=',$customer->id)->first();
        $uname=request('name');
        $user->name=$uname;
        $user->save();
       
        echo "<script>alert('User Profile Updated');window.location='/User/Profile';</script>";
         echo "success";
    }

    public function changepassword()
    {
        $getoldpass=request('oldpass');
        $getnewpass=request('newpass');
        $confirmpass=request('cnewpass');
        $data = Admin::where('id','=', session('LoggedUser'))->first();
        $getphone=$data->phone;
        $hashedPassword = Hash::make($getnewpass);
        if(Hash::check($getoldpass, $data->password))
        {
            if($getnewpass==$confirmpass)
            {
                $change=Admin::where('phone','=',$getphone)->update(['password'=>$hashedPassword]); 
               
                echo "<script>alert('Password Changed Successfully');window.location='User/Profile';</script>";
      
            }
            else{

                echo "<script>alert('New Password and Confirm Password must be same');window.location='User/ChangePassword';</script>"; 

            }

        }
        else
        {
            echo "<script>alert('Incorrect Old Password');window.location='User/ChangePassword';</script>"; 

    
        }

    }
    public function updateaddress(Request $request, $id)
    {
        $address = Address::find($id);
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $acid=$data2->id;
        $aname=request('name');
        $aphone=request('phone');
        $apin=request('pin');
        $alocality=request('locality');
        $aalternatephone=request('alternatephone');
        $aaddress=request('address');
        $acity=request('city');
        $adistrict=request('district');
        $astate=request('state');
        $alandmark=request('landmark');
        $atype=request('type');

        $address->cid = $acid;
        $address->name = $aname;
        $address->phone = $aphone;
        $address->pin = $apin;
        $address->locality = $alocality;
        $address->alternatephone = $aalternatephone;
        $address->address = $aaddress;
        $address->city = $acity;
        $address->district = $adistrict;
        $address->state = $astate;
        $address->landmark = $alandmark;
        $address->type = $atype;

        $address->save();
        echo "<script>alert('Address Edited');window.location='../User/Addresses';</script>";
         echo "success";

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteaddress($id)
    {
        $address = Address::find($id);
        $address->delete();
        echo "<script>alert('Address Deleted');window.location='../User/Addresses';</script>";
         echo "success";
    }
}
