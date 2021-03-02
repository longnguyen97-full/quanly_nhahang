@extends('master')
@section('title', 'Product')
@section('main')

<section class="ftco-section container">
    <h1 class="m-5" align='center'>PRODUCT</h1>
    <div class="row" align="center">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="menu-entry">
                    <img src="{{ $product->image }}" alt="" width="250" height="200">
                    <div class="text text-center pt-4">
                        <h3><a href="#">{{ $product->name }}</a></h3>
                        <p>{{ Str::limit($product->description, 50) }} <a href="{{ route('product') }}">see more</a></p>
                        <p class="price"><span>{{ $product->price}} VNĐ</span></p>
                        <p><a href="{{ url('add-to-cart/'.$product->id_product) }}" class="btn btn-primary btn-outline-primary" role="button">Add to Cart</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@stop
