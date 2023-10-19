@extends('layouts.master')
@section('content')

<style>

    .sector1 {
        text-align: center;
    }

    .sector2 {
        text-align: center;
    }

    .sector3 {
        text-align: center;
        margin: 0;
    }

    @media screen and (max-width: 1268px) {
        .getstart-container22 {
            width: 100%;
            height: auto;
            margin-bottom: 48px;
        }
        .image-container img{
            max-width: 374px;
            height: 249px;
        }
        .sector1 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            /* margin-top: 100px; */
        }
        .sector-text-overlay {
            border-radius: 0px 0px 20px 20px;
        }
        .sector2 {
            width: 100%;
            height: 20px;
            margin-bottom: 0px;
        }
        .sector1 p {
            display: flex;
            width: 80%;
            height: auto;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin-top: 6px;
            /* margin-left: 36px; */
            margin-bottom: 0;
        }
        .sector2 p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            width: 100%;
            margin-top: 38px;
            margin-bottom: 38px;
        }
        .sector3 {
            width: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        .sector3 p {
            width: 80%;
            height: auto;
            font-size: 20px;
            text-align: center;
            line-height: 23px;
            margin-bottom: 50px;
        }
        .sector4 {
            margin-bottom: 0;
}
        .sector4 img {
            width: 100%;
            height: auto;
            margin-top: 31px;
            margin-bottom: 18px;
        }
        .cart-col1 img {
            width: 44px;
            height: auto;
            margin-left: -15px;
        }
        .spoon-col1 img {
            width: 44px;
            height: auto;
            margin-left: -15px;
            margin-bottom: 11px;
        }
        .sector5 {
            flex-direction: column; /* Stack columns in mobile view */
            margin-bottom: 20px;
        }
        .cart-col1 {
            margin-top: -120px; /* Reset margin for mobile view */
            margin-left: -50px;
            margin-bottom: 10px;
        }
        .spoon-col1 {
            margin-top: -120px; /* Reset margin for mobile view */
            margin-left: -50px;
            margin-bottom: 10px;
        }
        .sector7 {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .sector9 {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .sector11 {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .sector13 {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .sector15 {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .sector16 {
            width: 100%;
            height: auto;
        }
        .sector16 p {
            font-size: 24px;
            width: 600px;
        }
        .cart-col2 {
            width: 100%;
            height: auto;
        }
        .retail-p1 {
            width: 100%;
            height: auto;
            margin-left: -70px;
            font-size: 16px;
            line-height: 18px;
        }
        .retail-p2 {
            width: 100%;
            height: auto;
            margin-left: -70px;
            margin-top: 10px;
            font-size: 14px;
            line-height: 16px;
        }
        .food-p1 {
            width: 100%;
            height: auto;
            margin-left: -115px;
            margin-top: 40px;
            font-size: 16px;
            line-height: 18px;
        }
        .food-p2 {
            width: 100%;
            height: auto;
            margin-top: 10px;
            margin-left: -115px;
            font-size: 14px;
            line-height: 16px;
        }
        .sector-text-overlay p{
            font-size: 18px;
            margin-top: 50px;
        }
        .sector-line {
            width: 340px;
            height: 0.5px;
            background: #666;
            margin-bottom: 0;
            margin-top: 28px;
        }
    }

    /* @media screen and (min-width: 1800px) {
        .sector1 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector1 p {
            margin-left: 350px;
            margin-right: 350px;
        }

        .sector3 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector3 p {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector5 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector7 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector9 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector11 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector13 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector15 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .sector16 {
            margin-left: 350px;
            margin-right: 350px;
        }
    } */

</style>

<div class="main-content14">
    <div class="sector1">
        <p>
            Transforming Every Sector
            with Our Innovation
        </p>
    </div>

    <div class="sector2">
        <p>
            Experience transformation in every sector with our revolutionary platform.
            From retail to F&B, logistic to education, our solution empowers
            businesses to thrive in a dynamic world.
        </p>
    </div>
</div>

<div class="sector-marquee">
    <div class="sector-marquee-content">
        <div class="sector-marquee-item">
            <div class="image-container">
                <img src="assets/image/sector/1.svg">
                <div class="sector-text-overlay">
                    <p>
                        Retail & Service
                    </p>
                </div>
            </div>
            
        </div>
        <div class="sector-marquee-item">
            <div class="image-container">
                <img src="assets/image/sector/1.2.png">
                <div class="sector-text-overlay">
                    <p>
                        Food & Beverage
                    </p>
                </div>
            </div>
            
        </div>
        <div class="sector-marquee-item">
            <div class="image-container">
                <img src="assets/image/sector/3.svg">
                <div class="sector-text-overlay">
                    <p>
                        Logistic
                    </p>
                </div>
            </div>
            
        </div> 
        <div class="sector-marquee-item">
            <div class="image-container">
                <img src="assets/image/sector/1.4.png">
                <div class="sector-text-overlay">
                    <p>
                        Wholesale 
                    </p>
                </div>
            </div>
            
        </div>
        <div class="sector-marquee-item">
            <div class="image-container">
                <img src="assets/image/sector/1.5.png">
                <div class="sector-text-overlay">
                    <p>
                        Automotive 
                    </p>
                </div>
            </div>
            
        </div>
        <div class="sector-marquee-item">
            <div class="image-container">
                <img src="assets/image/sector/1.6.png">
                <div class="sector-text-overlay">
                    <p>
                        Education 
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="main-content14">

    <div class="sector-line"></div>

    <div class="sector3">
        <p>
            Our Solution's Influence on all Sector
        </p>
    </div>
    <div class="getstart-container22"> 
        <div style="display: flex; flex-direction:column">
            <div class="sector4">   
                <img src="assets/image/sector/7.svg">
            </div>
            <div class="sector5">
                <div class="cart-col1">
                    <img src="assets/image/sector/cart.svg" style="margin-top: 100px;">
                </div>
                <div class="cart-col2">
                    <div style="display: flex;">
                        <p class="retail-p1">
                            {{-- <span class="exp-color"> --}}
                            Retail & Service
                            {{-- </span> --}}
                        </p>
                    </div>
                    <div style="display: flex; margin: 0;">
                        <p class="retail-p2">
                            Retail involves selling goods and services directly to consumers,
                            either through physical stores or online platforms. Service refers to 
                            intangible offerings provided by businesses to meet various needs, 
                            such as healthcare, financial assistance, or professional expertise. 
                            Both sectors are crucial for the economy, emphasising consumer 
                            satisfaction and efficient delivery of products and services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="getstart-container22" id="food-beverage"> 
        <div style="display: flex; flex-direction:column">
            <div class="sector4">   
                <img src="assets/image/sector/8.svg">
            </div>
            <div class="sector7">
                <div class="spoon-col1">
                    <img src="assets/image/sector/spoon.svg" style="margin-top: 100px;">
                </div>
                <div class="spoon-col2">
                    <div style="display: flex;">
                        <p class="food-p1">
                            {{-- <span class="exp-color"> --}}
                            Food & Beverage
                            {{-- </span> --}}
                        </p>
                    </div>
                    <div style="display: flex; margin: 0;">
                        <p class="food-p2">
                            The food and beverage (F&B) industry involves the production, 
                            distribution, and sale of food and drinks for human consumption. It 
                            encompasses restaurants, cafes, bars, and beverage manufacturers, 
                            contributing significantly to the economy and hospitality sector. 
                            Success depends on quality, innovation, and customer service, 
                            meeting diverse consumer needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="getstart-container22"> 
        <div style="display: flex; flex-direction:column">
            <div class="sector4">   
                <img src="assets/image/sector/9.svg">
            </div>
            <div class="sector9">
                <div class="spoon-col1">
                    <img src="assets/image/sector/ferry.svg" style="margin-top: 100px;">
                </div>
                <div class="spoon-col2">
                    <div style="display: flex;">
                        <p class="food-p1">
                            {{-- <span class="exp-color"> --}}
                            Logistic
                            {{-- </span> --}}
                        </p>
                    </div>
                    <div style="display: flex; margin: 0;">
                        <p class="food-p2">
                            Logistics involves efficiently planning, implementing, and controlling 
                            the movement and storage of goods, services, and information from 
                            origin to consumption. It encompasses transportation, warehousing, 
                            inventory management, and supply chain coordination, playing a vital 
                            role in cost reduction, improved delivery times, and customer 
                            satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="getstart-container22" style="margin-bottom:68px"> 
        <div style="display: flex; flex-direction:column">
            <div class="sector4">   
                <img src="assets/image/sector/10.svg">
            </div>
            <div class="sector11">
                <div class="spoon-col1">
                    <img src="assets/image/sector/box.svg" style="margin-top: 100px;">
                </div>
                <div class="spoon-col2">
                    <div style="display: flex;">
                        <p class="food-p1">
                            {{-- <span class="exp-color"> --}}
                            Wholesale
                            {{-- </span> --}}
                        </p>
                    </div>
                    <div style="display: flex;">
                        <p class="food-p2">
                            Wholesale involves purchasing goods in bulk from manufacturers or 
                            distributors and selling them in smaller quantities to retailers or 
                            businesses. Wholesalers serve as intermediaries, facilitating cost-
                            effective distribution and allowing producers to reach a broader 
                            market while retailers access a diverse range of products at 
                            discounted prices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="getstart-container22"> 
        <div style="display: flex; flex-direction:column">
            <div class="sector4">   
                <img src="assets/image/sector/11.svg">
            </div>
            <div class="sector13">
                <div class="spoon-col1">
                    <img src="assets/image/sector/car.svg" style="margin-top: 100px;">
                </div>
                <div class="spoon-col2">
                    <div style="display: flex;">
                        <p class="food-p1">
                            {{-- <span class="exp-color"> --}}
                            Automotive
                            {{-- </span> --}}
                        </p>
                    </div>
                    <div style="display: flex; margin: 0;">
                        <p class="food-p2">
                            The automotive industry involves designing, manufacturing, selling, 
                            and maintaining motor vehicles. It includes cars, trucks, motorcycles, 
                            and more, playing a vital role in the global economy. Constantly 
                            evolving, the sector prioritizes technological advancements, 
                            environmental sustainability, and safety to meet consumer demands 
                            for efficient, safe, and eco-friendly transportation options.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="getstart-container22"> 
        <div style="display: flex; flex-direction:column">
            <div class="sector4">   
                <img src="assets/image/sector/12.svg">
            </div>
            <div class="sector15">
                <div class="spoon-col1">
                    <img src="assets/image/sector/edu.svg" style="margin-top: 100px;">
                </div>
                <div class="spoon-col2">
                    <div style="display: flex;">
                        <p class="food-p1">
                            {{-- <span class="exp-color"> --}}
                            Education
                            {{-- </span> --}}
                        </p>
                    </div>
                    <div style="display: flex; margin: 0;">
                        <p class="food-p2">
                            Education is the acquisition of knowledge, skills, and values through 
                            formal or informal methods. It empowers individuals for personal and 
                            societal development, fostering critical thinking, innovation, and 
                            socioeconomic progress. Education systems vary, covering early 
                            childhood education to lifelong learning, enabling individuals to 
                            reach their potential and contribute to society.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="sector16">
        <div>
            <p>Get Your Personalised Quote Today!</p>
        </div>
        <div style="margin-left: 30px;">
            <button class="btn-contact">
                <a href="{{ route('support') }}" class="explore-link">
                    <span>Contact Us Now!</span>
                </a>
            </button>
        </div>
    </div> --}}

</div>
@endsection