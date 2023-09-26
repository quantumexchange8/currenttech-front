@extends('layouts.login')
@section('content')
<style>
    @media screen and (max-width: 1280px) {
    .register-create, .register-small {
    margin-left: -60px; 
    }
    .register-input, .btn-signup {
        margin-left: -60px; 
    }
    .form-control {
        max-width: 80%;
    }
    .btn-signin {
        max-width: 80%;
    }
}
</style>
    <div class="center">
        <a href="{{ route('home') }}">
            <img src="/assets/image/logo.svg">
        </a>
        <div style="margin-top: 60px">
            <div>
                <p class="register-create">
                    Create Your Account
                </p>
                <span class="register-small">Sign-up to create an account and stay connect with us.</span>  
            </div>

            <div class="register-input">
                <input type="text" class="form-control" style="margin-bottom: 25px; font-size: 18px; font-family:'Comfortaa', sans-serif;" placeholder="Enter Full Name" onfocus="centerText(this)" onblur="resetText(this)">
                <input type="text" class="form-control" style="margin-bottom: 25px; font-size: 18px; font-family:'Comfortaa', sans-serif;" placeholder="Enter Phone Number" onfocus="centerText(this)" onblur="resetText(this)">
                <input type="text" class="form-control" style="margin-bottom: 25px; font-size: 18px; font-family:'Comfortaa', sans-serif;" placeholder="Enter Email" onfocus="centerText(this)" onblur="resetText(this)">
                <input type="text" class="form-control" style="margin-bottom: 25px; font-size: 18px; font-family:'Comfortaa', sans-serif;" placeholder="Enter Password" onfocus="centerText(this)" onblur="resetText(this)">
                <input type="text" class="form-control" style="margin-bottom: 25px; font-size: 18px; font-family:'Comfortaa', sans-serif;" placeholder="Confirm Password" onfocus="centerText(this)" onblur="resetText(this)">

                <div style="margin-top: 30px;">
                    <input type="checkbox" class="checkbox-control">
                    <span style="color: #DDD; font-family: 'Comfortaa', sans-serif; margin-left: 12px;">I agree with Privacy Policy</span>
                </div>

                <div>
                    <button class="btn-signin">
                        <span style="color: #DDD; font-size: 20px;text-align: center; font-family: Comfortaa;">
                            Sign Up
                        </span>
                    </button>
                </div>

                <div style="display: flex; justify-content:center; margin-top: 50px">
                    <p style="color: #DDD; font-family: Comfortaa; font-size: 16px;">
                        Already have an account?  
                        <a href="{{ route('login') }}" class="explore-link-custcolor" style="margin-left: 7px">
                            Sign In
                        </a>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        function centerText(input) {
            input.style.textAlign = 'center'; 
            input.setAttribute('data-placeholder', input.placeholder);
            input.placeholder = ''; 
        }
    
        function resetText(input) {
            input.style.textAlign = ''; 
            const dataPlaceholder = input.getAttribute('data-placeholder');
            if (dataPlaceholder !== null) {
                input.placeholder = dataPlaceholder; 
            }
        }
    </script>
@endsection