@extends('layouts.master')
@section('content')

<style>
    .detail-1 {
    width: 1257px;
    display: flex;
    }
    .detail-2 {
        max-width: 1100px;
        margin-bottom: 66px;
    }
    .detail-5 {
        width: 1100px;
    }
    .detail-5 .details-p{
        font-size: 20px;
        max-width: 100%;
    }
    .detail-6 {
        width: 1257px;
        margin-bottom: 66px;
    }
    .detail-7 {
        width: 1100px;
        margin-bottom: 66px;
        display: flex;
    }
    .btn-preview {
        width: 134px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 35px;
        border: none;
        margin-right: 41px;
        background: linear-gradient(0deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }

    .btn-preview span {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px; /* 250% */
    }

    .btn-getfree {
        width: 134px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 35px;
        border: none;
        background: linear-gradient(0deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }

    .btn-getfree span {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px; /* 250% */
    }

    .detail-line {
        width: 1257px;
        height: 1.5px;
        background: #333;
        margin-top: 66px;
        margin-bottom: 66px;
    }

    .detail-row1 {
        display: flex;
    }

    .detail-container1 {
        width: 199px;
        height: 125px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-right: 12.5px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .detail-container2 {
        width: 199px;
        height: 125px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-right: 12.5px;
        margin-left: 12.5px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .detail-container3 {
        width: 199px;
        height: 125px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-left: 12.5px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .rating-container {
        width: 1255px;
        height: 168px;
        flex-shrink: 0;
        border-radius: 10px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%); 
    }

    .detail-heading {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .detail-heading2 {
        color: #888;
        font-family: SF Pro Text;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .details-p {
        color: #888;
        font-family: SF Pro Text;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 150% */
        width: 1255px;
    }

    .detail-6 li {
        color: #888;
        font-family: SF Pro Text;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 150% */
    }

    .detail-social-cont {
        width: 539px;
        height: 184px;
        flex-shrink: 0;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }   
    .img-max-width {
        max-width: 100%; 
        height: auto; 
    }
    
    .webapp1 {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: auto;
    }
    .webapp2 {
        text-align: center;
        margin-bottom: 136px;
        margin-left: 250px;
        margin-right: 250px;
    }

    .webappfont {
        color: #888;
        font-family: SF Pro;
        font-size: 14px;
        margin: 0;
    }

    .webapp3 img {
        width: 100%;
        height: auto;
        max-width: 100%;
    }

    .webapp4 {
        text-align: left;
        width: 100%;
    }

    .webapp5 {
        display: flex;
        text-align: center;
        margin-bottom: 90px;
        width: 100%;
    }

    .webapp6 {
        text-align: left;
        margin-bottom: 40px
    }

    .webapp7 {
        display: flex; 
        align-items:center;
        /* width: 100%; */
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .webapp8 {
        display: flex; 
        align-items:center;
        /* width: 100%; */
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
        width: 100%
    }

    .ecomm-margin {
        display: flex;   
        flex-direction:column;
        margin-left: 28px;
        margin-right: 10px;
        width: 170px;
    }

    .ecomm-main-margin {
        display: flex;
        align-items: center;
        margin-left: 10px;
    }
    .ecomm-main-margin-1 {
        display: flex;
        align-items: center;
    }

    @media screen and (max-width: 1280px) {
    /* .detail-4 p{
        margin-top: 50px;
    }
    .detail-4 img {
        max-width: 100%;
    }

    .detail-5 {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 20px; 
    }

    .detail-5 .details-p {
        font-size: 10px; 
        max-width: 86%;
    }

    .detail-6 .detail-heading,
    .detail-6 li {
        font-size: 10px;
    }

    .detail-heading2 {
        font-size: 13px; 
    }
    .detail-container1 {
        max-width: 100%;
    }
    .detail-1 p{
        font-size: 20px;
    }
    .detail-row1 {
        display: flex;
        margin-left: -450px;
    }
    .detail-container1,
    .detail-container2,
    .detail-container3 {
        width: 32%;
    } */
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
        .webappfont {
        font-size: 10px; 
        }
        .webapp4 {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp4 p {
            width: 100%;
            height: auto;
            font-size: 16px;
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
            width: 100%;
        }
        .webapp7 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 10px;
        }
        .webapp8 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            flex-direction: column;
            margin-left: 10px;
        }
        .webapp9 p {
            font-size: 16px;
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
            margin-left: 0px;
            justify-content: space-evenly;
            width: 100%;
        }
        .ecomm-main-margin-1 {
            margin-bottom: 30px;
            justify-content: space-evenly;
            width: 100%;
        }
        .viewmore-a {
            width: 120px;
        }
        .fashion-store {
            font-size: 20px;
        }
        .clothing {
            font-size: 14px;
        }
        .powerhouse-p2 {
            font-size: 12px;
        }
    }

    @media screen and (min-width: 2000px) {
        .webapp1 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp2 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp3 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp4 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp5 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp6 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .webapp7 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp8 {
            /* margin-left: 350px;
            margin-right: 350px; */
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
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp2 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp3 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp4 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp5 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp6 {
            margin-left: 500px;
            margin-right: 500px;
        }
        .webapp7 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp8 {
            /* margin-left: 500px;
            margin-right: 500px; */
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
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp2 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp3 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp4 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp5 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp6 {
            margin-left: 650px;
            margin-right: 650px;
        }
        .webapp7 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp8 {
            /* margin-left: 650px;
            margin-right: 650px; */
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

<div class="main-content2" style="margin-top: 170px;">
    <div class="webapp1">
        <p class="powerhouse-p">
            The Powerhouse for Your Web and App Needs
        </p>
    </div>
     
    <div class="webapp2">
        <p class="powerhouse-p2">
            Welcome to the realm of innovative web and app development. 
            Embrace captivating designs and user-centric experiences that
             elevate your digital presence. Unleash the potential of your 
             online venture with our expert solutions. Join us now!
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

     <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">e-Commerce Template</p>
            </div>
            {{-- <div>
                <a href="{{ route('seeall') }}" class="view-more">View More</a>
            </div> --}}
        </div>
    </div>
    
     <div class="webapp5">
        <div style="margin-right: 12px">
            <img src="assets/image/product/webapp/2.svg" style="width: 100%">
        </div>
        <div style="margin-right: 12px;margin-left: 12px">
            <img src="assets/image/product/webapp/3.svg" style="width: 100%">
        </div>
        <div style="margin-left: 12px">
            <img src="assets/image/product/webapp/4.svg" style="width: 100%">
        </div>
        
    </div>
    
    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin-1">
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                {{-- <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a> --}}
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                {{-- <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a> --}}
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
                {{-- <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a> --}}
            </div>
        </div>

        <div class="webapp8"> 
            <div class="ecomm-main-margin-1">
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                {{-- <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a> --}}
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                {{-- <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a> --}}
            </div>
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
                {{-- <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a> --}}
            </div>
        </div>
    </div>

    

    <div class="line1" style="margin-top:66px"></div>

    {{-- <div class="webapp9" style="width: 1507px;">
        <p class="modern-p">
            Web Templates for the Modern You
        </p>
    </div>

    <div class="webapp10">
        <div style="margin-right: 10px">
            <img src="assets/image/product/webapp/10.svg" style="margin-right: 12px;width: 100%;">
        </div>
        <div style="margin-right: 10px">
            <img src="assets/image/product/webapp/11.svg" style="margin-right: 12px;width: 100%;">
        </div>
        <div style="margin-right: 10px">
            <img src="assets/image/product/webapp/12.svg" style="margin-right: 12px;width: 100%;">
        </div>
        <div>
            <img src="assets/image/product/webapp/13.svg" style="margin-right: 12px;width: 100%;">
        </div>
    </div> --}}

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Essential Trending Products</p>
            </div>
            <div>
                {{-- <p class="ecorm">e-Commerce Template</p> --}}
            </div>
            {{-- <div>
                <a href="" class="view-more">View More</a>
            </div> --}}
        </div>
    </div>
    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecormm">Unlock the ultimate potential of your online presence with our 
                    premium web template products! Stay on the cutting edge with 
                    trending designs, unrivalled functionality, and seamless 
                    customisation options. Elevate your website today!</p>
            </div>
            {{-- <div>
                <a href="{{ route('seeall') }}" class="view-more">View More</a>
            </div> --}}
        </div>
    </div>
    <div class="webapp10">
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/1.png" style="margin-right: 12px;width: 100%;">
            </a>
            <div style="margin-top: 36px">
                <p class="webappfont">Carbon
                </p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:222px">
                    Your All-in-One Website
                    Template Solution
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    Minimalist Template
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div>
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/2.png" style="margin-right: 12px;width: 100%;">
            </a>
            <div style="margin-top: 36px" class="webapp10-font">
                <p class="webappfont">Zivi</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:222px">
                    A Modern Website Template
                    Collection
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                     Creative Theme 
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div>
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/3.png" style="margin-right: 12px;width: 100%;">
            </a>
            <div style="margin-top: 36px" class="webapp10-font">
                <p class="webappfont">Livesay</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:222px">
                    Elevate Your Web Design
                    with High-End Templates
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    Event Conference
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div>
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/4.png" style="margin-right: 12px;width: 100%;">
            </a>
            <div style="margin-top: 36px" class="webapp10-font">
                <p class="webappfont">Archi</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:222px">
                    Painting Your Online Vision
                    with Stunning Templates
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    E-Commerce Theme
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content18" style="margin-top: 155px;">
        <div class="detail-3">
            <div class="detail-marquee-content" style="display: flex">
                <div class="detail-marquee-item" style="margin-right: 10px;">
                    <img src="assets/image/product/detail/1.png" class="img-max-width">
                </div>
                <div class="detail-marquee-item" style="margin-right: 10px;">
                    <img src="assets/image/product/detail/2.png" class="img-max-width">
                </div>
                <div class="detail-marquee-item" style="margin-right: 10px;">
                    <img src="assets/image/product/detail/3.png" class="img-max-width">
                </div>
                <div class="detail-marquee-item" style="margin-right: 10px;">
                    <img src="assets/image/product/detail/4.png" class="img-max-width">
                </div> 
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
        <img src="assets/image/product/webapp/14.svg" style="width: 100%;">
    </div>

    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Forex / NFT / Cryptocurrency Web 3.0 Template</p>
            </div>
            <div class="viewmore-a">
                {{-- <a href="" class="view-more">View More</a> --}}
            </div>
        </div>
    </div>
    
    {{-- <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
    </div> --}}

    

    {{-- <div class="line1" style="margin-top:66px"></div> --}}

    {{-- <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Customer Relationshio Management made Easy</p>
            </div>
            <div class="viewmore-a">
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div> --}}
    

    <div class="webapp13">
        <div style="margin-right: 15px;">
            <img src="assets/image/product/webapp/15.svg" style="width: 100%;">
        </div>
        <div style="margin-left: 15px;">
            <img src="assets/image/product/webapp/16.svg" style="width: 100%;">
        </div>
        
    </div>

{{-- 
    <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">CRM & Admin Template</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div> --}}
    

    {{-- <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
    </div> --}}

    {{-- <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Your APP Adventure Starts Here</p>
            </div>
            <div>
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div> --}}
    

    {{-- <div class="webapp12">
        <div style="margin-right: 10px">
            <img src="assets/image/product/webapp/17.svg" style="margin-right:20px;width: 100%;">
        </div>
        <div style="margin-right: 10px">
            <img src="assets/image/product/webapp/18.svg" style="margin-right:20px;width: 100%;">
        </div>
        <div>
            <img src="assets/image/product/webapp/19.svg" style="width: 100%;">
        </div>
        
    </div> --}}

    {{-- <div class="webapp6">
        <div class="temp">
            <div>
                <p class="ecorm">Apple / Google / iPad & Mobile Apps Development</p>
            </div>
            <div class="viewmore-a">
                <a href="" class="view-more">View More</a>
            </div>
        </div>
    </div> --}}
    

    {{-- <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="ecomm-main-margin">
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
                <img src="assets/image/product/webapp/7.svg" class="product-img">
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
                <img src="assets/image/product/webapp/8.svg" class="product-img">
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
                <img src="assets/image/product/webapp/9.svg" class="product-img">
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
    </div> --}}
    <div class="detail-4" style="width: 1100px;">
        <p style="color: #FFF;
        font-family: SF Pro Text;
        font-size: 30px; font-weight: 600;">Rating & Likes</p>
        {{-- <div class="rating-container">
            <div style="display: flex;align-items: center;justify-content: center;">
                <div style="color: #FFF;
                    text-align: center;
                    font-family: SF Pro Text;
                    font-size: 100px; margin-right: 350px; margin-top: 28px;">
                        4.0
                </div>
                <div style="font-size: 100px; margin-right: 550px; margin-top: -50px;">
                    <img src="assets/image/product/webapp/star.svg">
                </div>
            </div>
        </div> --}}
        <div class="detail-2">
            <div class="detail-row1">
                <div class="detail-container1">
                    <div style="display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;">
                        <div>
                            <p style="color: #888;
                            text-align: center;
                            font-family: SF Pro Text;
                            font-size: 14px;">RATING</p> 
                        </div>
                        <div>
                            <img src="assets/image/product/webapp/star.svg">
                        </div>
                        {{-- <div style="color: #FFF">
                            STAR
                        </div> --}}
                        <div style="color: #FFF;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 34px; margin-top: 15px;" >
                            4
                        </div>
                    </div>
                </div>
                <div class="detail-container2">
                    <div style="display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;">
                        <div>
                            <p style="color: #888;
                            text-align: center;
                            font-family: SF Pro Text;
                            font-size: 14px;">SIZE</p>
                        </div>
                        <div style="color: #888;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 12px;">
                            <p>MB</p>
                        </div>
                        <div style="color: #FFF;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 30px;">
                            55.8
                        </div>
                    </div>
                </div>
                <div class="detail-container2">
                    <div style="display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;">
                        <div>
                            <p style="color: #888;
                            text-align: center;
                            font-family: SF Pro Text;
                            font-size: 14px;">CHART</p>
                        </div>
                        <div style="color: #888;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 12px;">
                            <p>NO.</p>
                        </div>
                        <div style="color: #FFF;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 30px;">
                            2
                        </div>
                    </div>
                </div>
                <div class="detail-container2">
                    <div style="display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;">
                        <div>
                            <p style="color: #888;
                            text-align: center;
                            font-family: SF Pro Text;
                            font-size: 14px;">ADD-ON</p>
                        </div>
                        <div style="color: #888;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 12px;">
                            <p>PURCHASE</p>
                        </div>
                        <div style="color: #FFF;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 30px;">
                            Yes
                        </div>
                    </div>
                </div>
                <div class="detail-container3">
                    <div style="display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;">
                        <div>
                            <p style="color: #888;
                            text-align: center;
                            font-family: SF Pro Text;
                            font-size: 14px;">DEVICE</p>
                        </div>
                        <div style="color: #888;
                        text-align: center;
                        font-family: SF Pro Text;
                        font-size: 12px;">
                            <p>OPERATING SYSTEM</p>
                        </div>
                        <div>
                            <img src="assets/image/product/detail/window.svg" style="margin-right: 10px; margin-top: 7px;">
                            <img src="assets/image/product/detail/apple.svg" style="margin-right: 10px; margin-top: 7px;">
                            <img src="assets/image/product/detail/android.svg" style="margin-right: 10px; margin-top: 7px;">
                            <img src="assets/image/product/detail/pc.svg" style="margin-right: 10px; margin-top: 7px;">
                            <img src="assets/image/product/detail/mobileicon.svg" style="margin-right: 10px; margin-top: 7px;">
                            <img src="assets/image/product/detail/tablet.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/image/product/webapp/star2.svg" style="width: 1100px;"><br><br><br><br><br>
       <!-- style="width: 1100px; -->
    </div>

    <div class="line1" style="margin-top:16px"></div><br><br><br><br>

    <div class="detail-7">
        <div class="detail-social-cont" style="margin-right: 9px">
            <div style="display: flex;flex-direction:column;justify-content: space-evenly;;align-items: center;">
                <div>
                    <img src="assets/image/product/detail/cloud.svg">
                </div>
                <div style="color: #FFF;
                font-family: SF Pro Text;
                font-size: 20px;">
                    Connect Us
                </div>
                <div>
                    <img src="assets/image/product/detail/fb.svg" style="margin-right: 28px">
                    <img src="assets/image/product/detail/ig.svg" style="margin-right: 28px">
                    <img src="assets/image/product/detail/ws.svg" style="margin-right: 28px">
                    <img src="assets/image/product/detail/tele.svg" style="margin-right: 28px">
                    <img src="assets/image/product/detail/drib.svg" style="margin-right: 28px">
                    <img src="assets/image/product/detail/link.svg">
                </div>
            </div>
        </div>
        <div class="detail-social-cont" style="margin-left: 9px">
            <div style="display: flex;flex-direction:column;justify-content: space-evenly;;align-items: center;">
                <div>
                    <img src="assets/image/product/detail/sup.svg">
                </div>
                <div style="color: #FFF;
                font-family: SF Pro Text;
                font-size: 20px;">
                    Email Support
                </div>
                <div style="color: #888;
                text-align: center;
                font-family: SF Pro Text;
                font-size: 16px;text-decoration-line: underline;">
                    support@currenttech.pro
                </div>
            </div>
        </div>
    </div>
</div>




@endsection