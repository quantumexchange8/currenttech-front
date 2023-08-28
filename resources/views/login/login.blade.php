@extends('layouts.login')
@section('content')

    <div class="center">
        <div>
            <img src="/assets/image/logo.svg">
        </div>
        <div style="margin-top: 120px;">
            <p class="signin">Sign In</p>
            <div style="display: flex; flex-direction: column; margin-top:38px">
                <input type="text" class="form-control" style="margin-bottom: 15px" placeholder="Enter Email">
                <input type="text" class="form-control" style="margin-top: 15px" placeholder="Enter Password">

                <div style="margin-top: 30px;">
                    <input type="checkbox" class="checkbox-control">
                    <span style="color: #DDD; font-family: 'Comfortaa', sans-serif;">Remeber Me</span>
                </div>

            <button class="btn-signin">
                <span style="color: #DDD; font-size: 20px;text-align: center; font-family: Comfortaa;">
                    Sign In
                </span>
            </button>
            <div style="display: flex; justify-content: flex-end; color:#DDD; margin-top:26px">
                <a href="#" class="explore-link">
                    <span style="font-family: Comfortaa;font-size: 16px;">
                        Forget your password?
                    </span>
                </a>
            </div>

            <div style="display: flex; justify-content:center; margin-top: 96px">
                <p style="color: #DDD;font-family: Comfortaa;font-size: 16px;">
                    Do not have an account?
                    <a href="#" class="explore-link-custcolor">
                        Sign Up
                    </a>
                </p>
            </div>
            </div>
            
        </div>
    </div>
@endsection
