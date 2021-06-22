<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use App\Models\Item;
use App\Models\Brand;
use App\Models\Subcategory;
use App\Models\Morder;
use App\Models\Corder;
use App\Models\Vendor;

class MainController extends Controller
{

    function login(){
        return view('Auth/Login');
    }

    function register(){
        return view('Auth/Register');
    }

    function save(Request $req){
        $req->validate([
            'name'=>'required',
            'phone'=>'required|min:10|max:10|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        $user = new Admin;
        $customer = new Customer;
        
        $customer->email='not specified';
        $customer->gender='not specified';
        $customer->image='not specified';
        $user->name =$req->name;
        $user->phone =$req->phone;
        $user->password =Hash::make($req->password);
        if($req->cpassword != $req->password){
            return back()->with('mismatch','Confirm password does not match');
        }        
        else{
            $save = $user->save();
            $customer->cid =$user->id;
            $save2 = $customer->save();
            if($save && $save2){
                return back()->with('success','User successfully registered');
            }else{
                return back()->with('fail','Error in creating user account');
            }
        }

    }

    function check(Request $req){
        $req->validate([
            'phone'=>'required|min:10|max:10',
            'password'=>'required|min:5|max:12'
        ]);

        $UserInfo = Admin::where('phone','=',$req->phone)->first();

        if(!$UserInfo){
            return back()->with('fail','No Account found in this number');
        }else{
            if(Hash::check($req->password,$UserInfo->password)){
                $req->session()->put('LoggedUser',$UserInfo->id);
                if($req->phone == '0123456789'){
                    
                    return redirect('../Admin/Home')->with('phone','0123456789');
                }else{
                    return redirect('../User/Home');
                }
            }else{
                return back()->with('fail','Incorrect Password');
            }
        }

    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('Auth/Login');
        }
    }

    function userhome(){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
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
        return view('User/Home',$data,compact('datacategory','datasubcategory','dataitem','databrand','bcount','itemcheck'));
    }

    function authhome(){
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        return view('Auth/Home',compact('datacategory','datasubcategory','dataitem','databrand','bcount'));
    }
    function index(){
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $dataitem=Item::all();
        return view('/index',compact('datacategory','datasubcategory','dataitem','databrand','bcount'));
    }

    function pl(){
        $datacategory=Category::all();
        $datasubcategory=Subcategory::all();
        $databrand=Brand::all();
        $bcount=Brand::all()->count();
        $searchlist=Item::all();
        $searchlistcount=Item::all()->count();
        $search=NULL;
        if($_GET['cat'] != 0){
            $a = $_GET['cat'];
            $category=Category::where('id','=',$a)->first();
            $searchlist=Item::join('subcategories','items.scid','=','subcategories.id')->where('cid','=',$category->id)->get();
            $searchlistcount=Item::join('subcategories','items.scid','=','subcategories.id')->where('cid','=',$category->id)->get()->count();
        }
        elseif($_GET['sub'] != 0){
            $a = $_GET['sub'];
            $searchlist=Item::where('scid','=',$a)->get();
            $searchlistcount=Item::where('scid','=',$a)->get()->count();
        }
        elseif($_GET['brand'] != 0){
            $a = $_GET['brand'];
            $searchlist=Item::where('bid','=',$a)->get();
            $searchlistcount=Item::where('bid','=',$a)->get()->count();
        }
        else{
            $searchlist=Item::all();
            $searchlistcount=Item::all()->count();
            $search=NULL;
        }
        $datavendor=Vendor::all();    
        return view('Auth/ProductList',compact('datavendor','datacategory','datasubcategory','databrand','searchlist','searchlistcount','search','bcount'));
    }

}
