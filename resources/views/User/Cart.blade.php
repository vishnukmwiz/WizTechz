@extends('User/Theme')
@section('usercontent')
<header class="p-3 bg-dark text-white sticky-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/User" class="nav d-flex align-items-center text-decoration-none col-12 col-lg-auto mb-2 mb-md-0 mb-lg-0 me-lg-5">
        <img class="bi me-1" width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        <label class="navbar-brand nav-link px-1 text-warning" for="logo">Wiz Techz</label>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-auto">
        <div class="input-group" >
          <input type="search" size="50" class="form-control form-control-dark" placeholder="Search for products, brands and more">
          <button class="btn btn-outline-secondary" type="button"><i class="bi-search "></i></button>
        </div>
      </form>
      <div class="navbar navbar-expand-lg col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5">
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="navbar-brand text-warning dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                User
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"> </i> User Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-power"> </i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
                                    <h3>Price: &#8377 {{$child->item->sprice}}</h3>
                                </div>
                                <div class="col-4">
                                    <tr>
                                        <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                         <td><label class="fs-7 fw-bold" for=""> <!--{{$d= date_add($child->created_at,date_interval_create_from_date_string("5 days"))}}--> {{date_format($d,"d-M-y")}} </label></td> 
                                    </tr>
                                    

                                </div>
                            </div>
                            <div class="mt-2 d-flex flex-row justify-content-start gap-3">
                                
                                <input id="qty" onChange="incQty()" type="number" class="form-control" style="width:70px;"  size="1" max="5" value="{{$child->quantity}}">
                                <label for="">Units</label>
                                <a href="" class="mbtn ms-2 me-2  fs-5 text-decoration-none">REMOVE</a>
                            </div>
                        </div>
                        <hr>
                      @endforeach
                    </div>
                    <div class="card-footer shadow">
                        <button class="btn btn-warning btn-lg ps-5 pe-5 p-3" style="float:right">PLACE ORDER</button>
                    </div>
                </div>
            </div>
            <div class="col col-4">
                <div class="card">
                    <h5 class="card-header">PRICE DETAILS</h5>
                    <div class="card-body me-3 ms-3">
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Price</label></div>
                            <div class="col-6 text-end"><label class=" fs-5" for="">Seller</label></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Discount</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-5" for="">Seller</label></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Delivery Charges</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-5" for="">Seller</label></div>
                        </div>
                        <hr class="dash">
                        <div class="row">
                            <div class="col-6"><label class="text-start fs-4" for="">Total Payable</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-4" for="">Seller</label></div>
                        </div>
                        <hr class="dash">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
