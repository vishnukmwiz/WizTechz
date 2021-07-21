@extends('User/Theme')
@section('usercontent')
<header class="p-2 bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>{{ $LoggedUserInfo['name'] }}
      </button>
      <a href="../../User/Home" class="navbar-brand text-secondary fs-3 ">
        <img width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        Wiz Techz
      </a>
      
      <div class="align-items-center collapse navbar-collapse " id="header">
        <form action="ProductList" method="POST" class="mt-auto mb-auto" >
        {{csrf_field()}}
          <input name="search" type="search" size="40"  class="form-control form-control-dark" placeholder="Search for products, brands and more">
        </form>
        <ul class="navbar-nav ms-auto mb-auto mb-lg-0 ">
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="../ProductList?cat=0&sub=0&brand=0">Products</a>
          </li>
          <li class="nav-item dropdown mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning dropdown-toggle me-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ $LoggedUserInfo['name'] }}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="../Profile"><i class="bi bi-person-circle"> </i> User Profile</a></li>
              <li><a class="dropdown-item" href="../MyOrder"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../../Auth/Logout"><i class="bi bi-power"> </i> Logout</a></li>
            </ul>
          </li>
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="../Cart"><i class="bi-cart "></i>Cart @if($itemcheck != 0)<sup><span class="badge bg-danger">{{$itemcheck}}</span></sup>@endif</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="section m-4">
                    
<div class="container-fluid">

    <div class="row gap-2 justify-content-center">
    
        <div class="col-12 col-sm-12 col-md-5 col-lg-5  ">
        @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        <a href="../Cart">&nbsp View Cart</a>
                    </div>
                    @endif
            <div class="row bg-white shadow p-3">
                <div class="col-12">
                    <img class="me-2 ms-2 p-5" width="100%" src="{{ URL::asset('assets/images/'.$dataitem->image) }}" alt="">
                    <div class="row mt-2 row d-block d-sm-block d-md-none ">
                    
                      <h3 class="md-2" >{{$databrand->name }}&nbsp{{ $dataitem->name}}&nbsp{{$dataitem->model}}</h3>
                
                      <h2>Price: &#8377 {{$dataitem->sprice}}</h2>
                    </div> 
                    <div class="row d-none d-sm-none d-md-block ">
                            <a href="/addtocart/{{$dataitem->id}}" class="btn btn-lg btn-outline-warning md-2"><i class="bi-cart-fill"></i> Add to cart</a>
                            <a href="../Checkout/{{$dataitem->id}}" class="btn btn-lg btn-warning mt-2 md-2"><i class="bi-lightning-charge-fill"></i> Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-4 bg-white shadow">
            <div class="row mt-2 row d-none d-sm-none d-md-block">
                    
                    <h3 class="md-2" >{{$databrand->name }}&nbsp{{ $dataitem->name}}&nbsp{{$dataitem->model}}</h3>
                
                <h2>Price: &#8377 {{$dataitem->sprice}}</h2>
            </div> 
            <div class="row d-block d-sm-block d-md-none">
                            <a href="/addtocart/{{$dataitem->id}}" class="btn btn-lg btn-outline-warning md-2"><i class="bi-cart-fill"></i> Add to cart</a>
                            <a href="../Checkout/{{$dataitem->id}}" class="btn btn-lg btn-warning mt-2 md-2"><i class="bi-lightning-charge-fill"></i> Buy Now</a>
                    </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td><label class="fs-5" for="">Features</label></td>
                        <td colspan="2">
                            {{$dataitem->desc}}
                        </td>
                    </tr>
                    <tr>
                        <td><label class="fs-5" for="">Seller</label></td>
                        <td><label class="fs-5" for="">{{$datavendor->name}}</label></td>
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
                                        <td><label for="">{{$dataitem->model}}</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Inside Package</label></td>
                                        <td><label for="">{{$dataitem->package}}</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Dimensions</label></td>
                                        <td><label for="">{{$dataitem->size}}</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Color</label></td>
                                        <td><label for="">{{$dataitem->color}}</label></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection