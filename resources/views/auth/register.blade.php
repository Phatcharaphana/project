@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form"method="POST" action="{{ route('register') }}">
    @csrf
    <center>
        <img src="{{ asset('admin/images/logo.png') }}">
    </center>
    <span class="login100-form-title p-b-34 p-t-15">
        Register
    </span>

    <div class="wrap-input100 validate-input" data-validate = "Enter name">
        <input class="input100" type="text" name="name" placeholder="name">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Enter username">
        <input class="input100" type="text" name="username" placeholder="Username">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Enter phone">
        <input class="input100" type="text" name="phone" placeholder="phone">
        <span class="focus-input100" data-placeholder="&#xf2d7;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Enter address">
        <input class="input100" type="text" name="address" placeholder="address">
        <span class="focus-input100" data-placeholder="&#xf2c6;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Enter email">
        <input class="input100" type="text" name="email" placeholder="email">
        <span class="focus-input100" data-placeholder="&#xf2da;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password_confirmation">
        <input class="input100" type="password" name="password_confirmation" placeholder="password_confirmation">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Register
        </button>
    </div>

    <div class="text-center p-t-20">
        <a class="txt1" href="{{ url('/')}}">
            go to home
        </a>
    </div>

    <div class="text-center p-t-10">
        <a class="txt1" href="{{ route('login')}}">
            go to login
        </a>
    </div>

    <div class="text-center p-t-10">
        <a class="txt1" href="{{ route('password.request') }}">
            Forgot Password?
        </a>
    </div>
</form>
@endsection