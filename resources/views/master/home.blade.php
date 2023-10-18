@extends('layouts.master')
@section('content')

<style>
    @media screen and (max-width: 1093px) {
        .ourservice {
            font-size: 46px;
        }
        .btn-span-getinfo1 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal; /* 285.714% */
        }
        .home-marquee {
            margin-bottom: 88px !important;
        }
    }
</style>
    <div class="main-content">
        {{-- web --}}
        <div class="techmain-1">
            <div class="vr">
                <img src="/assets/image/home/vr.svg">
            </div>
            {{-- <div class="vr2">
                <img src="/assets/image/home/vr2.svg">
            </div> --}}
            <div class="techpmain-cont">
                <p class="techp">Technology</p>
                <br>
                <p class="techp-content">
                    is the key to unlocking a<br> 
                    sustainable and prosperous<br> 
                    future. Through innovation<br>
                    and technological advancements. <br>
                    Technology has ushered in an <br>era of intelligence, 
                    automation, <br>and digitization, 
                    propelling the <br>transformation and 
                    upgrading <br>of industries.
                    {{-- is the key to unlocking a sustainable <br>
                    and prosperous <span class="future">future</span>. Through <br>
                    innovation and technological <br>
                    advancements. Technology has <br>
                    ushered in an era of <span class="intell">intelligence</span>, <br>
                    automation, and digitization, <br>
                    propelling the transformation and <br>
                    upgrading of industries. --}}
                </p>
            </div>
        </div>
        {{-- mobile --}}
        <div class="mobile-techmain-1">
            {{-- <div class="vr">
                <img src="/assets/image/home/vr.svg">
            </div> --}}
            <div class="vr2">
                <img src="/assets/image/home/vr2.svg">
            </div>
            <div class="techpmain-cont">
                <p class="techp">Technology</p>
                <br>
                <p class="techp-content-mobile">
                    is the key to unlocking a sustainable 
                    and prosperous future. Through 
                    innovation and technological 
                    advancements. Technology has 
                    ushered in an era of intelligence, 
                    automation, and digitization, 
                    propelling the transformation and 
                    upgrading of industries.
                </p>
            </div>
        </div>

        <div class="center-service">
            <p class="ourservice">
                Our Service
            </p>

            <img src="/assets/image/home/service.svg" class="service-image">

            <p class="unleash">
                {{-- Unleash <span class="lightning-fast">lightning-fast speed</span> with our optimized services. Say goodbye to <span class="loading-time">loading times</span> and buffering, and embrace seamless connectivity <br>
                for a superior online experience. --}}
                Unleash lightning-fast speed with our optimized services. Say goodbye to loading times and buffering, and embrace seamless connectivity 
                for a superior online experience.
            </p>

            <div class="development">
                <div class="dev-row1">
                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <img src="assets/image/home/software.svg">
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        Software Development
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        Empower your business with customized 
                                        software solutions. Our expert team of 
                                        developers will bring your ideas to life, 
                                        delivering innovative and reliable 
                                        software tailored to your specific needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <img src="assets/image/home/website.svg">
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        Website Development
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        We develop websites, no matter big or small with a stage-by-stage approach. 
                                        From pre-production planning, crafting the GUI design, to backend development;
                                        we execute them with precision.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <img src="assets/image/home/mobile.svg">
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        Mobile App Development
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        We convert our clients' core idea into 
                                        innovative applications for mobile, 
                                        cloud or web. We ensure the apps are 
                                        developed to be compatible on major 
                                        platforms as well as cater to mass
                                        devices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <img src="assets/image/home/possystem.svg">
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        POS System Development
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        Streamline your business operations 
                                        with our powerful POS system. Manage 
                                        sales, inventory, and customer data 
                                        seamlessly, while providing a seamless 
                                        checkout experience for your 
                                        customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <img src="assets/image/home/expert.svg">
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        Expert Advisor Builder
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        Expert Advisor in forex is an automated 
                                        trading software that executes trades 
                                        based on predefined strategies, aiming 
                                        to enhance trading efficiency and 
                                        potentially generate profits.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col1">
                        <div class="software">
                            <div class="software-row1">
                                <div class="software-col1">
                                    <img src="assets/image/home/support.svg">
                                </div>
                                <div class="software-col2">
                                    <p class="software-p">
                                        Support & Maintenance
                                    </p>
                                </div>
                            </div>

                            <div class="software-row2">
                                <div class="software-col3">
                                    <p class="software-content">
                                        Ensure the smooth functioning of your 
                                        systems with our comprehensive 
                                        support and maintenance services. Our 
                                        dedicated team will provide timely 
                                        updates & troubleshooting to keep your 
                                        systems running at their best.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="dev-col2">
                        <div class="website">
                            <div class="website-row3">
                                <div class="website-col4">
                                    <img src="assets/image/home/website.svg">
                                </div>

                                <div class="website-col5">
                                    <p class="website-p">
                                        Website Development
                                    </p>
                                </div>
                            </div>

                            <div class="website-row4">
                                <div class="website-col3">
                                    <p class="website-content">
                                        We develop websites, no matter big or small with a stage-by-stage approach. 
                                        From pre-production planning, crafting the GUI design, to backend development;
                                        we execute them with precision.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="dev-col3">
                        <div class="mobile">
                            <div class="mobile-row3">
                                <div class="mobile-col4">
                                    <img src="assets/image/home/mobile.svg">
                                </div>

                                <div class="mobile-col5">
                                    <p class="mobile-p">
                                        Mobile App Development
                                    </p>
                                </div>
                            </div>

                            <div class="mobile-row4">
                                <div class="mobile-col3">
                                    <p class="mobile-content">
                                        We convert our clients' core idea into 
                                        innovative applications for mobile, 
                                        cloud or web. We ensure the apps are 
                                        developed to be compatible on major 
                                        platforms as well as cater to mass
                                        devices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="dev-row2">

                    {{-- <div class="dev-col4">
                        <div class="pos">
                            <div class="pos-row3">
                                <div class="pos-col4">
                                    <img src="assets/image/home/mobile.svg">
                                </div>

                                <div class="pos-col5">
                                    <p class="pos-p">POS System Development
                                    </p>
                                </div>
                            </div>

                            <div class="pos-row4">
                                <div class="pos-col3">
                                    <p class="pos-content">
                                        Streamline your business operations 
                                        with our powerful POS system. Manage 
                                        sales, inventory, and customer data 
                                        seamlessly, while providing a seamless 
                                        checkout experience for your 
                                        customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col5">
                        <div class="pos">
                            <div class="pos-row3">
                                <div class="pos-col4">
                                    <img src="assets/image/home/expert.svg">
                                </div>

                                <div class="pos-col5">
                                    <p class="pos-p">Expert Advisor Builder
                                    </p>
                                </div>
                            </div>

                            <div class="pos-row4">
                                <div class="pos-col3">
                                    <p class="pos-content">
                                        Expert Advisor in forex is an automated 
                                        trading software that executes trades 
                                        based on predefined strategies, aiming 
                                        to enhance trading efficiency and 
                                        potentially generate profits.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dev-col6">
                        <div class="support">
                            <div class="support-row-3">
                                <div class="support-col4">
                                    <img src="assets/image/home/support.svg">
                                </div>

                                <div class="support-col5">
                                    <p class="support-p">Support & Maintenance
                                    </p>
                                </div>
                            </div>

                            <div class="support-row-4">
                                <div class="support-col3">
                                    <p class="support-content">
                                        Ensure the smooth functioning of your 
                                        systems with our comprehensive 
                                        support and maintenance services. Our 
                                        dedicated team will provide timely 
                                        updates & troubleshooting to keep your 
                                        systems running at their best.
                                    </p>
                                </div>
                            </div>
                        </div> 
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="center-vision">
            <p class="vision-p">Your Vision Come Alive</p>

            <img src="/assets/image/home/vision.png" style="width: 100%;">

            <div class="mobile-alignment-30px">
                <p class="vision-content">
                    Welcome to the era of vision. Embark on a journey through the realms of 
                    boundless creativity and innovation. Discover how technology unlocks the 
                    power of imagination, reshaping our world with visionary possibilities and 
                    endless horizons of imagination.
                </p>
            </div>
            
        </div>

        <!-- mobile -->
        <div class="center-spectacularr">
            <p class="spect-p">
                Introducing Our Spectacular
                Line of Cutting-Edge Products
            </p>
        </div>
        <div class="center-spectacular">
            <p class="spect-p">
                Introducing Our Spectacular
                Line of Cutting-Edge Products
            </p>
            <div class="spectacular">
                <div class="spec-row1">
                    <div class="spec-col1">
                        <p>
                            <span class="exp-color">Experience</span> 
                            <br>
                            the future with our 
                            groundbreaking 
                            products, redefining 
                            possibilities and empowering lives 
                            like never before! Discover 
                            innovation today!
                        </p>
                    </div>
                    <div class="spec-col2">
                        <div class="pos-content-1">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/posimg.svg" class="workcate">
                            </div>
                            <div>
                                <p class="poshead">
                                    POS SYSTEM
                                </p>
                            </div>
                            <div>
                                <p class="streamhead" style="margin-bottom: 16px;">
                                    Streamlining <br>Your Sales Process<br>
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('possystem') }}" class="explore-link">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <span class="btn-getmoreinfo2-span">GET INFO</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="spec-col3">
                        <div class="webapp">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/webapp.svg" class="workcate">
                            </div>
                            <div>
                                <p class="webapphead">
                                    WEB & APP
                                </p>
                            </div>
                            <div>
                                <p class="webappcont" style="margin-bottom: 16px;">
                                    360 <br>Degree Connectivity
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('webapp') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">GET INFO</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spec-row2">
                    <div class="spec-col4">
                        <div class="broker">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/broker.svg" class="workcate">
                            </div>
                            <div>
                                <p class="brokerhead">
                                    BROKERAGE SETUP
                                </p>
                            </div>
                            <div>
                                <p class="brokercontent" style="margin-bottom: 16px;">
                                    Path to <br> Financial Success<br>
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('expert') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">GET INFO</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="spec-col5">
                        <div class="expert-1">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/expertimg.svg" class="workcate">
                            </div>
                            <div>
                                <p class="expert1head">
                                    EXPERT ADVISOR
                                </p>
                            </div>
                            <div>
                                <p class="expert1content" style="margin-bottom: 16px;">
                                    Power <br> of AI Investment<br>
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('brokerage') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">GET INFO</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="spec-col6">
                        <div class="web3">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/web3.svg" class="workcate">
                            </div>
                            <div>
                                <p class="web3head">
                                    WEB 3.0
                                </p>
                            </div>
                            <div>
                                <p class="web3content" style="margin-bottom: 16px;">
                                    The Decentralised<br> Digital Revolution
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('web3') }}">
                                    {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                    <button class="btn-getmoreinfo2">
                                        <a href="{{ route('support') }}" class="explore-link">
                                            <span class="btn-getmoreinfo2-span">GET INFO</span>
                                        </a>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- web -->
        <div class="home-marqueee" style="margin-bottom: 38px;">
            <div class="marquee-content">
                <div class="marquee-item">
                    <div class="spec-col1">
                        <p>
                            <span class="exp-color">Experience</span> 
                            <br>
                            the future with our 
                            groundbreaking 
                            <span class="prod-color">products</span>, redefining 
                            possibilities and empowering lives 
                            like never before! Discover 
                            <span class="inno-color">innovation</span> today!
                        </p>
                    </div>
                </div>
    
                <div class="marquee-item">
                    <div class="spec-col2">
                        <div class="pos-content-1">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/posimg.svg" class="workcate">
                            </div>
                            <p class="poshead">
                                POS SYSTEM
                            </p>
                            <p class="streamhead" style="margin-bottom: 10px;">
                                Streamlining <br>Your Sales Process<br>
                            </p>
                            <a href="{{ route('possystem') }}">
                                {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">GET INFO</span>
                                    </a>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item">
                    <div class="spec-col3">
                        <div class="webapp">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/webapp.svg" class="workcate">
                            </div>
                            <p class="poshead">
                                WEB & APP
                            </p>
                            <p class="webappcont" style="margin-bottom: 10px;">
                                360 <br>
                                Degree Connectivity
                            </p>
                            <a href="{{ route('webapp') }}">
                                {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">GET INFO</span>
                                    </a>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item">
                    <div class="spec-col4">
                        <div class="broker">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/broker.svg" class="workcate">
                            </div>
                            <p class="brokerhead">
                                BROKERAGE SETUP
                            </p>
                            <p class="brokercontent" style="margin-bottom: 10px;">
                                Path to <br> Financial Success<br>
                            </p>
                            <a href="{{ route('expert') }}">
                                {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">GET INFO</span>
                                    </a>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item">
                    <div class="spec-col5">
                        <div class="expert-1">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/expertimg.svg" class="workcate">
                            </div>
                            <p class="expert1head">
                                EXPERT ADVISOR
                            </p>
                            <p class="expert1content" style="margin-bottom: 10px;">
                                Power <br> of AI Investment<br>
                            </p>
                            <a href="{{ route('brokerage') }}">
                                {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">GET INFO</span>
                                    </a>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="marquee-item">
                    <div class="spec-col6">
                        <div class="web3">
                            <div style="display: flex;justify-content:center">
                                <img src="assets/image/home/web3.svg" class="workcate">
                            </div>
                            <p class="web3head">
                                WEB 3.0
                            </p>
                            <p class="web3content" style="margin-bottom: 10px;">
                                The Decentralised Digital Revolution<br>
                            </p>
                            <a href="{{ route('web3') }}">
                                {{-- <img src="assets/image/home/arrow.svg" style="text-align: left"> --}}
                                <button class="btn-getmoreinfo2">
                                    <a href="{{ route('support') }}" class="explore-link">
                                        <span class="btn-getmoreinfo2-span">GET INFO</span>
                                    </a>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="one-stop">
            
                <p class="one-stop-head">
                    Your One-Stop Solution for Core Servive Needs
                </p>
            
            
            <div class="ourfeature">
            
                <div style="margin-bottom: 38px">
                    <p class="ourfeature2">OUR FEATURES</p>
                    <p class="ourfeature3">Discover Latest Features</p>
                </div>
                

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/performance.svg" class="ic">
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">Performance</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">Impactful and versatile features.</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/reward.svg" class="ic">
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">Reward Program</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">Points, discount, referrals.</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/develop.svg" class="ic">
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">Develop & Learn</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">Data analysis and predictions.</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/hr.svg" class="ic">
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">HR Management</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">Recruitment, onboarding, training.</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/report.svg" class="ic">
                    </div>
                    <div class="mobile-displayflex">
                        <div>
                            <p class="perform-detail-head">Report & Analytics</p>
                        </div>
                        <div>
                            <p class="perform-detail-content">Gather, analyse, and presebt data.</p>
                        </div>
                    </div>
                    <div>
                        <img src="assets/image/home/star.svg" class="star">
                    </div>
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div>
                
                
                {{-- <div class="ourfeature-item">
                    <img src="assets/image/home/reward.svg" class="ic">
                    <div style="display: flex; flex-direction:column; margin-left: 26px; margin-right: 167px">
                        <p class="perform-detail-head">Reward Program</p>
                        <p class="perform-detail-content" style="width: 220px;">Points, discount, referrals.</p>
                    </div>
                    <img src="assets/image/home/star.svg" style="margin-left: -90px; margin-right: 50px;" class="star">
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div> --}}

                {{-- <div class="ourfeature-item">
                    <img src="assets/image/home/develop.svg" class="ic">
                    <div style="display: flex; flex-direction:column; margin-left: 26px; margin-right: 163px">
                        <p class="perform-detail-head">Develop & Learn</p>
                        <p class="perform-detail-content" style="width: 223px;">Data analysis and predictions.</p>
                    </div>
                    <img src="assets/image/home/star.svg" style="margin-left: -90px; margin-right: 50px;" class="star">
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div> --}}

                {{-- <div class="ourfeature-item">
                    <img src="assets/image/home/hr.svg" class="ic">
                    <div style="display: flex; flex-direction:column; margin-left: 26px; margin-right: 134px">
                        <p class="perform-detail-head">HR Management</p>
                        <p class="perform-detail-content" style="width: 253px;">Recruitment, onboarding, training.</p>
                    </div>
                    <img src="assets/image/home/star.svg" style="margin-left: -90px; margin-right: 50px;" class="star">
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div> 

                <div class="ourfeature-item" style="margin-bottom:0px">
                    <img src="assets/image/home/report.svg" class="ic">
                    <div style="display: flex; flex-direction:column; margin-left: 26px; margin-right: 138px">
                        <p class="perform-detail-head">Report & Analytics</p>
                        <p class="perform-detail-content" style="width: 251px;">Gather, analyse, and presebt data.</p>
                    </div>
                    <img src="assets/image/home/star.svg" style="margin-left: -90px; margin-right: 50px;" class="star">
                    <div>
                        <button class="btn-getinfo">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span style="color: #BD00FF;text-align: center;
                                font-family: SF Pro Text;font-weight: 700;
                                font-size: 14px;">GET INFO</span>
                            </a>
                        </button>
                    </div>
                </div>--}}
                
            </div>

            <div class="ourfeature-mobile">
            
                <div style="margin-bottom: 38px">
                    <p class="ourfeature2">OUR FEATURES</p>
                    <p class="ourfeature3">Discover Latest Features</p>
                </div>
                
                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/performance.svg" class="ic">
                    </div>
                    <div style="display: flex;gap:23px">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">Performance</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">Impactful and versatile features.</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">GET INFO</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/reward.svg" class="ic">
                    </div>
                    <div style="display: flex;gap:16px;gap:52px">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">Reward Program</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">Points, discount, referrals.</p>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">GET INFO</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/develop.svg" class="ic">
                    </div>
                    <div style="display: flex;gap:34px">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">Develop & Learn</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">Data analysis and predictions.</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">GET INFO</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/hr.svg" class="ic">
                    </div>
                    <div style="display: flex;gap:16px">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">HR Management</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">Recruitment, onboarding, trading.</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">GET INFO</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="ourfeature-item">
                    <div>
                        <img src="assets/image/home/report.svg" class="ic">
                    </div>
                    <div style="display: flex;gap:13px">
                        <div class="mobile-displayflex">
                            <div>
                                <p class="perform-detail-head">Report & Analytics</p>
                            </div>
                            <div>
                                <p class="perform-detail-content">Gather, analyse, and presebt data.</p>
                            </div>
                        </div>
                        <div>
                            <button class="btn-getinfo">
                                <a href="{{ route('support') }}" class="explore-link">
                                    <span style="color: #BD00FF;text-align: center;
                                    font-family: SF Pro Text;font-weight: 700;
                                    font-size: 10px;">GET INFO</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="center-innovation">
            <p class="innovation-p">
                Innovative Solutions for Your Business
            </p>

            <p class="innovation-content">
                Embracing innovation in your business drives efficiency, <span class="sustainability-color">sustainability</span>, 
                and customer experiences. Groundbreaking solutions transform the 
                landscape, meeting <span class="modern-color">modern</span> demands and ensuring competitiveness.
            </p>
        </div>
    </div>

    <div class="home-marquee-web" style="margin-bottom: 122px">
        <div class="marquee-content">
            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/logistic.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Efficient transportation,
                            logistics, and supply
                            chain solutions.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/logistic1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Logistic  
                                </p>
                                <p class="logistic-p-cont">
                                    Logistic Regression
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-logis">
                                        <span class="btn-span-getinfo">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/education.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Empowering minds
                            through quality education.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/education2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Education  
                                </p>
                                <p class="logistic-p-cont">
                                    Learning Evolution
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-edu">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/fnb.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Delicious dining
                            experiences, tempting
                            food and beverages.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/fnb1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Food & Beverage  
                                </p>
                                <p class="logistic-p-cont">
                                    Savoury Delights
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/retail.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Shopping, endless
                            choices, exceptional
                            experiences.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/retail2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Retail  
                                </p>
                                <p class="logistic-p-cont">
                                    Shopper Trends
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #C89E8A">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/wholesale.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Bulk savings, wholesale
                            prices, sourcing for
                            businesses and retailers.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Wholesale  
                                </p>
                                <p class="logistic-p-cont">
                                    Global Supply Chains
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #A7A7A7">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/automotive.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Innovative vehicles,
                            driving excellence,
                            mobility redefined.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Automotive  
                                </p>
                                <p class="logistic-p-cont">
                                    Vehicle Advancements
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #418F9B">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="home-marquee" style="margin-bottom: 122px">
        <div class="marquee-content">
            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/1.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Efficient transportation,
                            logistics, and supply
                            chain solutions.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/logistic1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Logistic  
                                </p>
                                <p class="logistic-p-cont">
                                    Logistic Regression
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-logis">
                                        <span class="btn-span-getinfo">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/2.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Empowering minds
                            through quality education.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/education2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Education  
                                </p>
                                <p class="logistic-p-cont">
                                    Learning Evolution
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-edu">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/3.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Delicious dining
                            experiences, tempting
                            food and beverages.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/fnb1.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Food & Beverage  
                                </p>
                                <p class="logistic-p-cont">
                                    Savoury Delights
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/4.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Shopping, endless
                            choices, exceptional
                            experiences.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/retail2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Retail  
                                </p>
                                <p class="logistic-p-cont">
                                    Shopper Trends
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #C89E8A">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/5.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Bulk savings, wholesale
                            prices, sourcing for
                            businesses and retailers.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Wholesale  
                                </p>
                                <p class="logistic-p-cont">
                                    Global Supply Chains
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #A7A7A7">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/6.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Innovative vehicles,
                            driving excellence,
                            mobility redefined.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 24px;">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Automotive  
                                </p>
                                <p class="logistic-p-cont">
                                    Vehicle Advancements
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #418F9B">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/fnb.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Delicious dining
                            experiences, tempting
                            food and beverages.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 40px">
                            <img class="home-marquee-btm-icon" src="/assets/image/home/fnb2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Food & Beverage
                                </p>
                                <p class="logistic-p-cont">
                                    Savoury Delights
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/retail.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient">
                            Shopping, endless
                            choices, exceptional
                            experiences.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 40px">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/retail2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Retail        
                                </p>
                                <p class="logistic-p-cont">
                                    Shopper Trends
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #C89E8A">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/wholesale.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient" style="width:416px">
                            Bulk savings, wholesale
                            prices, sourcing for
                            businesses and retailers.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 40px">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/wholesale2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Wholesale       
                                </p>
                                <p class="logistic-p-cont">
                                    Global Supply Chains
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #A7A7A7">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="marquee-item">
                <div class="marquee-image-container">
                    <img class="home-marquee-btm" src="/assets/image/homemarquee/automotive.svg">
                    <div class="text-overlay">
                        <p class="txtimg-efficient" style="width:395px">
                            Innovative vehicles,
                            driving excellence,
                            mobility redefined.
                        </p>
                    </div>

                    <div class="bottom-container">
                        <div style="display: flex;justify-content: center;align-items: center;margin-top: 40px">
                            <img class="home-marquee-btm-icon" src="/assets/image/homemarquee/automotive2.svg">
                            <div class="btm-cont-text">
                                <p class="logistic-p">
                                    Automotive       
                                </p>
                                <p class="logistic-p-cont">
                                    Vehicle Advancements
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('sector') }}" style="cursor: pointer; text-decoration: none;" class="explore-link">
                                    <button class="btn-getinfo-fnb" style="background: #418F9B">
                                        <span class="btn-span-getinfo1">GET INFO</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection