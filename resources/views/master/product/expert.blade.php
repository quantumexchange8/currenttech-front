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
        width: 317px;
    }
    .medusa1 img{
        width: 352px;
        height: 352px;
        box-shadow: 0px 0px 100px 10px rgba(75, 185, 248, 0.30);
        margin-bottom: 68px;
    }
    .mercury1 img{
        width: 352px;
        height: 352px;
        box-shadow: 0px 0px 100px 10px rgba(75, 185, 248, 0.30);
        margin-bottom: 68px;
    }

    .prochip-img {
        width: 180px;
        height: 180px;
        box-shadow: 0px 0px 100px 10px rgba(75, 185, 248, 0.30);
        margin-bottom: 68px;
    }
    .ragnarok-icon {
        width: 160px;
        height: 160px;
    }
    @media screen and (max-width: 1093px) {
        .content4-inside-img {
        }

        .exprt-1 {
            margin-bottom: 36px;
        }

        .exprt-2 {
            width: 100%;
            margin-bottom: 0px;
        }
        .expert-p-word {
            width: 100%;
            font-size: 20px;
            margin: 20px 0px; 
        }
        .expert-p-word2 {
            width: 100%;
            /* margin-left: 50px; */
            margin-bottom: 68px;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
        }
        .exprt-3 {
            width: 100%;
            margin-bottom: 68px;
        }
        .medusa1 {
            /* width: 100%; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .mercury1 {
            /* width: 100%; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .exprt-row1 {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
            /* height: 940px; */
            justify-content: center;
            gap: 80px;
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
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal; /* 357.143% */
            background: linear-gradient(110deg, #4BBEFF 0%, rgba(53, 158, 255, 0.51) 44.79%, #D06BFF 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .medusaultra-p {
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal; /* 357.143% */
            background: linear-gradient(110deg, #4BBEFF 0%, rgba(53, 158, 255, 0.51) 44.79%, #D06BFF 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
            margin-bottom: 0px;
        }
        .exprt-4 img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: none;
        }
        .exprt-9 {
            width: 100%;
            margin-bottom: 0px;
        }
        .exprt-9 img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: none;
        }
        .exprt-10 {
            width: 100%;
            margin-bottom: 0px !important;
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
            margin-left: 40px;
            font-size: 20px;
            line-height: normal;
            margin-bottom: 16px;
        }
        .ragnarok-p1 {
            font-size: 12px;
            line-height: 14px;
            width: 80%;
            margin-left: 40px;
        }
        .medusa-p4 {
            font-size: 20px;
            margin-left: 45px;
            margin-bottom: 16px;
            line-height: normal;
        }
        .medusa-p6 {
            font-size: 20px;
            margin-left: 45px;
            line-height: normal;
            margin-bottom: 16px;
        }
        .medusa-p5 {
            font-size: 12px;
            width: 80%;
            margin-left: 45px;
        }
        .medusa-p {
            width: 140px;
            height: auto;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: 22px; /* 183.333% */
            background: linear-gradient(110deg, #4BBEFF 0%, rgba(53, 158, 255, 0.51) 44.79%, #D06BFF 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .mercury-p {
            width: 140px;
            height: auto;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: 22px; /* 183.333% */
            background: linear-gradient(110deg, #4BBEFF 0%, rgba(53, 158, 255, 0.51) 44.79%, #D06BFF 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .medusa1 img{
            width: 151.083px;
            height: 151.512px;
            box-shadow: 0px 0px 100px 10px rgba(75, 185, 248, 0.30);
            margin-bottom: 38px;
        }
        .mercury1 img{
            width: 151.083px;
            height: 151.512px;
            box-shadow: 0px 0px 100px 10px rgba(75, 185, 248, 0.30);
            margin-bottom: 38px;
        }
        .exprt-col-content {
            /* margin-top: -50px;
            width: 924px; */
        }
        .prochip-img {
            /* width: 434px; */
            width: 100px;
            height: 100px;
            flex-shrink: 0;
            margin-bottom: 16px;
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
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            /* margin-left: 7px;
            margin-top: -250px; */
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
            margin-top: 0px;
            margin-bottom: 8px;
        }
        .word-img2 {
            margin-top: 40px;
        }
        .invest-img {
            /* margin-top: -40px; */
            width: 100px;
        }
        
        .medusaaa {
            gap: 37.83px;
            margin-bottom: 68.49px;
        }

        .mobile-medusa-btm {
            margin-bottom: 68px !important;
        }
        .mobile-margin-bottom {
            margin-bottom: 38px !important;
        }
        .word-small {
            color: #888;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .mobile-mt5-icon {
            width: 30px;
            height: ;: 30px;
        }
        .ragnarok-icon {
            width: 40px;
            height: 40px;
            margin-left: 40px;
        }
        .infinity-img {
            width: 61.578px;
            height: 30px;
        }
        .support-img {
            width: 30px;
            height: 28px;
        }
        .support-img2 {
            width: 30px;
            height: 28px;
            margin-right: 16px !important;
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
            <div class="mobile-alignment-30px">
                <p class="expert-p-word2">
                    We are an Expert Advisor Builder. Our EA is designed to take advantage of market 
                    fluctuations, thereby enhancing the potential for profitable trades while minimizing risks. 
                    Our EA supports cTrader, MetaTrader 4, and MetaTrader 5 platforms. It provides traders 
                    with powerful tools and strategies to enhance their trading experience and
                    achieve better results.
                </p>
            </div>
        </div>

        <div class="medusaaa">
            <div class="medusa1">
                <img src="assets/image/product/expert/9.svg">
                <div style="display: flex;justify-content: center;">
                    <p class="medusa-p">
                        &bull; Hedging Strategy <br>
                        &bull; 0 Time Delay <br>
                        &bull; Up-to 10 products <br>
                        &bull; Semi Auto
                      </p>
                </div>
            </div>
            <div class="mercury1">
                <img src="assets/image/product/expert/10.svg">
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

    <div class="mobile-medusa-btm" style="position: relative;margin-bottom:188px">
        <img src="assets/image/product/expert/medusa3.svg" style="max-width: 100%; height: auto;width: 100%;border-radius: 80px;">
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
                            <img src="assets/image/product/expert/11.svg" class="prochip-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>PRO CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">76.8%</p>
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/expert/mt4.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg" class="mobile-mt5-icon">
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
                            <img src="assets/image/product/expert/12.svg" class="prochip-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom:68px">
                            <p class="medusaultra-p">
                                <b>ULTRA CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">81.2%</p>
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img" >
                                <img src="assets/image/product/expert/mt4.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg" class="mobile-mt5-icon">
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

    <div class="mobile-medusa-btm" style="position: relative;margin-bottom:188px">
        <img src="assets/image/product/expert/medusa3.svg" style="max-width: 100%; height: auto;width: 100%;border-radius: 80px;">
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
                            <img src="assets/image/product/expert/11.svg" class="prochip-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>PRO CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">79.3%</p>
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg" class="mobile-mt5-icon">
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
                            <img src="assets/image/product/expert/12.svg" class="prochip-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom:68px">
                            <p class="medusapro-p">
                                <b>ULTRA CHIP</b>
                            </p>
                        </div>
                        <div>
                            <p class="word-big">84.6%</p>
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 136px">
                            <p class="word-small">Accuracy Up to</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg" class="mobile-mt5-icon">
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

    <div class="mobile-medusa-btm" style="position: relative;margin-bottom:188px;">
        <img src="assets/image/product/expert/ragnarok.svg" style="max-width: 100%; height: auto;width: 100%;border-radius: 80px;">
        <div class="content4-inside-img">
            <div style="position: absolute; bottom: 15px; padding: 5px;">
                <img src="assets/image/product/expert/13.svg" class="ragnarok-icon">
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
                            <img src="assets/image/product/expert/11.svg" class="prochip-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 68px;">
                            <p class="medusapro-p">
                                PRO CHIP
                            </p>
                        </div>
                        <div>
                            <p class="word-big">50+</p>
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 136px">
                            <p class="word-small">Investor Accounts</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/expert/support1.svg" class="support-img">
                            </div>
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom:138px">
                            <p class="word-small">Support</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg" class="mobile-mt5-icon">
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
                            <img src="assets/image/product/expert/12.svg" class="prochip-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 68px;">
                            <p class="medusapro-p">
                                <b>ULTRA CHIP</b>
                            </p>
                        </div>
                        <div>
                            <img src="assets/image/product/expert/infinity.png" class="infinity-img">
                        </div>
                        <div class="mobile-margin-bottom" style="margin-bottom: 136px">
                            <p class="word-small">Investor Accounts</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/expert/support1.svg" class="support-img2" style="margin-right: 20px">
                                <img src="assets/image/product/expert/support2.svg" class="support-img">
                            </div>
                        </div>
                        <div class="mobile-margin-bottom"    style="margin-bottom:138px">
                            <p class="word-small">Support</p>
                        </div>
                        <div>
                            <div class="word-img">
                                <img src="assets/image/product/broker/5.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt4.svg" class="mobile-mt5-icon" style="margin-right: 15px">
                                <img src="assets/image/product/expert/mt5.svg" class="mobile-mt5-icon">
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