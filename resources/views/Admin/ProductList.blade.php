@extends('Admin/Theme')
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
            <a class="nav-link active fs-6" href="ProductList">
              <i class="bi bi-cart"> Products</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Vendors">
              <i class="bi bi-person-lines-fill"> Vendors</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Customers">
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
      <div class="row mt-1 ">
        <div class="col-sm-12 col-12 col-md-6 col-lg-3">
          <a href="CategoryList" class="text-decoration-none text-dark">
            <div class="well p-2 shadow">
              <h4>Categories</h4>
              <p class="d-none d-sm-none d-md-block">{{ $ccount }}</p> 
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-12 col-md-6 col-lg-3">
          <a href="SubcategoryList" class="text-decoration-none text-dark">
            <div class="well p-2 shadow">
              <h4>Sub-Categories</h4>
              <p class="d-none d-sm-none d-md-block">{{ $sccount }}</p> 
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-12 col-md-6 col-lg-3">
          <a href="BrandList" class="text-decoration-none text-dark">
            <div class="well p-2 shadow">
              <h4>Brands</h4>
              <p class="d-none d-sm-none d-md-block">{{ $bcount }}</p> 
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-12 col-md-6 col-lg-3">
          <a href="AddProduct" class="text-decoration-none text-dark">
            <div class="well p-2 shadow bg-warning">
              <h4><i class="bi bi-plus"></i>Add New Product</h4>
              <p class="d-none d-sm-none d-md-block">Add new product & details</p> 
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-5">
      <div class="col-4">
        <h3 class=" col-4">Products</h3>
      </div>
      <div class="col-8">
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
                <th></th>
              </tr>
            </thead>
            
            <tbody>
            @foreach($dataproduct as $item)
            <!-- @if($item->stock==0){{ $cls='text-danger'}}@else{{$cls='text-success'}}@endif -->
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td><img width="100px" src="{{ URL::asset('assets/images/'.$item->image) }}" alt=""></td>
                <td>{{$item->brand->name}} {{$item->model}} {{ $item->name }}</td>
                <td>{{ $item->sprice }}</td>
                <td>{{ $item->cprice }}</td>
                
                <td class="fs-4 {{$cls}}" >{{ $item->stock }}<br></td>
                <td><a href={{"ProductDetails/".$item->id}}>View Details</a></td>
                <td><a class="btn btn-outline-warning" href={{"EditProduct/".$item->id}}>Edit</a></td>
              </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection