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
    <h3 class="mt-4">Edit Category</h3>
      <form class="row contact_form" action="/editcategory/{{ $datacategory->id }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
        {{csrf_field()}}
        <div class="row">
          <div class="col-7">
            <table class="table table-borderless table-warning">
              <tr>
                <td><label for="">Category Name</label></td>
                <td><input type="text" class="form-control"  name="name" value="{{ $datacategory-> name}}" ></td>
              </tr>
              <tr>
                <td><label for="">Category Description</label></td>
                <td><input type="text" class="form-control"  name="desc" value="{{ $datacategory->desc }}" ></td>
              </tr>
              <tr>
                <td></td>
                <td><input  name="cimage" type="file" class="form-control"></td>
              </tr>
              <tr>
                <td><a href="../CategoryList" class="btn btn-outline-warning  col-12">CANCEL</a></td>
                <td><button class="btn btn-warning  col-12">SAVE</button></td>
              </tr>
            </table>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection