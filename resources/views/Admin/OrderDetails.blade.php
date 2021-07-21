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
          <li class="nav-item d-md-none">
            <a class="nav-link fs-6" href="../../Auth/Logout">
              <i class="bi bi-power"> Sign out</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 m-2">
      <h3>Order Details</h3>
      <div class="container ">
        ORDER ID: {{$morder->id}}
        <div class="row bg-white shadow">
          <div class="col-4 p-4">
            <h4>CUSTOMER DETAILS</h4>
            <h5>{{$morder->admin->name}}</h5>
            <h5>Phone Number</h5>
            <span>{{$morder->admin->phone}}</span>
          </div>
          <div class="col-4 p-4">
            <h4>DELIVERY ADDRESS</h4>
            <strong>{{$sale->name}} <br> {{$sale->phone}}</strong><address>{{$sale->address}} <br>{{$sale->locality}} <br>{{$sale->city}} <br>{{$sale->district}} <br>{{$sale->state}} <br>{{$sale->pin}} <br></address>
          </div>
        </div>
      </div>

<div class="container mt-3">
    <div class="row">
        <div class="col-12 p-4  bg-white shadow">
            <h3>Items in this Order</h3>
            @foreach($corder as $order) 
        <div class="container-fluid unititem bg-white shadow md-3">
          <div class="row d-flex flex-row ">
            <div class="col-2">
                <img width="100%" src="../../assets/images/{{$order->item->image}}" alt="">
            </div>
            <div class="col-4 mt-4">
              <h5 class="md-2" >{{$order->item->name}}</h5>
              <tr>
                <td><label class="fs-7 " for=""><strong>Seller:</strong></label></td>
                <td><label class="fs-7" for="">{{$order->item->vendor->name}}</label></td>
                
              </tr>
            </div>
            <div class="col-2 mt-4">
              <h6>Price: &#8377 @if($order->quantity ==1){{$order->item->sprice}} @else {{$order->item->sprice}} X {{$order->quantity}} = &#8377 {{(int)$order->item->sprice * (int)$order->quantity}}@endif</h6>
            </div>
            <div class="col-4 mt-4">
              <tr>
                <td><label class="fs-7" for="">Delivery Status:</label></td>
                <td><label class="fs-7" for="">{{$sale->delistatus}}</label></td>
              </tr>
              @if($sale->delistatus == "Not Delivered")
              <tr>
                <td><label class="fs-7" for="">Delivery Expected by</label></td>
                <td><label class="fs-7 fw-bold" for=""> <!--{{$d= date_add($order->created_at,date_interval_create_from_date_string("5 days"))}}--> {{date_format($d,"d-M-y")}} </label></td> 
              </tr>
              @endif
              <tr>
                <td><label class="fs-7" for="">Payment Status:</label></td>
                <td><label class="fs-7" for="">{{$sale->paystatus}}</label></td>
              </tr>
            </div>
          </div>
        </div>
        <hr width="0" >
        @endforeach
            
        </div>
    </div>
<div>
    </div>
  </div>
</div>
@endsection