@extends('layouts.login')
@section('content')

    <div class="center">
        <div>
            <img src="/assets/image/logo.svg">
        </div>
        <div style="margin-top: 60px">
            <div>
                <p class="register-create">
                    Create Your Account
                </p>
                <span class="register-small">Sign-up to create an account and stay connect with us.</span>  
            </div>

            <div class="register-input">
                <input type="text" class="form-control" style="margin-bottom: 25px" placeholder="Enter Full Name">

                <input type="text" class="form-control" style="margin-bottom: 25px" placeholder="Enter Phone Number">

                <input type="text" class="form-control" style="margin-bottom: 25px" placeholder="Enter Email">

                <input type="text" class="form-control" style="margin-bottom: 25px" placeholder="Enter Password">

                <input type="text" class="form-control" style="margin-bottom: 25px" placeholder="Confirm Password">

                <div style="margin-top: 30px;">
                    <input type="checkbox" class="checkbox-control">
                    <span style="color: #DDD; font-family: 'Comfortaa', sans-serif;">I agree with Privacy Policy</span>
                </div>

                <div>
                    <button class="btn-signin">
                        <span style="color: #DDD; font-size: 20px;text-align: center; font-family: Comfortaa;">
                            Sign Up
                        </span>
                    </button>
                </div>

                <div style="display: flex; justify-content:center; margin-top: 50px">
                    <p style="color: #DDD;font-family: Comfortaa;font-size: 16px;">
                        Already have an account?
                        <a href="#" class="explore-link-custcolor">
                            Sign Up
                        </a>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
@endsection