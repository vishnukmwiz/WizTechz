@extends('Theme')
@section('content')
{{View::make('HeaderUser')}}
{{View::make('NavigationNoImage')}}
<section class="section m-5">

<div class="container ">
ORDER ID: 12345678987654
    <div class="row bg-white shadow">
        <div class="col-8 p-4">
            <div class="p-5 container bg-white shadow unititem md-3">
                <div class="row ">
                    <div class="col-3">
                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    </div>
                    <div class="col-5 mt-3">
                      <h5 class="md-2" >Heading</h5>
                      <tr>
                        <td><label class="fs-7" for="">Seller</label></td>
                        <td><label class="fs-7" for="">new</label></td>
                      </tr>
                      <br>
                      <tr>
                        <td><label class="fs-7" for="">Price</label></td>
                        <td><label class="fs-7" for="">&#8377 45346</label></td>
                      </tr>
                    </div>
                    <div class=" col-4 mt-3 ">
                      <tr>
                        <td><label class="fs-7" for="">Delivery Expected by</label></td>
                        <td><label class="fs-7" for="">new</label></td>
                      </tr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 p-4">
            <h4>DELIVERY ADDRESS</h4>
            <h5>Full Name </h5>
            <address>
            jsthfgukygfuyjsdgf <br>
            kjyfgkyhfgbjhsbdfjhb <br>
            fsbfugsbujhbshbh <br>
            </address>
            <h5>Phone Number</h5>
            <span>9876543120</span>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-8 p-4  bg-white shadow">
            <h3>Other items in this Order</h3>
            <div class=" container bg-white shadow unititem md-3">
                <div class="row ">
                    <div class="col-3">
                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    </div>
                    <div class="col-5 mt-3">
                        <h5 class="md-2" >Heading</h5>
                        <tr>
                            <td><label class="fs-7" for="">Seller</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                        <br>
                        <tr>
                            <td><label class="fs-7" for="">Price</label></td>
                            <td><label class="fs-7" for="">&#8377 45346</label></td>
                        </tr>
                    </div>
                    <div class=" col-4 mt-3 ">
                        <tr>
                            <td><label class="fs-7" for="">Delivery Expected by</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                    </div>
                </div>
            </div>
            <hr width="0">
            <div class=" container bg-white shadow unititem md-3">
                <div class="row ">
                    <div class="col-3">
                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    </div>
                    <div class="col-5 mt-3">
                        <h5 class="md-2" >Heading</h5>
                        <tr>
                            <td><label class="fs-7" for="">Seller</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                        <br>
                        <tr>
                            <td><label class="fs-7" for="">Price</label></td>
                            <td><label class="fs-7" for="">&#8377 45346</label></td>
                        </tr>
                    </div>
                    <div class=" col-4 mt-3 ">
                        <tr>
                            <td><label class="fs-7" for="">Delivery Expected by</label></td>
                            <td><label class="fs-7" for="">new</label></td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
</section>

@endsection
