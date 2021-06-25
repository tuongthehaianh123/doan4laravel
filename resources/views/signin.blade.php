@extends('layout.site')
@section('main')

<div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('home.Signin')}}" method="post" class="checkout-form">
    <div class="register-login-section spad">
        <div class="container">
         {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                @foreach($errors->all() as  $err)
                 {{$err}}
                @endforeach
                </div>
                @endif
                @if(Session::has('thanhcong'))
                <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                    <div class="register-form">

                        <h2>Register</h2>
                        <form action="#">
                            <div class="group-input">
                                <label for="username">Full Name *</label>
                                <input type="text" name="fullname">
                            </div>
                            <div class="group-input">
                                <label for="username"> Address *</label>
                                <input type="text" name="address">
                            </div>
                            <div class="group-input">
                                <label for="username"> Gender *</label>
                                <input type="text" name="gender">
                            </div>
                            <div class="group-input">
                                <label for="username"> Phone *</label>
                                <input type="text" name="phone">
                            </div>
                            <div class="group-input">
                                <label for="username">Username or email address *</label>
                                <input type="text" name="email">
                            </div>      
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" name="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="password" name="re_password">
                            </div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{route('home.login')}}" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    </form>
    @Stop()