@extends('layouts.master')
@section('content')
<br>
<br>
<br>

<style>
    .webapp1 {
        text-align: center;
    }
    .webapp2 {
        text-align: center;
        margin-bottom: 136px;
        margin-left: 250px;
        margin-right: 250px;
    }

    .webapp4 {
        text-align: left;
    }

    .webapp5 {
        display: flex;
        text-align: center;
        margin-bottom: 90px
    }

    .webapp6 {
        text-align: left;
        margin-bottom: 40px
    }

    .webapp7 {
        display: flex; 
        align-items:center;
        width: 1507px;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .webapp8 {
        display: flex; 
        align-items:center;
        width: 1507px;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .webapp9 {
        margin-bottom: 40px
    }

    .webapp10 {
        display: flex;
        margin-bottom: 96px;
    }

    .webapp11 {
        margin-bottom: 80px
    }
    
    .webapp12 {
        display: flex;
    }

    .webapp13 {
        margin-bottom: 90px;
        display: flex;
    }

    .ecomm-tem {
        display: flex;
        flex-direction: column;
    }

    .ecomm-margin {
        display: flex;   
        flex-direction:column;
        margin-left: 18px;
        width: 240px;
    }

    .ecomm-main-margin {
        display: flex;
        align-items: center;
        margin-left: 10px;
    }

    @media screen and (max-width: 1280px) {
        .webapp1 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp p {
            width: 100%;
            height: auto;
        }
        .webapp2 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
        }
        .webapp2 p {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp3 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }
        .webapp4 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp4 p {
            width: 100%;
            height: auto;
        }

        .webapp5 {
            width: 100%;
            height: auto;
            margin-bottom: 96px;
        }

        .webapp5 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp6 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp6 .temp {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp6 p {
            width: 100%;
            height: auto;
        }
        .ecomm-tem {
            display: flex;
            flex-direction: row;
        }
        .webapp7 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            flex-direction: column;
            margin-left: 10px;
        }
        .webapp8 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            flex-direction: column;
            margin-left: 30px;
        }
        .webapp10 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp10 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp11 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp11 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp12 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp12 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp13 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp13 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }
        .ecomm-margin {
            display: flex;   
            flex-direction:column;
            margin-left: 18px;
        }
        .ecomm-main-margin {
            margin-bottom: 30px;
        }

        .viewmore-a {
            width: 120px;
        }
    }

    @media screen and (max-width: 1600px) {
        .webapp1 {
            margin-left: 250px;
            margin-right: 250px;
        }
        /* .webapp2 {
            margin-left: 250px;
            margin-right: 250px;
        } */
        .webapp3 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }
        .webapp4 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp4 p {
            width: 100%;
            height: auto;
        }

        .webapp5 {
            width: 100%;
            height: auto;
            margin-bottom: 96px;
        }

        .webapp5 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp6 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp6 .temp {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp6 p {
            width: 100%;
            height: auto;
        }
        .webapp7 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp8 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp10 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp10 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp11 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp11 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp12 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp12 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .webapp13 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }
        .webapp13 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }
    }

    @media screen and (min-width: 2000px) {
        .webapp1 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp2 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp3 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp4 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp5 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp6 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp7 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp8 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp10 {
            margin-left: 350px;
            margin-right: 350px;
        }

        .webapp11 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp12 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp13 {
            margin-left: 350px;
            margin-right: 350px;
        }
    }

    @media screen and (min-width: 3000px) {
        .webapp1 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp2 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp3 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp4 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp5 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp6 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp7 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp8 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp10 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp11 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp12 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp13 {
            margin-left: 500px;
            margin-right: 500px;
        }
    }

    @media screen and (min-width: 3800px) {
        .webapp1 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp2 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp3 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp4 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp5 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp6 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp7 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp8 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp10 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp11 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp12 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp13 {
            margin-left: 650px;
            margin-right: 650px;
        }
    }
</style>

<div class="main-content2" style="margin-top: 105px;">
    <div class="webapp1">
        <p class="powerhouse-p">
            The Powerhouse for Your Web and App Needs
        </p>
    </div>
     
    <div class="webapp2">
        <p class="powerhouse-p2">
            Welcome to the realm of innovative web and app development. Embrace captivating designs and user-centric experiences that elevate your digital presence. Unleash the potential of your online venture with our expert solutions. Join us now!
        </p>
    </div>
     
    <div class="webapp3">
        <img src="assets/image/product/webapp/1.svg" style="margin-bottom: 140px">
    </div>
     
     <div class="line1"></div>

     <div class="webapp4">
        <p class="embrace-p">
            Embrace the Trendy and Inspirational
        </p>
     </div>

     <div class="webapp5">
        <div>
            <img src="assets/image/product/webapp/2.svg" style="margin-right: 12px">
        </div>
        <div>
            <img src="assets/image/product/webapp/3.svg" style="margin-right: 12px;margin-left: 12px">
        </div>
        <div>
            <img src="assets/image/product/webapp/4.svg" style="margin-left: 12px">
        </div>
        
     </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">e-Commerce Template</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>
    
    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="webapp8"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Furnatur</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Furniture Template Kit</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Furnatur</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Furniture Template Kit</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Marketin</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Business Startup Template</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    

    <div class="line1" style="margin-top:66px"></div>

    <div class="webapp9" style="width: 1507px;">
        <p class="modern-p">
            Web Templates for the Modern You
        </p>
    </div>

    <div class="webapp10">
        <div>
            <img src="assets/image/product/webapp/10.svg" style="margin-right: 12px">
        </div>
        <div>
            <img src="assets/image/product/webapp/11.svg" style="margin-right: 12px">
        </div>
        <div>
            <img src="assets/image/product/webapp/12.svg" style="margin-right: 12px">
        </div>
        <div>
            <img src="assets/image/product/webapp/13.svg" style="margin-right: 12px">
        </div>
    </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Company Web Template</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>

    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="webapp8"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Furnatur</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Furniture Template Kit</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Road Pedal</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Bike Store Section</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Marketin</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Business Startup Template</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    

    <div class="line1" style="margin-top:66px"></div>

    <div class="webapp4">
        <p class="transform-p">
            Transform Your Art Into a Digital Empire
        </p>
    </div>

    <div class="webapp11">
        <img src="assets/image/product/webapp/14.svg">
    </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Forex / NFT / Cryptocurrency Web 3.0 Template</p>
            </div>
            <div class="viewmore-a">
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>
    
    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="webapp8"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Furnatur</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Furniture Template Kit</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Road Pedal</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Bike Store Section</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Marketin</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Business Startup Template</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    

    <div class="line1" style="margin-top:66px"></div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Customer Relationshio Management made Easy</p>
            </div>
            <div class="viewmore-a">
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>
    

    <div class="webapp13">
        <div>
            <img src="assets/image/product/webapp/15.svg" style="margin-right:31px">
        </div>
        <div>
            <img src="assets/image/product/webapp/16.svg">
        </div>
        
    </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">CRM & Admin Template</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>
    

    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="webapp8"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Furnatur</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Furniture Template Kit</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Road Pedal</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Bike Store Section</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Marketin</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Business Startup Template</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Your APP Adventure Starts Here</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>
    

    <div class="webapp12">
        <div>
            <img src="assets/image/product/webapp/17.svg" style="margin-right:20px">
        </div>
        <div>
            <img src="assets/image/product/webapp/18.svg" style="margin-right:20px">
        </div>
        <div>
            <img src="assets/image/product/webapp/19.svg">
        </div>
        
    </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Apple / Google / iPad & Mobile Apps Development</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div>
    

    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="webapp8"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Furnatur</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Furniture Template Kit</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Road Pedal</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Bike Store Section</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg">
                <div class="ecomm-margin">
                    <div style="margin-bottom: 10px;">
                        <p class="fashion-store">Marketin</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="clothing">Business Startup Template</p>
                    </div>
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="line1" style="margin-top:66px"></div>
</div>




@endsection