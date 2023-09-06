@extends('layouts.master')
@section('content')

<style>
    .detail-1 {
        width: 1257px;
        display: flex;
    }
    .detail-2 {
        width: 1257px;
        margin-bottom: 66px;
    }
    .detail-6 {
        width: 1257px;
        margin-bottom: 66px;
    }
    .detail-7 {
        width: 1257px;
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
        font-family: Comfortaa;
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
        font-family: Comfortaa;
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
        width: 231px;
        height: 115px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-right: 12.5px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .detail-container2 {
        width: 231px;
        height: 115px;
        flex-shrink: 0;
        border-radius: 10px;
        margin-right: 12.5px;
        margin-left: 12.5px;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
    .detail-container3 {
        width: 231px;
        height: 115px;
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
        font-family: Comfortaa;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .details-p {
        color: #888;
        font-family: Comfortaa;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 150% */
        width: 1255px;
    }

    .detail-6 li {
        color: #888;
        font-family: Comfortaa;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 150% */
    }

    .detail-social-cont {
        width: 619px;
        height: 184px;
        flex-shrink: 0;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
    }
</style>


<div class="main-content18">
    <div class="detail-1">
        <div style="margin-right: 50px">
            <img src="assets/image/product/seeall/11.png">
        </div>
        <div>
            <p style="color: #FFF;
            font-family: Comfortaa;
            font-size: 36px;margin:0">Carbon</p>
            <br>
            <p style="color: #FFF;
            font-family: Comfortaa;
            font-size: 18px;margin:0;width:397px">
                Your All-in-One Website
                Template Solution
            </p>
            <br>
            <p style="color: #888;
            font-family: Comfortaa;
            font-size: 14px;margin:0">
                Minimalist Template
            </p>
            <br>
            <div style="display: flex;align-items:center">
                <img src="assets/image/product/seeall/eye.svg">
                <span style="color: #BB9200;font-family: Comfortaa;font-size: 12px;">2,583 Viewer</span>
            </div>
            <br>
            <div>
                <button class="btn-preview"><span>PREVIEW</span></button>
                <button class="btn-getfree"><span>GET FREE</span></button>
            </div>
        </div>
    </div>

    <div class="detail-line"></div>

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
                        font-family: Comfortaa;
                        font-size: 14px;">RATING</p> 
                    </div>
                    <div style="color: #FFF">
                        STAR
                    </div>
                    <div style="color: #FFF">
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
                        font-family: Comfortaa;
                        font-size: 14px;">SIZE</p>
                    </div>
                    <div style="color: #888;
                    text-align: center;
                    font-family: Comfortaa;
                    font-size: 12px;">
                        <p>MB</p>
                    </div>
                    <div style="color: #FFF;
                    text-align: center;
                    font-family: Comfortaa;
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
                        font-family: Comfortaa;
                        font-size: 14px;">CHART</p>
                    </div>
                    <div style="color: #888;
                    text-align: center;
                    font-family: Comfortaa;
                    font-size: 12px;">
                        <p>NO.</p>
                    </div>
                    <div style="color: #FFF;
                    text-align: center;
                    font-family: Comfortaa;
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
                        font-family: Comfortaa;
                        font-size: 14px;">ADD-ON</p>
                    </div>
                    <div style="color: #888;
                    text-align: center;
                    font-family: Comfortaa;
                    font-size: 12px;">
                        <p>PURCHASE</p>
                    </div>
                    <div style="color: #FFF;
                    text-align: center;
                    font-family: Comfortaa;
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
                        font-family: Comfortaa;
                        font-size: 14px;">DEVICE</p>
                    </div>
                    <div style="color: #888;
                    text-align: center;
                    font-family: Comfortaa;
                    font-size: 12px;">
                        <p>OPERATING SYSTEM</p>
                    </div>
                    <div>
                        <img src="assets/image/product/detail/window.svg">
                        <img src="assets/image/product/detail/apple.svg">
                        <img src="assets/image/product/detail/android.svg">
                        <img src="assets/image/product/detail/pc.svg">
                        <img src="assets/image/product/detail/mobileicon.svg">
                        <img src="assets/image/product/detail/tablet.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-3">
        <div class="detail-marquee-content" style="display: flex">
            <div class="detail-marquee-item">
                <img src="assets/image/product/detail/1.png">
            </div>
            <div class="detail-marquee-item">
                <img src="assets/image/product/detail/2.png">
            </div>
            <div class="detail-marquee-item">
                <img src="assets/image/product/detail/3.png">
            </div>
        </div>
    </div>

    <div class="detail-4">
        <p style="color: #FFF;
        font-family: Comfortaa;
        font-size: 30px;">Rating & Likes</p>
        <div class="rating-container">
            <div style="display: flex;align-items: center;justify-content: center;">
                <div style="color: #FFF;
                text-align: center;
                font-family: Comfortaa;
                font-size: 100px;">
                    4.0
                </div>
                <div>

                </div>
            </div>
        </div>
    </div>

    <div class="detail-5">
        <p class="detail-heading">Informations</p>
        <p class="details-p">
            COZE is a minimal and modern Shopify e-commerce theme. It was built for your watch store, men store, women store, 
            clothing store, furniture store, bookstore, cosmetics shop, luxury jewellery, and accessories store. <br><br>
            Furthermore, this amazing theme is integrated with eCommerce, many apps with lots of features, mini cart, unlimited 
            colour schemes, Slider with smooth transition effects, Menu with multiple column styles and advanced widgets… You are 
            free to control this theme in order to make your store more friendly and adorable for your customers.<br><br>
            Let's experience this awesomeness and to explore more features in this theme. We are sure that you will fall in love with our COZE at first sight.
        </p>
    </div>

    <div class="detail-6">
        <p class="detail-heading">Features</p>
        <li>Section Drag & Drop Page Builder.</li>
        <li>Full Oberlo Compatibility.</li>
        <li>Sub-Collection Page.</li>
    </div>

    <div class="detail-7">
        <div class="detail-social-cont" style="margin-right: 9px">
            <div style="display: flex;flex-direction:column;justify-content: space-evenly;;align-items: center;">
                <div>
                    <img src="assets/image/product/detail/cloud.svg">
                </div>
                <div style="color: #FFF;
                font-family: Comfortaa;
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
                font-family: Comfortaa;
                font-size: 20px;">
                    Email Support
                </div>
                <div style="color: #888;
                text-align: center;
                font-family: Comfortaa;
                font-size: 16px;text-decoration-line: underline;">
                    support@currenttech.pro
                </div>
            </div>
        </div>
    </div>
</div>


@endsection