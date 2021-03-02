@extends('master')
@section('title', 'Cart')
@section('main')
<link rel="stylesheet" href="{{ asset('./user/css/cart.css') }}">

<h1 class="m-5" align='center' style="padding-top: 110px;">
    <span class="title-current">CART</span>&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;
    <span class="title-progress"><a class="a-reset" href="{{ route("checkout") }}">CHECKOUT DETAIL</a></span>&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;
    <span>COMPLETE</span></h1>

    {{-- cart-form --}}
    <div class="container">
        <table class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%">Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $total = 0 ?>

            @if(session('cart'))

                @foreach(session('cart') as $id => $details)

                    <?php $total += $details['price'] * $details['quantity'] ?>

                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="250" height="200" class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity"/>
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}" type="button"><i
                                    class="fas fa-sync-alt"></i></button>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}" type="button"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach

            @else
                <div class="cart-container">
                    <div class="cart-image">
                        <img class="image" src="user/images/empty-cart.svg" alt="" width="250px" height="250px">
                    </div>
                    <div class="cart-message mt-3">
                        <h3>Your shopping cart is empty</h3>
                        <p>Once you have added items to your shopping cart, you can checkout from here</p>
                    </div>
                </div>

            @endif

            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total {{ $total }}</strong></td>
            </tr>
            <tr>
                <td><a href="{{ url('product') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
                <td><a href="{{ route('checkout') }}" class="btn btn-warning"> Next <i class="fa fa-angle-right"></i></a>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

    {{-- SCRIPT--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">

        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@stop
