@extends('layouts.master')
@section('content')

<style>
    .vertical-line {
        border-left: 1px solid #000; /* Adjust the color and width as needed */
    height: 100%;
}
    .broker1 {
        text-align: center;
        margin-bottom: 68px;
    }

    .broker2 {
        text-align: center;
        margin-bottom: 68px;
    }

    .broker3 {
        margin-bottom: 128px;
    }
    .broker4 {
        margin-bottom: 68px;
        text-align: center;
    }
    .broker5 {
        text-align: center;
        margin-bottom: 146px;
    }
    .broker6 {
        margin-bottom: 36px;
        width: 100%;
    }
    .broker7 {
        width: 100%;
        margin-bottom: 36px;
    }
    .broker8 {
        margin-bottom: 118px;
        width: 100%;
    }
    .broker9 {
        margin-bottom: 76px;
        width: 100%;
    }
    .broker10 {
        margin-bottom: 88px;
        width: 100%;
    }
    .broker11 {
        margin-bottom: 128px;
        width: 100%;
    }
    .broker11-mobile {
        width: 100%;
        display: none;
    }
    .broker13 {
        margin-bottom: 68px;
        width: 100%;
    }
    .broker14 {
        margin-bottom: 128px;
        width: 100%;
    }

    .broker13-mobile {
        display: none;
    }

    .broker14-mobile {
        display: none;
    }

    .cont {
        width: 100%;
    }
    .cont-2-1 {
        width: 100%;
    }
    .cont2-2 {
        width: 100%;
    }
    .getinfo-align {
        margin-top: -15px;
        text-align:end;
        margin-right:35px;
    }
    .getinfo-align2 {
        margin-top: -12px;
        text-align:end;
        margin-right:35px;
    }
    .getinfo-align3 {
        margin-top: -5px;
        text-align:end;
        margin-right:35px;
    }
    .broker12 {
        width: 100%;
    }
    .broker12-mobile {
        display: none;
    }
    hr {
            height: 400px;
            width: 0px;
            color: #666666;
        }

    @media screen and (max-width: 1093px) {
        .ct-p {
            color: #BD00FF;
            text-align: right;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-align: right;
            width: 100%;
        }
        .ct-p2 {
            color: #FFF;
            text-align: right;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 12px; /* 120% */
            width: 100%;
            margin: 0;
        }
        .ct-p4 {
            color: #BD00FF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            width: 100%;
            margin-bottom: 0px;
        }
        .ct-p3 {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 12px; /* 120% */
            width: 78%;
        }
        .ct-p6 {
         font-size: 14px;
         text-align: right;
         width: 100%;
        }
        .ct-p5 {
         margin-top: -70px;
         font-size: 10px;
         text-align: right;
         line-height: 12px;
         width: 100%;
        }
        .ct-p7 {
            color: #FFF;
            text-align: right;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 12px; /* 120% */
            width: 100%;
            margin-top: 0px;
        }

        .ct-p8 {
            color: #BD00FF;
            text-align: right;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            width: 100%;
            margin: 0px;
        }

        .build-p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .setup-container-mobile {
            width: 340px;
            height: 700px;
            flex-shrink: 0;
            border-radius: 30px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.30) 0%, rgba(136, 136, 136, 0.18) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            padding: 35px 19px;
        }
        .ctrater-col-1-mobile {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 22px;
            width: 197px;
            margin-bottom: 25px;
        }
        .ctrader-brokerage-word {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px !important;
            font-style: normal !important;
            font-weight: 500 !important;
            line-height: normal !important;
        }

        .ctrader-content-mobile {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
        }

        .ctrader-content-mobile-p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .broker1 {
            width: 100%;
            height: auto;
            margin-bottom: 36px;
        }
        .broker2 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 38px;
        }
        .broker3 {
            width: 100%;
            height: auto;
            margin-bottom: 68px;
        }
        .broker3 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .broker4 {
            width: 100%;
            height: auto;
            margin-bottom: 16px;
        }
        .broker5 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 38px;
        }
        .broker6 {
            width: 100%;
            height: auto;
            /* margin-right: 20px; */
        }
        .broker7 {
            width: 100%;
            height: auto;
            /* margin-right: 20px; */
        }
        .broker8 {
            width: 100%;
            height: auto;
            margin-bottom: 68px;
            /* margin-right: 20px;
            margin-top: -120px; */
        }
        .broker9 {
            width: 100%;
            height: auto;
            /* margin-right: 20px; */
        }
        .broker10 {
            width: 100%;
            height: auto;
            margin-bottom: 68px;
        }
        .broker10 p {
            width: 100%;
        }
        .broker13 {
            display: none;
        }

        .broker11-mobile {
            display: flex;
            flex-wrap:wrap;
            gap:25px;
        }
        .broker13-mobile {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 38px;
        }

        .broker14-mobile {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 68px;
        }

        .under-line {
            width: 100%;
            height: 1px;
            background: #666;
            margin-bottom: 36px;
        }

        .broker14 {
            display: none;
        }
        .cont {
            width: 100%;
            height: 100px;
            margin-bottom: 0px;
            margin-top: 36px;
        }
        .cont img {
            width: 170px;
            height: 170px;
        }
        .cont-2-1 {
            width: 100%;
            height: 100px;
            margin-bottom: 0px;
        }
        .cont-2-1 img {
            width: 170px;
            height: 170px;
            margin-left: -20px;
            margin-top: -40px;
        }
        .ct-box {
            /* margin-left: 40px;
            margin-right: 20px; */
            margin-top: 0px;
            margin-right: 15px;
            display: flex;
            flex-direction: column;
            height: auto;
            justify-content: center;
            gap: 8px;
        }
        .ct-box2 {
            margin-top: 0px;
            display: flex;
            flex-direction: column;
            height: auto;
            justify-content: center;
            gap: 8px;
            margin-left: 16px;
        }
        .cont2 {
            width: 100%;
            height: 100px;
            margin-bottom: 100px;
        }

        .cont2-2 {
            width: 100%;
            height: 100px;
            margin-bottom: 100px;
        }
        .cont2-2 img {
            width: 170px;
            height: 170px;
            /* margin-left: 250px;
            margin-top: -40px; */
        }
        .package-p {
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: left;
            margin-bottom: 16px;
        }
        .package-p2 {
            width: 100%;
            text-align: left;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 18px; /* 128.571% */
            margin-bottom: 68px;
        }
        .getstart-container {

        }

        .getstart-p {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .broker12 {
            width: 100%;
            display: none;
        }
        .broker12-mobile {
            width: 100%;
            display: block;
        }
        .quota-p {
            width: 100%;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .personalise-container {
            width: 100%;
            display: none;
        }
        .personalise-container img {
            width: 400px;
            height: 400px;
            margin-left: -15px;
        }
        .build2 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            width: 85%;

        }
        .broker-p {
            font-size: 18px;
            text-align: left;
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .broker-p2 {
            text-align: left;
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .getinfo-align {
            margin-top: -50px;
            text-align:end;
            margin-right:35px;
        }

        .line5 {
            display: none;
        }
        .getinfo-align2 {
            margin-top: -50px;
            text-align:end;
            margin-right:35px;
        }
        .getinfo-align3 {
            margin-top: -50px;
            text-align:end;
            margin-right:35px;
        }
        .ct-p6 {
            width: 420px;
        }
        .getstart-p2 {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .effective {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            width: 70%;
            max-width: 700px; /* Set a maximum width if desired */
            min-height: 50vh;
            height: 1200px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
            color: #BD00FF;
            border-radius: 50px;
        }

        tr {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 10px; 
            border: none;
        }

        th, td {
            width: calc(50% - 2px); 
            text-align: center;
            box-sizing: border-box;
            padding: 0px;
            border: none;
        }   

        .line2 {
            display: none;
        }

        hr {
            width: 70%;
            color: #666666;
            height: 1px;
        }
        .effective-container {
            margin-bottom: 700px;
        }
    }

    @media screen and (max-width: 1600px) {
        /* .broker1 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        /* .broker2 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        .broker3 {
            width: 100%;
            height: auto;
        }
        .broker3 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        /* .broker4 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        /* .broker5 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        /* .broker6 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        /* .broker7 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        .broker8 {
            /* margin-left: 250px;
            margin-right: 250px; */
        }
        .broker9 {
            width: 100%;
            height: auto;
        }
        .broker10 {
            width: 100%;
            height: auto;
        }
        .broker10 p {
            /* width: 100%;
            height: auto; */
        }
    }

    @media screen and (min-width: 2000px) {
        /* .broker1 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        /* .broker2 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        /* .broker3 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        /* .broker4 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        /* .broker5 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        /* .broker6 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        /* .broker7 {
            margin-left: 350px;
            margin-right: 350px;
        } */
        .broker8 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .broker9 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker10 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
    }

    @media screen and (min-width: 3000px) {
        /* .broker1 {
            margin-left: 500px;
            margin-right: 500px;
        } */
        /* .broker2 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker3 {
            margin-left: 500px;
            margin-right: 500px;
        } */
        /* .broker4 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker5 {
            margin-left: 500px;
            margin-right: 500px;
        } */
        /* .broker6 {
            margin-left: 500px;
            margin-right: 500px;
        } */
        /* .broker7 {
            margin-left: 500px;
            margin-right: 500px;
        } */
        .broker8 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .broker9 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker10 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
    }

    @media screen and (min-width: 3800px) {
        /* .broker1 {
            margin-left: 650px;
            margin-right: 650px;
        } */
        /* .broker2 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker3 {
            margin-left: 650px;
            margin-right: 650px;
        } */
        /* .broker4 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker5 {
            margin-left: 650px;
            margin-right: 650px;
        } */
        /* .broker6 {
            margin-left: 650px;
            margin-right: 650px;
        } */

        /* .broker7 {
            margin-left: 650px;
            margin-right: 650px;
        } */
        .broker8 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .broker9 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker10 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
    }

    .ctrader-content {
        display: flex;
        flex-direction: column;
        /* flex-wrap: wrap; */
        align-items: center;
        justify-content: center;
        gap: 50px;
        width: 630px;
        height: 219px;
        flex-shrink: 0;
    }

    .ctrader-row1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .ctrader-row2 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .ctrater-col-1 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 22px;
        width: 197px;
        padding-left: 39px;
    }

    .cont-wordnimg {
        width: 120px;
        height: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;

    }

    .ctrader-brokerage-word {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .ctrader-container-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .line5 {
        width: 100%;
        height: 1.5px;
        background: #666;
        margin-bottom: 88px;
    }
</style>

<div class="main-content3" style="margin-top:160px;">
    <div class="broker1">
        <p class="build-p">
            Building Bridges of Wealth
        </p>
    </div>
    
    <div class="broker2">
        <p class="build2">
            Connecting Opportunities, Empowering Prosperity. Your Gateway to 
            Financial Success, Where Expertise Meets Innovation. Uniting Investors
            and Markets for a Flourishing Future. Discover the Power of Partnership
            with our Premier Brokerage Services.
        </p>
    </div>

    <div class="broker3">
        <img src="assets/image/product/broker/1.svg" style="width: 100%;">
    </div>

    <div class="broker4">
        <div class="mobile-alignment-30px">
            <p class="broker-p">
                Brokerage Setup Includes
            </p>
        </div>
    </div>
    
    <div class="broker5">
        <div class="mobile-alignment-30px">
            <p class="broker-p2">
                Get a White Label Solutions for your brokerage, including customised and rebranded 
                services with advanced tech. Enjoy secure payment solutions for global transactions and 
                efficient financial services. Utilise CRM Solutions for optimized customer interactions,
                sales, and support
            </p>
        </div>
    </div>
    
    <div class="broker6">
        <div class="mobile-alignment-30px">
            <div class="cont">
                <div>
                    <img src="assets/image/product/broker/2.svg">
                </div>
                <div class="ct-box">
                    <div>
                        <p class="ct-p">
                            White Label Solutions
                        </p>
                    </div>
                    <div>
                        <p class="ct-p2">
                            Customised and rebrand
                            solutions for brokerage
                            with end-to-end support
                            and advanced technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="broker7">
        <div class="mobile-alignment-30px">
            <div class="cont-2-1">
                <div class="ct-box2">
                    <p class="ct-p4">
                        Payment Solutions
                    </p>
                    <p class="ct-p3">
                        Secure and efficient financial 
                        services for seamless 
                        transactions, catering to 
                        diverse payment.
                    </p>
                </div>
                <img src="assets/image/product/broker/3.svg">
            </div>
        </div>
    </div>

    <div class="broker8">
        <div class="mobile-alignment-30px">
            <div class="cont">
                <div>
                    <img src="assets/image/product/broker/4.svg" class="crm-image">
                </div>
                <div class="ct-box">
                    <p class="ct-p8">
                        CRM solutions
                    </p>
                    <p class="ct-p7">
                        Integrated software for 
                        managing customer interactions, 
                        optimising relationships, and 
                        enhancing sales effectively.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div style="display: flex;justify-content:center;flex-direction:column;">
        <div class="mobile-alignment-30px">
            <p class="package-p">
                Our cost-effective brokerage package
            </p>
        </div>
        <div class="mobile-alignment-30px">
            <div style="display: flex;justify-content: center;">
                <p class="package-p2">
                    Introducing our comprehensive brokerage package, designed for seamless investing. 
                    Leverage our expertise, technology, and support for your brokerage. Establish your brand 
                    and expand your business with confidence and ease. Start your journey to financial
                    success with our tailored brokerage package now.
                </p>
            </div>
        </div>
    </div>
    
    <div class="broker13">
        <div class="setup-container">
            <div class="ctrater-col-1">
                <img src="assets/image/product/broker/5.svg" style="width: 100px; height: 100px;">
                <div class="ctrader-brokerage-word">
                    cTrader <br> Brokerage Setup
                </div>
            </div>
            
            <div class="straight-line"></div>
            
            <div class="ctrader-content">

                <div class="ctrader-row1">
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/7.svg" style="width: 66.667px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Unlimited User
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/8.svg" style="width: 66.667px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            In-app Deposit
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/10.svg" style="width: 60.526px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Copy-Trading
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/12.svg" style="width: 60.526px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Spread Betting
                        </div>
                    </div>
                </div>

                <div class="ctrader-row2">
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/13.svg" style="width: 37.5px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Seperate Brand
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/17.svg" style="width: 29.167px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            In-app Control
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/18.svg" style="width: 50.001px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Expert Advisor
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/19.svg" style="width: 50px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            60+ Indicators
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="broker14">
        <div class="setup-container">
            <div class="ctrater-col-1">
                <img src="assets/image/product/broker/6.svg" style="width: 100px; height: 100px;">
                <div class="ctrader-brokerage-word">
                    Meta Trader <br> Brokerage Setup
                </div>
            </div>
            
            <div class="straight-line"></div>
            
            <div class="ctrader-content">

                <div class="ctrader-row1">
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/7.svg" style="width: 66.667px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Limited User
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/9.svg" style="width: 40px;height: 18px;margin-bottom:30px">
                        </div>
                        <div class="developtext">
                            In-app Deposit
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/10.svg" style="width: 60.526px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Copy-Trading
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/9.svg" style="width: 40px;height: 18px;margin-bottom:30px">
                        </div>
                        <div class="developtext">
                            Spread Betting
                        </div>
                    </div>
                </div>

                <div class="ctrader-row2">
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/13.svg" style="width: 37.5px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Seperate Brand
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/17.svg" style="width: 29.167px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            In-app Control
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/18.svg" style="width: 50.001px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            Expert Advisor
                        </div>
                    </div>
                    <div class="cont-wordnimg">
                        <div style="text-align: center;">
                            <img src="assets/image/product/broker/19.svg" style="width: 50px;height: 50px;margin-bottom:12px">
                        </div>
                        <div class="developtext">
                            30+ Indicators
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="broker13-mobile">
        <div class="setup-container-mobile">
            <div class="ctrater-col-1-mobile">
                <img src="assets/image/product/broker/26.svg">
                <div class="ctrader-brokerage-word">
                    cTrader Brokerage Setup
                </div>
            </div>

            <div class="under-line"></div>

            <div class="ctrader-content-mobile">
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/7.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Unlimited User
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/13.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Seperate Brand
                        </span>
                    </div>
                </div>

                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/8.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            In-app Deposit
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/17.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            In-app Control
                        </span>
                    </div>
                </div>

                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/10.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Copy-Trading
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/18.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Expert Advisor
                        </span>
                    </div>
                </div>

                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/12.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Spread Betting
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/19.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            60+ Indicators
                        </span>
                    </div>
                </div>
            </div>

        </div>

        
    </div>

    <div class="broker14-mobile">
        <div class="setup-container-mobile">
            <div class="ctrater-col-1-mobile">
                <img src="assets/image/product/broker/27.svg">
                <div class="ctrader-brokerage-word">
                    Meta Trader Brokerage Setup
                </div>
            </div>

            <div class="under-line"></div>

            <div class="ctrader-content-mobile">
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/7.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Limited User
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/13.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Seperate Brand
                        </span>
                    </div>
                </div>

                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/28.svg" style="width: 40px;height: 18px;margin-bottom: 15px;margin-top: 14px;">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            In-app Deposit
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/17.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            In-app Control
                        </span>
                    </div>
                </div>

                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/10.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            3rd Party
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/18.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Expert Advisor
                        </span>
                    </div>
                </div>

                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/28.svg" style="width: 40px;height: 18px;margin-bottom: 15px;margin-top: 14px;">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            Spread Betting
                        </span>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;align-items:center">
                    <div>
                        <img src="assets/image/product/broker/19.svg" style="width: 53.314px;height: 40px;margin-bottom:8px">
                    </div>
                    <div>
                        <span class="ctrader-content-mobile-p">
                            30+ Indicators
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    <div class="line5"></div>

    <div class="broker10">
        <div class="mobile-alignment-30px">
            <p class="getstart-p">4 Step To Get Started</p>
            <p class="getstart-p2">
                To begin a brokerage with Current Tech Industries. Align expertise and goals,
                acquire relevant licenses, integrate technology, establish partnerships,
                and prioritise exceptional customer service for growth and success.
            </p>
        </div>
    </div>

    <div class="broker11" style="display: flex;flex-wrap:wrap;gap:25px">
        <div class="getstart-container" > 
            <div style="display: flex; flex-direction:column">
                <div class="contact-align" style="margin-left:40px;margin-top:47px">
                    <p class="contact-p">
                        CONTACT
                    </p>
                    <p class="contact-p2">
                        Reach out to us today for any questions or
                        support related to our competitively priced
                        brokerage package. We're here to help!
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/20.svg" >
                </div>
            </div>
        </div>
        <div class="getstart-container3" >
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:40px;margin-top:47px">
                    <p class="contact-p">
                        
                        CUSTOMISATION
                        
                    </p>
                    <p class="contact-p2">
                        Customise our affordable brokerage package
                        to suit your individual needs and investment
                        preferences, ensuring an ideal fit for you.
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/21.svg">
                </div>
            </div>
        </div>
        <div class="getstart-container2" >
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:40px;margin-top:47px">
                    <p class="contact-p">
                        INSTALLATION
                    </p>
                    <p class="contact-p2">
                        Our process ensures secure hosting, rigorous testing,
                        and flawless functionality. Your personalized White 
                        Label Forex platform goes live, empowering your 
                        business to thrive in the dynamic forex market. 
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/22.svg" style="margin-top: -50px">
                </div>
            </div>
        </div>
        <div class="getstart-container2"> 
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:40px;margin-top:47px">
                    <p class="contact-p">
                        TRAINING
                    </p>
                    <p class="contact-p2">
                        We offer comprehensive training, encompassing 
                        technical support, marketing insights, and regular 
                        updates, ensuring your success in the market.
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/23.svg">
                </div>
            </div>
        </div>
    </div>

    <div class="broker11-mobile">
        <div class="mobile-alignment-30px">
            {{-- contact --}}
            <div class="getstart-container" > 
                <div style="display: flex; flex-direction:column">
                    <div class="contact-align" style="margin-left:40px;margin-top:47px">
                        <p class="contact-p">
                            CONTACT
                        </p>
                        <p class="contact-p2">
                            Reach out to us today for any questions or
                            support related to our competitively priced
                            brokerage package. We're here to help!
                        </p>
                    </div>
                    <img src="assets/image/product/broker/29.svg">
                </div>
            </div>
            {{-- customize --}}
            <div class="getstart-container" > 
                <div style="display: flex; flex-direction:column">
                    <div class="contact-align2" style="margin-left:40px;margin-top:47px">
                        <p class="contact-p">
                            CUSTOMISATION
                        </p>
                        <p class="contact-p2">
                            Customise our affordable brokerage 
                            package to suit your individual needs and 
                            investment preferences, ensuring an ideal 
                            fit for you.
                        </p>
                    </div>   
                        <img src="assets/image/product/broker/30.svg" >
                </div>
            </div>
            {{-- installation --}}
            <div class="getstart-container" > 
                <div style="display: flex; flex-direction:column">
                    <div class="contact-align3" style="margin-left:40px;margin-top:47px">
                        <p class="contact-p">
                            INSTALLATION
                        </p>
                        <p class="contact-p2">
                            Our process ensures secure hosting,
                            rigorous testing, and flawless functionality. 
                            Your personalized White Label Forex 
                            platform goes live, empowering your 
                            business to thrive in the dynamic forex 
                            market. 
                        </p>
                    </div>
                    <div style="margin-left: 19px;margin-right:19px;margin-bottom:18px;">
                        <img src="assets/image/product/broker/31.svg" >
                    </div>
                        
                </div>
            </div>
            {{-- training --}}
            <div class="getstart-container" > 
                <div style="display: flex; flex-direction:column">
                    <div class="contact-align2" style="margin-left:40px;margin-top:47px">
                        <p class="contact-p">
                            TRAINING
                        </p>
                        <p class="contact-p2">
                            We offer comprehensive training,
                            encompassing platform operation,
                            trading strategies, technical support, 
                            marketing insights, and regular updates, 
                            ensuring your success in the market.
                        </p>
                    </div>
                    <div style="margin-left: 19px;margin-right:19px;margin-bottom:18px;">
                        <img src="assets/image/product/broker/32.svg" >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="broker12">
        <p class="quota-p">Get Your Personalised Quota Today!</p>
    </div>
    <div class="broker12-mobile">
        <p class="quota-p">Get Your<br> Personalised Quota Today!</p>
    </div>

    <div class="personalise-container">
        <div style="padding: 48px">
                <div class="sup-row1-cont">   
            <div style="display: flex;align-items: center;justify-content: space-between;">
                <div style="margin-left: -60px;">
                    <img src="assets/image/product/broker/24.svg">
                </div>
                <div style="display: flex;flex-direction:column">
                    <div style="display: flex;justify-content: space-between;width: 430px; margin-top: -50px; margin-bottom: 60px;">
                        <div>
                            <label>
                                <input type="radio" name="ctrader" value="ctrader">
                                <span class="custom-radio"></span>
                                <span>cTrader</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="mt5" value="mt5"> 
                                <span class="custom-radio"></span>
                                <span>Metatrader 5</span>
                            </label>
                        </div>
                    </div>

                    <div style="display: flex;flex-direction:column">
                        <label>
                            <input type="radio" name="whitelabel" value="whitelabel">
                            <span class="custom-radio"></span>
                            <span style="font-weight: 300;">White Label Solutions</span>
                        </label>
                        <label>
                            <input type="radio" name="appdev" value="appdev"> 
                            <span class="custom-radio"></span>
                            <span>Payment Solutions</span>
                        </label>
                        <label>
                            <input type="radio" name="crmsolu" value="crmsolu"> 
                            <span class="custom-radio"></span>
                            <span>CRM Solutions</span>
                        </label>
                        <br>
                        <br>
                        <div>
                            <input type="text" class="form-control2" placeholder="Full Name">
                        </div>
                        <div>
                            <input type="text" class="form-control2" placeholder="Contact Number">
                        </div>
                        <div>
                            <input type="text" class="form-control2" placeholder="Email Address">
                        </div>
                        <br><br>
                        <div style="text-align: right;">
                            <button class="btn-submit">
                                <span class="submit-span">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>



@endsection