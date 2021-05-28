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
        <h3>Change Password</h3><br>
        <form action="" class="from">
            <div class="row">
                <div class="col-6">
                    <table class="table table-borderless table-warning">
                        <tr>
                            <td><label for="">Old Password</label></td>
                            <td colspan="2"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">New Password</label></td>
                            <td colspan="2"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">Confirm New Password</label></td>
                            <td colspan="2"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="Profile" class="btn btn-outline-warning">CANCEL</a></td>
                            <td><button class="btn btn-outline-warning">SAVE</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>  
</main>