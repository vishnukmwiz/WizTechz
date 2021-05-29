@extends('Admin/Theme')
@section('admincontent')

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="../Home" class="text-light fs-4 text-decoration-none me-auto m-2">
    <span>Wiz Techz Admin </span>
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="nav-link" href="../Profile">Profile</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../../Auth/Logout">Sign out</a>
    </li>
  </ul>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link fs-6" aria-current="page" href="../Home">
              <i class="bi bi-house-door"> Dashboard</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-6" href="../Orders">
             <i class="bi bi-file-earmark"> Orders</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="../ProductList">
              <i class="bi bi-cart"> Products</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="../Vendors">
              <i class="bi bi-person-lines-fill"> Vendors</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="../Customers">
              <i class="bi bi-person-circle"> Customers</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="../Reports">
              <i class="bi bi-flag"> Reports</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="../Feedback">
              <i class="bi bi-bookmark-star"> Feedbacks</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 m-2">
      <h3>Order Details</h3>
      <div class="container ">
        ORDER ID: 12345678987654
        <div class="row bg-white shadow">
          <div class="col-4 p-4">
            <h4>CUSTOMER DETAILS</h4>
            <h5>Full Name </h5>
            <h5>Phone Number</h5>
            <span>9876543120</span>
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
            <h3>Items in this Order</h3>
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
    </div>
  </div>
</div>
@endsection