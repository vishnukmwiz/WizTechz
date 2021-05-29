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
    <form class="row contact_form" action="/editproduct/{{ $dataproduct->id }}" method="post" enctype="multipart/form-data" >
                                {{csrf_field()}}
                               

                                <div class="col-md-12 " style='max-width:40%'>
  
                                    </div>
                                                          
                                        <div class="col-md-12 ">
                                        <table> 
                                        <tr>
                                            <td>

                                            <select name="vid" id="category" class="form-control" >
                                            <option value="{{ $dataproduct->vendor->name }}" selected>{{ $dataproduct->vendor->name }} </option>
                                            @foreach($vdata as $vendor)
                                            <option>{{$vendor->name }}</option>
                                            @endforeach 
                                         
                                            </select>
                                            </td>
                                            </tr>
                                        <tr>
                                            <td>

                                            <select name="cid" id="category" class="form-control" >
                                            <option value="{{ $dataproduct->category->name }}" selected>{{ $dataproduct->category->name }} </option>
                                            @foreach($cdata as $category)
                                            <option>{{$category->name }}</option>
                                            @endforeach 
                                         
                                            </select>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>

                                            <select name="scid" id="category" class="form-control" >
                                            <option value="{{ $dataproduct->subcategory->name }}" selected>{{ $dataproduct->subcategory->name }} </option>
                                            @foreach($scdata as $subcategory)
                                            <option>{{$subcategory->name }}</option>
                                            @endforeach 
                                         
                                            </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <br>
                                            <select name="bid" id="brand" class="form-control" >
                                            <option value="{{ $dataproduct->brand->name }}" selected>{{ $dataproduct->brand->name }} </option>
                                            @foreach($bdata as $brand)
                                            <option>{{$brand->name }}</option>
                                            @endforeach 
                                            </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td> <br> <input type="text" class="form-control" id="name" name="model" value="{{ $dataproduct->model }}"  placeholder="Product Model"></td>
                                                </tr>
                                                <tr>
                                            <td> <br> <input type="text" class="form-control" id="name" name="package" value="{{ $dataproduct->package }}"  placeholder="Product Package"></td>
                                                </tr>
                                            <tr>
                                            <td> <br> <input type="text" class="form-control" id="name" name="name" value="{{ $dataproduct-> name}}"  placeholder="Product Name"></td>
                                                </tr>
                                                <tr>
                                            <td> <br> <input type="text" class="form-control" id="name" name="size" value="{{ $dataproduct->size }}"  placeholder="Product Name"></td>
                                                </tr><tr>
                                            <td> <br> <input type="text" class="form-control" id="name" name="color" value="{{ $dataproduct->color }}"  placeholder="Product Name"></td>
                                                </tr>
                                                <tr>
                                            <td> <br> <input type="textarea" class="form-control" id="desc" name="desc" value="{{ $dataproduct->desc }}"  placeholder="Product Description"></td>
                                                </tr>
                                                <tr>
                                            <td>  <input type="text" class="form-control" id="name" name="sprice" value="{{ $dataproduct->sprice }}"  placeholder="Price"></td>
                                                </tr>
                                                <tr>
                                            <td>  <input type="text" class="form-control" id="name" name="cprice" value="{{ $dataproduct->cprice }}"  placeholder="Price"></td>
                                                </tr>
                                                <tr>
                                                    <td><input  name="image" type="file" class="form-control"></td>
                                                </tr>
                                        </table>
                                    </div>
        
                                    <div class="col-md-12 form-group">
                                      
                                        <button type="submit" value="submit" class="btn_3">
                                            Add
                                        </button>
                                       
                                    </div>
                                </form>
      
    </div>
  </div>
</div>
@endsection