@extends('User/Theme')
@section('usercontent')
<header class="p-3 bg-dark text-white sticky-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/User/Home" class="nav d-flex align-items-center text-decoration-none col-12 col-lg-auto mb-2 mb-md-0 mb-lg-0 me-lg-5">
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
                {{ $LoggedUserInfo['name'] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="Profile"><i class="bi bi-person-circle"> </i> User Profile</a></li>
                <li><a class="dropdown-item" href="MyOrder"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-heart-fill"> </i> Whishlist</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="Logout"><i class="bi bi-power"> </i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-end">
      <a class="text-decoration-none text-warning fs-5" href=""><i class="bi-cart "></i>Cart<sup><span class="badge bg-danger">0</span></sup></a>
      </div>
    </div>
  </div>
</header>
<nav class="navbar navbar-expand-lg navbar-white bg-white shadow">
  <div class=" me-lg-auto ms-lg-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="main m-2">
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-3 ">
        <div class="d-flex flex-column p-3 text-dark bg-White shadow" style="width: 100%;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img width="20%" src="https://th.bing.com/th/id/OIP.LR1V9zRTqWaBbL9fUdthCQHaHa?pid=ImgDet&rs=1" alt="">
            <span class="fs-4">&nbsp Full Name</span>
          </a>
        </div>
        <div class="d-flex flex-column mt-3 p-3 text-dark bg-White shadow" style="width: 100%;">
          <ul class="list-group">
            <li class="list-group-item" aria-current="true"> 
              <a href="MyOrder" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-5"><i class="bi-wallet2"></i> MY ORDERS</span>
              </a>
            </li>
            <br>
            <li class="list-group-item">
              <label href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-5"><i class="bi-person-circle"></i> ACCOUNT SETTINGS</span> 
              </label>
              <ul class="list-group">
                <li class="list-group-item active"><a class="text-dark text-decoration-none" href="Profile"><span class="fs-6">Profile Information</span></a></li>
                <li class="list-group-item"><a class="text-dark text-decoration-none" href="Addresses"><span class="fs-6">Manage Addresses</span></a></li>
                <li class="list-group-item"><a class="text-dark text-decoration-none" href=""><span class="fs-6">My Whislist</span></a></li>
                <li class="list-group-item"><a class="text-dark text-decoration-none" href=""><span class="fs-6">My Ratings and Reviews</span></a></li>
              </ul>
            </li>
            <br>
            <li class="list-group-item">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-5"><i class="bi-power"></i> LOGOUT</span>
              </a>
            </li>  
          </ul>
        </div>   
      </div>  
      <div class="col-9 p-4 bg-white shadow">
        <h3>Edit Personal Information</h3><br>
        <form action="/editprofile/{{$datacustomer->id}}" class="from" method="post"  enctype="multipart/form-data" novalidate="novalidate">
        {{csrf_field() }}
            <div class="row">
                <div class="col-7">
                    <table class="table table-borderless table-warning">
                        <tr>
                            <td><label for="">Full Name</label></td>
                            <td colspan="2"><input type="text" name="name" class="form-control" value="{{$datauser->name}}"></td>
                        </tr>
                        <tr>
                            <td><label for="">Gender</label></td>
                            <!-- @if($datacustomer->gender == 'Male')
                              {{$a="checked"}}
                              {{$b=""}}
                            @elseif($datacustomer->gender == 'Female')
                              {{$a=""}}
                              {{$b="checked"}}
                            @else
                              {{$a=""}}
                              {{$b=""}}
                            @endif -->
                            <td><div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1" {{$a}}   >
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                  </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" {{$b}} >
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                  </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Email</label></td>
                            <td colspan="2"><input type="text" name="email" class="form-control" value="{{$datacustomer->email}}" placeholder="{{$datacustomer->email}}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input  name="cimage" type="file" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="Profile" class="btn btn-outline-warning col-12">CANCEL</a></td>
                            <td><button class="btn btn-outline-warning col-12 " >SAVE</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>  
</main>