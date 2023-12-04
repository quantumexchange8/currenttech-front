@extends('layouts.master')
@section('content')

<style>
    .detail-1 {
    width: 1257px;
    display: flex;
    }
    .detail-2 {
        max-width: 1100px;
        margin-bottom: 21px;
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
        /* width: 1100px; */
        margin-bottom: 88px;
        display: flex;
        gap: 10px;
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
        margin-right: 11px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .detail-container2 {
        width: 199px;
        height: 125px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-right: 11px;
        margin-left: 11px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .detail-container3 {
        width: 199px;
        height: 125px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-left: 11px;
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
        margin-bottom: 88px;
        margin-left: 250px;
        margin-right: 250px;
    }

    .webappfont {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin: 0px
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
        margin-bottom: 67.5px;
        width: 100%;
        gap: 18px;
    }

    .webapp6 {
        text-align: left;
        margin-bottom: 16px;
        width: 100%;
    }
    .webapp66 {
        text-align: left;
        margin-bottom: 16px;
        width: 100%;
    }
    .webapp6-1 {
        text-align: left;
        margin-bottom: 46px;
        width: 100%;
    }

    .webapp7 {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 40px;
        flex-wrap: wrap;
        gap: 40px;
    }

    .webapp8 {
        display: flex; 
        align-items:center;
        /* width: 100%; */
        justify-content: space-between;
        margin-bottom: 0px;
    }

    .webapp9 {
        margin-bottom: 40px
    }

    .webapp10 {
        display: flex;
        margin-bottom: 88px;
        justify-content: center;
        gap: 22px;
    }
    .webapp11 {
        margin-bottom: 87px;
    }
    
    .webapp12 {
        display: flex;
    }

    .webapp13 {
        margin-bottom: 88px;
        display: flex;
        gap: 23px;
    }

    .ecomm-tem {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-bottom: 127px;
    }

    .ecomm-margin {
        display: flex;   
        flex-direction:column;
        margin-left: 28px;
        margin-right: 10px;
        width: 170px;
        gap: 8px
    }

    .ecomm-main-margin {
        display: flex;
        align-items: center;
        /* margin-left: 10px; */
    }
    .ecomm-main-margin object {
        width: 100px;
        height: 100px;
    }
    .ecomm-main-margin-1 {
        display: flex;
        align-items: center;
    }

    .ecomm-main-margin-1 object {
        width: 100px;
        height: 100px;
    }

    .carbon-image {
        /* width: 100%; */
        width: 256.696px;
        height: 208.622px;
    }
    .webappfont2 {
        display: flex;
        width: 150px;
        height: 25.98px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        /* display: block; */
    }
    .social-icon {
        display: flex;
        gap: 24.37px;
    }
    .connectus {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 16px;
    }
    .email-support {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .template {
        color: #888;
        font-family: SF Pro Text;
        font-size: 14px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    @media screen and (max-width: 1093px) {
        .detail-4 {
            display: none;
        }
        .detail-7 {
            display: flex;
            flex-direction: column;
            align-items: center; 
        }

        .detail-social-cont {
            /* margin: 0;  */
            margin-bottom: 20px; 
            text-align: center;
            width: 135%;
            height: 118px;
        }
        .line1 {
            display: none;
        }
        .line2 {
            width: 100%;
            margin-left: 30px;
            margin-right: 30px;
        }
        .line3 {
            width: 100%;
            margin-left: 30px;
            margin-right: 30px;
        }
        .line4 {
            width: 100%;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 0px !important;
        }
        .img-max-width {
            width: 150.439px;
            height: 250px;
            flex-shrink: 0;
        }
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
            width: 90%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 38px;
        }
        .webapp2 p {
            width: 88%;
            height: auto;
            margin-top: 0px;
        }
        .webapp3 img {
            width: 100%;
            height: auto;
            max-width: 100%;
            margin-bottom: 68px !important;
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
            width: 50%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            /* margin-bottom: 38px; */
            margin-bottom: 24px;
        }

        .webapp5 {
            width: 100%;
            height: auto;
            margin-bottom: 68px;
            display: flex;
            justify-content: center;
            gap: 7px;
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

        .webapp66 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-bottom: 38px;
        }

        .webapp66 .temp {
            width: 100%;
            height: auto;
            margin-top: 0px;
        }

        .webapp6 p {
            width: 100%;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: center;
        }

        .webapp66 p {
            width: 100%;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: left;
        }

        .connectus {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 12px;
        }
        .email-support {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        

        .template {
            color: #888;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .ecomm-tem {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 68px;
        }

        .webapp7, .webapp8 {
            width: 100%; 
            margin-bottom: 20px; 
        }

        .webapp7 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            flex-direction: column;
            align-items: flex-start;
            gap: 18px;
        }
        .product-img {
            /* margin-right: -200px; */
            width: 70px;
            height: 70px;
        }
        .webapp8 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            flex-direction: column;
            margin-left: -300px;
        }
        .webapp9 p {
            font-size: 16px;
        }
        .webapp10 {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        /* .webapp10 > div {
            width: 100%; 
            margin-right: 0; 
            margin-bottom: 20px;
        } */

        .webapp10 img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .embrace-p {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px !important;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-bottom: 16px;
        }

        .eye {
            width: 19.481px !important;
            height: 20.784px !important;
        }

        .webappfont {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .webappfont2 {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            width: 150px;
        }

        .webapp11 {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-bottom: 68px;
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
            gap: 8px;
        }
        .webapp13 object {
            width: 100%;
            height: auto;
            max-width: 100%;
        }
        .ecorm {
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .ecormm {
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 18px; /* 128.571% */
        }
        .text-container {
            width: 100%; /* Adjust the max-width as needed */
            margin-left: 0px;
}
        .ecomm-margin {
            display: flex;   
            flex-direction:column;
            margin-left: 18px;
            gap: 3px;
        }
        .ecomm-main-margin {
            margin-bottom: 0px;
            margin-left: 0px;
            justify-content: flex-start;
            width: 100%;
        }
        .ecomm-main-margin object {
            width: 70px;
            height: 70px;
        }
        .ecomm-main-margin-1 {
            margin-bottom: 0px;
            justify-content: flex-start;
            width: 100%;
        }
        .ecomm-main-margin-1 object {
            width: 70px;
            height: 70px;
        }
        .viewmore-a {
            width: 120px;
        }
        .fashion-store {
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: 15.022px; /* 125.185% */
        }
        .clothing {
            color: #888;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 9.389px; /* 93.889% */
            width: 100%;
        }
        .powerhouse-p2 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .powerhouse-p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            width: 55%;
            height: auto;
            margin-bottom: 38px;
        }
        .carbon-image {
            width: 162.038px !important;
            height: 131.692px !important;
        }
        .social-icon {
            display: flex;
            gap: 18px;
        }
        .social-icon img{
            width: 30px;
            height: 30px;
        }
    }

    @media screen and (min-width: 2000px) {
        .webapp1 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp2 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp3 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp4 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp5 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp6 {
            /* margin-left: 350px;
            margin-right: 350px; */
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
            /* margin-left: 350px;
            margin-right: 350px; */
        }

        .webapp11 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp12 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .webapp13 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        
    }

    @media screen and (min-width: 3000px) {
        .webapp1 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp2 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp3 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp4 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp5 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp6 {
            /* margin-left: 500px;
            margin-right: 500px; */
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
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp11 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp12 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
        .webapp13 {
            /* margin-left: 500px;
            margin-right: 500px; */
        }
    }

    @media screen and (min-width: 3800px) {
        .webapp1 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp2 {
            /* margin-left: 650px; */
            /* margin-right: 650px; */
        }
        .webapp3 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp4 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp5 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp6 {
            /* margin-left: 650px;
            margin-right: 650px; */
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
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp11 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp12 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
        .webapp13 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
    }
</style>

<div class="main-content2" style="margin-top: 160px;">
    <div class="webapp1">
        <p class="powerhouse-p">
            @lang('public.web app 1')
        </p>
    </div>
     
    <div class="webapp2">
        <p class="powerhouse-p2">
            @lang('public.web app 2')
        </p>
    </div>
     
    <div class="webapp3">
        <img src="assets/image/product/webapp/1.svg" style="margin-bottom:168px">
    </div>
     
    {{-- <div class="mobile-alignment-30px"> --}}
        <div class="line2"></div>
    {{-- </div> --}}
     
     <div class="webapp4">
        <div class="mobile-alignment-30px">
            <p class="embrace-p">
                @lang('public.web app 3')
            </p>
        </div>
        
     </div>

     <div class="webapp66">
        {{-- <div class="temp"> --}}
            <div class="mobile-alignment-30px">
                <p class="ecorm">@lang('public.web app 4')</p>
            </div>
        {{-- </div> --}}
    </div>
    
     <div class="webapp5">
        <div>
            <object type="image/svg+xml" data="assets/image/product/webapp/2.svg" style="width: 100%"></object>
            {{-- <img src="assets/image/product/webapp/2.svg" style="width: 100%"> --}}
        </div>
        <div>
            <object type="image/svg+xml" data="assets/image/product/webapp/3.svg" style="width: 100%"></object>
            {{-- <img src="assets/image/product/webapp/3.svg" style="width: 100%"> --}}
        </div>
        <div>
            <object type="image/svg+xml" data="assets/image/product/webapp/4.svg" style="width: 100%"></object>
            {{-- <img src="assets/image/product/webapp/4.svg" style="width: 100%"> --}}
        </div>
        
    </div>
    
    <div class="ecomm-tem">
        <div class="webapp7"> 
            <div class="mobile-alignment-30px">
                <div class="ecomm-main-margin-1">
                    {{-- <img src="assets/image/product/webapp/7.svg" class="product-img"> --}}
                    <object type="image/svg+xml" data="assets/image/product/webapp/7.svg"></object>
                    <div class="ecomm-margin">
                        <div >
                            <p class="fashion-store">Fashion Store</p>
                        </div>
                        <div >
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
            </div>
            
            <div class="mobile-alignment-30px">
                <div class="ecomm-main-margin">
                    <object type="image/svg+xml" data="assets/image/product/webapp/8.svg"></object>
                    {{-- <img src="assets/image/product/webapp/8.svg" class="product-img"> --}}
                    <div class="ecomm-margin">
                        <div >
                            <p class="fashion-store">Grid Plus</p>
                        </div>
                        <div >
                            <p class="clothing">Unlimited Grid Layout </p>
                        </div>
                        <div>
                            <img src="assets/image/product/webapp/star.svg">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mobile-alignment-30px">
                <div class="ecomm-main-margin">
                    <object type="image/svg+xml" data="assets/image/product/webapp/9.svg"></object>
                    {{-- <img src="assets/image/product/webapp/9.svg" class="product-img"> --}}
                    <div class="ecomm-margin">
                        <div >
                            <p class="fashion-store">Livesay</p>
                        </div>
                        <div >
                            <p class="clothing">Event & Conference Theme</p>
                        </div>
                        <div>
                            <img src="assets/image/product/webapp/star.svg">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mobile-alignment-30px">
                <div class="ecomm-main-margin">
                    <object type="image/svg+xml" data="assets/image/product/webapp/24.svg"></object>
                    {{-- <img src="assets/image/product/webapp/24.svg" class="product-img"> --}}
                    <div class="ecomm-margin">
                        <div >
                            <p class="fashion-store">Furnatur</p>
                        </div>
                        <div >
                            <p class="clothing">Furniture Template Kit</p>
                        </div>
                        <div>
                            <img src="assets/image/product/webapp/star.svg">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mobile-alignment-30px">
                <div class="ecomm-main-margin">
                    <object type="image/svg+xml" data="assets/image/product/webapp/25.svg"></object>
                    {{-- <img src="assets/image/product/webapp/25.svg" class="product-img"> --}}
                    <div class="ecomm-margin">
                        <div >
                            <p class="fashion-store">Road Pedal</p>
                        </div>
                        <div >
                            <p class="clothing">Bike Store Section</p>
                        </div>
                        <div>
                            <img src="assets/image/product/webapp/star.svg">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mobile-alignment-30px">
                <div class="ecomm-main-margin">
                    <object type="image/svg+xml" data="assets/image/product/webapp/26.svg"></object>
                    {{-- <img src="assets/image/product/webapp/26.svg" class="product-img"> --}}
                    <div class="ecomm-margin">
                        <div >
                            <p class="fashion-store">Merketin</p>
                        </div>
                        <div >
                            <p class="clothing">Business Startup Template</p>
                        </div>
                        <div>
                            <img src="assets/image/product/webapp/star.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="line3"></div>

    <div class="webapp6">
        {{-- <div class="temp"> --}}
            <div class="mobile-alignment-30px">
                <p class="ecorm">@lang('public.web app 12')</p>
            </div>
            <div>
                {{-- <p class="ecorm">e-Commerce Template</p> --}}
            </div>
            {{-- <div>
                <a href="" class="view-more">View More</a>
            </div> --}}
        {{-- </div> --}}
    </div>
    <div class="webapp6-1">
        <div class="mobile-alignment-30px">
            <div class="text-container">
                <p class="ecormm">@lang('public.web app 13')</p>
            </div>            
            {{-- <div>
                <a href="{{ route('seeall') }}" class="view-more">View More</a>
            </div> --}}
        </div>
    </div>
    <div class="webapp10">
        <div>
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/13.png" class="carbon-image">
            </a>
            <div style="margin-top: 28px">
                <p class="webappfont">Zivi
                </p>
                <br>
                <p class="webappfont2">
                    @lang('public.web app 14.1')
                </p>
                <p class="template">
                    @lang('public.web app 14.2')
                </p>
                <br>
                <div style="display: flex;align-items:center;gap:8px;">
                    <img src="assets/image/product/seeall/eye.svg" class="eye">
                    <span style="color: #BB9200;font-family: SF Pro Text;font-size: 12px;">2,583 @lang('public.web app 14.3')</span>
                </div>
            </div>
        </div>

        <div>
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/12.svg" class="carbon-image">
            </a>
            <div style="margin-top: 28px" class="webapp10-font">
                <p class="webappfont">Livesay</p>
                <br>
                <p class="webappfont2">
                    @lang('public.web app 15.1')
                </p>
                <p class="template">
                    @lang('public.web app 15.2')
                </p>
                <br>
                <div style="display: flex;align-items:center;gap:8px;">
                    <img src="assets/image/product/seeall/eye.svg" class="eye">
                    <span style="color: #BB9200;font-family: SF Pro Text;font-size: 12px;">2,583 @lang('public.web app 14.3')</span>
                </div>
            </div>
        </div>

        <div>
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/13.png" class="carbon-image">
            </a>
            <div style="margin-top: 28px" class="webapp10-font">
                <p class="webappfont">Archi</p>
                <br>
                <p class="webappfont2">
                    @lang('public.web app 16.1')
                </p>
                <p class="template">
                    @lang('public.web app 16.2')
                </p>
                <br>
                <div style="display: flex;align-items:center;gap:8px;">
                    <img src="assets/image/product/seeall/eye.svg" class="eye">
                    <span style="color: #BB9200;font-family: SF Pro Text;font-size: 12px;">2,583 @lang('public.web app 14.3')</span>
                </div>
            </div>
        </div>

        <div>
            <a href="{{ route('productdetail') }}">
                <img src="assets/image/product/seeall/14.png" class="carbon-image">
            </a>
            <div style="margin-top: 28px" class="webapp10-font">
                <p class="webappfont">Skudo</p>
                <br>
                <p class="webappfont2">
                    @lang('public.web app 17.1')
                </p>
                <p class="template">
                    @lang('public.web app 17.2')
                </p>
                <br>
                <div style="display: flex;align-items:center;gap:8px;">
                    <img src="assets/image/product/seeall/eye.svg" class="eye">
                    <span style="color: #BB9200;font-family: SF Pro Text;font-size: 12px;">2,583 @lang('public.web app 14.3')</span>
                </div>
            </div>
        </div>

    </div>
</div>
    
    <div class="home-marqueee" style="margin-bottom: 60px;">
        <div class="marquee-content">
            {{-- <div class="detail-3"> --}}
                {{-- <div class="detail-marquee-content" style="display: flex"> --}}
                    <div class="marquee-item">
                        <img src="assets/image/product/detail/1.png" class="img-max-width">
                    </div>
                    <div class="marquee-item">
                        <img src="assets/image/product/detail/2.png" class="img-max-width">
                    </div>
                    <div class="marquee-item">
                        <img src="assets/image/product/detail/3.png" class="img-max-width">
                    </div>
                    <div class="marquee-item">
                        <img src="assets/image/product/detail/4.png" class="img-max-width">
                    </div> 
                {{-- </div> --}}
            {{-- </div>   --}}
        </div>    
    </div>

<div class="main-content2">
    {{-- <div class="main-content18" style="margin-top: 10px;">
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
    </div> --}}

    <div class="line4" style="margin-top:66px"></div>

    <div class="webapp4">
        <div class="mobile-alignment-30px">
            <p class="transform-p">
                @lang('public.web app 18')
            </p>
        </div>
    </div>

    <div class="webapp11">
        <img src="assets/image/product/webapp/14.svg" style="width: 100%;">
    </div>

    <div class="webapp6">
        {{-- <div class="temp"> --}}
            <div class="mobile-alignment-30px">
                <p class="ecorm">@lang('public.web app 19')</p>
            </div>
        {{-- </div> --}}
    </div>
    <div class="webapp13">
        <div>
            <object type="image/svg+xml" data="assets/image/product/webapp/15.svg" style="width: 535px;height: auto;"></object>
            {{-- <img src="assets/image/product/webapp/15.svg" style="width: 535px;height: auto;"> --}}
        </div>
        <div>
            <object type="image/svg+xml" data="assets/image/product/webapp/16.svg" style="width: 535px;height: auto;"></object>
            {{-- <img src="assets/image/product/webapp/16.svg" style="width: 535px;height: auto;"> --}}
        </div>
        
    </div>


    <div class="detail-4" style="width: 1100px;">
        <p style="color: #FFF;
        font-family: SF Pro Text;
        font-size: 30px; font-weight: 600;margin-top:0px;margin-bottom:28px">Rating & Likes</p>
        
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
        <div class="detail-social-cont">
            <div style="display: flex;flex-direction:column;justify-content: space-evenly;;align-items: center;">
                <div>
                    <img src="assets/image/product/detail/cloud.svg">
                </div>
                <div class="connectus">
                    Connect Us
                </div>
                <div class="social-icon">
                    <a href="https://www.facebook.com/currenttechindustries">
                        <img src="assets/image/product/detail/fb.svg">
                    </a>
                    <a href="https://instagram.com/currenttechindustries?">
                        <img src="assets/image/product/detail/ig.svg">
                    </a>
                    <a href="https://www.linkedin.com/company/currenttechindustries/">
                        <img src="assets/image/product/detail/ws.svg">
                    </a>
                    <img src="assets/image/product/detail/tele.svg">
                    <img src="assets/image/product/detail/drib.svg">
                    <img src="assets/image/product/detail/link.svg">
                </div>
            </div>
        </div>
        <div class="detail-social-cont">
            <div style="display: flex;flex-direction:column;justify-content: space-evenly;;align-items: center;">
                <div>
                    <img src="assets/image/product/detail/sup.svg">
                </div>
                <div class="email-support">
                    Email Support Get Quote
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