@extends('Theme')
@section('content')
{{View::make('HeaderCart')}}
<section class="section m-3">
<div class="container-fluid ">
    <div class="row m-2 ps-5 pe-5 bg-white">
        <h3 class="mt-2">My Cart</h3>
        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
            <img src="img/CartEmpty.png" alt="">
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <label class="m-2" for="">Your cart is empty.Add items..</label>
            <button class="btn btn-warning">Continue Shopping</button>
        </div>
    </div>
</div>
</section>
@endsection