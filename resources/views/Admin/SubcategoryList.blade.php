@extends('Admin/Theme')
@section('admincontent')

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="Home" class="text-light fs-4 text-decoration-none me-auto m-2">
    <span>Wiz Techz Admin </span>
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="nav-link" href="Profile">Profile</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../Auth/Logout">Sign out</a>
    </li>
  </ul>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
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
          <li class="nav-item">
            <a class="nav-link fs-6" href="Feedback">
              <i class="bi bi-bookmark-star"> Feedbacks</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 m-2">
    <a href="AddSubcategory" class="btn btn-warning btn-lg mt-4 col-12"><i class="fs-3 bi bi-plus"></i>Add New Sub-Category</a>
    <div class="row mt-5">
      <div class="col-4">
        <h3 class=" col-4">SubCategory</h3>
      </div>
      <div class="col-8">
        <input class="form-control col-8" type="text" id="prosearch" onkeyup="psfunc2()" placeholder="Search for products..">
      </div>
        
       </div>
      <div class="table-responsive">
        <table id="protable" class="table table-bordered align-middle">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Sub-Category Name</th>
                <th scope="col">Sub-Category Description</th>
                <th></th>
              </tr>
            </thead>
            
            <tbody>
            @foreach($datasubcategory as $subcategory)
              <tr>
                <th scope="row">{{ $subcategory->id }}</th>
                <td>{{ $subcategory->name }}</td>
                <td>{{ $subcategory->desc }}</td>
                <td><a class="btn btn-outline-warning" href={{"EditSubcategory/".$subcategory->id}}>Edit</a></td>
              </tr>
            @endforeach
            </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
@endsection