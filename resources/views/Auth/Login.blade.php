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
            <a href="Register" type="button" class="btn btn-warning me-5">Create a new account</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header>


	<section class="m-2">
		<div class="container-fluid ">
            <div class="row flex flex-row bg-white justify-content-center align-items-center">
				<div class="col-5">
					<img width="100%" src="https://th.bing.com/th/id/Rd05e168594a4adbc13589e963e16388e?rik=38EYuhDfwQHsYQ&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2015%2f02%2fcomputer-icon-desktop_248447.png&ehk=N4kFuxxDfqArW4NXDVb12KgKe6AeoQz8D3L55mcoDTU%3d&risl=&pid=ImgRaw" alt="">
				</div>
                <div class="col-5 form ">  
			        <form action="Log" method="POST">
					@if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
					{{csrf_field()}}
			        	<h2>Welcome back!!<br>Login to continue..</h2><br>
			        	<table>
			        		<tbody>
			        			<tr>
			        				<td><label>Mobile Number<span>*</span></label></td>
			        				<td>
										<input class="form-control" type="text" name="phone" size="40"/>
										<span class="text-danger">@error('phone'){{ $message }} @enderror</span>
									</td>
			        			</tr>
			        			<tr> 
			        				<td><label>Password<span>*</span></label></td>
			        				<td>
										<input type="password" class="form-control" name="password" size="40">
										<span class="text-danger">@error('password'){{ $message }} @enderror</span>
									</td>
									<td><a class="text-warning text-decoration-none" href="">&nbsp Forgot?</a></td>
			        			</tr>
								<tr>
									<td></td>
									<td><button class="mt-3 btn btn-warning form-control">Login</button></td>
								</tr>
								<tr>
									<td></td>
									<td class="text-center"><label class="mt-3 text-dark " for="">New Customer?<a class="text-warning" href="Register">Create An Account</a></label></td>
								</tr>
			        		</tbody>
			        	</table>
			        </form>
					
		        </div>
            </div>
        </div>
	</section>

@endsection