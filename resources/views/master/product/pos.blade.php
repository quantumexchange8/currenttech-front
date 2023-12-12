@extends('layouts.master')
@section('content')
<style>
    .overlay-text {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white; /* Adjust text color */
    }

    .overlay-text .text-wrapper {
        margin-top: 20px;
        width: 245px;
        height: 36px;
        left: -20px;
        font-family: "PingFang TC-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 36px;
        line-height: normal;
        position: absolute;
        top: 20px;
        letter-spacing: 0;
        white-space: nowrap;
}

    .overlay-text .div {
        margin-top: 20px;
        position: absolute;
        width: 335px;
        height: 43px;
        top: 73px;
        left: 30px;
        font-family: "PingFang TC-Light", Helvetica;
        font-weight: 300;
        color: #ffffff;
        font-size: 16px;
        letter-spacing: 0;
        line-height: 20px;
        text-align: left;
    }
    .overlay-text .group-2 {
        margin-top: 20px;
        position: absolute;
        width: 161px;
        height: 18px;
        top: 103px;
        left: 0;
    }

    .overlay-text .star {
        margin-top: 20px;
        position: absolute;
        width: 17px;
        height: 16px;
        top: 0px;
        left: 33px;
    }
    .overlay-text .text-wrapper-2 {
        width: 133px;
        height: 18px;
        left: 25px;
        font-family: "PingFang TC-Light", Helvetica;
        font-weight: 300;
        color: #bbbbbb;
        font-size: 16px;
        line-height: 25px;
        position: absolute;
        top: 17px;
        letter-spacing: 0;
        white-space: nowrap;
        }
    .overlay-text .sq {
        margin-left: -151px;
        margin-top: 416px;
        /* position: absolute; */
        width: 326px;
        /* height: 16px; */
        /* top: 0;
        left: 0; */
    }
    .overlay-text .sq2 {
        margin-left: -7px;
        margin-top: 346px;
        /* position: absolute; */
        width: 445px;
        /* height: 16px; */
        /* top: 0;
        left: 0; */
    }
    .pos-row1 {
        text-align: center;
    }

    .pos-row2 {
        text-align: center;
    }
    .pos-row3 img {
        width: 100%;
        height: auto;
    }

    .pos-row4 {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .pos-row5 {
        text-align: center;
        margin-bottom: 100px;
        display: flex;
        align-items: center;
    }

    .pos-row6 {
        text-align: left;
        margin-bottom: 168px;
        display: flex; 
        flex-direction:column;
        width: 100%;
    }

    .pos-row7 {
        width: 100%;
    }

    .pos-row8 {
        margin-bottom: 168px;
        width: 100%;
    }

    .pos-row8 img {
        width: 100%;
        max-width: 100%;
        height: auto;
    }

    .pos-row9 {
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        margin-bottom: 68px;
    }
    .pos-row9 img {
        /* width: 100%;
        max-width: 100%;
        height: auto; */
        width: 566px; 
        height: 536px;
    }

    .pos-row10 {
        text-align: center;
        margin-bottom: 128px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pos-row11 {
        margin-bottom: 100px;
        display: flex;
        justify-content: center;
    }

    .std-image {
        width: 100%;
        height: auto;
        max-width: 100%;
    }

    .adv-image {
        width: 100%;
        height: auto;
        max-width: 100%;
    }

    .st-icon {
        width:146px;
    }
    
    .pos-row6-mobile {
        display: none;
    }

    .pos-word {
        display: flex;
        align-items: center;
    }

    .pos-word-mobile {
        display: none;
    }

    .pos-row11-mobile {
        display: none;
    }
    .web-flex {
        display: flex;
        justify-content: center;
    }
    .simplify-p-mobile {
        display: none;
    }
    @media screen and (max-width: 575px) {
        .ignite-p1 {
            font-size: 20px;
            width: 100%;
        }
        .streamline-p {
            width: 100%;
            font-size: 16px;
            text-align: left;
        }
        .pos-row6 {
            display: none;
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row6 p {
            width: 90%;
            height: auto;
        }
        .pos-row6 p {
            width: 90%;
            height: auto;
        }
        .pos-row7 .simplify-p {
            font-size: 20px;
            line-height: 23px;
            font-weight: 500;
            width: 70%;
            /* margin-bottom: 50px; */
        }
        .pos-row7 .simplify-p2 {
            font-size: 14px;
            line-height: 18px;
            font-weight: 400;
            width: 100%;
            /* margin-bottom: 50px; */
        }
        .pos-row9 img{
            width: 100%;
            height: auto;
        }
        .pos-p1 {
            font-size: 48px;
            font-weight: 500;
            line-height: normal;
        }
        .overlay-text .text-wrapper {
            margin-top: 20px;
            width: 245px;
            height: 36px;
            left: -58px;
            font-family: "PingFang TC-Regular", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 20px;
            line-height: normal;
            position: absolute;
            top: 20px;
            letter-spacing: 0;
            white-space: nowrap;
        }
        .overlay-text .div {
            margin-top: 20px;
            position: absolute;
            width: 335px;
            height: 43px;
            top: 49px;
            left: 25px;
            font-family: "PingFang TC-Light", Helvetica;
            font-weight: 300;
            color: #ffffff;
            font-size: 14px;
            letter-spacing: 0;
            line-height: 20px;
            text-align: left;
        }
        .overlay-text .text-wrapper-2 {
            width: 133px;
            height: 18px;
            left: 8px;
            font-family: "PingFang TC-Light", Helvetica;
            font-weight: 300;
            color: #bbbbbb;
            font-size: 12px;
            line-height: 25px;
            position: absolute;
            top: -14px;
            letter-spacing: 0;
            white-space: nowrap;
        }
        .overlay-text .star {
            margin-top: 20px;
            position: absolute;
            width: 17px;
            height: 16px;
            top: -30px;
            left: 25px;
        }
    }
    @media screen and (max-width: 1093px) {
        .pos-row6-mobile {
            display: block
        }
        .pos-row1 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }
        .pos-row1 p {
            width: 80%;
            height: auto;
            font-size: 20px;
            font-weight: 500;
            text-align: center;
            line-height: 23.87px;
            margin-bottom: 38px;
            
        }
        .order-p {
            width: 100%;
            height: auto;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            margin-bottom: 18px;
        }
        .pos-row4 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row4 p {
            margin-top: 38px;
            width: 90%;
            height: auto;
            text-align: left;
            color: #FFF;

            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: 24px; /* 120% */
            margin-bottom: 26.32px;
        }
        .ignite-p1 {
            font-size: 20px;
            width: 100%;
            /* margin-left: -80px; */
        }
        .ignite-p1-web {
            display: none;
        }
        .ignite-p1-mobile {
            display: block;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 32px;
            font-style: normal;
            font-weight: 500;
            line-height: 38.19px;
            width: 660px;
            height: 72px;
            margin: 0;
        }

        .streamline-p {
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: left;
            margin: 0;

            /* margin-left: -80px; */
        }
        .pos-row5 {
            width: 100%;
            height: auto;
            margin-bottom: 67px;
        }
        .pos-row5 p {
            width: 100%;
            height: auto;
        }
        .pos-row6 {
            width: 100%;
            height: auto;
            display: none;
        }
        .pos-row6 p {
            width: 90%;
            height: auto;
        }
        .pos-row7 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row7 p {
            width: 100%;
            height: auto;
        }

        .pos-row8 {
            margin-bottom: 88px;
        }

        .pos-row9 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-bottom: 81px;
        }
        .pos-row9 img {
            /* width: 100%;
            max-width: 100%;
            height: auto; */
        }
        .pos-row10 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-bottom: 38px;
        }
        .pos-row10 p {
            width: 100%;
            height: auto;
            text-align: left;
        }
        .pos-row11 {
            display: none;
            flex-direction: column; 
            align-items: center;
        }

        .pos-row11 div {
            margin: 10px 0; 
            text-align: center;
        }
        .pos-row11 img {
            width: 100%;
            height: auto;
            /* max-width: 100%; */
        }
        .std-image {
            /* margin-right: 10px; */
        }

        .adv-image {
            /* margin-left: 10px; */
        }
        .chooose-p {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 18px; /* 128.571% */
            margin: 0;
        }

        .software-p1 {
            font-size: 32px;
        }
        .software-p2 {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: 18px; /* 128.571% */
            
        }
        .st-icon {
            width:50px;
            margin-top: -100px;
        }
        .simplify-p {
            font-size: 37px;
            margin-bottom: 26px;
        }

        .simplify-p2 {
            font-size: 12px;
            line-height: 18px;
            margin: 0;
            margin-bottom: 68px;
        }

        .software-header {
            color: #BD00FF;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin: 0;
        }

        .software-content-mobile {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: 18px; /* 128.571% */
        }

        .pos-word {
            display: none;
            /* align-items: center;
            width: 100%; */
        }

        .pos-word-mobile {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .pos-p1-mobile {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 48px;
            font-style: normal;
            font-weight: 500;
            line-height: 14.929px; /* 31.103% */
            margin: 0;
        }

        .cloud-color-mobile {
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 14.929px; /* 74.647% */
            background: linear-gradient(180deg, #BD00FF 42.19%, #0038FF 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .pos-row11-mobile {
            display: flex;
            width: 100%;
            justify-content: center;
        }

        .zh-width {
            width: 100% !important;
        }
        .simplify-p-web {
            display: none;
        }

        .simplify-p-mobile {
            display: block;
        }
    }

    @media screen and (min-width: 1300px) {
        .pos-row1 {
            /* margin-left: 343px;
            margin-right: 342px; */
        }
        .pos-row2 {
            margin-left: 343px;
            margin-right: 342px;
        }
        .pos-row3 {
            /* margin-left: 355px;
            margin-right: 355px; */
        }
        .pos-row4 {
            /* margin-left: 355px;
            margin-right: 355px; */
        }
        .pos-row5 {
            /* margin-left: 355px;
            margin-right: 355px; */
        }
        .pos-row6 {
            /* margin-left: 355px;
            margin-right: 355px; */
        }
        .pos-row7 {
            /* margin-left: 355px;
            margin-right: 355px; */
        }
        .pos-row9 {
            margin-left: 355px;
            margin-right: 355px;
        }
        .pos-row10 {
            /* margin-left: 355px;
            margin-right: 355px; */
        }
        .pos-row11{
            width: 100%;
            height: auto;
        }
        .pos-row3 img {
            width: 100%;
        }
    }

    @media screen and (max-width: 1600px) {
        .pos-row11{
            width: 100%;
            height: auto;
        }
        .pos-row11 img {
            width: 700px;
            height: auto;
            margin-bottom: 80px;
            /* max-width: 100%; */
        }
    }

    @media screen and (min-width: 1800px) {
        .pos-row1 {
            /* margin-left: 423px;
            margin-right: 423px; */
        }
        .pos-row2 {
            margin-left: 423px;
            margin-right: 423px;
        }
        .pos-row3 {
            /* margin-left: 423px;
            margin-right: 423px; */
        }
        .pos-row4 {
            margin-left: 423px;
            margin-right: 423px;
        }
        .pos-row5 {
            margin-left: 423px;
            margin-right: 423px;
        }
        .pos-row6 {
            /* margin-left: 423px;
            margin-right: 423px; */
        }
        .pos-row7 {
            /* margin-left: 423px;
            margin-right: 423px; */
        }
        .pos-row9 {
            margin-left: 423px;
            margin-right: 423px;
        }
        .pos-row10 {
            /* margin-left: 423px;
            margin-right: 423px; */
        }
        /* .pos-row11 {
            margin-left: 423px;
            margin-right: 423px;
        } */
    }
    @media screen and (min-width: 3000px) {
        .pos-row1 {
            /* margin-left: 550px;
            margin-right: 550px; */
        }
        .pos-row2 {
            margin-left: 550px;
            margin-right: 550px;
        }
        .pos-row3 {
            /* margin-left: 550px;
            margin-right: 550px; */
        }
        .pos-row4 {
            margin-left: 550px;
            margin-right: 550px;
        }
        .pos-row5 {
            margin-left: 550px;
            margin-right: 550px;
        }
        .pos-row6 {
            /* margin-left: 550px;
            margin-right: 550px; */
        }
        .pos-row7 {
            /* margin-left: 550px;
            margin-right: 550px; */
        }
        .pos-row9 {
            margin-left: 550px;
            margin-right: 550px;
        }
        .pos-row10 {
            /* margin-left: 550px;
            margin-right: 550px; */
        }
        /* .pos-row11 {
            margin-left: 550px;
            margin-right: 550px;
        } */
    }
    @media screen and (max-width: 1257px) {
        .pos-row3 img{
            width: 100%;
            height: auto;
        }
    }
    @media screen and (max-width: 1728px) {
        .pos-row8 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
    }

    .zh-chooose-p {
        width: 100% !important;
    }
    .ignite-p1-mobile {
        width: 100% !important;
    }
</style>
<div class="main-content" style="margin-top: 160px">
    <div class="pos-row1">
        <p class="tranpos-p">
            @lang('public.pos 1')
        </p>
    </div>
    
    <div class="pos-row2">
        <p class="order-p"> @lang('public.pos 2')</p>
    </div>
    
    <div class="pos-row3">
        <img src="assets/image/product/pos/1.svg">
    </div>
    
    <div class="pos-row4">
        <div class="mobile-alignment-30px">
            @if(app()->getLocale() == 'zh')
                <p class="ignite-p1 ignite-p1-web">
                    @lang('public.pos 3')
                </p>
                <p class="ignite-p1-mobile">
                    @lang('public.pos 3 mobile')
                </p>
            @else
                <p class="ignite-p1">
                    @lang('public.pos 3')
                </p>
            @endif
            
        </div>
    </div>
    
    <div class="pos-row5">
        <div class="mobile-alignment-30px">
            <p class="streamline-p">
                @lang('public.pos 4')
            </p>
        </div>
    </div>
    

    <div class="pos-row6">
        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column">
                <div><p class="software-p1"> @lang('public.pos 5')</p></div>
                <div style="width:760px">
                    <p class="software-p2"> @lang('public.pos 5.1')
                    </p>
                </div>
            </div>
            <div>
                <img src="assets/image/product/pos/2.svg" class="st-icon">
            </div>
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column;">
                <div><p class="software-p1"> @lang('public.pos 6')</p></div>
                <div style="width:760px">
                    <p class="hardware-p2"> @lang('public.pos 7')
                    </p>
                </div>
            </div>
            <img src="assets/image/product/pos/3.svg" class="st-icon">
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column;">
                <div><p class="software-p1"> @lang('public.pos 8')</p></div>
                <div style="width:760px">
                    <p class="hardware-p2">
                        @lang('public.pos 9')
                    </p>
                </div>
            </div>
            <img src="assets/image/product/pos/9.svg" class="st-icon">
        </div>

        {{-- <div style="display: flex;align-items: center;justify-content: center;">
            <div style="display: flex; flex-direction:column;margin-left: -30px; height: 147px;">
                <div><p class="software-p1">Payment</p></div>
                <div style="width:760px">
                    <p class="payment-p2">
                        Our POS system offers secure and versatile payment options, seamless 
                        integration with popular gateways, mobile payment solutions, real-time 
                        tracking, and industry-standard compliance, providing businesses with 
                        a comprehensive solution for streamlined transactions.
                    </p>
                </div>
            </div>
            <img src="assets/image/product/pos/9.svg" class="st-icon">
        </div> --}}
    </div>

    <div class="pos-row6-mobile">
        <div class="mobile-alignment-30px">
            <div style="display: flex;flex-direction:column;margin-bottom:68px">
                <div style="display: flex;align-items:center;gap:18px">
                    <div>
                        <img src="assets/image/product/pos/13.svg">
                    </div>
                    <div>
                        <p class="software-header">
                            @lang('public.pos 5')
                        </p>
                    </div>
                </div>
                <div>
                    <p class="software-content-mobile">
                        @lang('public.pos 5.1')
                    </p>
                </div>
            </div>

            <div style="display: flex;flex-direction:column;margin-bottom:68px">
                <div style="display: flex;align-items:center;gap:18px">
                    <div>
                        <img src="assets/image/product/pos/14.svg">
                    </div>
                    <div>
                        <p class="software-header">
                            @lang('public.pos 6')
                        </p>
                    </div>
                </div>
                <div>
                    <p class="software-content-mobile">
                        @lang('public.pos 7')
                    </p>
                </div>
            </div>

            <div style="display: flex;flex-direction:column;margin-bottom:68px">
                <div style="display: flex;align-items:center;gap:18px">
                    <div>
                        <img src="assets/image/product/pos/15.svg">
                    </div>
                    <div>
                        <p class="software-header">
                            @lang('public.pos 8')
                        </p>
                    </div>
                </div>
                <div>
                    <p class="software-content-mobile">
                        @lang('public.pos 9')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pos-row7">
        <div class="mobile-alignment-30px">
            @if(app()->getLocale() == 'zh')
                <p class="simplify-p simplify-p-web">
                    @lang('public.pos 10')
                </p>

                <p class="simplify-p simplify-p-mobile @if(app()->getLocale() == 'zh') zh-width @endif">
                    @lang('public.pos 10 mobile')
                </p>
            @else
                <p class="simplify-p">
                    @lang('public.pos 10')
                </p>
            @endif
            

            <p class="simplify-p2">
                @lang('public.pos 11')
            </p>
        </div>
        

        
    </div>

    <div class="pos-row8">
        <div class="mobile-alignment-30px">
            <img src="assets/image/product/pos/5.svg">
        </div>
    </div>
    
    <div class="pos-row9">
        
            {{-- web --}}
            <div class="pos-word">
                <p class="pos-p1">
                    POS 
                </p>
                <span class="cloud-color">Cloud</span>

            </div>

            
            {{-- web --}}
    
            {{-- mobile --}}
            <div style="width: 100%;margin-bottom:21px">
                <div class="mobile-alignment-30px">
                    <div class="pos-word-mobile">
                        <p class="pos-p1-mobile">
                            POS 
                        </p>
                        <span class="cloud-color-mobile">Cloud</span>
                    </div>

                    <img src="assets/image/product/pos/6.svg">
                </div>
            </div>
            
            {{-- mobile --}}
        
        
        
        
    </div>
    <div class="pos-row10">
        <div class="mobile-alignment-30px web-flex">
            <p class="chooose-p @if(app()->getLocale() == 'zh') zh-chooose-p @endif">
                @lang('public.pos 12')
            </p>
        </div>
    </div>
    

    <div class="pos-row11">
        <div style="margin-left: 20px; position: relative;">
            <img src="assets/image/product/pos/10.svg" class="adv-image" alt="Image 10">
            <div class="overlay-text">
                <div class="text-wrapper">@lang('public.pos 13')</div>
                <div class="div">@lang('public.pos 13.1')</div>
                <div class="group-2">
                    <div class="text-wrapper-2">@lang('public.pos 13.2')</div>
                    <img class="star" src="assets/image/product/pos/star.svg" />
                </div>
                <img class="sq" src="assets/image/product/pos/19.svg" />
            </div>
        </div>
        
        <div style="margin-left: 20px; position: relative;">
            <img src="assets/image/product/pos/11.svg" class="adv-image">
            <div class="overlay-text">
                <div class="text-wrapper">@lang('public.pos 14')</div>
                <div class="div">@lang('public.pos 14.1')</div>
                <div class="group-2">
                    <div class="text-wrapper-2">@lang('public.pos 14.2')</div>
                    <img class="star" src="assets/image/product/pos/star.svg" />
                </div>
                <img class="sq2" src="assets/image/product/pos/20.svg" />
            </div>
        </div>
        {{-- <img src="assets/image/product/pos/12.svg" class="std-image"> --}}
    </div>

    <div class="pos-row11-mobile">
        <div class="mobile-alignment-30px">
            <div style="display: flex; flex-direction: column; gap: 24px; margin-bottom: 68px; width: 100%;">
                <div style="position: relative; width: 100%;">
                    <img src="assets/image/product/pos/10.svg" style="width: 100%;">
                    <div class="overlay-text">
                        <div class="text-wrapper">@lang('public.pos 13')</div>
                        <div class="div">@lang('public.pos 13.1')</div>
                        <div class="group-2">
                            <div class="text-wrapper-2">@lang('public.pos 13.2')</div>
                            <img class="star" src="assets/image/product/pos/star.svg" />
                        </div>
                    </div>
                </div>
                <img src="assets/image/product/pos/19.svg" style="width: 100%;">
                <div style="position: relative; width: 100%;">
                    <img src="assets/image/product/pos/11.svg" style="width: 100%;">
                    <div class="overlay-text">
                        <div class="text-wrapper">@lang('public.pos 14')</div>
                        <div class="div">@lang('public.pos 14.1')</div>
                        <div class="group-2">
                            <div class="text-wrapper-2">@lang('public.pos 14.2')</div>
                            <img class="star" src="assets/image/product/pos/star.svg" />
                        </div>
                    </div>
                </div>
                <img src="assets/image/product/pos/20.svg" style="width: 100%;">
            </div>            
        </div>
    </div>
    
</div>

@endsection