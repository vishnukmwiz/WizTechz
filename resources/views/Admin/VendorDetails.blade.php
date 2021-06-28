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
            <a class="nav-link fs-6" href="../ProductList">
              <i class="bi bi-cart"> Products</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-6" href="../Vendors">
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
      <h3>Vendor Details</h3>
      <div class="container ">
        <div class="row bg-white shadow">
          <div class="col-12 col-sm-12 col-md-7 col-lg-6 p-4">
            <label class="fs-5" for=""><strong>Vendor ID: </strong><i> {{$datavendor->id}}</i></label><br>
            <label class="fs-5" for=""><strong>Vendor Name: </strong><i> {{$datavendor->name}}</i></label><br>
            <label class="fs-5" for=""><strong>Phone Number: </strong><i> {{$datavendor->phone}}</i></label><br>
            <label class="fs-5" for=""><strong>Email: </strong><i> {{$datavendor->email}}</i></label>
          </div>
          <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-4">
            <strong class="fs-5">Address</strong>
            <address class="fs-5">
            {{$datavendor->room}} <br>
            {{$datavendor->city}} <br>
            {{$datavendor->district}}<br>
            {{$datavendor->pin}}
            </address>
          </div>
        </div>
      </div>
      <div class="row mt-5">
      <div class="col-6">
        <h3 >Products from this vendor</h3>
      </div>
      <div class="col-6">
        <input class="form-control col-8" type="text" id="prosearch" onkeyup="psfunc()" placeholder="Search for products..">
      </div>
        
       </div>
      <div class="table-responsive">
        <table id="protable" class="table table-bordered align-middle">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Cost Price</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Stock</th>
                <th></th>
              </tr>
            </thead>
            
            <tbody>
            @foreach($dataproduct as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td><img width="100px" src="{{ URL::asset('assets/images/'.$item->image) }}" alt=""></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->sprice }}</td>
                <td>{{ $item->cprice }}</td>
                <td class="fs-4" >{{ $item->stock }}<br><a class="btn btn-outline-warning btn-sm " href="../ProductDetails/{{$item->id}}">Purchase New Stock</a></td>
                <td><a href="../ProductDetails/{{$item->id}}">View Details</a></td>
              </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection