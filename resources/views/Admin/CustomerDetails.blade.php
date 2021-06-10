@extends('Admin/InnerTheme')
@section('admincontent')

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="Home" class="text-light fs-4 text-decoration-none me-auto m-2">
    <span>Wiz Techz Admin </span>
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3 d-none d-sm-none d-md-block">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../Auth/Logout">Sign out</a>
    </li>
  </ul>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" style="top:0" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link fs-6" aria-current="page" href="Home">
              <i class="bi bi-house-door"> Dashboard</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Orders">
             <i class="bi bi-file-earmark"> Orders</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="ProductList">
              <i class="bi bi-cart"> Products</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Vendors">
              <i class="bi bi-person-lines-fill"> Vendors</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-6" href="Customers">
              <i class="bi bi-person-circle"> Customers</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Reports">
              <i class="bi bi-flag"> Reports</i> 
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link fs-6" href="../Auth/Logout">
              <i class="bi bi-power"> Sign out</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 m-2">
            <h3>Customer Details</h3>
            <div class="row">
                <div class="col">
                    <table class=" table table-warning table-borderless">
                        <tr>
                            <td><h4>Name:</h4></td>
                            <td><input class="form-control" type="text" value="{{$datauser->name}}" disabled></td>
                        </tr>
                        <tr>
                            <td><h4>Phone Number:</h4></td>
                            <td><input class="form-control" type="text" value="{{$datauser->phone}}" disabled></td>
                        </tr>
                        <tr>
                            <td><h4>Gender:</h4></td>
                            <td><input class="form-control" type="text" value="{{$datacustomer->gender}}" disabled></td>
                        </tr>
                        <tr>
                            <td><h4>Email:</h4></td>
                            <td><input class="form-control" type="text" value="{{$datacustomer->email}}" disabled></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <h3>Orders By This Customer</h3>
                    <div class="col">
                        <div class="container-fluid unititem bg-white shadow md-3">
                            <div class="row d-flex flex-row ">
                                <div class="col-2">
                                    <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                                </div>
                            <div class="col-4 mt-4">
                                <h5 class="md-2" >Heading</h5>
                                <tr>
                                    <td><label class="fs-7" for="">Seller</label></td>
                                    <td><label class="fs-7" for="">new</label></td>
                                </tr>
                            </div>
                            <div class="col-2 mt-4">
                                <h6>Price: &#8377 45346</h6>
                            </div>
                            <div class="col-4 mt-4">
                                <tr>
                                    <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                    <td><label class="fs-7" for="">new</label></td>
                                </tr>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col">
                        <div class="container-fluid unititem bg-white shadow md-3">
                            <div class="row d-flex flex-row ">
                                <div class="col-2">
                                    <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                                </div>
                            <div class="col-4 mt-4">
                                <h5 class="md-2" >Heading</h5>
                                <tr>
                                    <td><label class="fs-7" for="">Seller</label></td>
                                    <td><label class="fs-7" for="">new</label></td>
                                </tr>
                            </div>
                            <div class="col-2 mt-4">
                                <h6>Price: &#8377 45346</h6>
                            </div>
                            <div class="col-4 mt-4">
                                <tr>
                                    <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                    <td><label class="fs-7" for="">new</label></td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection