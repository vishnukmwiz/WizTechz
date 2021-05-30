@extends('Theme')
@section('content')
<header class="p-3 bg-dark text-white sticky-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/User/Home" class="nav d-flex align-items-center text-decoration-none col-12 col-lg-auto mb-2 mb-md-0 mb-lg-0 me-lg-5">
        <img class="bi me-1" width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        <label class="navbar-brand nav-link px-1 text-warning" for="logo">Wiz Techz</label>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-auto">
        <div class="input-group" >
          <input type="search" size="50" class="form-control form-control-dark" placeholder="Search for products, brands and more">
          <button class="btn btn-outline-secondary" type="button"><i class="bi-search "></i></button>
        </div>
      </form>
      <div class="navbar navbar-expand-lg col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5">
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="navbar-brand text-warning dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $LoggedUserInfo['name'] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="Profile"><i class="bi bi-person-circle"> </i> User Profile</a></li>
                <li><a class="dropdown-item" href="MyOrder"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-heart-fill"> </i> Whishlist</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="Logout"><i class="bi bi-power"> </i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-end">
      <a class="text-decoration-none text-warning fs-5" href=""><i class="bi-cart "></i>Cart<sup><span class="badge bg-danger">0</span></sup></a>
      </div>
    </div>
  </div>
</header>
<nav class="navbar navbar-expand-lg navbar-white bg-white shadow">
  <div class=" me-lg-auto ms-lg-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="section m-5">

<div class="container ">
ORDER ID: 12345678987654
    <div class="row bg-white shadow">
        <div class="col-8 p-4">
            <div class="p-5 container bg-white shadow unititem md-3">
                <div class="row ">
                    <div class="col-3">
                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    </div>
                    <div class="col-5 mt-3">
                      <h5 class="md-2" >Heading</h5>
                      <tr>
                        <td><label class="fs-7" for="">Seller</label></td>
                        <td><label class="fs-7" for="">new</label></td>
                      </tr>
                      <br>
                      <tr>
                        <td><label class="fs-7" for="">Price</label></td>
                        <td><label class="fs-7" for="">&#8377 45346</label></td>
                      </tr>
                    </div>
                    <div class=" col-4 mt-3 ">
                      <tr>
                        <td><label class="fs-7" for="">Delivery Expected by</label></td>
                        <td><label class="fs-7" for="">new</label></td>
                      </tr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 p-4">
            <h4>DELIVERY ADDRESS</h4>
            <h5>Full Name </h5>
            <address>
            jsthfgukygfuyjsdgf <br>
            kjyfgkyhfgbjhsbdfjhb <br>
            fsbfugsbujhbshbh <br>
            </address>
            <h5>Phone Number</h5>
            <span>9876543120</span>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-8 p-4  bg-white shadow">
            <h3>Other items in this Order</h3>
            <div class=" container bg-white shadow unititem md-3">
                <div class="row ">
                    <div class="col-3">
                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    </div>
                    <div class="col-5 mt-3">
                        <h5 class="md-2" >Heading</h5>
                        <tr>
                            <td><label class="fs-7" for="">Seller</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                        <br>
                        <tr>
                            <td><label class="fs-7" for="">Price</label></td>
                            <td><label class="fs-7" for="">&#8377 45346</label></td>
                        </tr>
                    </div>
                    <div class=" col-4 mt-3 ">
                        <tr>
                            <td><label class="fs-7" for="">Delivery Expected by</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                    </div>
                </div>
            </div>
            <hr width="0">
            <div class=" container bg-white shadow unititem md-3">
                <div class="row ">
                    <div class="col-3">
                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    </div>
                    <div class="col-5 mt-3">
                        <h5 class="md-2" >Heading</h5>
                        <tr>
                            <td><label class="fs-7" for="">Seller</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                        <br>
                        <tr>
                            <td><label class="fs-7" for="">Price</label></td>
                            <td><label class="fs-7" for="">&#8377 45346</label></td>
                        </tr>
                    </div>
                    <div class=" col-4 mt-3 ">
                        <tr>
                            <td><label class="fs-7" for="">Delivery Expected by</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
</section>

@endsection
