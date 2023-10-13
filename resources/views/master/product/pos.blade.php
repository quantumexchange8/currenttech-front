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
    

    @media screen and (max-width: 575px) {
        .ignite-p1 {
            font-size: 20px;
            width: 100%;
            margin-left: -40px;
        }
        .streamline-p {
            width: 100%;
            font-size: 16px;
            text-align: left;
            margin-left: -40px;
        }
        .pos-row6 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 40px;
            display: none;
        }
        .pos-row6 p {
            width: 90%;
            height: auto;
            margin-left: 80px;
            margin-right: 110px;
        }
        .pos-row6 p {
            width: 90%;
            height: auto;
            margin-left: 80px;
            margin-right: 110px;
        }
        .pos-row7 .simplify-p {
            font-size: 20px;
            line-height: 23px;
            font-weight: 500;
            width: 100%;
            margin-left: -40px;
            /* margin-bottom: 50px; */
        }
        .pos-row7 .simplify-p2 {
            font-size: 14px;
            line-height: 18px;
            font-weight: 400;
            width: 100%;
            margin-left: -40px;
            /* margin-bottom: 50px; */
        }
        .pos-row9 img{
            width: 340px;
        }
        .pos-p1 {
            font-size: 48px;
            font-weight: 500;
            line-height: 14px;
        }
    }
    @media screen and (max-width: 1280px) {
        .pos-row1 {
            width: 100%;
            height: auto;
            margin-top: -90px;
            margin-bottom: -50px;
        }
        .pos-row1 p {
            width: 100%;
            height: auto;
            font-size: 20px;
            font-weight: 500;
            text-align: center;
            line-height: 23.87px;
        }
        .order-p {
            width: 100%;
            height: auto;
            font-size: 20px;
            font-weight: 500;
            text-align: center;
            line-height: 23.87px;
        }
        .pos-row4 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 85px;
        }
        .pos-row4 p {
            margin-top: 100px;
            width: 100%;
            height: auto;
            text-align: left
        }
        .ignite-p1 {
            font-size: 20px;
            width: 100%;
            /* margin-left: -80px; */
        }
        .streamline-p {
            width: 100%;
            font-size: 16px;
            text-align: left;
            /* margin-left: -80px; */
        }
        .pos-row5 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 85px;
        }
        .pos-row5 p {
            width: 100%;
            height: auto;
        }
        .pos-row6 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 40px;
        }
        .pos-row6 p {
            width: 90%;
            height: auto;
            margin-left: 80px;
            margin-right: 110px;
        }
        .pos-row7 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 80px;
            margin-right: 110px;
        }
        .pos-row7 p {
            width: 100%;
            height: auto;
        }
        .pos-row9 {
            width: 100%;
            height: auto;
            margin-top: 0px;
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
        }
        .pos-row10 p {
            width: 100%;
            height: auto;
            margin-top: 100px;
            text-align: left;
            margin-left: 80px;
            margin-right: 80px;
        }
        .pos-row11 {
            display: flex;
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
            font-size: 20px;
        }

        .software-p1 {
            font-size: 32px;
            margin-left: 200px;
        }
        .software-p2 {
            font-size: 24px;
            font-weight: 300;
            line-height: 34px;
            
        }
        .st-icon {
            width:50px;
            margin-top: -100px;
        }
        .simplify-p {
            font-size: 37px;
            margin-bottom: 50px;
        }

        .simplify-p2 {
            font-size: 12px;
            line-height: 18px;
            
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
            margin-left: 423px;
            margin-right: 423px;
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
            margin-left: 550px;
            margin-right: 550px;
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
            width: 90%;
            height: auto;
            margin-left: 100px;
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
        <p class="ignite-p1">
            Ignite Your Restaurant's Potential with Our
            Next-Gen POS System
        </p>
    </div>
    
    <div class="pos-row5">
        <p class="streamline-p">
            Streamline operations, elevate service, and boost profitability with our advanced POS 
            system for restaurants. From order management to inventory control, enhance the dining 
            experience and stay ahead of the competition.
        </p>
    </div>
    

    <div class="pos-row6">
        <div style="display: flex;align-items: center;margin-bottom:136px;justify-content: center;">
            <div style="display: flex; flex-direction:column;margin-left: -30px; height: 147px;">
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
            <div style="display: flex; flex-direction:column;margin-left: -30px; height: 147px;">
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

        <div style="display: flex;align-items: center;justify-content: center;">
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
        </div>
    </div>

    <div class="pos-row7">
        <p class="simplify-p">
            Simplify Operations and<br>
            Supercharge Sales with our POS Solution
        </p>

        <p class="simplify-p2">
            The right POS system can revolutionise the way your big business 
            operates, providing the tools and insights needed to flourish in a 
            dynamic marketplace.
        </p>
    </div>

    <div class="pos-row8">
        <img src="assets/image/product/pos/5.svg">
    </div>
    
    <div class="pos-row9">
        <div style="display: flex;align-items: center;">
            <p class="pos-p1">
                POS 
            </p>
            <span class="cloud-color">Cloud</span>
        </div>
        <img src="assets/image/product/pos/6.svg">
    </div>
    <div class="pos-row10">
        <p class="chooose-p">
            Choosing the right POS system is crucial for any business, as it can greatly impact 
            efficiency, customer satisfaction, and overall operations. <br>
            Find out more inCurrent Tech Industries.
        </p>
    </div>
    

    <div class="pos-row11">
        {{-- <div style="margin-right: 20px;">
            
        </div>
        <div style="margin-left: 20px;">
            <img src="assets/image/product/pos/11.svg" class="adv-image">
        </div> --}}
        <img src="assets/image/product/pos/12.svg" class="std-image">
    </div>
    
</div>

@endsection