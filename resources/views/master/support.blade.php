@extends('layouts.master')
@section('content')

<style>
    @media screen and (max-width: 1268px) {
        .support-col1 {
        display: flex;
        flex-direction: column;
        width: 100%;
}
        .main-content16 .line1{
            width: 80%;
            /* height: 1.5px; */
            background: #666666;
            margin-bottom: 38px;
            display: block;
        }
        .main-content16 .line2{
            width: 80%;
            /* height: 1.5px; */
            background: #666666;
            margin-bottom: 38px;
            display: block;
            margin-left: 30px;
        }
        .support1 p {
            /* margin-top: 30px; */
            font-size: 20px;
            line-height: 22px;
            text-align: center;
            width: 70%;
            margin: 0;
            margin-left: 60px;
            margin-bottom: 68px;
            /* margin-bottom: -20px; */
        }
        .support2 img {
            margin-top: -90px;
            margin-bottom: 35px;
            border-radius: 20px;
            width: 100%;
        }
        .support3 {
            width: 100%;
        }
        .support-row1 {
            width: 100%;
        }
        .support-row2 {
            width: 100%;
        }
        .support-row3 {
            width: 100%;
        }
        .support-row4 {
            width: 100%;
        }
        .support-row5 {
            width: 100%;
        }
        .support-row6 {
            width: 100%;
        }
        .sup-row1-cont {
            width: 100%;
            margin-left: 20px;
            /* margin-bottom: 30px; */
        }
        .sup-row1-cont label .support-title{
            color: #FFF;
            display: flex;
            margin-bottom: 20px;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 40px; /* 166.667% */
            margin-left: 39px;
        }
        .sup-row1-cont label span {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 40px; /* 166.667% */
        margin-left: 18px;
    }
        .support4 {
            display: none;
        }
        .support44 {
            display: block;
            /* margin-left: -200px; */
            width: 100%;
            font-size: 12px;
        }
        .sup-form-control {
            display: block;
            margin-left: 40px;
            width: 60%;
            font-size: 12px;
            height: 30px;
            margin-bottom: 0px
        }
        .support44 .large-textarea {
            height: 180px; 
            width: 60%;
            overflow-x: hidden;
        }
    }
</style>

<div class="main-content16">
    <div class="support1">
        <p>
            Contact Us for Inquiries Support, and Collaborations
        </p>
    </div>

    <div class="support2">
        <img src="assets/image/support.png">
    </div>

    {{-- <div class="line1"></div> --}}
    <div class="support3">
        <div class="support-col1">
            <div class="line2"></div>
            <div class="support-row1">
                <div class="sup-row1-cont">
                    <label>
                        {{-- <input type="radio" name="pos" value="pos_system">
                        <span class="custom-radio"></span> --}}
                        <span class="support-title">POS System</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="package" value="standard_package">
                        <span class="custom-radio"></span>
                        <span>Standard Package</span>
                    </label>
                    <label>
                        <input type="radio" name="package" value="advance_package">
                        <span class="custom-radio"></span>
                        <span>Advance Package</span>
                    </label>
                </div>
            </div>
            <div class="line2"></div>
            <div class="support-row2">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 310px;">
                        <div>
                            <label>
                                {{-- <input type="radio" name="web" value="web"> 
                                <span class="custom-radio"></span> --}}
                                <span class="support-title">Web / Application</span>
                            </label>
                        </div>
                        {{-- <div>
                            <label>
                                <input type="radio" name="app" value="app"> 
                                <span class="custom-radio"></span>
                                <span>App</span>
                            </label>
                        </div> --}}
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="website" value="website"> 
                        <span class="custom-radio"></span>
                        <span>Website Development</span>
                    </label>
                    <label>
                        <input type="radio" name="appdev" value="appdev"> 
                        <span class="custom-radio"></span>
                        <span>App Development</span>
                    </label>
                    <label>
                        <input type="radio" name="crm" value="crm">
                        <span class="custom-radio"></span>
                        <span>CRM Development</span>
                    </label>
                </div>
            </div>
            <div class="line2"></div>
            <div class="support-row3">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 430px">
                        <div>
                            <label>
                                {{-- <input type="radio" name="ctrader" value="ctrader">
                                <span class="custom-radio"></span> --}}
                                <span class="support-title">cTrader / Metaquote</span>
                            </label>
                        </div>
                        {{-- <div>
                            <label>
                                <input type="radio" name="mt5" value="mt5"> 
                                <span class="custom-radio"></span>
                                <span>Metatrader 5</span>
                            </label>
                        </div> --}}
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="whitelabel" value="whitelabel">
                        <span class="custom-radio"></span>
                        <span>White Label Solutions</span>
                    </label>
                    <label>
                        <input type="radio" name="appdev" value="appdev"> 
                        <span class="custom-radio"></span>
                        <span>Payment Solutions</span>
                    </label>
                    <label>
                        <input type="radio" name="crmsolu" value="crmsolu"> 
                        <span class="custom-radio"></span>
                        <span>CRM Solutions</span>
                    </label>
                </div>
            </div>
            <div class="line2"></div>
        </div>
        <div class="support-col2">
            <div class="support-row4">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 430px">
                        <div>
                            <label class="web3hide">
                                {{-- <input type="radio" name="web3" value="web3"> 
                                <span class="custom-radio"  style="opacity: 0;"></span> --}}
                                <span class="support-title">Pro Chip / Ultra Chip</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="medusa" value="medusa">
                        <span class="custom-radio"></span>
                        <span>MEDUSA ROBOTECH</span>
                    </label>
                    <label>
                        <input type="radio" name="mercury" value="mercury">
                        <span class="custom-radio"></span>
                        <span>MERCURY ROBOTECH</span>
                    </label>
                    <label>
                        <input type="radio" name="ragnarok" value="ragnarok"> 
                        <span class="custom-radio"></span>
                        <span>RAGNAROK ROBOTECH</span>
                    </label>
                </div>
            </div>
            <div class="line2"></div>
            <div class="support-row5">
                <div class="sup-row1-cont">
                    <label class="web3hide">
                        {{-- <input type="radio" name="web3" value="web3"> 
                        <span class="custom-radio"  style="opacity: 0;"></span> --}}
                        <span class="support-title">WEB 3.0</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="nft" value="nft">
                        <span class="custom-radio"></span>
                        <span>NFT Trading Board</span>
                    </label>
                    <label>
                        <input type="radio" name="crypto" value="crypto"> 
                        <span class="custom-radio"></span>
                        <span>Cryptocurrency Exchange</span>
                    </label>
                </div>
            </div>
            <div class="line2"></div>
            <div class="support-row6">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 430px">
                        <div>
                            <label class="web3hide">
                                {{-- <input type="radio" name="web3" value="web3"> 
                                <span class="custom-radio"  style="opacity: 0;"></span> --}}
                                <span class="support-title">Careers</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="itprogram" value="itprogram"> 
                        <span class="custom-radio"></span>
                        <span>IT Programmer</span>
                    </label>
                    <label>
                        <input type="radio" name="uiux" value="uiux"> 
                        <span class="custom-radio"></span>
                        <span>UI / UX Designer</span>
                    </label>
                    <label>
                        <input type="radio" name="market" value="market">
                        <span class="custom-radio"></span>
                        <span>Marketing Designer</span>
                    </label>
                    <label>
                        <input type="radio" name="op" value="op"> 
                        <span class="custom-radio"></span>
                        <span>Backend Operation</span>
                    </label>
                    <label>
                        <input type="radio" name="sales" value="sales">
                        <span class="custom-radio"></span>
                        <span>Indoor / Outdoor Sales</span>
                    </label>
                    <label>
                        <input type="radio" name="intern" value="intern">
                        <span class="custom-radio"></span>
                        <span>New Intern</span>
                    </label>
                </div>
                
            </div>
            <div class="line2"></div>
        </div>
    </div>
    {{-- <div class="line1"></div> --}}
    <form action="{{ url('contact_mail') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{-- web view --}}
    <div class="support4">
        <div class="left-input">
            <textarea class="sup-form-control large-textarea" name="message" placeholder="Message" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>
        </div>
        <div class="right-input">
            <input type="text" class="sup-form-control" name="name" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
            <input type="text" class="sup-form-control" name="number" placeholder="Contact Number" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
            <input type="email" class="sup-form-control" name="email" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
            {{-- <div class="file-input-container"> --}}
                <label for="file" class="custom-file-upload">
                    File
                </label>
                <input type="file" class="sup-form-control" name="file" id="file" onchange="displayFileName(this)">
            {{-- </div> --}}
        </div>
    </div>
    <button class="btn-sup-submit">
        <span>Submit</span>
    </button>
</form>
@if(session('success'))
<div class="alert alert-success custom-success">
    {{ session('success') }}
</div><br><br>
@endif
    {{-- mobile view --}}
    <div class="support44">
            <input type="text" class="sup-form-control" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"><br>
            <input type="text" class="sup-form-control" placeholder="Contact Number" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"><br>
            <input type="email" class="sup-form-control" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"><br>   
            <textarea class="sup-form-control large-textarea" placeholder="Your Message" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>   
            <button class="btn-sup-submit2">
                <span>Submit</span>
            </button>     
    </div>
    
</div>

{{-- script --}}
<script>
    function clearPlaceholder(element) {
    if (element.placeholder) {
        element.dataset.placeholder = element.placeholder;
        element.placeholder = '';
    }
    }

    function restorePlaceholder(element) {
        if (element.dataset.placeholder) {
            element.placeholder = element.dataset.placeholder;
        }
    }
    function displayFileName(input) {
        const fileName = input.files[0] ? input.files[0].name : 'File';
        const label = input.parentElement.querySelector('.custom-file-upload');
        label.textContent = fileName;
    }

    </script>
@endsection