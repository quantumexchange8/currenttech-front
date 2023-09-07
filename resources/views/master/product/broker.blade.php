@extends('layouts.master')
@section('content')

<style>
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
    }
    .broker7 {
        margin-bottom: 36px;
    }
    .broker8 {
        margin-bottom: 36px;
    }
    .broker9 {
        margin-bottom: 76px;
    }
    .broker10 {
        margin-bottom: 96px;
    }

    @media screen and (max-width: 1280px) {
        .broker1 {
            width: 100%;
            height: auto;
        }
        .broker2 {
            width: 100%;
            height: auto;
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
            width: 100%;
            height: auto;
        }
        .broker5 {
            width: 100%;
            height: auto;
        }
        .broker6 {
            width: 100%;
            height: auto;
        }
        .broker7 {
            width: 100%;
            height: auto;
        }
        .broker8 {
            width: 100%;
            height: auto;
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
            width: 100%;
            height: auto;
        }
        .cont {
            width: 100%;
        }
        .cont img {
            width: 400px;
            margin-left: 20px;
        }
        .cont-2-1 {
            width: 100%;
        }
        .cont-2-1 img {
            width: 450px;
            height: 450px;
            margin-left: 20px;
            margin-top: -60px;
        }
        .ct-box {
            margin-left: 40px;
            margin-right: 20px;
        }
        .cont2 {
            width: 100%;
        }

        .cont2-2 {
            width: 100%;
        }
        .cont2-2 img {
            width: 450px;
            height: 450px;
            margin-left: 20px;
            margin-top: -60px;
        }
        .package-p {
            width: 100%;
        }
        .package-p2 {
            width: 100%;
        }
        .getstart-container {

        }
        .broker12 {
            width: 100%;
        }
        .quota-p {
            width: 100%;
        }
        .personalise-container {
            width: 100%;
        }
        .personalise-container img {
            width: 400px;
            height: 400px;
            margin-left: -15px;
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
        .broker6 {
            margin-left: 250px;
            margin-right: 250px;
        }
        /* .broker7 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        .broker8 {
            margin-left: 250px;
            margin-right: 250px;
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
            width: 100%;
            height: auto;
        }
    }

    @media screen and (min-width: 2000px) {
        .broker1 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker2 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker3 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker4 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker5 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker6 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker7 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .broker8 {
            margin-left: 350px;
            margin-right: 350px;
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
        .broker1 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker2 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker3 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker4 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker5 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker6 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker7 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .broker8 {
            margin-left: 500px;
            margin-right: 500px;
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
        .broker1 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker2 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker3 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker4 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker5 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker6 {
            margin-left: 650px;
            margin-right: 650px;
        }

        .broker7 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .broker8 {
            margin-left: 650px;
            margin-right: 650px;
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

<div class="main-content3" style="margin-top:120px;">
    <div class="broker1">
        <p class="build-p">
            Building Bridges of Wealth
        </p>
    </div>
    
    <div class="broker2">
        <p class="build2">
            Connecting Opportunities, Empowering Prosperity. Your Gateway to <br>
            Financial Success, Where Expertise Meets Innovation. Uniting Investors<br>
            and Markets for a Flourishing Future. Discover the Power of Partnership<br>
            with our Premier Brokerage Services.
        </p>
    </div>

    <div class="broker3">
        <img src="assets/image/product/broker/1.svg">
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
                    CT White Label Solutions
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
            
            <div class="ct-box">
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

    <div class="broker8">
        <div class="cont2-2">
            <img src="assets/image/product/broker/4.svg">
            <div class="ct-box" >
                <p class="ct-p">
                    CRM Solutions
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
        <div>
            <p class="package-p2">
                Introducing our comprehensive brokerage package, designed for seamless investing. <br>
                Leverage our expertise, technology, and support for your brokerage. Establish your brand <br>
                and expand your business with confidence and ease. Start your journey to financial <br>
                success with our tailored brokerage package now.
            </p>
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;">
        <div>
            <img src="assets/image/product/broker/5.svg">
            <div>
                <p class="ctrade-p">cTrader</p>
            </div>
        </div>
        <div>
            <img src="assets/image/product/broker/6.svg">
            <div>
                <p class="mt5-p">MT5</p>
            </div>
        </div>
    </div>

    <div class="line2"></div>

    <div class="broker9">
        <p class="feature-p">Features</p>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
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
            <img src="assets/image/product/broker/12.svg">
            <div>
                 <p class="feat-p-wording">Seperate Brand Apps</p>
            </div>
           
        </div>
        <div style="text-align: center;width:226px;height:60px">
            <img src="assets/image/product/broker/9.svg" >
        </div>
    </div>

    <div style="display: flex;width: 1257px;align-items: center;justify-content: space-evenly;margin-bottom: 98px;">
        <div style="text-align: center">
            <img src="assets/image/product/broker/14.svg">
            <div>
                 <p class="feat-p-wording">In-app Chat</p>
            </div>
           
        </div>
        <div style="text-align: center;width:167px;">
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
    </div>

    <div class="line2"></div>

    <div class="broker10">
        <p class="getstart-p">How To Get Started</p>
        <p class="getstart-p2">
            To begin a brokerage with Current Tech Industries. Align expertise and goals,<br>
            acquire relevant licenses, integrate technology, establish partnerships,<br>
            and prioritise exceptional customer service for growth and success.
        </p>
    </div>

    <div class="broker11" style="display: flex">
        <div class="getstart-container" style="margin-right:28.73px;margin-bottom:28.73px"> 
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">CONTACT</p>
                    <p class="contact-p2">
                        Reach out to us today for any questions or
                        support related to our competitively priced
                        brokerage package. We're here to help!
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/20.svg" >
                </div>
                <div style="margin-top: -50px;text-align:end;margin-right:35px">
                    <button class="btn-getinfo">
                        <span class="btn-getinfo-p">GET INFO</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="getstart-container2" style="margin-bottom:28.73px">
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">CUSTOMISATION</p>
                    <p class="contact-p2">
                        Customise our affordable brokerage package
                        to suit your individual needs and investment
                        preferences, ensuring an ideal fit for you.
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/21.svg">
                </div>
                <div style="margin-top: -50px;text-align:end;margin-right:35px">
                    <button class="btn-getinfo">
                        <span class="btn-getinfo-p">GET INFO</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div style="display: flex">
        <div class="getstart-container2" style="margin-right:28.73px">
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">INSTALLATION</p>
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
                <div style="margin-top: -50px;text-align:end;margin-right:35px">
                    <button class="btn-getinfo">
                        <span class="btn-getinfo-p">GET INFO</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="getstart-container2"> 
            <div style="display: flex; flex-direction:column">
                <div style="margin-left:36px">
                    <p class="contact-p">TRAINING</p>
                    <p class="contact-p2">
                        We offer comprehensive training, encompassing 
                        technical support, marketing insights, and regular 
                        updates, ensuring your success in the market.
                    </p>
                </div>
                <div>     
                    <img src="assets/image/product/broker/23.svg">
                </div>
                <div style="margin-top: -50px;text-align:end;margin-right:35px">
                    <button class="btn-getinfo">
                        <span class="btn-getinfo-p">GET INFO</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="broker12">
        <p class="quota-p">Get Your Personalised Quota Today!</p>
    </div>

    <div class="personalise-container">
        <div style="padding: 48px">
            <div style="display: flex;align-items: center;justify-content: space-between;">
                <div>
                    <img src="assets/image/product/broker/24.svg">
                </div>
                <div style="display: flex;flex-direction:column">
                    <div style="display: flex;justify-content: space-between;margin-bottom:64px">
                        <div>
                            <input type="radio"> <span class="ctrade-span-word">cTrader</span>
                        </div>
                        <div>
                            <input type="radio"> <span class="ctrade-span-word">Metatrader 5</span>
                        </div>
                    </div>

                    <div style="display: flex;flex-direction:column">
                        <div>
                            <input type="radio"> <span class="ctrade-span-word">White Label Solutions</span>
                        </div>
                        <div>
                            <input type="radio"> <span class="ctrade-span-word">Payment Solutions</span>
                        </div>
                        <div>
                            <input type="radio"> <span class="ctrade-span-word">CRM Solutions</span>
                        </div>
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



@endsection