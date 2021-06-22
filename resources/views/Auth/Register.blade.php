@extends('Auth/Theme')
@section('content')
<header class="p-2 bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/Auth/Home" class="navbar-brand text-secondary fs-3 ">
        <img width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        Wiz Techz
      </a>
      
      <div class="collapse navbar-collapse " id="header">
        <form action="ProductList" method="POST"  class="d-flex">
        {{csrf_field()}}
          <input name="search" type="search" size="40"  class="form-control form-control-dark" placeholder="Search for products, brands and more">
        </form>
        <ul class="navbar-nav ms-auto mb-auto mb-lg-0 ">
            <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="ProductList?cat=0&sub=0&brand=0">Products</a>
          </li>
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a href="Login" type="button" class="btn btn-warning me-5">LOGIN</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
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