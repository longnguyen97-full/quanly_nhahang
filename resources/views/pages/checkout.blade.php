@extends('master')
@section('title', 'Checkout')
@section('main')
<link rel="stylesheet" href="{{ asset('./user/css/cart.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<h1 class="m-5" align='center' style="padding-top: 110px;">
    <span class="title-progress"><a class="a-reset" href="{{ route("cart") }}">CART</a></span>&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;
    <span class="title-current">CHECKOUT DETAIL</span>&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;
    <span>COMPLETE</span></h1>

@if(session()->has('member'))
    {{-- checkout-form --}}
    <form action="{{ route('complete') }}" method="post">@csrf
    <div class="container">
        <div class="row m-1">
            <div class="col-7 p-4">
                <h5>YOUR INFORMATION</h5>

                @foreach(session()->get('member_info') as $row)

                <input type="text" name="idCustomer" value="{{ $row->id_customer }}" style="display: none">
                <div class="form-group mt-4">
                    <label for="">Full name</label>
                    <input type="text" name="Fullname" id="" class="form-control" value="{{ $row->fullname }}" readonly>
                </div>
                <div class="form-group mt-4">
                    <label for="">Address</label>
                    <input type="text" name="Address" id="" class="form-control" value="{{ $row->address }}" readonly>
                </div>
                <div class="form-group mt-4">
                    <label for="">Phone</label>
                    <input type="text" name="Phone" id="" class="form-control" value="{{ $row->phone }}" readonly>
                </div>

                @endforeach
                <div class="form-group mt-4">
                    <label for="">Your payment methods</label> &nbsp;
                    @foreach(session()->get('payment_methods') as $payment_method)
                        <i class="{{ $payment_method->payment[0]->payment_icon }}"></i>
                    @endforeach
                    <select class="form-control" name="Payment_Method" id="">
                        @foreach(session()->get('payment_methods') as $payment_method)
                            <option value="{{ $payment_method->payment[0]->id_payment }}" style="color:black">
                                {{ $payment_method->payment[0]->payment_type }} </option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-5">
                <div class="border-color p-4">
                    <h5>YOUR ORDER</h5>

                    <div class="row font-weight-bold">
                        <div class="col-6">PRODUCT</div>
                        <div class="col-6 text-right">SUBTOTAL</div>
                    </div>
                    <hr class="hover-bottom">
                    <?php $total = 0 ?>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <input type="text" name="idProduct" value="{{ $id }}" style="display: none">
                    <input type="text" name="Quantity" value="{{ $details['quantity'] }}" style="display: none">
                    <input type="text" name="Price" value="{{ $details['price'] }}" style="display: none">
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <div class="row">
                        <div class="col-6">
                            {{ $details['name'] }} * {{ $details['quantity'] }}
                        </div>
                        <div class="col-6 text-right">
                            {{ $details['price'] }}
                        </div>
                    </div>
                    @endforeach
                    <hr class="hover-bottom">
                    <div class="row font-weight-bold">
                        <div class="col-6">Shipping fee</div>
                        @if(session()->get('freeships'))
                            @php $freeships = session()->get('freeships') @endphp
                            @if($freeships['giftcode'])
                                <div class="col-6 text-right">{{ $freeships['giftcode'] }}</div>
                            @endif
                        @else 
                            <div class="col-6 text-right">30.000 VNĐ</div>
                        @endif
                    </div>
                    <hr class="hover-bottom">
                    <div class="row form-group">
                        <div class="col">
                            <label class="font-weight-bold" for="">Giftcode / Voucher</label> &nbsp;
                            <select class="form-control form-giftcode" name="Giftcode" id="Giftcode">
                                @foreach(session()->get('giftcodes') as $giftcode)
                                    @if($giftcode->giftcode[0]->giftcode != "FREESHIP")
                                    <option hidden>Select giftcode</option>
                                    <option value="{{ $giftcode->giftcode[0]->id_gcode }}" style="color:black">
                                    {{ $giftcode->giftcode[0]->giftcode }}</option>                                    
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr class="hover-bottom">
                    <div class="row font-weight-bold">
                        <div class="col-6">Discount</div>
                        <div class="col-6 text-right" id="Discount">0</div>
                    </div>
                    <hr class="hover-bottom">
                    <div class="row font-weight-bold">
                        <div class="col-6">Total</div>
                        <div class="col-6 text-right" id="initTotal" style="display:none">{{ $init_total = $total }}</div>
                        <div class="col-6 text-right" id="Total">{{ $total }}</div>
                    </div>
                    <hr class="hover-bottom">
{{-- get data --}}
@foreach(session()->get('giftcodes') as $giftcode)
<input type="text" name="Giftcode_detail" value="{{ $giftcode->giftcode[0]->giftcode }}" style="display: none">
@endforeach
@foreach(session()->get('payment_methods') as $payment_method)
<input type="text" name="Payment_detail" value="{{ $payment_method->payment[0]->payment_type }}" style="display: none">
@endforeach
                    <div class="row font-weight-bold">
                        <div class="col-6"><a href="{{ url('cart') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a></div>
                        <div class="col-6 text-right">
                            <button class="btn btn-warning" type="submit" name="btnOrder">Place <i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            @if($errors->any())<p style="color: red">{{ $errors->first() }}</p>@endif
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    </form>
@else
    <div class="container text-center">
        <h2 class="sign-in" data-toggle="modal" data-target="#form">You has not signed into yet</h2>
    </div>
  
    
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Sign-in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('handle-Signin') }}" method="post" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center pt-0">
                    <input type="submit" class="btn btn-primary" name="btnSignin" value="Sign in"></input>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center pt-0">
                    You haven't account yet? &nbsp; <a href="{{ route('sign-up') }}">Sign up</a>
                </div>
            </form>
            </div>
        </div>
    </div>
@endif

    {{-- SCRIPT--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $( document ).ready(function() {
            $('h2.sign-in').trigger('click');

            $('#Giftcode').change(function() {
                var idGiftcode = $(this).val();
                $.get("ajax/discount/" + idGiftcode, function(data) {
                    $('#Discount').html(data);
                });

                var init_total = $('#initTotal').html();
                $.get("ajax/init_total/" + init_total, function(money) {});

                var total = $('#Total').html();
                $.get("ajax/total/" + total, function(money) {
                    $('#Total').html(money);
                });

            });
        });
    </script>
@stop