@extends('layouts.master')
@section('content')
<style>
    .pos-row1 {
        text-align: center;
    }

    .pos-row2 {
        text-align: center;
    }

    @media screen and (min-width: 1300px) {
        .pos-row1 {
            margin-left: 343px;
            margin-right: 342px;
        }
        .pos-row2 {
            margin-left: 343px;
            margin-right: 342px;
        }
        .pos-row3 {
            margin-left: 355px;
            margin-right: 355px;
        }
    }

    @media screen and (min-width: 1800px) {
        .pos-row1 {
            margin-left: 343px;
            margin-right: 342px;
        }
        .pos-row2 {
            margin-left: 343px;
            margin-right: 342px;
        }
        .pos-row3 {
            margin-left: 343px;
            margin-right: 342px;
        }
    }
    @media screen and (min-width: 3000px) {
        .pos-row1 {
            margin-left: 440px;
            margin-right: 440px;
        }
        .pos-row2 {
            margin-left: 440px;
            margin-right: 440px;
        }
        .pos-row3 {
            margin-left: 550px;
            margin-right: 550px;
        }
    }
    @media screen and (max-width: 1257px) {
        .pos-row3 img{
            width: 100%;
            height: auto;
        }
    }
</style>
<div class="main-content" style="margin-top: 120px">
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
        <p class="ignite-p">
            Ignite Your Restaurant's Potential with Our
            Next-Gen POS System
        </p>
    </div>
    

    <p class="streamline-p">
        Streamline operations, elevate service, and boost profitability with our advanced POS system for restaurants. From order management to inventory control, enhance the dining experience and stay ahead of the competition.
    </p>

    <div style="display: flex; flex-direction:column">
        <div style="display: flex;align-items: center;margin-bottom:136px">
            <img src="assets/image/product/pos/2.svg">
            <div style="display: flex; flex-direction:column;margin-left: 70px;">
                <div><p class="software-p1">Software</p></div>
                <div>
                    <p class="software-p2">Software offers intuitive and customizable features<br>
                        like inventory management, sales analytics, payment processing,<br>
                        and CRM integration, ensuring efficient and secure operations for<br>
                        businesses of all sizes.
                    </p>
                </div>
            </div>
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px">
            <img src="assets/image/product/pos/3.svg">
            <div style="display: flex; flex-direction:column;margin-left: 70px;">
                <div><p class="software-p1">Hardware</p></div>
                <div>
                    <p class="software-p2">Hardware offers durable and reliable components,<br>
                        including touchscreen interface, fast barcode scanning, secure <br>
                        payment processing, integration capabilities, and easy maintenance<br>
                        for streamlined and efficient operations.
                    </p>
                </div>
            </div>
        </div>

        <div style="display: flex;align-items: center;margin-bottom:136px">
            <img src="assets/image/product/pos/4.svg">
            <div style="display: flex; flex-direction:column;margin-left: 70px;">
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
        </div>
    </div>

    <div>
        <p class="simplify-p">
            Simplify Operations and<br>
            Supercharge Sales with our POS Solution
        </p>

        <p class="simplify-p2">
            The right POS system can revolutionise the way your big business <br>
            operates, providing the tools and insights needed to flourish in a <br>
            dynamic marketplace.
        </p>
    </div>

</div>

<img src="assets/image/product/pos/5.svg">

<div class="main-content">
    <div style="display: flex;flex-direction: column;">
        <img src="assets/image/product/pos/6.svg">
        <div style="display: flex;align-items: center;">
            <p class="pos-p1">
                POS 
            </p>
            <span class="cloud-color">Cloud</span>
        </div>
        
    </div>

    <p class="chooose-p">
        Choosing the right POS system is crucial for any business, as it can greatly impact 
        efficiency, customer satisfaction, and overall operations. Find out more in<br>
        Current Tech Industries.
    </p>

    <div style="display: flex;margin-bottom:120px">
        <img src="assets/image/product/pos/7.svg" style="margin-right: 20px">
        <img src="assets/image/product/pos/8.svg" style="margin-left: 20px">
    </div>
    
</div>

@endsection