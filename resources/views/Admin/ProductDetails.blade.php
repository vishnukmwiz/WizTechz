@extends('Admin/InnerTheme')
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
            <a class="nav-link fs-6" href="../Orders">
             <i class="bi bi-file-earmark"> Orders</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-6" href="../ProductList">
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
    <div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-6  ">
            <div class="row bg-white shadow p-3 m-1">
                <div class="col">
                   
                    <img class="me-2 ms-2" width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    <div class="row">
                            <a  class="btn btn-lg btn-outline-warning md-2" href={{"../EditProduct/".$dataproduct->id}}></i>Edit Product</a>
                            <button class="btn btn-lg btn-warning mt-2 md-2"></i>Add More Stocks</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 ">
            <div class="row p-3 m-1 bg-white shadow">
                <h3 class="md-2" >{{$dataproduct->name}}</h3>
                <h4>Cost Price: &#8377 45346</h4>
                <h4>Selling Price: &#8377 45346</h4>

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><label class="fs-5" for="">Features</label></td>
                            <td>
                                <ul>
                                    <li>sdfsdmgjv</li>
                                    <li>sdfsdmgjv</li>
                                    <li>sdfsdmgjv</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="fs-5" for="">Seller</label></td>
                            <td><label class="fs-5" for="">new</label></td>
                        </tr>
                    </tbody>
                </table>
                <div class="card ">
                    <h4 class="card-header">Specifications</h4>
                    <div class="card-body">
                        <div class="col-6">
                            <table class="table table-borderless ">
                                <tbody >
                                    <tr>
                                        <td ><label for="">Seller</label></td>
                                        <td><label for="">Seller</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Seller</label></td>
                                        <td><label for="">Seller</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Seller</label></td>
                                        <td><label for="">Seller</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Seller</label></td>
                                        <td><label for="">Seller</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Seller</label></td>
                                        <td><label for="">Seller</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      
    </div>
  </div>
</div>
@endsection