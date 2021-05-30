<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

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
        return view('User/Profile',$data,compact('datauser','datacustomer'));
    }
    public function editprofile()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        return view('User/EditProfile',$data,compact('datauser','datacustomer'));
    }
    public function passpage()
    {
        $data = ['LoggedUserInfo' => Admin::where('id','=',session('LoggedUser'))->first()];
        $data2 = Admin::where('id','=',session('LoggedUser'))->first();
        $datauser=Admin::find($data2->id);
        $datacustomer=Customer::where('cid','=',$data2->id)->first();
        return view('User/ChangePassword',$data,compact('datauser','datacustomer'));
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
       
        echo "<script>alert('Successfully edited vendor');window.location='/User/Profile';</script>";
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
               
                echo "<script>alert('Password Changed');window.location='User/Profile';</script>";
      
            }
            else{

                echo "<script>alert('New Password and Confirm Password must be same');window.location='User/ChangePassword';</script>"; 

            }

        }
        else
        {
            echo "<script>alert('Inputed Old Password is not recognized');window.location='User/ChangePassword';</script>"; 

    
        }

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
