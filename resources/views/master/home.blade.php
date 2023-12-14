@extends('layouts.master')
@section('content')
<style>
    .bottom {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 24px;
    }
    .responsive-web {
        display: block;
    }
    .responsive-mobile {
        display: none;
    }
        .slick-dots li button {
        background-color: rgb(255, 255, 255); 
        border-radius: 50%; 
        width: 10px;
        height: 10px; 
        transition: background-color 0.3s ease; 
    }

    .slick-dots li.slick-active button {
        background-color: rgb(148, 137, 137); 
    }
    .slick-slide {
        margin-right: 16px;
    }
    .mobile-displayflex {
        width: 259px;
    }
    .ic {
        width: 80px;
        height: 80px;
    }
    .software-content-mobile {
        display: none;
    }
    .slick-next:before {
        display: none;
    }
    .home-marquee-btm {
        border-radius: 35px;
    }
    @media screen and (max-width: 1093px) {
        .bottom {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 24px;
    }
        .responsive-web {
            display: none;
    }
        .responsive-mobile {
            display: block;
    }
        .section1 {
            display: flex;
            gap: 38px;
            align-items: center;
        }
        .section2 {
            display: flex;
            gap: 76px;
            align-items: center;
        }
        .section3 {
            display: flex;
            gap: 76px;
            align-items: center;
        }
        .section4 {
            display: flex;
            gap: 76px;
            align-items: center;
        }
        .section5 {
            display: flex;
            gap: 87px;
            align-items: center;
        }
        .ourservice {
            font-size: 46px;
        }
        .btn-span-getinfo1 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal; /* 285.714% */
        }
        .home-marquee {
            margin-bottom: 88px !important;
        }
        /* .slide-arrow{
        position: absolute;
        top: 50%;
        margin-top: -15px;
        } */

        .marquee-content-experience {
            /* display: flex;
            display: -webkit-flex;
            animation: marquee-animation-experience 150s linear infinite;
            gap: 16px; */
        }
        .marquee-item-experience {
            flex-shrink: 0;
        }

        .marquee-content-mobilenew {
            /* display: flex;
            display: -webkit-flex;
            animation: marquee-animation-mobilenew 150s linear infinite;
            gap: 16px; */
        }
        .marquee-item-mobilenew {
            flex-shrink: 0;
        }

        @keyframes marquee-animation-experience {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
        @-webkit-keyframes marquee-animation-experience {
            from {
                -webkit-transform: translateX(0);
            }
            to {
                -webkit-transform: translateX(-100%);
            }
        }

        @keyframes marquee-animation-mobilenew {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
        @-webkit-keyframes marquee-animation-mobilenew {
            from {
                -webkit-transform: translateX(0);
            }
            to {
                -webkit-transform: translateX(-100%);
            }
        }
        .software-content-mobile {
            display: block;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px !important;
            font-style: normal;
            font-weight: 300;
            line-height: 18px;
        }
        .software-content {
            display: none;
        }
        .mobile-displayflex {
            width: 100%;
        }
    }
    .zh-font-weight {
        font-weight: 500 !important;
    }
    .zh-one-stop-head-w {
        width: 100%;
    }
    .zh-innovation-p-web {
        font-weight: 600;
    }
    
    .zh-text-overlay {
        bottom: 210px;
    }
</style>
    <div class="main-content">
        {{-- web --}}
        <div class="techmain-1">
            <div class="vr">
                <img src="/assets/image/home/vr.svg">
            </div>
            {{-- <div class="vr2">
                <img src="/assets/image/home/vr2.svg">
            </div> --}}
            <div class="techpmain-cont">
                <p class="techp">@lang('public.home 1')</p>
                <br>
                <p class="techp-content">
                    @lang('public.home 2')
                    {{-- is the key to unlocking a sustainable <br>
                    and prosperous <span class="future">future</span>. Through <br>
                    innovation and technological <br>
                    advancements. Technology has <br>
                    ushered in an era of <span class="intell">intelligence</span>, <br>
                    automation, and digitization, <br>
                    propelling the transformation and <br>
                    upgrading of industries. --}}
                </p>
            </div>
        </div>
        {{-- mobile --}}
        <div class="mobile-techmain-1">
            {{-- <div class="vr">
                <img src="/assets/image/home/vr.svg">
            </div> --}}
            <div class="vr2">
                <img src="/assets/image/home/vr2.svg">
            </div>
            <div class="techpmain-cont">
                <p class="techp">@lang('public.home 1')</p>
                <br>
                <p class="techp-content-mobile">
                    @lang('public.home 2')
                </p>
            </div>
        </div>

        <div class="center-service">
            <p class="ourservice">
                @lang('public.home 3')
            </p>

            <img src="/assets/image/home/service.svg" class="service-image">

            <p class="unleash">
                {{-- Unleash <span class="lightning-fast">lightning-fast speed</span> with our optimized services. Say goodbye to <span class="loading-time">loading times</span> and buffering, and embrace seamless connectivity <br>
                for a superior online experience. --}}
                @lang('public.home 4')
            </p>

            <div class="development">
                <div class="dev-row1">
                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <object type="image/svg+xml" data="assets/image/home/software.svg" class="svg-image"></object>
                                    {{-- <img src="assets/image/home/software.svg"> --}}
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        @lang('public.home 5')
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        @lang('public.home 5.1')
                                    </p>
                                    <p class="software-content-mobile">
                                        @lang('public.home 5.1 mobile')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    {{-- <img src="assets/image/home/website.svg"> --}}
                                    <object type="image/svg+xml" data="assets/image/home/website.svg" class="svg-image"></object>
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        @lang('public.home 6')
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        @lang('public.home 6.1')
                                    </p>
                                    <p class="software-content-mobile">
                                        @lang('public.home 6.1 mobile')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <object type="image/svg+xml" data="assets/image/home/mobile.svg" class="svg-image"></object>
                                    {{-- <img src="assets/image/home/mobile.svg"> --}}
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        @lang('public.home 7')
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        @lang('public.home 7.1')
                                    </p>
                                    <p class="software-content-mobile">
                                        @lang('public.home 7.1 mobile')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    {{-- <img src="assets/image/home/possystem.svg"> --}}
                                    <object type="image/svg+xml" data="assets/image/home/possystem.svg" class="svg-image"></object>
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        @lang('public.home 8')
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        @lang('public.home 8.1')
                                    </p>
                                    <p class="software-content-mobile">
                                        @lang('public.home 8.1 mobile')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    {{-- <img src="assets/image/home/expert.svg"> --}}
                                    <object type="image/svg+xml" data="assets/image/home/expert.svg" class="svg-image"></object>
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        @lang('public.home 9')
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        @lang('public.home 9.1')
                                    </p>
                                    <p class="software-content-mobile">
                                        @lang('public.home 9.1 mobile')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    {{-- <img src="assets/image/home/support.svg"> --}}
                                    <object type="image/svg+xml" data="assets/image/home/support.svg" class="svg-image"></object>
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        @lang('public.home 10')
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        @lang('public.home 10.1')
                                    </p>
                                    <p class="software-content-mobile">
                                        @lang('public.home 10.1 mobile')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="center-vision">
            <p class="vision-p">@lang('public.home 11')</p>

            <img src="/assets/image/home/vision.png" style="width: 100%;">

            <div class="mobile-alignment-30px">
                @if(app()->getLocale() == 'zh')
                    <p class="vision-content vision-content-web">
                        @lang('public.home 12')
                    </p>
                    <p class="vision-content-mobile">
                        @lang('public.home 12 mobile')
                    </p>
                @else
                    <p class="vision-content">
                        @lang('public.home 12')
                    </p>
                @endif
                
            </div>
            
        </div>

        <!-- web -->
        <div class="center-spectacularr">
            <p class="spect-p">
                @lang('public.home 13')
            </p>
        </div>
        <div class="center-spectacular">
            {{-- <p class="spect-p">
                @lang('public.home 13')
            </p> --}}
            <div class="spectacular">
                <div class="spec-row1">
                    <div class="spec-col1">
                        <p class="@if(app()->getLocale() == 'zh') zh-font-weight @endif">
                            <span class="exp-color">@lang('public.home 13.1')</span>  
                            @lang('public.home 14')
                        </p>
                    </div>
                    <div class="spec-col2">
                        <div class="pos-content-1">
                            <div style="display: flex;justify-content:center">
                                {{-- <img src="assets/image/home/posimg.svg" class="workcate"> --}}
                                <object type="image/svg+xml" data="assets/image/home/posimg.svg" class="workcate"></object>
                            </div>
                            <div>
                                <p class="poshead">
                                    @lang('public.home 15')
                                </p>
                            </div>
                            <div>
                                <p class="streamhead @if(app()->getLocale() == 'zh') zh-font-weight @endif" style="margin-bottom: 16px;">
                                    @lang('public.home 15.1')
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('possystem') }}" class="explore-link">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="spec-col3">
                        <div class="webapp">
                            <div style="display: flex;justify-content:center">
                                {{-- <img src="assets/image/home/webapp.svg" class="workcate"> --}}
                                <object type="image/svg+xml" data="assets/image/home/webapp.svg" class="workcate"></object>
                            </div>
                            <div>
                                <p class="webapphead">
                                    @lang('public.home 16')
                                </p>
                            </div>
                            <div>
                                <p class="webappcont @if(app()->getLocale() == 'zh') zh-font-weight @endif" style="margin-bottom: 16px;">
                                    @lang('public.home 16.1')
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('webapp') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spec-row2">
                    <div class="spec-col4">
                        <div class="broker">
                            <div style="display: flex;justify-content:center">
                                {{-- <img src="assets/image/home/broker.svg" class="workcate"> --}}
                                <object type="image/svg+xml" data="assets/image/home/broker.svg" class="workcate"></object>
                            </div>
                            <div>
                                <p class="brokerhead">
                                    @lang('public.home 17')
                                </p>
                            </div>
                            <div>
                                <p class="brokercontent @if(app()->getLocale() == 'zh') zh-font-weight @endif" style="margin-bottom: 16px;">
                                    @lang('public.home 17.1')
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('expert') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="spec-col5">
                        <div class="expert-1">
                            <div style="display: flex;justify-content:center">
                                {{-- <img src="assets/image/home/expertimg.svg" class="workcate"> --}}
                                <object type="image/svg+xml" data="assets/image/home/expertimg.svg" class="workcate"></object>
                            </div>
                            <div>
                                <p class="expert1head">
                                    @lang('public.home 18')
                                </p>
                            </div>
                            <div>
                                <p class="expert1content @if(app()->getLocale() == 'zh') zh-font-weight @endif" style="margin-bottom: 16px;">
                                    @lang('public.home 18.1')
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('brokerage') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="spec-col6">
                        <div class="web3">
                            <div style="display: flex;justify-content:center">
                                {{-- <img src="assets/image/home/web3.svg" class="workcate"> --}}
                                <object type="image/svg+xml" data="assets/image/home/web3.svg" class="workcate"></object>
                            </div>
                            <div>
                                <p class="web3head">
                                    @lang('public.home 19')
                                </p>
                            </div>
                            <div>
                                <p class="web3content @if(app()->getLocale() == 'zh') zh-font-weight @endif" style="margin-bottom: 16px;">
                                    @lang('public.home 19.1')
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('web3') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- mobile -->
        <div class="home-marqueee" style="margin-bottom: 38px;">
            <div class="marquee-content-experience">
                <div class="marquee-item-experience">
                    <div class="spec-col1">
                        <p>
                            <span class="exp-color">@lang('public.home 13.1')</span> 
                            @lang('public.home 14')
                        </p>
                    </div>
                </div>
    
                <div class="marquee-item-experience">
                    <div class="spec-col2">
                        <div class="pos-content-1">
                            <div style="display: flex;justify-content:center">
                                <object type="image/svg+xml" data="assets/image/home/posimg.svg" class="workcate"></object>
                            </div>
                            <p class="poshead">
                                @lang('public.home 15')
                            </p>
                            <p class="streamhead" style="margin-bottom: 10px;">
                                @lang('public.home 15.1')
                            </p>
                            {{-- <a href="{{ route('possystem') }}">
                                <img src="assets/image/home/arrow.svg" style="text-align: left">
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                    </a>
                                </button>
                            </a> --}}
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item-experience">
                    <div class="spec-col3">
                        <div class="webapp">
                            <div style="display: flex;justify-content:center">
                              
                                <object type="image/svg+xml" data="assets/image/home/webapp.svg" class="workcate"></object>
                            </div>
                            <p class="poshead">
                                @lang('public.home 16')
                            </p>
                            <p class="webappcont" style="margin-bottom: 10px;">
                                @lang('public.home 16.1')
                            </p>
                            {{-- <a href="{{ route('webapp') }}">
                                <img src="assets/image/home/arrow.svg" style="text-align: left">
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                    </a>
                                </button>
                            </a> --}}
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item-experience">
                    <div class="spec-col4">
                        <div class="broker">
                            <div style="display: flex;justify-content:center">
                               
                                <object type="image/svg+xml" data="assets/image/home/broker.svg" class="workcate"></object>
                            </div>
                            <p class="brokerhead">
                                @lang('public.home 17')
                            </p>
                            <p class="brokercontent" style="margin-bottom: 10px;">
                                @lang('public.home 17.1')
                            </p>
                            {{-- <a href="{{ route('expert') }}">
                                <img src="assets/image/home/arrow.svg" style="text-align: left">
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                    </a>
                                </button>
                            </a> --}}
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item-experience">
                    <div class="spec-col5">
                        <div class="expert-1">
                            <div style="display: flex;justify-content:center">
                               
                                <object type="image/svg+xml" data="assets/image/home/expertimg.svg" class="workcate"></object>
                            </div>
                            <p class="expert1head">
                                @lang('public.home 18')
                            </p>
                            <p class="expert1content" style="margin-bottom: 10px;">
                                @lang('public.home 18.1')
                            </p>
                            {{-- <a href="{{ route('brokerage') }}">
                                <img src="assets/image/home/arrow.svg" style="text-align: left">
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                    </a>
                                </button>
                            </a> --}}
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item-experience">
                    <div class="spec-col6">
                        <div class="web3">
                            <div style="display: flex;justify-content:center">
                               
                                <object type="image/svg+xml" data="assets/image/home/web3.svg" class="workcate"></object>
                            </div>
                            <p class="web3head">
                                @lang('public.home 19')
                            </p>
                            <p class="web3content" style="margin-bottom: 10px;">
                                @lang('public.home 19.1')
                            </p>
                            {{-- <a href="{{ route('web3') }}">
                                <img src="assets/image/home/arrow.svg" style="text-align: left">
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">@lang('public.home 15.2')</span>
                                    </a>
                                </button>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="one-stop">
            
                <p class="one-stop-head @if(app()->getLocale() == 'zh') zh-one-stop-head-w @endif">
                    @lang('public.home 20')
                </p>
            
            
            <div class="ourfeature">
            
                <div style="margin-bottom: 38px">
                    <p class="ourfeature2">@lang('public.home 21')</p>
                    <p class="ourfeature3">@lang('public.home 22')</p>
                </div>
                

                <div class="ourfeature-item">
                    <div>
                        {{-- <img src="assets/image/home/performance.svg" class="ic"> --}}
                        <object type="image/svg+xml" data="assets/image/home/performance.svg" class="ic"></object>
                        
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">@lang('public.home 23')</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">@lang('public.home 23.1')</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('performance') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">@lang('public.home 15.2')</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/reward.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/reward.svg" class="ic"> --}}
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">@lang('public.home 24')</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">@lang('public.home 24.1')</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('reward') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">@lang('public.home 15.2')</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/develop.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/develop.svg" class="ic"> --}}
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">@lang('public.home 25')</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">@lang('public.home 25.1')</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('develop') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">@lang('public.home 15.2')</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/hr.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/hr.svg" class="ic"> --}}
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">@lang('public.home 26')</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">@lang('public.home 26.1')</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('hrmanage') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">@lang('public.home 15.2')</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>'<object type="image/svg+xml" data="assets/image/home/report.svg" class="ic"></object>'
                        {{-- <img src="assets/image/home/report.svg" class="ic"> --}}
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">@lang('public.home 27')</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">@lang('public.home 27.1')</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('report') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">@lang('public.home 15.2')</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="ourfeature-mobile">
            
                <div style="margin-bottom: 38px">
                    <p class="ourfeature2">@lang('public.home 21')</p>
                    <p class="ourfeature3">@lang('public.home 22')</p>
                </div>
                
                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/performance.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/performance.svg" class="ic"> --}}
                    </div>
                    <div class="section1">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">@lang('public.home 23')</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">@lang('public.home 23.1')</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">@lang('public.home 15.2')</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/reward.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/reward.svg" class="ic"> --}}
                    </div>
                    <div class="section2">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">@lang('public.home 24')</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">@lang('public.home 24.1')</p>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">@lang('public.home 15.2')</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/develop.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/develop.svg" class="ic"> --}}
                    </div>
                    <div class="section3">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">@lang('public.home 25')</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">@lang('public.home 25.1')</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">@lang('public.home 15.2')</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/hr.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/hr.svg" class="ic"> --}}
                    </div>
                    <div class="section4">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">@lang('public.home 26')</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">@lang('public.home 26.1')</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">@lang('public.home 15.2')</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <object type="image/svg+xml" data="assets/image/home/report.svg" class="ic"></object>
                        {{-- <img src="assets/image/home/report.svg" class="ic"> --}}
                    </div>
                    <div class="section5">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">@lang('public.home 27')</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">@lang('public.home 27.1')</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">@lang('public.home 15.2')</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="center-innovation">

            <p class="innovation-p">
                @lang('public.home 28')
            </p>
            <p class="innovation-p-web @if(app()->getLocale() == 'zh') zh-innovation-p-web @endif">
                @lang('public.home 28 mobile')
            </p>

            <p class="innovation-content">
                @lang('public.home 29')
            </p>
        </div>
    </div>

    <div class="home-marquee-web" style="margin-bottom: 122px">
        <div class="marquee-content-slick">
            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/logistic.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            @lang('public.home 30')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/logistic1.svg">
                            <div class="btm-cont-text">

                                <p class="logistic-p">
                                    @lang('public.home 30.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 30.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#logistic" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-logis">
                                        <span class="btn-span-getinfo">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/education.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            @lang('public.home 31')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/education2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 31.1') 
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 31.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#education" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-edu">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/fnb.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            @lang('public.home 32')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/fnb1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 32.1') 
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 32.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#food-beverage" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/retail.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            @lang('public.home 33')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/retail2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 33.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 33.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#retail" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #C89E8A">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/wholesale.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            @lang('public.home 34')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 34.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 34.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#wholesale" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #A7A7A7">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/automotive.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            @lang('public.home 35')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 35.1') 
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 35.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#automotive" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #418F9B">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- web --}}
    <div class="home-marquee" style="margin-bottom: 122px">
        <div class="marquee-content-mobilenew">
            <div class="marquee-item-mobilenew">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/1.svg">
                    <div class="text-overlay @if(app()->getLocale() == 'zh') zh-text-overlay @endif">
                        <p class="txtimg-efficient">
                            @lang('public.home 30')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/logistic1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 30.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 30.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#logistic" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-logis">
                                        <span class="btn-span-getinfo">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item-mobilenew">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/2.svg">
                    <div class="text-overlay @if(app()->getLocale() == 'zh') zh-text-overlay @endif">
                        <p class="txtimg-efficient">
                            @lang('public.home 31')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/education2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 31.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 31.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#education" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-edu">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item-mobilenew">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/3.svg">
                    <div class="text-overlay @if(app()->getLocale() == 'zh') zh-text-overlay @endif">
                        <p class="txtimg-efficient">
                            @lang('public.home 32')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/fnb1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 32.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 32.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#food-beverage" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item-mobilenew">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/4.svg">
                    <div class="text-overlay @if(app()->getLocale() == 'zh') zh-text-overlay @endif">
                        <p class="txtimg-efficient">
                            @lang('public.home 33')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            {{-- <object type="image/svg+xml" data="/assets/image/homemarquee/retail2.svg" class="home-marquee-btm-icon"></object> --}}
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/retail2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 33.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 33.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#retail" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #C89E8A">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item-mobilenew">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/5.svg">
                    <div class="text-overlay @if(app()->getLocale() == 'zh') zh-text-overlay @endif">
                        <p class="txtimg-efficient">
                            @lang('public.home 34')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            {{-- <object type="image/svg+xml" data="/assets/image/homemarquee/wholesale2.svg" class="home-marquee-btm-icon"></object> --}}
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 34.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 34.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#wholesale" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #A7A7A7">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item-mobilenew">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/6.svg">
                    <div class="text-overlay @if(app()->getLocale() == 'zh') zh-text-overlay @endif">
                        <p class="txtimg-efficient">
                            @lang('public.home 35')
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/automotive2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    @lang('public.home 35.1')
                                </p>
                                <p class="logistic-p-cont">
                                    @lang('public.home 35.2')
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}#automotive" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #418F9B">
                                        <span class="btn-span-getinfo1">@lang('public.home 15.2')</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection