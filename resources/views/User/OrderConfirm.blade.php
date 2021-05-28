@extends('Theme')
@section('content')
{{View::make('HeaderCart')}}
<section class="section m-5">
<div class="container-fluid ">
    <div class="row m-2 ps-5 pe-5 bg-white">
        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
            <img class="me-0 m-5 " width="300px" height="300px" src="img/verified.svg" alt="">
        </div>
        <div class="col-5 d-flex flex-column justify-content-center align-items-center">
            <h3>Your order is placed successfully!</h3>
            <div class="row">
                <button class="btn btn-outline-warning mt-3">View Your Orders</button>
                <button class="btn btn-warning mt-3">Back to Home</button>
            </div>
        </div>
    </div>
</div>
</section>
@endsection