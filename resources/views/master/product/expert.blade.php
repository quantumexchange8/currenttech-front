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
        width: 500px;
    }
    .exprt-col4 {
        width: 420px;
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

    <div class="main-content4" style="margin-top:170px;">
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

        <div class="medusaaa" style="display: flex; width: 1257px; align-items: center; justify-content: space-evenly; margin-bottom: 98px;">
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

    <div style="position: relative;">
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
                        <img src="assets/image/product/expert/pro.svg" class="prochip-img" style="margin-left: 100px; margin-bottom: -90px;">
                        <br>
                        <p class="medusapro-p" style="margin-left: 208px;">
                            PRO CHIP
                        </p>
                        {{-- <p class="medusapro-p2">
                            The Medusa Expert Advisor 
                            offers a user-friendly hedging 
                            strategy for Forex trading,
                            with predefined rules and 
                            straightforward management.
                        </p> --}}
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/ultra.svg" class="prochip-img" style="margin-left: -528px; margin-bottom: -90px;" >
                        <br>
                        <p class="medusaultra-p"  style="margin-left: -420px;">
                            ULTRA CHIP
                        </p>
                        {{-- <p class="medusaultra-p2">
                            The Medusa Expert Advisor 
                            caters to experienced traders 
                            with its advanced hedging 
                            tactics in Forex, employing 
                            intricate indicators for precise 
                            position management.
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="exprt-row2">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 208px;">
                        {{-- <p class="word-small">Up to</p> --}}
                        <p class="word-big">76.8%</p>
                        <p class="word-small">Accuracy Up to</p>
                    </div>
                </div>
                <div class="exprt-col4">
                    <div class="exprt-col-content">
                        {{-- <p class="word-small">Up to</p> --}}
                        <p class="word-big">81.2%</p>
                        <p class="word-small">Accuracy Up to</p>
                    </div>
                </div>
            </div>

            {{-- <div class="exprt-row4">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0.2<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
                <div class="exprt-col6">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="exprt-row5">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">5+</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <p class="word-big">2x</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="exprt-row6">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Support</p>
                        <p class="word-big">Semi</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Support</p>
                        <p class="word-big">Auto</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
            </div> --}}

            <div class="exprt-row7">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 198px;">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img" style="margin-left: 20px;">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img" style="margin-left: 20px;">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
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
                        <img src="assets/image/product/expert/pro.svg" class="prochip-img" style="margin-left: 100px; margin-bottom: -90px;">
                        <br>
                        <p class="medusapro-p" style="margin-left: 208px;">
                            PRO CHIP
                        </p>
                        {{-- <p class="medusapro-p2">
                            The Medusa Expert Advisor 
                            offers a user-friendly hedging 
                            strategy for Forex trading,
                            with predefined rules and 
                            straightforward management.
                        </p> --}}
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/ultra.svg" class="prochip-img" style="margin-left: -528px; margin-bottom: -90px;">
                        <br>
                        <p class="medusaultra-p" style="margin-left: -420px;">
                            ULTRA CHIP
                        </p>
                        {{-- <p class="medusaultra-p2">
                            The Medusa Expert Advisor 
                            caters to experienced traders 
                            with its advanced hedging 
                            tactics in Forex, employing 
                            intricate indicators for precise 
                            position management.
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="exprt-row2">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 198px;">
                        {{-- <p class="word-small">Up to</p> --}}
                        <p class="word-big">79.3%</p>
                        <p class="word-small">Accuracy Up to</p>
                    </div>
                </div>
                <div class="exprt-col4">
                    <div class="exprt-col-content">
                        {{-- <p class="word-small">Up to</p> --}}
                        <p class="word-big">84.6%</p>
                        <p class="word-small">Accuracy Up to</p>
                    </div>
                </div>
            </div>

            {{-- <div class="exprt-row4">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0.2<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
                <div class="exprt-col6">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="exprt-row5">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">5+</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <p class="word-big">2x</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="exprt-row6">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Support</p>
                        <p class="word-big">Semi</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Support</p>
                        <p class="word-big">Auto</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
            </div> --}}

            <div class="exprt-row7">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 198px;">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img">
                            <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img">
                            <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="exprt-5">
            <div class="exprt-row8">
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/pro.svg" style="margin-left: -108px;">
                        <br>
                        <p class="mercurypro-p">
                            MERCURY PRO
                        </p>
                        <p class="mercurypro-p2">
                            Mercury Pro utilize technical 
                            indicators or price action 
                            analysis.This version aims to 
                            provide a straightforward and 
                            easy-to-understand approach 
                            for those who are just starting 
                            in the trading domain.
                        </p>
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/ultra.svg" style="margin-left: -108px;">
                        <br>
                        <p class="mercuryultra-p">
                            MERCURY ULTRA
                        </p>
                        <p class="mercurypro-p2">
                            Mercury Ultra is more 
                            accuracy. It targets 
                            experienced traders, 
                            employing complex indicators 
                            and in-depth price analysis, 
                            empowering precise and 
                            sophisticated trading 
                            decisions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">79.3%</p>
                        <p class="word-small">Accuracy</p>
                    </div>
                </div>
                <div class="exprt-col4">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <p class="word-big">84.6%</p>
                        <p class="word-small">Accuracy</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0.2<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
                <div class="exprt-col6">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">10+</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <p class="word-big">10x</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Support</p>
                        <p class="word-big">Semi</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Support</p>
                        <p class="word-big">Auto</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Allow</p>
                        <div class="word-img">
                            <img src="assets/image/product/expert/ctrade.svg" style="margin-right: 46px">
                            <img src="assets/image/product/expert/mt4.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Allow</p>
                        <div class="word-img">
                            <img src="assets/image/product/expert/ctrade.svg" style="margin-right: 46px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 46px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <div class="exprt-6">
            {{-- <p class="performance-p">Performance</p>  --}}
        </div>
        {{-- <div class="performance-container">
            <div style="display: flex">
                <div>
                    <p class="perform-prate">4.5</p>
                </div>
            </div>
        </div> --}}
        <div class="exprt-9" style="margin-bottom: 50px">
            <img src="assets/image/product/expert/performance.svg">
        </div>
    </div>

    <div style="position: relative;">
        <img src="assets/image/product/expert/ragnarok.svg" style="max-width: 100%; height: auto;width: 100%;">
        <div class="content4-inside-img">
            <div style="position: absolute; bottom: 15px; padding: 5px;">
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
                        <img src="assets/image/product/expert/pro.svg" class="prochip-img" style="margin-left: 100px; margin-bottom: -90px;">
                        <br>
                        <p class="medusapro-p" style="margin-left: 208px;">
                            PRO CHIP
                        </p>
                        {{-- <p class="medusapro-p2">
                            The Medusa Expert Advisor 
                            offers a user-friendly hedging 
                            strategy for Forex trading,
                            with predefined rules and 
                            straightforward management.
                        </p> --}}
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/ultra.svg" class="prochip-img" style="margin-left: -528px; margin-bottom: -90px;">
                        <br>
                        <p class="medusaultra-p"  style="margin-left: -420px;">
                            ULTRA CHIP
                        </p>
                        {{-- <p class="medusaultra-p2">
                            The Medusa Expert Advisor 
                            caters to experienced traders 
                            with its advanced hedging 
                            tactics in Forex, employing 
                            intricate indicators for precise 
                            position management.
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="exprt-row11">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 198px;">
                        {{-- <p class="word-small">Up to</p> --}}
                        <p class="word-bigg">50+</p>
                        <p class="word-small">Investor Accounts</p>
                    </div>
                </div>
                <div class="exprt-col4">
                    <div class="exprt-col-content">
                        {{-- <p class="word-small">Up to</p> --}}
                        {{-- <p class="word-big">84.6%</p> --}}
                        <p class="word-big"><img src="assets/image/product/expert/investor.svg" class="invest-img" style="margin-left: 30px; width: 150px;"></p>
                        <p class="word-small">Investor Accounts</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row7">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 198px;">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img2">
                            <img src="assets/image/product/expert/support1.svg" class="support-img" style="margin-left: 15px; margin-bottom: 15px">
                        </div>
                        <p class="word-small">Support</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img2">
                            <img src="assets/image/product/expert/support1.svg" style="margin-right: 15px; margin-bottom: 15px">
                        <img src="assets/image/product/expert/support2.svg">
                        </div>
                        <p class="word-small">Support</p>
                    </div>
                </div>
            </div>
            {{-- <div class="exprt-row4">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0.2<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
                <div class="exprt-col6">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="exprt-row5">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">5+</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <p class="word-big">2x</p>
                        <p class="word-small">Products</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="exprt-row6">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Support</p>
                        <p class="word-big">Semi</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Support</p>
                        <p class="word-big">Auto</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
            </div> --}}

            <div class="exprt-row7">
                <div class="exprt-col3">
                    <div class="exprt-col-content" style="margin-left: 198px;">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img2">
                            <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        {{-- <p class="word-small">Allow</p> --}}
                        <div class="word-img2">
                            <img src="assets/image/product/broker/5.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right: 15px">
                            <img src="assets/image/product/expert/mt5.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="exprt-7">
            <div class="exprt-row8">
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/pro.svg" style="margin-left: -108px;">
                        <br>
                        <p class="ragnarok-p-word">
                            PRO CHIP
                        </p>
                        <p class="ragnarok-p3">
                            Ragnarok Pro offers PAMM, 
                            an exclusive investment 
                            platform focused on PAMM trading, allowing investors to 
                            allocate funds to skilled 
                            traders for passive income 
                            and diversification.
                        </p>
                    </div>
                </div>
                <div class="exprt-col1">
                    <div class="exprt-col-content">
                        <img src="assets/image/product/expert/ultra.svg" style="margin-left: -108px;">
                        <br>
                        <p class="ragnarok-p-word2">
                            ULTRA CHIP
                        </p>
                        <p class="ragnarok-p3">
                            Even more accuracy. 
                            Ragnarok Ultra offers 
                            additional feature Copy 
                            Trading, allowing investors to 
                            replicate skilled traders' 
                            moves for enhanced 
                            diversification and passive 
                            income opportunities in one 
                            powerful platform.
                        </p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">86.8%</p>
                        <p class="word-small">Accuracy</p>
                    </div>
                </div>
                <div class="exprt-col4">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <p class="word-big">96.3%</p>
                        <p class="word-small">Accuracy</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0.2<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
                <div class="exprt-col6">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Speed</p>
                        <p class="word-big">0<small>Sec</small></p>
                        <p class="word-small">Time Delay</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Up to</p>
                        <p class="word-big">50+</p>
                        <p class="word-small">Follower Accounts</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Up to</p>
                        <img src="assets/image/product/expert/infinity.png" style="margin-top: 23px;margin-bottom: 23px">
                        <p class="word-small">Follower Accounts</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Support</p>
                        <p class="word-big">Auto</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Support</p>
                        <p class="word-big">Auto</p>
                        <p class="word-small">Function</p>
                    </div>
                </div>
            </div>
            <div class="exprt-row8">
                <div class="exprt-col3">
                    <div class="exprt-col-content">
                        <p class="word-small">Allow</p>
                        <div class="word-img">
                            <img src="assets/image/product/expert/ctrade.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/mt5.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/pamm.svg">
                        </div>
                        
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
                <div class="exprt-col8">
                    <div class="exprt-col-content" style="width: 524px">
                        <p class="word-small">Allow</p>
                        <div class="word-img">
                            <img src="assets/image/product/expert/ctrade.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/mt4.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/mt5.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/pamm.svg" style="margin-right:35px">
                            <img src="assets/image/product/expert/network.svg">
                        </div>
                        <p class="word-small">Trading Platform</p>
                    </div>
                </div>
            </div>
        </div> --}}
        
        {{-- <div class="exprt-8">
            <p class="performance-p">Performance</p> 
        </div> --}}
        {{-- <div class="performance-container">
            <div style="display: flex">
                <div>
                    <p class="perform-prate">4.5</p>
                </div>
            </div>
        </div> --}}
        <div class="exprt-10" style="margin-bottom: 50px">
            <img src="assets/image/product/expert/performance.svg">
        </div>
    </div>
@endsection