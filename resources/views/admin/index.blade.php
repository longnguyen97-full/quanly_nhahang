<link rel="stylesheet" href="{{asset('admin-theme/css/mystyle.css')}}">
@extends('admin/master')
@section('title', 'Dashboard')
@section('main')

    <div class="container cover">
        <div class="row">
            <div class="col-4 vertical-line">
                <div class="header">MONTHLY OVERVIEW</div>
            </div>
            <div class="col-8">
                <div class="header">CURRENT ORDER</div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 vertical-line">
                <div class="row space-top-bottom">
                    <div class="col-2">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="col-10">
                        <h6>Revenue</h6>
                        <p>0đ</p>
                    </div>
                </div>
                <div class="row space-top-bottom">
                    <div class="col-2">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="col-10">
                        <h6>Order</h6>
                        <p>0</p>
                    </div>
                </div>
                <div class="row space-top-bottom">
                    <div class="col-2">
                        <i class="fas fa-user overview-user"></i>
                    </div>
                    <div class="col-10">
                        <h6>Customer</h6>
                        <p>0</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <div class="cover-order">
                            <i class="fas fa-clipboard-check"></i>
                            <div>
                                Orders Awaiting Approval <br> <span style="color: #0d4982">{{ $pendings }}</span>
                            </div>
                        </div>
                        <div class="cover-order">
                            <i class="far fa-check-circle"></i>
                            <div>
                                Accomplished <br> <span style="color: #0d4982">{{ $accomplishes }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="cover-order">
                            <i class="fas fa-shipping-fast"></i>
                            <div>
                                Orders Awaiting Shipping <br> <span style="color: #0d4982">{{ $shippings }}</span>
                            </div>
                        </div>
                        <div class="cover-order">
                            <i class="fas fa-ban"></i>
                            <div>
                                Cancel <br> <span style="color: #0d4982">{{ $cancels }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6 cover article">
            <div class="row header article-child">THE LATEST POSTS</div>
            <div class="row space-top-bottom article-item">
                <div class="col-8">Công ty abc..adhjasdghjasghdkjhasd.</div>
                <span class="shape"><div class="col-2">18:58</div></span>
                <div class="col-2">1/12/2020</div>
            </div>
            <div class="row space-top-bottom article-item">
                <div class="col-8">Công ty abc..adhjasdghjasghdkjhasd.</div>
                <span class="shape"><div class="col-2">18:58</div></span>
                <div class="col-2">1/12/2020</div>
            </div>
            <div class="row space-top-bottom article-item">
                <div class="col-8">Công ty abc..adhjasdghjasghdkjhasd.</div>
                <span class="shape"><div class="col-2">18:58</div></span>
                <div class="col-2">1/12/2020</div>
            </div>
        </div>
        <div class="col-3 pull-right cover ml-3">
            <div class="row header article-child">CALENDAR</div>
        </div>
    </div>

@stop
