@extends('User/Theme')
@section('usercontent')
{{View::make('User/HeaderUser')}}
{{View::make('User/NavigationNoImage')}}
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
            <li class="list-group-item active" aria-current="true"> 
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
                <li class="list-group-item"><a class="text-dark text-decoration-none" href="Profile"><span class="fs-6">Profile Information</span></a></li>
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
      <div class="col-9 ">
        <div class="container-fluid unititem bg-white shadow md-3">
          <div class="row d-flex flex-row ">
            <div class="col-2">
                <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
            </div>
            <div class="col-4 mt-4">
              <h5 class="md-2" >Heading</h5>
              <tr>
                <td><label class="fs-7" for="">Seller</label></td>
                <td><label class="fs-7" for="">new</label></td>
              </tr>
            </div>
            <div class="col-2 mt-4">
              <h6>Price: &#8377 45346</h6>
            </div>
            <div class="col-4 mt-4">
              <tr>
                <td><label class="fs-7" for="">Delivery Expected by</label></td>
                <td><label class="fs-7" for="">new</label></td>
              </tr>
            </div>
          </div>
        </div>
        <hr width="0" >
        <div class="container-fluid unititem bg-white shadow md-3">
          <div class="row d-flex flex-row ">
            <div class="col-2">
                <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
            </div>
            <div class="col-4 mt-4">
              <h5 class="md-2" >Heading</h5>
              <tr>
                <td><label class="fs-7" for="">Seller</label></td>
                <td><label class="fs-7" for="">new</label></td>
              </tr>
            </div>
            <div class="col-2 mt-4">
              <h6>Price: &#8377 45346</h6>
            </div>
            <div class="col-4 mt-4">
              <tr>
                <td><label class="fs-7" for="">Delivery Expected by</label></td>
                <td><label class="fs-7" for="">new</label></td>
              </tr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</main>

@endsection