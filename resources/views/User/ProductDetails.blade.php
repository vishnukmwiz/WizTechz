@extends('Theme')
@section('content')
{{View::make('Header')}}
{{View::make('NavigationNoImage')}}
<section class="section m-4">
<div class="container-fluid">
    <div class="row gap-2 justify-content-center">
        <div class="col-5  ">
            <div class="row bg-white shadow p-3">
                <div class="col-2 d-flex flex-column">
                    <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                </div>
                <div class="col-10">
                    <img class="me-2 ms-2" width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                    <div class="row">
                            <button class="btn btn-lg btn-outline-warning md-2"><i class="bi-cart-fill"></i> Add to cart</button>
                            <button class="btn btn-lg btn-warning mt-2 md-2"><i class="bi-lightning-charge-fill"></i> Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 p-4 bg-white shadow">
            <div class="row mt-2">
                <nav class="m-0 " style="--bs-breadcrumb-divider: '>'; font-size:80%" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                    <h3 class="md-2" >Heading</h3>
                </nav>
                <h2>Price: &#8377 45346</h2>
            </div> 
            <table class="table">
                <tbody>
                    <form action="" class="form">
                    <tr>
                        <td><label class="fs-5" for="">Picode</label> </td>
                        <td><input class="form-control" type="text" size="6" pattern="[0-9]{6}"></td>
                        <td><button class="btn btn-info">Check</button></td>
                    </tr>
                    </form>
                    <tr>
                        <td><label class="fs-5" for="">Features</label></td>
                        <td>
                            <ul>
                                <li>sdfsdmgjv</li>
                                <li>sdfsdmgjv</li>
                                <li>sdfsdmgjv</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="fs-5" for="">Seller</label></td>
                        <td><label class="fs-5" for="">new</label></td>
                    </tr>
                </tbody>
            </table>
            <div class="card ">
                <h4 class="card-header">Specifications</h4>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <div class="col-6">
                        <table class="table table-borderless ">
                            <tbody >
                                <tr>
                                    <td ><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                                <tr>
                                    <td><label for="">Seller</label></td>
                                    <td><label for="">Seller</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection