@extends('Admin/InnerTheme')
@section('admincontent')

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="../Home" class="text-light fs-4 text-decoration-none me-auto m-2">
    <span>Wiz Techz Admin </span>
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3 d-none d-sm-none d-md-block">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../../Auth/Logout">Sign out</a>
    </li>
  </ul>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" style="top:0" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
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
          <li class="nav-item d-md-none">
            <a class="nav-link fs-6" href="../../Auth/Logout">
              <i class="bi bi-power"> Sign out</i>
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
                    <img class="me-2 ms-2" width="100%" src="{{ URL::asset('assets/images/'.$dataproduct->image) }}" alt="">
                    <div class="row">
                      <form action="/addstock/{{$dataproduct->id}}" class="form" method="post">
                      {{csrf_field()}}
                        <table class="table table-borderless">
                          <tr>
                            <td><input type="number" class="form-control m-2 col-12" name="ustock"></td>
                            <td><button class="btn  btn-warning m-2 col-12"></i>Add To Stocks</button></td>
                          </tr>
                        </table>
                      </form>
                    </div>
                    <div class="row">
                            <a  class="btn btn-lg btn-outline-warning md-2" href={{"../EditProduct/".$dataproduct->id}}></i>Edit Product</a>
                    </div>   
                </div>
            </div>
        </div>
        <div class="col-6 ">
            <div class="row p-3 m-1 bg-white shadow">
                <h3 class="md-2" >{{$databrand->name}} {{$dataproduct->model}}</h3>
                <h4>Cost Price: &#8377 {{$dataproduct->cprice}}</h4>
                <h4>Selling Price: &#8377 {{$dataproduct->sprice}}</h4>

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><label class="fs-5" for="">Features</label></td>
                            <td><label class="fs-5" for=""> {{$dataproduct->desc}}</label></td>
                        </tr>
                        <tr>
                            <td><label class="fs-5" for="">Vendor</label></td>
                            <td><label class="fs-5" for="">  {{$datavendor->name}}</label></td>
                        </tr>
                        <tr>
                            <td><label class="fs-5" for="">Stock</label></td>
                            <!-- @if($dataproduct->stock==0){{ $cls='text-danger'}}@else{{$cls='text-success'}}@endif -->
                            <td><label class="fs-4 {{$cls}}" for=""> {{$dataproduct->stock}}</label></td>
                        </tr>
                    </tbody>
                </table>
                <div class="card ">
                    <h4 class="card-header">Specifications</h4>
                    <div class="card-body">
                        <div class="col-12">
                            <table class="table table-borderless ">
                                <tbody >
                                    <tr>
                                        <td ><label for="">Model Number</label></td>
                                        <td><label for="">{{$dataproduct->model}}</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Inside Package</label></td>
                                        <td><label for="">{{$dataproduct->package}}</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Dimensions</label></td>
                                        <td><label for="">{{$dataproduct->size}}</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Color</label></td>
                                        <td><label for="">{{$dataproduct->color}}</label></td>
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