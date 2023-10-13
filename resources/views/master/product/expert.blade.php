@extends('layouts.master')
@section('content')

<style>

    .content4-inside-img {
        display: flex;
        justify-content: flex-start;
        margin-left: 241px;
        margin-right: 252px;
        flex-wrap: wrap;
        width: 100%;
        max-width: 1093px;
        margin: 0 auto;
    }
    .exprt-col3 {
        /* width: 500px; */
    }
    .exprt-col4 {
        /* width: 420px; */
    }
    .exprt-col5 {
        width: 500px;
    }
    .exprt-col6 {
        width: 420px;
    }
    .exprt-col7 {
        width: 420px;
    }
    .exprt-col8 {
        width: 420px;
    }
    .exprt-9 {
        width: 100%;
        margin-bottom: 238px;
    }
    .exprt-9 img{
        width: 100%;
    }
    .exprt-10 {
        width: 100%;
    }
    .exprt-10 img {
        width: 100%;
        max-width: 100%;
        height: auto;
    }
    .exprt-col-content {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    @media screen and (max-width: 1280px) {
        .content4-inside-img {
            margin-bottom: -250px;
        }
        .exprt-2 {
            width: 100%;
        }
        .expert-p-word {
            width: 100%;
            margin-top: -100px;
            margin-bottom: -250px;
            font-size: 20px;
        }
        .expert-p-word2 {
            width: 100%;
            /* margin-left: 50px; */
            margin-bottom: 50px;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
        }
        .exprt-3 {
            width: 100%;
        }
        .medusa1 {
            width: 100%;
        }
        .exprt-row1 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
            height: 940px;
        }
        .exprt-row2 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }
        .exprt-row11 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
            margin-bottom: -60px;
        }
        .medusapro-p {
            font-size: 25px;
        }
        .medusaultra-p {
            font-size: 25px;
        }
        .medusapro-p2 {
            /* width: 100%; */
        }
        .medusaultra-p2 {
            width: 100%;
        }
        .exprt-5 {
            width: 100%;
        }
        .exprt-4 {
            width: 100%;
        }
        .exprt-4 img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: none;
        }
        .exprt-9 {
            width: 100%;
        }
        .exprt-9 img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: none;
        }
        .exprt-10 {
            width: 100%;
        }
        .exprt-10 img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: none;
        }
        .exprt-row8 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: flex-start;
        }
        .mercurypro-p2 {
            /* width: 100%; */
        }
        .mercuryultra-p2 {
            width: 100%;
        }
        .exprt-row4 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }
        .exprt-row5 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }
        .exprt-row6 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }
        .exprt-row7 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
            margin-top: -30px;
        }
        .exprt-6 {
            width: 100%;
        }
        .performance-p {
            width: 100%;
        }
        .ragnarok-p {
            margin-left: 20px;
            font-size: 20px;
        }
        .ragnarok-p1 {
            font-size: 12px;
            line-height: 14px;
            width: 80%;
            margin-left: 20px;
        }
        .medusa-p4 {
            font-size: 20px;
            margin-left: 20px;
        }
        .medusa-p6 {
            font-size: 20px;
            margin-left: 20px;
            line-height: 14px;
        }
        .medusa-p5 {
            font-size: 12px;
            width: 80%;
            margin-left: 20px;
        }
        .medusa-p {
            margin-left: 60px;
        }
        .mercury-p {
            margin-left: -20px;
        }
        .medusa1 img{
            margin-left: 50px;
            width: 15px;
        }
        .mercury1 img{
            margin-left: -120px;
        }
        .exprt-col-content {
            margin-top: -50px;
            width: 924px;
        }
        .prochip-img {
            width: 434px;
        }
        .exprt-col3 {
            width: 494px;
        }
        .exprt-col5 {
            width: 494px;
            margin-top: -110px;
        }
        .exprt-col5 img{
            width: 64px;
        }
        .exprt-col7 {
            width: 494px;
            margin-top: -110px;
        }
        .exprt-col7 img{
            width: 64px;
        }
        .exprt-7 {
            width: 100%;
        }
        .word-big {
            font-size: 60px;
            margin-left: 7px;
            margin-top: -250px;
        }
        .word-bigg {
            font-size: 60px;
            margin-left: 37px;
            margin-top: -250px;
        }
        /* .invest-img {
            font-size: 60px;
            margin-left: 7px;
            margin-top: -250px;
        } */
        .word-img {
            margin-top: -150px;
        }
        .word-img2 {
            margin-top: 40px;
        }
        .invest-img {
            margin-top: -40px;
            width: 100px;
        }
        
    }
</style>

    <div class="main-content4" style="margin-top:160px;">
        <div class="exprt-1">
            <p class="expert-p-word">
                Choose Your Expert Advisor
            </p>
        </div>

        <div class="exprt-2">
            <p class="expert-p-word2">
                We are an Expert Advisor Builder. Our EA is designed to take advantage of market 
                fluctuations, thereby enhancing the potential for profitable trades while minimizing risks. 
                Our EA supports cTrader, MetaTrader 4, and MetaTrader 5 platforms. It provides traders 
                with powerful tools and strategies to enhance their trading experience and
                achieve better results.
            </p>
        </div>

        <div class="medusaaa">
            <div style="text-align: center; margin: 0 auto;" class="medusa1">
                <img src="assets/image/product/expert/medusa.svg" style="width:500px">
                <div style="display: flex;justify-content: center;">
                    <p class="medusa-p">
                        &bull; Hedging Strategy <br>
                        &bull; 0 Time Delay <br>
                        &bull; Up-to 10 products <br>
                        &bull; Semi Auto
                      </p>
                </div>
            </div>
            <div style="text-align: center; margin: 0 auto;" class="mercury1">
                <img src="assets/image/product/expert/mercury.svg" style="width:500px">
                <div style="display: flex;justify-content: center;">
                    <p class="mercury-p">
                        &bull; Signal Detect <br>
                        &bull; 0 Times Delay <br>
                        &bull; Unlimited products <br>
                        &bull; Fully Auto
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div style="position: relative;margin-bottom:64px">
        <img src="assets/image/product/expert/medusa3.svg" style="max-width: 100%; height: auto;width: 100%;">
        <div class="content4-inside-img">
            <div style="position: absolute; bottom: 55px; padding: 5px;">
                <p class="medusa-p4">
                    MEDUSA
                </p>
                <p class="medusa-p5">
                    The Medusa Expert Advisor is an automated 
                    trading robot for the Forex market. It employs 
                    a hedging strategy to protect positions from  
                    adverse price movements. The EA uses 
                    predefined rules and indicators to open 
                    hedge positions and manages them with 
                    stop-loss and take-profit levels.
                </p>
            </div>
        </div>
    </div>

    <div class="main-content4">
        <div class="exprt-3">
            <div class="exprt-row1">
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <div>
                            <img src="assets/image/product/expert/pro.svg" class="prochip-img">
                        </div>
                        <div style="margin-top: -40px;margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>PRO CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">76.8%</p>
                        </div>
                        <div style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img" style="margin-left: 20px;">
                                <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg">
                            </div>
                            
                        </div>
                        <div>
                            <p class="word-small">Trading Platform</p>
                        </div>
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <div>
                            <img src="assets/image/product/expert/ultra.svg" class="prochip-img">
                        </div>
                        <div style="margin-top: -40px;margin-bottom:68px">
                            <p class="medusaultra-p">
                                <b>ULTRA CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">81.2%</p>
                        </div>
                        <div style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img" style="margin-left: 20px;">
                                <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg">
                            </div>
                            
                        </div>
                        <div>
                            <p class="word-small">Trading Platform</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="exprt-4">
            {{-- <p class="performance-p">Performance</p> --}}
            <img src="assets/image/product/expert/performance.svg">
        </div>
    </div>

    <div style="position: relative;">
        <img src="assets/image/product/expert/medusa3.svg" style="max-width: 100%; height: auto;width: 100%;">
        <div class="content4-inside-img">
            <div style="position: absolute;bottom: 55px;padding: 5px">
                <p class="medusa-p6">
                    MERCURY
                </p>
                <p class="medusa-p5">
                    The Mercury Expert Advisor's trading 
                    strategies utilize technical indicators or price 
                    action analysis. Indicator-based approaches 
                    involve mathematical calculations from 
                    historical price data, while price action 
                    strategies interpret actual chart movements. 
                    Both methods inform trading decisions, 
                    offering potential opportunities for successful 
                    trading.
                </p>
            </div>
        </div>
        
    </div>

    <div class="main-content4">
        <div class="exprt-3">
            <div class="exprt-row1">
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <div>
                            <img src="assets/image/product/expert/pro.svg" class="prochip-img">
                        </div>
                        <div style="margin-top: -40px;margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>PRO CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">79.3%</p>
                        </div>
                        <div style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg">
                            </div>
                        </div>
                        <div>
                            <p class="word-small">Trading Platform</p>
                        </div>
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <div>
                            <img src="assets/image/product/expert/pro.svg" class="prochip-img">
                        </div>
                        <div style="margin-top: -40px;margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>ULTRA CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">84.6%</p>
                        </div>
                        <div style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg">
                            </div>
                        </div>
                        <div>
                            <p class="word-small">Trading Platform</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="exprt-6">
            {{-- <p class="performance-p">Performance</p>  --}}
        </div>
        
        <div class="exprt-9">
            <img src="assets/image/product/expert/performance.svg">
        </div>
    </div>

    <div style="position: relative;">
        <img src="assets/image/product/expert/ragnarok.svg" style="max-width: 100%; height: auto;width: 100%;">
        <div class="content4-inside-img">
            <div style="position: absolute; bottom: 15px; padding: 5px;">
                <img src="assets/image/product/expert/1.svg" style="margin-left: -108px;margin-bottom: -130px;">
                <p class="ragnarok-p">
                    RAGNAROK
                </p>
                <p class="ragnarok-p1">
                    Ragnarok is a fund management system 
                    combines PAMM and Copy Trading, allowing 
                    professional traders to manage pooled funds 
                    (PAMM) and enabling others to automatically 
                    copy their trades. This 
                    integrated platform enhances investment 
                    opportunities, optimizes risk management, and 
                    fosters collaboration between traders and 
                    investors.
                </p>
            </div>
        </div>
        
    </div>

    <div class="main-content4">
        <div class="exprt-3">
            <div class="exprt-row1">
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <div>
                            <img src="assets/image/product/expert/pro.svg" class="prochip-img">
                        </div>
                        <div style="margin-top: -40px;margin-bottom:68px">
                            <p class="medusapro-p">
                                PRO CHIP
                            </p>
                        </div>
                        <div>
                            <p class="word-big">50+</p>
                        </div>
                        <div style="margin-bottom: 136px">
                            <p class="word-small">Investor Accounts</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/expert/support1.svg" class="support-img">
                            </div>
                        </div>
                        <div style="margin-bottom:138px">
                            <p class="word-small">Support</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg">
                            </div>
                        </div>
                        <div>
                            <p class="word-small">Trading Platform</p>
                        </div>
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <div>
                            <img src="assets/image/product/expert/pro.svg" class="prochip-img">
                        </div>
                        <div style="margin-top: -40px;margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>ULTRA CHIP</b>
                            </p>
                        </div>
                        <div>
                            <img src="assets/image/product/expert/infinity.png">
                        </div>
                        <div style="margin-bottom: 136px">
                            <p class="word-small">Investor Accounts</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/expert/support1.svg" class="support-img" style="margin-right: 20px">
                                <img src="assets/image/product/expert/support2.svg" class="support-img">
                            </div>
                        </div>
                        <div style="margin-bottom:138px">
                            <p class="word-small">Support</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg">
                            </div>
                        </div>
                        <div>
                            <p class="word-small">Trading Platform</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="exprt-10" style="margin-bottom: 50px">
            <img src="assets/image/product/expert/performance.svg">
        </div>
    </div>
@endsection