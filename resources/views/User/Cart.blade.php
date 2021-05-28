@extends('Theme')
@section('content')
{{View::make('HeaderCart')}}
<section class="section m-4">
    <div class="container-fluid ps-5 pe-5 pd-3 pt-3">
        <div class="row">
            <div class="col col-8">
                <div class="card">
                    <h5 class="card-header">My Cart</h5>
                    <div class="card-body">
                        <div class="unititem">
                            <div class="row d-flex flex-row justify-content-center">
                                <div class="col-2">
                                    <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                                </div>
                                <div class="col-6">
                                    <h4 class="md-2" >Heading</h4>
                                    <tr>
                                        <td><label class="fs-6" for="">Seller</label></td>
                                        <td><label class="fs-6" for="">new</label></td>
                                    </tr>
                                    <h3>Price: &#8377 45346</h3>
                                </div>
                                <div class="col-4">
                                    <tr>
                                        <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                        <td><label class="fs-7" for="">new</label></td>
                                    </tr>
                                </div>
                            </div>
                            <div class="mt-2 d-flex flex-row justify-content-start gap-3">
                                <button style="border-radius: 50%;" class="btn btn-warning"><</button>
                                <input type="text" class="" size="1" disabled value="1">
                                <button style="border-radius: 50%;" class="btn btn-warning">></button>
                                <a href="" class="mbtn ms-2 me-2  fs-5 text-decoration-none">REMOVE</a>
                                <a href="" class="mbtn ms-2 me-2  fs-5 text-decoration-none">SAVE FOR LATER</a>
                            </div>
                        </div>
                        <hr>
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
