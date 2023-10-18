@extends('layouts.master')
@section('content')

<style>
    .ecomm-tem {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
    }
    .ecomm-margin {
        display: flex;   
        flex-direction:column;
        margin-left: 18px;
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
    .seeall1 {
        text-align: left;
        width: 1510px;
    }
    .seeall1 p {
        color: #FFF;
        font-family: SF Pro;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-align: left;
    }
    .seeall12 {
        text-align: left;
        width: 1510px;
        margin-bottom: 96px;
    }
    .seeall12 p {
        color: #888;
        font-family: SF Pro;
        font-size: 22px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        width: 991px;
        text-align: left;
    }
    .seeall4 {
        text-align: left;
        width: 1510px;
        margin-bottom: 36px;
    }
    .seeall4 p {
        color: #FFF;
        font-family: SF Pro;
        font-size: 28px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        width: 991px;
        text-align: left;
    }

    .seeall3 {
        width: 1110px;
    }

    .seeall3-row1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .seeall3-col1 {
        margin-right: 11px;
    }
    .seeall3-col2 {
        margin-right: 11px;
        margin-left: 11px;
    }
    .seeall3-col3 {
        margin-right: 11px;
        margin-left: 11px;
    }
    .seeall3-col4 {
        margin-right: 11px;
        margin-left: 11px;
    }
    .seeall3-col5 {
        margin-right: 11px;
        margin-left: 11px;
    }
    .seeall3-col6 {
        margin-left: 11px;
    }

    .seeall-line {
        width: 1510px;
        height: 1.5px;
        background: #333;
        margin-top: 68px;
        margin-bottom: 66px;
    }

    .seeall5 {
        width: 1100px;
    }

    .seeall6 {
        width: 1510px;
    }

    .seeall6 p {
        color: #FFF;
        font-family: SF Pro;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .seeall7 {
        width: 1510px;
    }

    .seeall7 p {
        color: #888;
        font-family: SF Pro;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        width: 1073px;
    }

    .seeall8 {
        width: 1510px;
    }

    .seeall9 {
        width: 1510px;
        margin-bottom: 40px;
    }

    .seeall9 p {
        color: #FFF;
        font-family: SF Pro;
        font-size: 28px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .seeall10 {
        width: 1510px;
    }

    .seeall5-row1 {
        display: flex;
        /* justify-content: space-between; */
        margin-bottom: 40px;
    }
    .seeall5-row2 {
        display: flex;
        /* justify-content: space-between; */
        margin-bottom: 40px;
    }

    .seeall5-row3 {
        display: flex;
        /* justify-content: space-between; */
        margin-bottom: 40px;
    }
    .seeall5-row4 {
        display: flex;
        /* justify-content: space-between; */
        margin-bottom: 40px;
    }

    .seeall5-col1 {
        display: flex;
        align-items: center;
        width: 30%;
    }
    .seeall5-col2 {
        display: flex;
        align-items: center;
        width: 30%;
    }
    .seeall5-col3 {
        display: flex;
        align-items: center;
        width: 30%;
    }
    .webapp7 {
        display: flex; 
        align-items:center;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 40px;
    }
    .webapp8 {
        display: flex; 
        align-items:center;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 40px;
    }
    .webapp10 {
        display: flex;
        margin-bottom: 36px;
    }
    .webappfont {
        color: #ffffff;
        font-family: SF Pro;
        font-size: 14px;
        margin: 0;
    }
    @media screen and (max-width: 1093px) {
        .seeall1 {
            width: 100%;
            height: auto;
        }
        .seeall1 p {
            width: 100%;
            height: auto;
        }
        .webappfont {
        font-size: 10px; 
        }
        /* .webapp7 .ecomm-main-margin-1{
        margin-right: 60px;
        }
        .ecomm-main-margin-1 .product-img{
        margin-right: 40px;
        } */
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
        .ecomm-tem {
            display: flex;
            flex-direction: row;
            width: 100%;
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
        
    }
</style>

<div class="main-content17" style="margin-top: 105px;">
    <div class="webapp1">
        <p class="powerhouse-pp1">
            Optimised Trending Products
        </p>
    </div>
     
    <div class="webapp2">
        <p class="powerhouse-pp2">
            Discover the hottest web template products of the moment! Elevate your online
            presence with our trending designs - sleek, modern, and fully customisable.
            Stand out from the crowd and captivate your audience today!
        </p>
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
                    font-size: 10px;margin:0" class="template">
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
        {{-- <div style="margin-right: 10px">
            <img src="assets/image/product/seeall/2.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">Zivi</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:261px">
                    A Modern Website Template
                    Collection
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    Creative Portfolio Theme 
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div> --}}
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
        {{-- <div style="margin-right: 10px">
            <img src="assets/image/product/seeall/3.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">Livesay</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:234px">
                    Elevate Your Web Design
                    with High-End Templates
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    Event & Conference Theme 
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div> --}}
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
        {{-- <div>
            <img src="assets/image/product/seeall/4.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">Archi</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:259px">
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
        </div> --}}
    </div>
    
    {{-- <div class="seeall3">
        <div class="seeall3-row1">
            <div class="seeall3-col1">
                <a href="{{ route('productdetail') }}">
                    <img src="assets/image/product/seeall/1.png">
                </a>
                <div style="margin-top: 36px">
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 18px;margin:0">Carbon</p>
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
                    font-size: 14px;margin:0">
                        Minimalist Template
                    </p>
                    <br>
                    <div style="display: flex;align-items:center">
                        <img src="assets/image/product/seeall/eye.svg">
                        <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                    </div>
                </div>
            </div>
            <div class="seeall3-col2">
                <img src="assets/image/product/seeall/2.png">
                <div style="margin-top: 36px">
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 18px;margin:0">Zivi</p>
                    <br>
                    <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:261px">
                        A Modern Website Template
                        Collection
                    </p>
                    <br>
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 14px;margin:0">
                        Creative Portfolio Theme 
                    </p>
                    <br>
                    <div style="display: flex;align-items:center">
                        <img src="assets/image/product/seeall/eye.svg">
                        <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                    </div>
                </div>
            </div>
            <div class="seeall3-col3">
                <img src="assets/image/product/seeall/3.png">
                <div style="margin-top: 36px">
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 18px;margin:0">Livesay</p>
                    <br>
                    <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:234px">
                        Elevate Your Web Design
                        with High-End Templates
                    </p>
                    <br>
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 14px;margin:0">
                        Event & Conference Theme 
                    </p>
                    <br>
                    <div style="display: flex;align-items:center">
                        <img src="assets/image/product/seeall/eye.svg">
                        <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                    </div>
                </div>
            </div>
            <div class="seeall3-col4">
                <img src="assets/image/product/seeall/4.png">
                <div style="margin-top: 36px">
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 18px;margin:0">Archi</p>
                    <br>
                    <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:259px">
                        Painting Your Online Vision
                        with Stunning Templates
                    </p>
                    <br>
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 14px;margin:0">
                        E-Commerce Theme
                    </p>
                    <br>
                    <div style="display: flex;align-items:center">
                        <img src="assets/image/product/seeall/eye.svg">
                        <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                    </div>
                </div>
            </div>
            <div class="seeall3-col5">
                <img src="assets/image/product/seeall/5.png">
                <div style="margin-top: 36px">
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 18px;margin:0">Skudo</p>
                    <br>
                    <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:163px">
                        Dynamic
                        Website Template
                    </p>
                    <br>
                    <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 14px;margin:0">
                        The Most Advanced Theme
                    </p>
                    <br>
                    <div style="display: flex;align-items:center">
                        <img src="assets/image/product/seeall/eye.svg">
                        <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="seeall-line"></div>

    <div class="seeall4">
        <p>
            Top Free Template
        </p>
    </div>
    {{-- <div class="seeall5">
        <div class="seeall5-row1">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 79px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
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
        <div class="seeall5-row2">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div> --}}
        {{-- <div class="seeall5-row3">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div> --}}
        {{-- <div class="seeall5-row4">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
        </div> --}}
    {{-- </div> --}}

    {{-- <div class="seeall6">
        <p>
            Essential Trending Products
        </p>
    </div>
    <div class="seeall7">
        <p>
            Unlock the ultimate potential of your online presence with our premium web template
            products! Stay on the cutting edge with trending designs, unrivalled functionality,
            and seamless customisation options. Elevate your website today!
        </p>
    </div> --}}
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
    </div>

    <div class="webapp1">
        <p class="powerhouse-pp1">
            Essential Trending Products
        </p>
    </div>
     
    <div class="webapp2">
        <p class="powerhouse-pp2">
            Unlock the ultimate potential of your online presence with our premium web template
            products! Stay on the cutting edge with trending designs, unrivalled functionality,
            and seamless customisation options. Elevate your website today!
        </p>
    </div>
    <div class="webapp10">
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/6.png" style="margin-right: 12px;width: 100%;">
            </a>
            <div style="margin-top: 36px" class="webapp10-font">
                <p class="webappfont">Carbon</p>
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
                <img src="assets/image/product/seeall/7.png" style="margin-right: 12px;width: 100%;">
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
        {{-- <div style="margin-right: 10px">
            <img src="assets/image/product/seeall/2.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">Zivi</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:261px">
                    A Modern Website Template
                    Collection
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    Creative Portfolio Theme 
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div> --}}
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/8.png" style="margin-right: 12px;width: 100%;">
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
        {{-- <div style="margin-right: 10px">
            <img src="assets/image/product/seeall/3.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">Livesay</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:234px">
                    Elevate Your Web Design
                    with High-End Templates
                </p>
                <br>
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">
                    Event & Conference Theme 
                </p>
                <br>
                <div style="display: flex;align-items:center">
                    <img src="assets/image/product/seeall/eye.svg">
                    <span style="color: #BB9200;font-family: SF Pro;font-size: 12px;">2,583 Viewer</span>
                </div>
            </div>
        </div> --}}
        <div style="margin-right: 10px">
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/9.png" style="margin-right: 12px;width: 100%;">
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
        {{-- <div>
            <img src="assets/image/product/seeall/4.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                    font-family: SF Pro;
                    font-size: 10px;margin:0">Archi</p>
                <br>
                <p style="color: #FFF;
                    font-family: SF Pro;
                    font-size: 18px;margin:0;width:259px">
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
        </div> --}}
    </div>
    {{-- <div class="webapp10">
        <div style="margin-right: 10px">
            <img src="assets/image/product/seeall/6.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                font-family: SF Pro;
                font-size: 14px;margin:0">Carbon</p>
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
            <img src="assets/image/product/seeall/7.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                font-family: SF Pro;
                font-size: 14px;margin:0">Zivi</p>
                <br>
                <p style="color: #FFF;
                font-family: SF Pro;
                font-size: 18px;margin:0;width:261px">
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
            <img src="assets/image/product/seeall/8.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                font-family: SF Pro;
                font-size: 14px;margin:0">Livesay</p>
                <br>
                <p style="color: #FFF;
                font-family: SF Pro;
                font-size: 18px;margin:0;width:234px">
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
        <div>
            <img src="assets/image/product/seeall/9.png" style="margin-right: 12px;width: 100%;">
            <div style="margin-top: 36px">
                <p style="color: #888;
                font-family: SF Pro;
                font-size: 14px;margin:0">Archi</p>
                <br>
                <p style="color: #FFF;
                font-family: SF Pro;
                font-size: 18px;margin:0;width:259px">
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
    </div> --}}

    <div class="seeall-line"></div>

    <div class="seeall9">
        <p>
            Top Paid Template
        </p>
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
    </div>

    {{-- <div class="seeall10">
        <div class="seeall5-row1">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
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
        <div class="seeall5-row2">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
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

        
        <div class="seeall5-row3">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
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
        <div class="seeall5-row4">
            <div class="seeall5-col1">
                <img src="assets/image/product/webapp/7.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Fashion Store</p>
                    </div>
                    <div>
                        <p class="clothing">Clothing & Accessories</p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col2">
                <img src="assets/image/product/webapp/8.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Grid Plus</p>
                    </div>
                    <div>
                        <p class="clothing">Unlimited Grid Layout </p>
                    </div>
                    <div style="margin-top: 5px">
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                </div>
                <a>
                    <button class="btn-view">
                        <span class="btn-span-view">View</span>
                    </button>
                </a>
            </div>
            <div class="seeall5-col3">
                <img src="assets/image/product/webapp/9.svg">
                <div style="display: flex; flex-direction:column;margin-left: 18px;margin-right: 99px;">
                    <div>
                        <p class="fashion-store">Livesay</p>
                    </div>
                    <div>
                        <p class="clothing">Event & Conference Theme</p>
                    </div>
                    <div style="margin-top: 5px">
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
    <div class="line1" style="margin-top:16px"></div>
</div>



@endsection