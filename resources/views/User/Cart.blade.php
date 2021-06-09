@extends('User/Theme')
@section('usercontent')
<header class="p-2 bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>{{ $LoggedUserInfo['name'] }}
      </button>
      <a href="/User/Home" class="navbar-brand text-secondary fs-3 ">
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
        </ul>
      </div>
    </div>
  </nav>
</header>
<section class="section m-4">
    <div class="container-fluid ps-5 pe-5 pd-3 pt-3">
        <div class="row">
            <div class="col col-8">
                <div class="card">
                    <h5 class="card-header">My Cart</h5>
                    <div class="card-body">
                      @foreach($corder as $child)
                        <div class="unititem">
                            <div class="row d-flex flex-row justify-content-center">
                                <div class="col-2">
                                    <img width="100%" src="{{ URL::asset('assets/images/'.$child->item->image) }}" alt="">
                                </div>
                                <div class="col-6">
                                    <h4 class="md-2" >{{$child->item->name}}</h4>
                                    <tr>
                                        <td><label class="fs-6" for="">Seller</label></td>
                                        <td><label class="fs-6" for="">{{$child->item->vendor->name}}</label></td>
                                    </tr>
                                    <h3>Price: &#8377 @if($child->quantity ==1){{$child->item->sprice}} @else {{$child->item->sprice}} X {{$child->quantity}} = &#8377 {{(int)$child->item->sprice * (int)$child->quantity}}@endif</h3>
                                </div>
                                <div class="col-4">
                                    <tr>
                                        <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                         <td><label class="fs-7 fw-bold" for=""> <!--{{$d= date_add($child->created_at,date_interval_create_from_date_string("5 days"))}}--> {{date_format($d,"d-M-y")}} </label></td> 
                                    </tr>
                                    

                                </div>
                            </div>
                            <div class="mt-2 d-flex flex-row align-items-center justify-content-start gap-3">
                                <form action="/addtoqty/{{$child->id}}" method="POST">
                                {{csrf_field()}}
                                <table>
                                  <tr>
                                    <td><label for="">Quantity</label></td>
                                    <td><input name="quantity" type="number" class="form-control" style="width:70px;"  size="1" min="1" max="5" value="{{$child->quantity}}"></td>
                                    <td><button type="submit" class="btn btn-warning">Save</button></td>
                                  </tr>
                                </table>
                                </form>
                                  
                                <a href="/removecart/{{$child->id}}" class="mbtn ms-2 me-2  fs-5 text-decoration-none">REMOVE</a>
                                @if(Session::get('saved'))
                                    <label for="">{{ Session::get('saved') }}</label>
                                  @endif
                            </div>
                           
                        </div>
                        <hr>
                      @endforeach
                    </div>
                    <div class="card-footer shadow">
                        <a href="Checkout" class="btn btn-warning btn-lg ps-5 pe-5 p-3" style="float:right">PLACE ORDER</a>
                    </div>
                </div>
            </div>
            <div class="col col-4">
                <div class="card">
                    <h5 class="card-header">PRICE DETAILS</h5>
                    <div class="card-body me-3 ms-3">
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Price({{$itemcheck}} items)</label></div>
                            <div class="col-6 text-end"><label class=" fs-5" for=""><!-- {{$price=0}} @foreach($corder as $child) {{$price = $price + ( (int)$child->item->sprice * (int)$child->quantity )}} @endforeach--> &#8377 {{$price}}</label></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Discount</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-5" for="">Not applicable</label></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Delivery Charges</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-5" for="">Free</label></div>
                        </div>
                        <hr class="dash">
                        <div class="row">
                            <div class="col-6"><label class="text-start fs-4" for="">Total Payable</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-4" for="">&#8377 {{$price}}</label></div>
                        </div>
                        <hr class="dash">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
