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
      <h3 class="mt-4">Add New Product</h3>
      <form class="form" action="/addproduct" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}   
        <div class="row">
          <div class="col-8 ">
            <table class="table table-borderless table-warning">
              <tr>
                <td><label for="">Select Vendor</label></td>
                <td>
                  <select name="vid"  class="form-select" >
                    @foreach($vdata as $vendor)
                      <option>{{$vendor->name }}</option>
                    @endforeach 
                  </select>
                </td>
              </tr>
              <tr>
                <td><label for="">Select Category</label></td>
                <td>
                  <select name="cid" class="form-select" >
                    @foreach($cdata as $category)
                      <option>{{$category->name }}</option>
                    @endforeach 
                  </select>
                </td>
              </tr>
              <tr>
                <td><label for="">Select Sub-Category</label></td>
                <td>
                  <select name="scid" id="category" class="form-select">
                    @foreach($scdata as $subcategory)
                      <option>{{$subcategory->name }}</option>
                    @endforeach 
                  </select>
                </td>
              </tr>
              <tr>
                <td><label for="">Select Brand</label></td>
                <td>
                  <select name="bid" id="brand" class="form-select" >
                    @foreach($bdata as $brand)
                      <option>{{$brand->name }}</option>
                    @endforeach 
                  </select>
                </td>
              </tr>
              <tr>
                <td><label for="">Model Number</label></td>
                <td><input type="text" class="form-control" name="model" value="" ></td>
              </tr>
              <tr>
                <td><label for="">Inside Package</label></td>
                <td><input type="text" class="form-control" name="package" value=""></td>
              </tr>
              <tr>
                <td><label for="">Product Name</label></td>
                <td><input type="text" class="form-control" name="name" value="" ></td>
              </tr>
              <tr>
                <td><label for="">Dimensions</label></td>
                <td><input type="text" class="form-control" name="size" value=""></td>
              </tr>
              <tr>
                <td><label for="">Color</label></td>
                <td><input type="text" class="form-control" name="color" value="" ></td>
              </tr>
              <tr>
                <td><label for="">Description</label></td>
                <td><input type="textarea" class="form-control" name="desc" value=""></td>
              </tr>
              <tr>
                <td><label for="">Selling Price</label></td>
                <td><input type="text" class="form-control" name="sprice" value=""></td>
              </tr>
              <tr>
                <td><label for="">Cost Price</label></td>
                <td><input type="text" class="form-control" name="cprice" value=""></td>
              </tr>
              <tr>
                <td></td>
                <td><input  name="image" type="file" class="form-control"></td>
              </tr>
              <tr>
                <td><a href="ProductList" class="btn btn-outline-warning  col-12">CANCEL</a></td>
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