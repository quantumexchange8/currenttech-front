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
        font-family: Comfortaa;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .detail-heading2 {
        color: #888;
        font-family: Comfortaa;
        font-size: 20px;
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
    
    @media screen and (max-width: 1150px) {
        .detail-4 p{
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
    }
}
</style>


<div class="main-content18" style="margin-top: 155px;">
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
                    <div>
                        <img src="assets/image/product/webapp/star.svg">
                    </div>
                    {{-- <div style="color: #FFF">
                        STAR
                    </div> --}}
                    <div style="color: #FFF;
                    text-align: center;
                    font-family: Comfortaa;
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
    

    <div class="detail-4" style="width: 1100px;">
        <p style="color: #FFF;
        font-family: Comfortaa;
        font-size: 25px;">Rating & Likes</p>
        {{-- <div class="rating-container">
            <div style="display: flex;align-items: center;justify-content: center;">
                <div style="color: #FFF;
                    text-align: center;
                    font-family: Comfortaa;
                    font-size: 100px; margin-right: 350px; margin-top: 28px;">
                        4.0
                </div>
                <div style="font-size: 100px; margin-right: 550px; margin-top: -50px;">
                    <img src="assets/image/product/webapp/star.svg">
                </div>
            </div>
        </div> --}}
        <img src="assets/image/product/webapp/star2.svg" style="width: 1100px;">
       <!-- style="width: 1100px; -->
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
        <li>Dynamic Checkout Ready.</li>
        <li>Add To Cart Popup.</li>
        <li>Advanced Variant Swatches.</li>
        <li>Ajax Products.</li>
        <li>Ajax Search.</li>
        <li>Social Share.</li>
        <li>Optimised For Mobile Devices.</li>
        <li>Size Guide Popup.</li>
        <li>Strong Filter.</li>
        <li>Instagram Shop.</li>
        <li>Popup Login.</li>
        <li>Automatic Price Change.</li>
        <li>Flexible Built-in Mega Menu.</li>
        <li>Quick-view Product Quick-view.</li>
        <li>Advanced Layered Navigation.</li>
        <li>Unlimited Google Fonts.</li>
        <li>Site Identity.</li>
        <li>Header & Footer Style Options.</li>
        <li>Amazing Slider built-in</li>
        <li>Unlimited colours.</li>
        <li>SEO Optimised.</li>
        <li>“New”, “Hot”, “Sale”... labels.</li>
        <li>Multi-Currency.</li>
        <li>Amazing Layout Variations.</li>
        <li>Newsletter.</li>
        <li>Responsive & Retina Ready.</li>
        <li>Drop-down shopping cart in header.</li>
        <li>Sticky Header Multi Styles.</li>
        <li>Ajax Add to Cart & Wishlist.</li>
        <li>Ajax Paging & Ajax Toolbar built-in.</li>
        <li>Ajax Grid & List view collection.</li>
        <li>Previous & Next functionality for the product view page.</li>
        <li>Slider for Up-sell Products and Related Products blocks.</li>
        <li>Product zoom built-in.</li>
        <li>Best Seller Product.</li>
        <li>Back to top button.</li>
        <li>Background patterns and colour chooser.</li>
        {{-- <br> --}}
        <p class="detail-heading2">Tabs:</p>
        <li>Grid / List view.</li>
        <li>“Additional Information” tab for individual product attributes.</li>
        <li>Brand Logo Slider.</li>
        <li>Blog Post Slider built-in.</li>
        <li>FontAwesome icons.</li>
        <li>One-click import.</li>
        <li>Cross Browser Support.</li>
        <li>Customer Reviews.</li>
        <p class="detail-heading2">Contact:</p>
        <li>Product Carousel.</li>
        <li>HTML5 & CSS3 & Sass CSS.</li>
        <li>Social networking.</li>
        <li>Support Online 24/7.</li>
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