@extends('layouts.master')
@section('content')

<style>
    .develop1 {
        text-align: center;
    }
    .develop2 {
        text-align: center;
    }
    .develop3 {
        text-align: center;
    }
    .develop3 img {
        width: 100%;
    }
    .develop4 {
        text-align: center;
    }

    .develop8 {
        text-align: center;
        display: block;
    }
    .develop8-mobile {
        display: none;
    }
    .develop5-new {
        display: none;
    }
    .employ-p1-mobile {
        display: none;
    }
    .employ-p2-mobile {
        display: none;
    }

    @media screen and (max-width: 1093px) {
        .line-develop {
            width: 100%;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 38px;
        }
        .develop1 {
            width: 100%;
            /* margin-top: 100px; */
            display: flex;
            justify-content: center;
        }
        .develop4 {
            display: flex;
            justify-content: center;
        }
        .employ-p1 {
            width: 70%;
            /* margin-left: 100px; */
            font-size: 20px;
            /* margin-bottom: 40px; */
            text-align: center;
            margin-bottom: 38px;
        }
        .employ-p2 {
            width: 100%;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            margin-left: 0px;
        }
        .develop2 {
            width: 100%;
            margin-bottom: 38px !important;
        }
        .develop3 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        /* .develop4 {
            width: 100%;
        } */
        .develop4 p {
            width: 70%;
            margin-bottom: 38px;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
        }
        .develop5 {
            display: none;
        }
        .develop6 {
            display: none;
        }
        .develop7 {
            display: none;
        }
        .develop5-new {
            width: 100%;
            display: block;
            margin-bottom: 68px;
        }
        .effec-mobile {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: right;
            margin-right: 18px; 
        }
        .effec-mobile-left {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: left;
            margin-left: 18px; 
        }
        .effec-mobile-purple {
            color: #BD00FF;
            text-align: right;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: 14px; /* 100% */
        }
        .develop8 {
            width: 100%;
            display: none;
        }
        .develop8-mobile {
            display: block;
        }
        .develop8 p{
            width: 100%;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: center;
        }

        .develop8-mobile p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            width: 98%;
            text-align: center;
            margin-bottom: 68px;
        }
        .develop6 {
            width: 100%;
        }
        .develop7 {
            width: 100%;
        }
        .effective-container {
            width: 100%;
            height: 390px;
        }
        .effective {
            width: 100%;
            height: 191px;
        }
        .effective-container img {
            width: 214px;
            height: 191px;
        }
        .effective .exp-color {
            font-size: 14px;
        }

        .effective-container-new {
            width: 100%;
            height: 191.395px;
            flex-shrink: 0;
            border-radius: 10px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(214, 214, 214, 0.24) 100%);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .career {
            margin-top: -180px;
            width: 100%;
            height: 191px;
        }
        .career img{
            width: 214px;
            height: auto;
        }
        .ongoing {
            width: 100%;
            height: 451px;
        }
        .ongoing img{
            width: 577px;
            height: auto;
        }
        .ongoing p {
            margin-right: 4px;
            font-size: 20px;
            width: 300px;
        }
        .effective p span {
            font-size: 14px;
            width: 100%;
        }
        .effective p {
            font-size: 12px;
            margin-left: 15px;
            width: 345px;
            width: 40%;
            line-height: 15px;
        }
        .career .exp-color {
            font-size: 14px;
            width: 100%;
            line-height: 14px;
        }
        .career p {
            font-size: 12px;
            /* margin-left: 35px; */
            width: 345px;
            width: 40%;
            line-height: 15px;
        }
        .career p span {
            font-size: 14px;
            width: 100%;
        }
        .rew10 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            margin-bottom: 88px;
            gap: 43px;
        }

        .perform-col {
            width: 25%; 
            margin-bottom: 20px; 
            margin-bottom: 20px; 
        }
        .perform-col object {
            width: 50px;
            height: 50px;
        }
        .perform-pbig {
            font-size: 32px;
        }
        .perform-psmall {
            font-size: 10px;
        }
        .employ-p1-mobile {
            display: block;
        }
        .employ-p1-web {
            display: none;
        }
        .employ-p2-mobile {
            display: block;
        }
        .employ-p2-web {
            display: none;
        }
        .zh-develop4 {
            width: 100%;
        }
    }
    @media screen and (min-width: 1800px) {
        .develop1 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .develop2 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .develop3 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .develop4 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
    }
    .zh-employ-p2 {
        width: 100% !important;
    }
</style>

<div class="main-content11" style="margin-top: 160px">
    <div class="develop1">
        @if(app()->getLocale() == 'zh')
            <p class="employ-p1 employ-p1-web">
                @lang('public.develop 1')
            </p>
            <p class="employ-p1 employ-p1-mobile">
                @lang('public.develop 1 mobile')
            </p>
        @else
            <p class="employ-p1">
                @lang('public.develop 1')
            </p>
        @endif
        
    </div>

    <div class="mobile-alignment-30px">
        <div class="develop2" style="margin-bottom: 88px;">
            @if(app()->getLocale() == 'zh')
                <p class="employ-p2 employ-p2-web @if(app()->getLocale() == 'zh') zh-employ-p2 @endif">
                    @lang('public.develop 2')
                </p>
                <p class="employ-p2 employ-p2-mobile @if(app()->getLocale() == 'zh') zh-employ-p2 @endif">
                    @lang('public.develop 2 mobile')
                </p>
            @else
                <p class="employ-p2">
                    @lang('public.develop 2')
                </p>
            @endif
            
        </div>
    </div>

    <div class="develop3">
        {{-- <object type="image/svg+xml" data="assets/image/feature/develop/1.svg"></object> --}}
        <img src="assets/image/feature/develop/1.svg">
    </div>

    
        <div class="line-develop"></div>
    

    <div class="develop4 @if(app()->getLocale() == 'zh') zh-develop4 @endif">
        <p>
            @lang('public.develop 3')
        </p>
    </div>

    <div class="develop5-new">
        <div class="effective-container-new" style="margin-bottom: 38px;">
            {{-- <object type="image/svg+xml" data="assets/image/feature/develop/5.svg" style="margin-top: 1px;"></object> --}}
                <img src="assets/image/feature/develop/5.svg" style="margin-top: 1px;">
            
            <div>
                <p class="effec-mobile">
                    <span class="effec-mobile-purple">@lang('public.develop 4')</span>
                    <br>
                    <br>
                    @lang('public.develop 5')
                </p>
            </div>
        </div>

        <div class="effective-container-new" style="margin-bottom: 38px;">
            <div>
                <p class="effec-mobile-left">
                    <span class="effec-mobile-purple">@lang('public.develop 6')</span>
                    <br>
                    <br>
                    @lang('public.develop 7')
                </p>
            </div>
            {{-- <object type="image/svg+xml" data="assets/image/feature/develop/6.svg"></object> --}}
            <img src="assets/image/feature/develop/6.svg">
            
        </div>

        <div class="effective-container-new">
            {{-- <object type="image/svg+xml" data="assets/image/feature/develop/7.svg"></object> --}}
            <img src="assets/image/feature/develop/7.svg">
            
            <div>
                <p class="effec-mobile">
                    <span class="effec-mobile-purple">@lang('public.develop 8')</span>
                    <br>
                    <br>
                    @lang('public.develop 9')
                </p>
            </div>
        </div>
        
    </div>

    <div class="develop5">
        <div class="effective-container">
            <div class="effective">
                {{-- <object type="image/svg+xml" data="assets/image/feature/develop/2.svg"></object> --}}
                <img src="assets/image/feature/develop/2.svg">
                <p>
                    <span>
                        <span class="exp-color">
                            @lang('public.develop 4')
                        </span>
                    </span>
                    <br>
                    @lang('public.develop 5')
                </p>
            </div>
            
        </div>
    </div>
    

    <div class="develop6">
        <div class="career">
            {{-- <object type="image/svg+xml" data="assets/image/feature/develop/3.svg" style="margin-top: 1px;"></object> --}}
            <img src="assets/image/feature/develop/3.svg">
            <p>
                <span>
                    <span class="exp-color">
                        @lang('public.develop 6')
                    </span>
                </span><br>
                @lang('public.develop 7')
            </p>
        </div>
    </div>

    <div class="develop7">
        <div class="effective-container">
            <div class="effective">
                {{-- <object type="image/svg+xml" data="assets/image/feature/develop/4.svg"></object> --}}
                <img src="assets/image/feature/develop/4.svg">
                <p>
                    <span>
                        <span class="exp-color">
                            @lang('public.develop 8')
                        </span>
                    </span><br>
                    @lang('public.develop 9')
                </p>
            </div>
        </div>
        
    </div>

    <div class="develop8">
        <p>
            @lang('public.develop 10')
        </p>
    </div>

    <div class="mobile-alignment-30px">
        <div class="develop8-mobile">
            <p>
                @lang('public.develop 10 mobile')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew10">
            <div class="perform-col">
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/perform/7.svg"></object>
                    {{-- <img src="assets/image/feature/perform/7.svg"> --}}
                </div>
                
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Increase
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        96%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.develop 11')
                    </p>
                </div>
            </div>
            <div class="perform-col">
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/perform/8.svg"></object>
                    {{-- <img src="assets/image/feature/perform/8.svg"> --}}
                </div>
    
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Better
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        84%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.develop 12')
                    </p>
                </div>
            </div>
            <div class="perform-col">
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/perform/9.svg"></object>
                    {{-- <img src="assets/image/feature/perform/9.svg"> --}}
                </div>
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Gain
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        79%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.develop 13')
                    </p>
                </div>
            </div>
            <div class="perform-col">
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/perform/10.svg"></object>
                    {{-- <img src="assets/image/feature/perform/10.svg"> --}}
                </div>
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Higher
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        88%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.develop 14')
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection