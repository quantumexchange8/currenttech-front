@extends('layouts.master')
@section('content')
<style>
    .pos-row1 {
        text-align: center;
        margin-bottom: 40px;
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
        margin-bottom: 170px;
        display: flex;
        align-items: center;
    }

    .pos-row6 {
        text-align: left;
        margin-bottom: 100px;
        display: flex; 
        flex-direction:column
    }

    .pos-row7 {
        width: 100%;
    }

    .pos-row8 {
        margin-bottom: 120px;
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
        margin-top: 36px;
        margin-bottom: 66px;
        width: 100%;
        display: flex;
        align-items: center;
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
    

    @media screen and (max-width: 1280px) {
        .pos-row1 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row1 p {
            width: 100%;
            height: auto;
        }
        .pos-row4 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row4 p {
            width: 100%;
            height: auto;
        }
        .ignite-p1 {
            font-size: 26px;
        }
        .streamline-p {
            font-size: 10px;
        }
        .pos-row5 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row5 p {
            width: 100%;
            height: auto;
        }
        .pos-row6 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .pos-row6 p {
            width: 100%;
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
            margin-top: 0px;
        }
        .pos-row11{
            width: 100%;
            height: auto;
        }
        .pos-row11 img {
            width: 100%;
            height: auto;
            max-width: 100%;
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
        }
        .software-p2 {
            font-size: 20px;
        }
        .st-icon {
            width:146px;
        }
        .simplify-p {
            font-size: 37px;
            margin-bottom: 50px;
        }

        .simplify-p2 {
            font-size: 10px;
            
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
            margin-left: 355px;
            margin-right: 355px;
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
            width: 100%;
            height: auto;
            max-width: 100%;
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
            margin-left: 423px;
            margin-right: 423px;
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
            margin-left: 550px;
            margin-right: 550px;
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
<div class="main-content" style="margin-top: 170px">
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
        <div style="display: flex;align-items: center;margin-bottom:136px">
            <div style="display: flex; flex-direction:column;margin-left: -30px; width: 774px; height: 147px;">
                <div><p class="software-p1">Software</p></div>
                <div>
                    <p class="software-p2">Software offers intuitive and customizable features<br>
                        like inventory management, sales analytics, payment processing,<br>
                        and CRM integration, ensuring efficient and secure operations for<br>
                        businesses of all sizes.
                    </p>
                </div>
            </div>
            <img src="assets/image/product/pos/2.svg" class="st-icon">
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px">
            {{-- <img src="assets/image/product/pos/3.svg" class="st-icon"> --}}
            <div style="display: flex; flex-direction:column;margin-left: -30px; width: 774px; height: 147px;">
                <div><p class="software-p1">Hardware</p></div>
                <div>
                    <p class="software-p2">Hardware offers durable and reliable components,<br>
                        including touchscreen interface, fast barcode scanning, secure <br>
                        payment processing, integration capabilities, and easy maintenance<br>
                        for streamlined and efficient operations.
                    </p>
                </div>
            </div>
            <img src="assets/image/product/pos/3.svg" class="st-icon">
        </div>

        <div style="display: flex;align-items: center;margin-bottom:40px">
            {{-- <img src="assets/image/product/pos/4.svg" class="st-icon" > --}}
            <div style="display: flex; flex-direction:column;margin-left: -30px; width: 774px; height: 147px;">
                <div><p class="software-p1">Payment</p></div>
                <div>
                    <p class="software-p2">
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
            efficiency, customer satisfaction, and overall operations. Find out more in<br>
            Current Tech Industries.
        </p>
    </div>
    

    <div class="pos-row11">
        <div style="margin-right: 20px;">
            <img src="assets/image/product/pos/10.svg" class="std-image">
        </div>
        {{-- <div style="margin-left: 20px;">
            <img src="assets/image/product/pos/11.svg" class="adv-image">
        </div> --}}
    </div>
    
</div>

@endsection