@extends('master')
@section('title', 'Sign-up')
@section('main')
<link rel="stylesheet" href="{{ asset('user/css/mystyle.css') }}">

<form class="sign-in--form" method="post" action="{{ route('handle-Signin') }}" enctype="multipart/form-data">@csrf
    <h1 class="title">SIGN-UP</h1>
    <div class="form-group">
      <input type="email" class="form-control p-15" id="Username" name="email" placeholder="Email*">
    </div>
    <div class="form-group mt-5">
      <input type="password" class="form-control p-15" id="Password" name="password" placeholder="Password*">
    </div>
    <div class="form-group mt-5">
      <input type="password" class="form-control p-15" id="Re-Password" name="re-password" placeholder="Re-Password*">
    </div>
    <div class="form-group mt-5">
        <input type="text" class="form-control p-15" id="Fullname" name="fullname" placeholder="Full name">
    </div>
    <div class="form-group mt-5">
        <input type="text" class="form-control p-15" id="Phone" name="phone" placeholder="Phone*">
    </div>
    <div class="form-group mt-5">
        <input type="text" class="form-control p-15" id="Address" name="address" placeholder="Address">
    </div>
    <br>
    <input type="submit" class="btn btn-primary p-3 px-xl-4 py-xl-3 ml-3 mt-3" name="btnSignup" value="Sign up"></input>
    @if($errors->any()) <h6 class="text-danger mt-3 p-15">{{ $errors->first() }}</h6> @endif
</form>

@stop