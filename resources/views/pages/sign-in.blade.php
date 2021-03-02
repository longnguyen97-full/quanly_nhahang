@extends('master')
@section('title', 'Sign-in')
@section('main')
<link rel="stylesheet" href="{{ asset('user/css/mystyle.css') }}">

<form class="sign-in--form" method="post" action="{{ route('handle-Signin') }}" enctype="multipart/form-data">@csrf
    <h1 class="title">SIGN-IN</h1>
    <div class="form-group">
      <input type="email" class="form-control p-15" id="Username" name="email" placeholder="Email">
    </div>
    <div class="form-group mt-5">
      <input type="password" class="form-control p-15" id="Password" name="password" placeholder="Password">
    </div>
    <label for="remember-me" class="text-info mt-3 p-15">
      <span>Remember me</span>
      <span><input id="remember-me" name="remember_me" type="checkbox"></span>
    </label>
    <br>
    <input type="submit" class="btn btn-primary p-3 px-xl-4 py-xl-3 ml-3 mt-3" name="btnSignin" value="Sign in"></input>
    @if($errors->any()) <h6 class="text-danger mt-3 p-15">{{ $errors->first() }}</h6> @endif
</form>

@stop