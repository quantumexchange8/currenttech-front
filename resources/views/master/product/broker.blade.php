@extends('layouts.master')
@section('content')

<style>
    .vertical-line {
        border-left: 1px solid #000; /* Adjust the color and width as needed */
    height: 100%;
}
    .broker1 {
        text-align: center;
        margin-bottom: 36px;
    }

    .borker2 {
        text-align: center;
        margin-bottom: 136px;
    }

    .broker3 {
        margin-bottom: 136px;
    }
    .broker4 {
        margin-bottom: 36px;
        text-align: center;
    }
    .broker5 {
        text-align: center;
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
        margin-bottom: 36px;
        width: 100%;
    }
    .broker9 {
        margin-bottom: 76px;
        width: 100%;
    }
    .broker10 {
        margin-bottom: 96px;
        width: 100%;
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

    hr {
            height: 400px;
            width: 0px;
            color: #666666;
        }

    @media screen and (max-width: 1280px) {
        .build-p {
            font-size: 40px;
            margin-bottom: 20px;
        }
        .broker1 {
            width: 100%;
            height: auto;
        }
        .broker2 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }
        .broker3 {
            width: 100%;
            height: auto;
        }
        .broker3 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .broker4 {
            margin-left: -100px;
            width: 100%;
            height: auto;
        }
        .broker5 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }
        .broker6 {
            width: 85%;
            height: auto;
            margin-right: 20px;
        }
        .broker7 {
            width: 85%;
            height: auto;
            margin-right: 20px;
        }
        .broker8 {
            width: 85%;
            height: auto;
            margin-right: 20px;
        }
        .broker9 {
            width: 100%;
            height: auto;
            margin-right: 20px;
        }
        .broker10 {
            width: 100%;
            height: auto;
            margin-right: 20px;
        }
        .broker10 p {
            width: 85%;
            margin-left: 100px;
        }
        .cont {
            width: 100%;
            height: 320px;
            margin-bottom: 100px;
        }
        .cont img {
            width: 450px;
            height: 450px;
            margin-left: -20px;
            margin-top: -40px;

        }
        .cont-2-1 {
            width: 100%;
            height: 320px;
            margin-bottom: 100px;
        }
        .cont-2-1 img {
            width: 400px;
            height: 400px;
            margin-left: -70px;
            margin-top: -40px;
        }
        .ct-box {
            margin-left: 40px;
            margin-right: 20px;
        }
        .ct-box2 {
            margin-left: 40px;
            margin-right: 20px;
        }
        .cont2 {
            width: 100%;
        }

        .cont2-2 {
            width: 100%;
            height: 320px;
        }
        .cont2-2 img {
            width: 350px;
            height: 350px;
            margin-left: 10px;
            margin-top: -40px;
        }
        .package-p {
            width: 100%;
        }
        .package-p2 {
            width: 85%;
            font-size: 18px;
            text-align: left;
            margin-left: 40px;
        }
        .getstart-container {

        }
        .broker12 {
            width: 100%;
        }
        .quota-p {
            width: 80%;
            margin-left: 80px;
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
            font-size: 19px;
            width: 90%;
        }
        .broker-p2 {
            font-size: 18px;
            text-align: left;
            margin-left: 70px;
            margin-right: 10px;
            width: 100%;
        }
        .getinfo-align {
            margin-top: -50px;
            text-align:end;
            margin-right:35px;
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
        .ct-p {
            width: 445px;
        }
        .ct-p6 {
            width: 420px;
        }
        .getstart-p2 {
            font-size: 14px;
        }
        .effective {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            width: 693px;
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
            margin-left: 350px;
            margin-right: 350px;
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
            margin-left: 500px;
            margin-right: 500px;
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
            margin-left: 650px;
            margin-right: 650px;
        }
    }
</style>

<div class="main-content3" style="margin-top:170px;">
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
        <p class="broker-p">
            Brokerage Setup Includes
        </p>
    </div>
    
    <div class="broker5">
        <p class="broker-p2">
            Get a White Label Solutions for your brokerage, including customised and rebranded 
            services with advanced tech. Enjoy secure payment solutions for global transactions and 
            efficient financial services. Utilise CRM Solutions for optimized customer interactions,
            sales, and support
        </p>
    </div>
    
    <div class="broker6">
        <div class="cont">
            <img src="assets/image/product/broker/2.svg">
            <div class="ct-box">
                <p class="ct-p">
                    <span class="exp-color">
                    White Label Solutions
                    </span>
                </p>
                <p class="ct-p2">
                    Customised and rebrand
                    solutions for brokerage
                    with end-to-end support
                    and advanced technology.
                </p>
            </div>
        </div>
    </div>
    <div class="broker7">
        <div class="cont-2-1">
            <div class="ct-box2">
                <p class="ct-p4">
                    <span class="exp-color">
                    Payment Solutions
                    </span>
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

    <div class="broker8">
        <div class="cont2-2">
            <img src="assets/image/product/broker/4.svg">
            <div class="ct-box" >
                <p class="ct-p6">
                    <span class="exp-color">
                    CRM Solutions
                    </span>
                </p>
                <p class="ct-p5">
                    Integrated software for 
                    managing customer interactions, 
                    optimising relationships, and 
                    enhancing sales effectively.
                </p>
            </div>
        </div>
    </div>
    
    <div style="display: flex;justify-content:center;flex-direction:column;margin-bottom: 80px;">
        <div>
            <p class="package-p">
                Our cost-effective brokerage package
            </p>
        </div>
        <div style="display: flex;justify-content: center;">
            <p class="package-p2">
                Introducing our comprehensive brokerage package, designed for seamless investing. 
                Leverage our expertise, technology, and support for your brokerage. Establish your brand 
                and expand your business with confidence and ease. Start your journey to financial
                success with our tailored brokerage package now.
            </p>
        </div>
    </div>

    {{-- <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;">
        <div>
            <img src="assets/image/product/broker/5.svg" style="width: 130px;">
            <div>
                <p class="ctrade-p">cTrader</p>
            </div>
        </div>
        <div>
            <img src="assets/image/product/broker/6.svg" style="width: 130px;">
            <div>
                <p class="mt5-p">MT5</p>
            </div>
        </div>
    </div> --}}

    {{-- <div class="line2"></div> --}}

    {{-- <div class="broker9">
        <p class="feature-p">Features</p>
    </div> --}}
    <div class="develop55">
        <div class="effective-container">
            <div class="effective">
                <table>
                    <tr>
                        <div style="padding: 50px;">
                            <img src="assets/image/product/broker/5.svg" style="width: 100px; height: 100px;">
                            <div class="developtext">
                                cTrader <br> Brokerage Setup
                            </div>
                        </div>
                        <hr>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/7.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Unlimited User
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/8.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                In-app deposit
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/10.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Copy-Trading
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/12.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Spread Betting
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/13.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Seperate Brand
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/17.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                            In-app Control
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/18.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Expert Advisor
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/19.svg" style="width: 100px; height: auto;">
                            </div>
                            <div class="developtext">
                            60+ Indicators
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="develop55">
        <div class="effective-container">
            <div class="effective">
                <table>
                    <tr>
                        <div style="padding: 50px;">
                            <img src="assets/image/product/broker/6.svg" style="width: 100px; height: 100px;">
                            <div class="developtext">
                                Meta Trader <br> Brokerage Setup
                            </div>
                        </div>
                        <hr>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/7.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Limited User
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/9.svg" style="width: 50px; height: 80px;">
                            </div>
                            <div class="developtext">
                                In-app deposit
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/10.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Copy-Trading
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/9.svg" style="width: 50px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Spread Betting
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/13.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Seperate Brand
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/17.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                            In-app Control
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/18.svg" style="width: 100px; height: 80px;">
                            </div>
                            <div class="developtext">
                                Expert Advisor
                            </div>
                        </td>
                        <td style="padding: 50px;">
                            <div style="text-align: center;">
                                <img src="assets/image/product/broker/19.svg" style="width: 100px; height: auto;">
                            </div>
                            <div class="developtext">
                            30+ Indicators
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/7.svg">
            <div>
                 <p class="feat-p-wording">Unlimited User</p>
            </div>
           
        </div>
        <div style="text-align: center">
            <img src="assets/image/product/broker/7.svg">
            <div>
                <p class="feat-p-wording">Limited User</p>
            </div>
             
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/8.svg">
            <div>
                 <p class="feat-p-wording">In-app Deposit</p>
            </div>
           
        </div>
        <div style="text-align: center;width:156px;height:60px">
            <img src="assets/image/product/broker/9.svg" >
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/10.svg">
            <div>
                 <p class="feat-p-wording">Copy-Trading</p>
            </div>
           
        </div>
        <div style="text-align: center;width:167px;">
            <img src="assets/image/product/broker/11.svg" >
            <div>
                <p class="feat-p-wording">3rd Party Plugin</p>
           </div>
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/12.svg">
            <div>
                 <p class="feat-p-wording">Spread Betting</p>
            </div>
           
        </div>
        <div style="text-align: center;width:156px;height:60px">
            <img src="assets/image/product/broker/9.svg" >
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/25.svg">
            <div>
                 <p class="feat-p-wording">Seperate Brand Apps</p>
            </div>
           
        </div>
        <div style="text-align: center;width:226px;height:60px">
            <img src="assets/image/product/broker/9.svg" >
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center;width:197px">
            <img src="assets/image/product/broker/14.svg">
            <div>
                 <p class="feat-p-wording">In-app Chat</p>
            </div>
           
        </div>
        <div style="text-align: center;width:197px">
            <img src="assets/image/product/broker/15.svg" >
            <div>
                <p class="feat-p-wording">MQL5 Community</p>
           </div>
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/17.svg">
            <div>
                 <p class="feat-p-wording">In-app Control</p>
            </div>
           
        </div>
        <div style="text-align: center;width:167px;">
            <img src="assets/image/product/broker/11.svg" >
            <div>
                <p class="feat-p-wording">3rd Party Plugin</p>
           </div>
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/18.svg">
            <div>
                 <p class="feat-p-wording">Expert Advisor</p>
            </div>
           
        </div>
        <div style="text-align: center;width:167px;">
            <img src="assets/image/product/broker/18.svg" >
            <div>
                <p class="feat-p-wording">Expert Advisor</p>
           </div>
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/19.svg">
            <div>
                 <p class="feat-p-wording">60+ Indicators</p>
            </div>
           
        </div>
        <div style="text-align: center;width:167px;">
            <img src="assets/image/product/broker/19.svg" >
            <div>
                <p class="feat-p-wording">30+ Indicators</p>
           </div>
        </div>
    </div> --}}
    
    <div class="line2"></div>

    <div class="broker10">
        <p class="getstart-p">4 Tips To Get Started</p>
        <p class="getstart-p2">
            To begin a brokerage with Current Tech Industries. Align expertise and goals,
            acquire relevant licenses, integrate technology, establish partnerships,
            and prioritise exceptional customer service for growth and success.
        </p>
    </div>

    <div class="broker11" style="display: flex">
        <div class="getstart-container" style="margin-right:14px;margin-bottom:28.73px"> 
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">
                        <span class="exp-color">
                            CONTACT
                        </span>
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
                {{-- <div class="getinfo-align">
                    <button class="btn-getinfo">
                        <a href="{{ route('support') }}" class="explore-link">
                            <span class="btn-getinfo-p">GET INFO</span>
                        </a>
                    </button>
                </div> --}}
            </div>
        </div>
        <div class="getstart-container3" style="margin-bottom:28.73px;margin-left:14px">
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">
                        <span class="exp-color">
                            CUSTOMISATION
                        </span>
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
                {{-- <div class="getinfo-align2">
                    <button class="btn-getinfo">
                        <a href="{{ route('support') }}" class="explore-link">
                            <span class="btn-getinfo-p">GET INFO</span>
                        </a>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="broker11" style="display: flex">
        <div class="getstart-container2" style="margin-right:28.73px">
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">
                        <span class="exp-color">
                            INSTALLATION
                        </span>
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
                {{-- <div class="getinfo-align3">
                    <button class="btn-getinfo">
                        <a href="{{ route('support') }}" class="explore-link">
                            <span class="btn-getinfo-p">GET INFO</span>
                        </a>
                        
                    </button>
                </div> --}}
            </div>
        </div>
        <div class="getstart-container2"> 
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">
                        <span class="exp-color">
                            TRAINING
                        </span>
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
                {{-- <div class="mgn-btn">
                    <button class="btn-getinfo">
                        <a href="{{ route('support') }}" class="explore-link">
                            <span class="btn-getinfo-p">GET INFO</span>
                        </a>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="broker12">
        <p class="quota-p">Get Your Personalised Quota Today!</p>
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
                            <span>White Label Solutions</span>
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