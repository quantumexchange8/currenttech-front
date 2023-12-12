@extends('layouts.master')
@section('content')

<style>
    .support4-mobile {
        display: none;
    }
    textarea {
        resize: none;
    }
    .custom-file-input {
        display: block;
    }

    .custom-file-label {
        background-color: #fff;
        color: #000;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 5px;
        width: 520px;
        height: 48px;
        display: inline-block; /* Change display to inline-block */
        box-sizing: border-box;
        font-family: SF Pro Text;
        font-size: 22px;
        text-align: left;
    }

    .custom-file-label::before {
        content: "Browse";
        background: #BD00FF;
        font-size: 18px;
        width: 150px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 6px;
        margin-right: 26px;
    }
    @media screen and (min-width: 1100px)
    {
        .line2 {
            margin-bottom: 0px;
            height: 0px;
            width: 100%;
        }
        .support-col2 {
            margin-top: 0px;
            /* width: 50%; */
        }
    }
    @media screen and (max-width: 1093px) {
        .custom-file-upload {
            margin-left: 0px;
            width: 94%;
            margin-bottom: 0px;
            height: 30px;
            align-items: center;
            font-size: 16px;
            padding-left: 25px;
            box-sizing: border-box;
            justify-content: flex-start;
        }
        .btn-purple-mobile {
            width: 134px;
            height: 30px;
            flex-shrink: 0;
            border-radius: 5px;
            border: 1px solid #BD00FF;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center; /* Center horizontally */
        }

        .submit-mobile {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            /* Remove the line-height property to center vertically */
        }
        .support4-mobile {
            display: block;
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 18px;
            margin-bottom: 88px;
        }

        .sup-mobile-form-control {
            width: 92%;
            height: 30px;
            flex-shrink: 0;
            border-radius: 5px;
            background: #FFF;
        }
        .sup-mobile-form-control-text {
            width: 92.5%;
            height: 150px;
            flex-shrink: 0;
            border-radius: 5px;
            background: #FFF;
        }
        .sup-mobile-form-control::placeholder {
            padding-left: 25px;
        }
        .sup-mobile-form-control-text::placeholder {
            padding-left: 25px;
            padding-top: 8px;
            font-family: SF pro text;
        }
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
            width: 100%;
            margin: 0;
        }
        .support2 img {
            margin-bottom: 35px;
            border-radius: 20px;
            width: 100%;
        }
        .support3 {
            width: 100%;
            height: auto;
            margin-bottom: 0px;
        }
        .support-row1 {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .support-row2 {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .support-row3 {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .support-row4 {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .support-row5 {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .support-row6 {
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        .sup-row1-cont {
            width: 100%;
            margin-left: 20px;
            margin-bottom: 0px;
            margin-top: 0px;
        }
        .sup-row1-cont label .support-title{
            color: #FFF;
            display: flex;
            margin-bottom: 0px;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 40px; /* 166.667% */
            margin-left: 15px;
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
            margin-left: 0px !important;
            width: 60%;
            font-size: 12px;
            height: 30px;
            margin-bottom: 0px
        }
        .support44 .large-textarea {
            width: 520px;
            height: 243px;
            border-radius: 10px;
            background: #FFF;
        }
    }

    .custom-radio {
    display: flex;
    position: relative;
    margin-right: 10px;
}

.custom-radio::before {
    content: "";
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: rgb(183, 173, 173);
    cursor: pointer;
}

input[type="checkbox"]:checked + .custom-radio::before {
    background-color: black;
    box-shadow: 0 0 0 2px rgb(215, 211, 211);
    width: 15px;
    height: 15px;
}
.custom-radio {
    display: flex;
    position: relative;
    margin-right: 10px;
}

.custom-radio::before {
    content: "";
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: rgb(183, 173, 173);
    cursor: pointer;
}

.hidden-checkbox {
    display: none; /* Hide the default checkbox */
}

.hidden-checkbox:checked + .custom-radio::before {
    background-color: black;
    box-shadow: 0 0 0 2px rgb(215, 211, 211);
    width: 15px;
    height: 15px;
}

.file-label {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 5px;
  background: #FFF;
  border-radius: 5px;
  cursor: pointer;
  width: 54%;
    font-size: 12px;
    height: 15px;
    margin-bottom: 20px;
}

/* Style the label when the mouse hovers over it */
.file-label:hover {
  background-color: #bbb;
}

/* Hide the default file input */
/* #file {
  display: none;
} */

</style>

<div class="main-content16">
    <div class="support1">
        <p>
            @lang('public.support 1')
        </p>
    </div>

    <div class="support2">
        <img src="assets/image/support.png">
    </div>

    {{-- <div class="line1"></div> --}}
    <div style="width:100%;margin-bottom:68px;">
        <form action="{{ route('resume') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
        
            @if ($errors->has('file'))
                <div class="alert alert-danger">
                    {{ $errors->first('file') }}
                </div>
            @endif
            <div class="support3">
                <div class="support-col1">
                    <div class="line2"></div>
                    <div class="support-row1">
                        <div class="sup-row1-cont">
                            <label>
                                <span class="support-title">@lang('public.support 2')</span>
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="standard_package" value="standard_package" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 3')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="advance_package" value="advance_package" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 4')</span>
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
                                        <span class="support-title">@lang('public.support 5')</span>
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
                                <input type="checkbox" name="website" value="website" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 6')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="appdev" value="appdev" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 7')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="crm" value="crm" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 8')</span>
                            </label>
                            
                        </div>
                    </div>
                    <div class="line2"></div>
                    <div class="support-row3">
                        <div class="sup-row1-cont">
                            <div style="display: flex;justify-content: space-between;width: 430px">
                                <div>
                                    <label>
                                        <span class="support-title">@lang('public.support 9')</span>
                                    </label>
                                </div>
                            </div>
                            <br>
                            <label>
                                <input type="checkbox" name="whitelabel" value="whitelabel" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 10')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="paymentsolution" value="paymentsolution" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 11')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="crmsolu" value="crmsolu" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 12')</span>
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
                                        <span class="support-title">@lang('public.support 13')</span>
                                    </label>
                                </div>
                            </div>
                            <br>
                            <label>
                                <input type="checkbox" name="medusa" value="medusa" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 14')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="mercury" value="mercury" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 15')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="ragnarok" value="ragnarok" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 16')</span>
                            </label>
                        </div>
                    </div>
                    <div class="line2"></div>
                    <div class="support-row5">
                        <div class="sup-row1-cont">
                            <label class="web3hide">
                                {{-- <input type="radio" name="web3" value="web3"> 
                                <span class="custom-radio"  style="opacity: 0;"></span> --}}
                                <span class="support-title">@lang('public.support 17')</span>
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="nft" value="nft" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 18')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="crypto" value="crypto" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 19')</span>
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
                                        <span class="support-title">@lang('public.support 20')</span>
                                    </label>
                                </div>
                            </div>
                            <br>
                            
                            <label>
                                <input type="checkbox" name="itprogram" value="itprogram" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 21')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="uiux" value="uiux" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 22')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="market" value="market" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 23')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="op" value="op" id="customRadioButton" class="hidden-checkbox"> 
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 24')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="sales" value="sales" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 25')</span>
                            </label>
                            <label>
                                <input type="checkbox" name="intern" value="intern" id="customRadioButton" class="hidden-checkbox">
                                <span class="custom-radio"></span>
                                <span>@lang('public.support 26')</span>
                            </label>
                        </div>
                        
                    </div>
                    <div class="line2"></div>
                </div>
            </div>
            {{-- <div class="line1"></div> --}}
            
            {{-- web view --}}
            <div class="support4">
                <div class="left-input">
                    <textarea class="sup-form-control large-textarea" name="message" placeholder="{{ __('public.support 31') }}" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>
                </div>
                <div class="right-input">
                    <input type="text" class="sup-form-control" name="full_name" value="{{ old('full_name') }}" placeholder="{{ __('public.support 27') }}" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
                    <input type="number" class="sup-form-control" name="contact_number" placeholder="{{ __('public.support 28') }}" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
                    <input type="email" class="sup-form-control" name="email" placeholder="{{ __('public.support 29') }}" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
                    {{-- <div class="file-input-container"> --}}
                        <div id="someElement">
                            {{-- <label for="file" class="custom-file-upload">
                                File
                            </label> --}}
                            <input type="file" class="sup-form-control" name="file" id="file" onchange="displayFileName(this)" style="width: 518px;">
                            {{-- <label for="file" class="custom-file-label">Custom Choose File</label> --}}
                        </div>

                        <div style="display: flex;justify-content:end">
                            <button class="btn-sup-submit">
                                <span>@lang('public.support 32')</span>
                            </button>
                        </div>
                        
                    {{-- </div> --}}
                </div>
            </div>
        
            <div class="mobile-alignment-30px">
                <div class="support4-mobile">
                    {{-- <div class="left-input">
                        <textarea class="sup-form-control large-textarea" name="message" placeholder="Message" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>
                    </div>
                    <div class="right-input">
                        <input type="text" class="sup-form-control" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
                        <input type="number" class="sup-form-control" name="contact_number" placeholder="Contact Number" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
                        <input type="email" class="sup-form-control" name="email" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
                        <div id="someElement" style="display: none;">
                            <label for="file" class="custom-file-upload">
                                File
                            </label>
                            <input type="file" class="sup-form-control" name="file" id="file" onchange="displayFileName(this)">
                        </div>
                    </div> --}}
                    <div>
                        <input class="sup-mobile-form-control" placeholder="{{ __('public.support 27') }}">
                    </div>
                    <div>
                        <input class="sup-mobile-form-control" placeholder="{{ __('public.support 28') }}">
                    </div>
                    <div>
                        <input class="sup-mobile-form-control" placeholder="{{ __('public.support 29') }}">
                    </div>
                    <div id="someElement2">
                        {{-- <label for="file" class="custom-file-upload">
                            File
                        </label> --}}
                        <input type="file" class="sup-mobile-form-control" name="file" id="file" onchange="displayFileName(this)" style="width: 94%;">
                    </div>
                    <div>
                        <textarea class="sup-mobile-form-control-text" placeholder="{{ __('public.support 31') }}">
            
                        </textarea>
                    </div>
                    <div style="display: flex;
                    justify-content: flex-end;
                    width: 94.5%;
                ">
                        <button class="btn-purple-mobile">
                            <span class="submit-mobile">@lang('public.support 32')</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
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