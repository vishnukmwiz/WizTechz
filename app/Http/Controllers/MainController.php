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
        return view('Auth/Home');
    }
    function pd(){
        return view('Auth/ProductDetails');
    }
    function pl(){
        return view('Auth/ProductList');
    }

}
