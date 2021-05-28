@extends('Auth/Theme')
@section('content')
<header class="p-3 bg-dark text-white sticky-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="nav d-flex align-items-center text-decoration-none col-12 col-lg-auto mb-2 mb-md-0 mb-lg-0 me-lg-5">
        <img class="bi me-1" width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        <label class="navbar-brand nav-link px-1 text-warning" for="logo">Wiz Techz</label>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-auto">
        <div class="input-group" >
          <input type="search" size="50" class="form-control form-control-dark" placeholder="Search for products, brands and more">
          <button class="btn btn-outline-secondary" type="button"><i class="bi-search "></i></button>
        </div>
      </form>
      <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5">
      <a href="Login"><button type="button" class="btn btn-warning">LOGIN</button></a>
      </div>
      <div class="text-end">
      <a class="text-decoration-none text-warning fs-5" href=""><i class="bi-cart "></i>Cart<sup><span class="badge bg-danger">0</span></sup></a>
      </div>
    </div>
  </div>
</header>


	<section class="m-2">
		<div class="container-fluid ">
            <div class="row flex flex-row bg-white justify-content-center align-items-center">
                <div class="col-5 form ">  
			        <form action="Reg" method="POST">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        <a href="Login">Back to Login</a>
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @if(Session::get('mismatch'))
                    <div class="alert alert-warning">
                        {{ Session::get('mismatch') }}
                    </div>
                    @endif
                    {{csrf_field()}}    
                        <h2>Welcome to Wiz Tezhz..!!<br>Sign Up and continue..</h2><br>
                        <table>
                            <tbody>
				                <tr>
                                    <td><label>Full Name<span>*</span></label></td>
                                    <td>
                                        <input class="form-control" type="text" name="name" size="40" value="{{ old('name') }}"/>
                                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Mobile Number<span>*</span></label></td>
                                    <td>
                                        <input class="form-control" type="tel" name="phone" value="{{ old('phone') }}" />
                                        <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Password <span>*</span></label></td>
                                    <td>
                                        <input type="password" class="form-control" name="password"/>
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Confirm password <span>*</span></label></td>
                                    <td>
                                        <input type="password" class="form-control" name="cpassword" />
                                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="mt-3 form-control btn btn-warning">Register</button></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="Login" class="mt-3 form-control btn btn-outline-warning">Already a User? Login</a></td>
                                </tr>
                            </tbody>
                        </table>
			        </form>
		        </div>
                <div class="col-5">
					<img width="100%" src="https://www.buyitdirect.ie/Images/81MT002AUK_6_Supersize.jpg?width=937&height=937&v=2" alt="">
				</div>
            </div>
        </div>
	</section>

@endsection