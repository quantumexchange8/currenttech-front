@extends('layouts.master')
@section('content')
<style>
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
        margin-top: 86px
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
        width:135px;
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
            /* width: 100%;
            height: auto;
            max-width: 100%; */
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
</style>
<div class="main-content" style="margin-top: 160px">
    <div class="pos-row1">
        <p class="tranpos-p">
            Transforming Restaurants with our Dynamic POS System
        </p>
    </div>
    
    <div class="pos-row2">
        <p class="order-p">Order - Serve - Succeed</p>
    </div>
    
    <div class="pos-row3">
        <img src="assets/image/product/pos/1.svg">
    </div>
    
    <div class="pos-row4">
        <div class="mobile-alignment-30px">
            <p class="ignite-p1">
                Ignite Your Restaurant's Potential with Our
                Next-Gen POS System
            </p>
        </div>
    </div>
    
    <div class="pos-row5">
        <div class="mobile-alignment-30px">
            <p class="streamline-p">
                Streamline operations, elevate service, and boost profitability with our advanced POS 
                system for restaurants. From order management to inventory control, enhance the dining 
                experience and stay ahead of the competition.
            </p>
        </div>
    </div>
    

    <div class="pos-row6">
        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column">
                <div><p class="software-p1">Software</p></div>
                <div style="width:760px">
                    <p class="software-p2">Software offers intuitive and customizable features
                        like inventory management, sales analytics, payment processing,
                        and CRM integration, ensuring efficient and secure operations for
                        businesses of all sizes.
                    </p>
                </div>
            </div>
            <div>
                <img src="assets/image/product/pos/2.svg" class="st-icon">
            </div>
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column;">
                <div><p class="software-p1">Hardware</p></div>
                <div style="width:760px">
                    <p class="hardware-p2">Hardware offers durable and reliable components,
                        including touchscreen interface, fast barcode scanning, secure 
                        payment processing, integration capabilities, and easy maintenance
                        for streamlined and efficient operations.
                    </p>
                </div>
            </div>
            <img src="assets/image/product/pos/3.svg" class="st-icon">
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column;">
                <div><p class="software-p1">Payment</p></div>
                <div style="width:760px">
                    <p class="hardware-p2">
                        Our POS system offers secure and versatile payment options, seamless 
                        integration with popular gateways, mobile payment solutions, real-time 
                        tracking, and industry-standard compliance, providing businesses with 
                        a comprehensive solution for streamlined transactions.
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
                            Software
                        </p>
                    </div>
                </div>
                <div>
                    <p class="software-content-mobile">
                        Software offers intuitive and customizable features
                        like inventory management, sales analytics, payment processing,
                        and CRM integration, ensuring efficient and secure operations for
                        businesses of all sizes.
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
                            Hardware
                        </p>
                    </div>
                </div>
                <div>
                    <p class="software-content-mobile">
                        Hardware offers durable and reliable components,
                        including touchscreen interface, fast barcode scanning, secure 
                        payment processing, integration capabilities, and easy maintenance
                        for streamlined and efficient operations.
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
                            Payment
                        </p>
                    </div>
                </div>
                <div>
                    <p class="software-content-mobile">
                        Our POS system offers secure and versatile payment options, seamless 
                        integration with popular gateways, mobile payment solutions, real-time 
                        tracking, and industry-standard compliance, providing businesses with 
                        a comprehensive solution for streamlined transactions.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pos-row7">
        <div class="mobile-alignment-30px">
            <p class="simplify-p">
                Simplify Operations and
                Supercharge Sales with our POS Solution
            </p>

            <p class="simplify-p2">
                The right POS system can revolutionise the way your big business 
                operates, providing the tools and insights needed to flourish in a 
                dynamic marketplace.
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
        <div class="mobile-alignment-30px">
            <p class="chooose-p">
                Choosing the right POS system is crucial for any business, as it can greatly impact 
                efficiency, customer satisfaction, and overall operations.
                Find out more inCurrent Tech Industries.
            </p>
        </div>
    </div>
    

    <div class="pos-row11">
        {{-- <div style="margin-right: 20px;">
            
        </div>
        <div style="margin-left: 20px;">
            <img src="assets/image/product/pos/11.svg" class="adv-image">
        </div> --}}
        <img src="assets/image/product/pos/12.svg" class="std-image">
    </div>

    <div class="pos-row11-mobile">
        <div class="mobile-alignment-30px">
            <div style="display: flex;flex-direction:column">
                <div style="display: flex;flex-direction:column;gap:24px;margin-bottom:68px">
                    <div>
                        <img src="assets/image/product/pos/16.svg">
                    </div>
                    <div>
                        <img src="assets/image/product/pos/17.svg">
                    </div>
                </div>
                <div style="margin-bottom: 88px">
                    <img src="assets/image/product/pos/18.svg">
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection