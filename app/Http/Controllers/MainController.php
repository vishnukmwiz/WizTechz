<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

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
        $user->name =$req->name;
        $user->phone =$req->phone;
        $user->password =Hash::make($req->password);
        if($req->cpassword != $req->password){
            return back()->with('mismatch','Confirm password does not match');
        }        
        else{
            $save = $user->save();

            if($save){
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
                    
                    return redirect('../Admin/Home')->with('phone','01233456789');
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
        return view('User/Home',$data);
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
