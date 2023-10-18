@extends('layouts.login')
@section('content')
<style>
        @media screen and (max-width: 1093px) {
        .form, .btn-signin {
            margin-left: -60px; 
        }
        .form-control {
            max-width: 80%;
        }
        .btn-signin {
            max-width: 90%;
        }
        .explore-link {
            margin-right: 110px;
        }
        .account {
            margin-right: 160px;
        }
    }
    </style>
    <div class="center">
        <a href="{{ route('home') }}">
            <img src="/assets/image/logo.svg">
        </a>
        <div style="margin-top: 120px;">
            <p class="signin">Sign In</p>
            <div class="form" style="display: flex; flex-direction: column; margin-top:38px">
                <input type="text" class="form-control" style="margin-bottom: 15px; font-size: 18px; font-family:'SF Pro Text', sans-serif;" placeholder="Enter Email" onfocus="centerText(this)" onblur="resetText(this)">
                <input type="text" class="form-control" style="margin-bottom: 15px; font-size: 18px; font-family:'SF Pro Text', sans-serif;" placeholder="Enter Password" onfocus="centerText(this)" onblur="resetText(this)">

                <div style="margin-top: 30px;">
                    <input type="checkbox" class="checkbox-control">
                    <span style="color: #DDD; font-family: 'SF Pro Text', sans-serif; margin-left: 12px;">Remember Me</span>
                </div>
            </div>
            <button class="btn-signin">
                <span style="color: #DDD; font-size: 20px;text-align: center; font-family: SF Pro Text;">
                    Sign In
                </span>
            </button>
            <div style="display: flex; justify-content: flex-end; color:#DDD; margin-top:26px">
                <a href="#" class="explore-link">
                    <span style="font-family: SF Pro Text;font-size: 16px;">
                        Forget your password?
                    </span>
                </a>
            </div>

            <div class="account" style="display: flex; justify-content:center; margin-top: 96px">
                <p style="color: #DDD;font-family: SF Pro Text;font-size: 16px;">
                    Do not have an account?
                    <a href="{{ route('register') }}" class="explore-link-custcolor" style="margin-left: 7px">
                        Sign Up
                    </a>
                </p>
            </div>
            </div>
            
        </div>
    </div>
    <script>
        function centerText(input) {
            input.style.textAlign = 'center'; // Center-align text when focused
            input.setAttribute('data-placeholder', input.placeholder); // Store the placeholder text
            input.placeholder = ''; // Clear placeholder text
        }
    
        function resetText(input) {
            input.style.textAlign = ''; // Remove center alignment when blurred
            const dataPlaceholder = input.getAttribute('data-placeholder');
            if (dataPlaceholder !== null) {
                input.placeholder = dataPlaceholder; // Restore placeholder text if it exists
            }
        }
    </script>
@endsection
