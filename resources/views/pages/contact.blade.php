@extends('master')
@section('title', 'Contact')
@section('main')

    <style>
        .section-body {
            background: #fff;
        }

        input.info {
            outline: none;
            border: none;
            padding: 8px;
            width: 24rem;
        }

        .btn-review {
            border: none;
            outline: none;
            width: 100px;
            height: 40px;
            border-radius: 5px;
            border: solid 2px #a12022;
        }
    </style>

    <section class="ftco-section container">
        <div class="title m-5" align="center">
            <h1>CONTACT</h1>
            <h4>For any enquiries please use the form below</h4>
        </div>
        <div class="form">
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12"><img src="{{asset('./user/images/reservation-683x1024.jpg')}}" alt="" width="250"></div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6 p-3"><input type="text" class="info" placeholder="Name"></div>
                        <div class="col-sm-6 p-3"><input type="text" class="info" placeholder="Email"></div>
                        <div class="col-sm-6 p-3"><input type="text" class="info" placeholder="Phone"></div>
                        <div class="col-sm-6 p-3"><input type="text" class="info" placeholder="Subject"></div>
                        <div class="col-sm-12 p-3" style="text-align: left;">
                            <h6>Your Review</h6>
                            <div>
                                <button class="btn btn-dark btn-review">1</button>
                                <button class="btn btn-dark btn-review">1</button>
                                <button class="btn btn-dark btn-review">1</button>
                            </div>
                        </div>
                        <div class="col-sm-12 p-3" style="text-align: left;">6</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
