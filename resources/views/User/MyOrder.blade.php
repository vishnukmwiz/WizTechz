@extends('User/Theme')
@section('usercontent')
<header class="p-2 bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>{{ $LoggedUserInfo['name'] }}
      </button>
      <a href="/User/Home" class="navbar-brand text-secondary fs-3 ">
        <img width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        Wiz Techz
      </a>
      
      <div class="collapse navbar-collapse " id="header">
        <form action="ProductList" method="POST"  class="d-flex">
        {{csrf_field()}}
          <input name="search" type="search" size="40"  class="form-control form-control-dark" placeholder="Search for products, brands and more">
        </form>
        <ul class="navbar-nav ms-auto mb-auto mb-lg-0 ">
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="ProductList?cat=0&sub=0&brand=0">Products</a>
          </li>
          <li class="nav-item dropdown mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning dropdown-toggle me-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ $LoggedUserInfo['name'] }}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="Profile"><i class="bi bi-person-circle"> </i> User Profile</a></li>
              <li><a class="dropdown-item" href="MyOrder"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../Auth/Logout"><i class="bi bi-power"> </i> Logout</a></li>
            </ul>
          </li>
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="Cart"><i class="bi-cart "></i>Cart @if($itemcheck != 0)<sup><span class="badge bg-danger">{{$itemcheck}}</span></sup>@endif</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow">
  <div class=" me-lg-auto ms-lg-auto me-sm-2 ms-sm-2 me-md-auto ms-md-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> Explore Products
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav gap-2">
        <!-- {{$countp=0}}
        @foreach($datacategory as $category)
          @if($countp < 7) -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$category->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="ProductList?cat={{$category->id}}&sub=0&brand=0">All {{$category->name}}</a></li>
            @foreach($datasubcategory as $catsub)
            @if($category->id == $catsub->cid)
            <li><a class="dropdown-item" href="ProductList?cat=0&sub={{$catsub->id}}&brand=0">{{$catsub->name}}</a></li>
            @endif
            @endforeach
          </ul>
        </li>
        <!-- {{$countp++}}
          @else
            break
          @endif
        @endforeach -->
      </ul>
    </div>
  </div>
</nav>
  <div class="container-fluid mt-3">
    <div class="row">
    <div class="col-3 d-none d-lg-block d-xl-block d-xxl-block">
        <div class="d-flex flex-column p-3 text-dark bg-white shadow" style="width: 100%;">
          <a href="Profile" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <img class="rounded-circle" width="20%" src="{{ URL::asset('assets/images/'.$datacustomer->image) }}" alt="">
            <span class="fs-4">{{ $LoggedUserInfo['name'] }}</span>
          </a>
        </div>
        <div class="d-flex flex-column mt-3 p-3 text-dark bg-white shadow" style="width: 100%;">
          <ul class="list-group">
            <li class="list-group-item active" aria-current="true"> 
              <a href="MyOrder" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-5"><i class="bi-wallet2"></i> MY ORDERS</span>
              </a>
            </li>
            <br>
            <li class="list-group-item">
              <label href="Profile" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-5"><i class="bi-person-circle"></i> ACCOUNT SETTINGS</span> 
              </label>
              <ul class="list-group">
                <li class="list-group-item "><a class="text-dark text-decoration-none" href="Profile"><span class="fs-6">Profile Information</span></a></li>
                <li class="list-group-item"><a class="text-dark text-decoration-none" href="Addresses"><span class="fs-6">Manage Addresses</span></a></li>
              </ul>
            </li>
            <br>
            <li class="list-group-item">
              <a href="../Auth/Logout" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-5"><i class="bi-power"></i> LOGOUT</span>
              </a>
            </li>  
          </ul>
        </div>   
      </div>  
      <div class=" d-inline-flex d-sm-inline-flex d-md-inline-flex d-block d-sm-block d-md-block d-lg-none mt-2 mb-2">
      <div class="col-4 col-xs-4 col-sm-4 col-md-4 "><a class="col-12 btn btn-outline-warning text-decoration-none active" href="MyOrder"><span class="fs-6">My Orders</span></a></div>
        <div class="col-4 col-xs-4 col-sm-4 col-md-4 "><a class="col-12 btn btn-outline-warning text-decoration-none " href="Profile"><span class="fs-6">Profile Information</span></a></div>
        <div class="col-4 col-xs-4 col-sm-4 col-md-4 "><a class="col-12 btn btn-outline-warning text-decoration-none" href="Addresses"><span class="fs-6">Addresses</span></a></div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-9 p-4 bg-white shadow">
       @foreach($mycorder as $order) 
        <div class="container-fluid unititem bg-white shadow md-3">
          <div class="row d-flex flex-row ">
            <div class="col-2">
                <img width="100%" src="../assets/images/{{$order->item->image}}" alt="">
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
                <td><label class="fs-7" for="">@foreach($mysales as $sales) @if($sales->moid == $order->moid ){{$sales->delistatus}}@endif @endforeach</label></td>
              </tr>
              @foreach($mysales as $sales) @if($sales->moid == $order->moid && $sales->delistatus == "Not Delivered")
              <tr>
                <td><label class="fs-7" for="">Delivery Expected by</label></td>
                <td><label class="fs-7 fw-bold" for=""> <!--{{$d= date_add($order->created_at,date_interval_create_from_date_string("5 days"))}}--> {{date_format($d,"d-M-y")}} </label></td> 
              </tr>
              @endif @endforeach
              <tr>
                <td><label class="fs-7" for="">Payment Status:</label></td>
                <td><label class="fs-7" for="">@foreach($mysales as $sales) @if($sales->moid == $order->moid ){{$sales->paystatus}}@endif @endforeach</label></td>
              </tr>
            </div>
          </div>
        </div>
        <hr width="0" >
        @endforeach
      </div>
    </div>
  </div>  

@endsection