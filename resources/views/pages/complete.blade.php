@extends('master')
@section('title', 'Complete')
@section('main')
<link rel="stylesheet" href="{{ asset('./user/css/cart.css') }}">

<h1 class="m-5" align='center' style="padding-top: 110px;">
    <span class="title-progress"><a class="a-reset" href="{{ route("cart") }}">CART</a></span>&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;
    <span class="title-progress"><a class="a-reset" href="{{ route("checkout") }}">CHECKOUT DETAIL</a></span>&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;
    <span class="title-current">COMPLETE</span></h1>

    {{-- complete-form --}}
    <div class="cart-container">
        <div class="cart-image--complete" style="margin-left: 525px">
            <img class="image" src="user/images/success-cart.png" alt="" width="250px" height="250px">
        </div>
        <div class="cart-message mt-3">
            <h3>CONGRATULATIONS!</h3>
            <p>Your order has been placed</p>
            <a href="{{ url('product') }}" class="btn btn-warning mr-3"><i class="fa fa-angle-left"></i> Continue Shopping</a>
            <a href="{{ url('index') }}" class="btn btn-warning"><i class="fa fa-home"></i> Back to home</a>
        </div>
    </div>

@stop
