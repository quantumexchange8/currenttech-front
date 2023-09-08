@extends('layouts.master')
@section('content')

<style>
    .perform1 {
        text-align: center;
    }
    .perform2 {
        text-align: center;
    }

    @media screen and (max-width: 1280px) {
        .perform1 {
            width: 100%;
            height: auto;
        }
        .perform1 p {
            width: 100%;
            height: auto;
            margin-top: 170px;
        }

        .perform2 {
            width: 100%;
            height: auto;
        }
        .perform2 p {
            width: 100%;
            height: auto;
        }
        .perform4 {
            width: 100%;
            height: auto;
        }
        .perform4 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .perform5 {
            width: 100%;
            height: auto;
        }
        .perform5 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .through-p2 {
            font-size: 14px;
        }
    }
    @media screen and (min-width: 1800px) {
        .perform1 {
            margin-left: 250px;
            margin-right: 250px;
        }
        .perform1 p {
            margin-left: 250px;
            margin-right: 250px;
        }

        .perform2 {
            margin-left: 250px;
            margin-right: 250px;
        }
        .perform2 p {
            margin-left: 250px;
            margin-right: 250px;
        }
    }
    @media screen and (min-width: 2500px) {
        .perform1 {
            margin-left: 350px;
            margin-right: : 350px;
        }
        .perform2 {
            margin-left: 350px;
            margin-right: : 350px;
        }
    }
    @media screen and (min-width: 3500px) {
        .perform1 {
            margin-left: 550px;
            margin-right: : 550px;
        }
        .perform2 {
            margin-left: 550px;
            margin-right: : 550px;
        }
    }
</style>

<div class="main-content9">
    <div class="perform1">
        <p class="building-p1">
            Building Success <br>
            Unleashing the Power of Performance
        </p>

        
    </div>
    <div class="perform2">
        <p class="through-p2">
            Through the integration of diverse management tools like KPIs, OKRs, and point systems, 
            organizations can establish transparency in goal-setting, enhance visibility of progress, 
            and exert greater control over performance. This comprehensive approach facilitates the 
            improvement of overall performance and operational efficiency within enterprises.
        </p>
    </div>

    <div class="perform3">
        <img src="assets/image/feature/perform/1.svg">
    </div>
</div>

<div class="content1">
    <div class="perform4">
        <div style="display: flex; flex-direction:column">
            <div>
                <p class="emphasise-p1">
                    Emphasise Well-Defined Goals
                </p>
            </div>
            <div>
                <p class="emphasise-p2">
                    Set clear objectives for focused efforts. Provide
                    results-oriented guidance to achieve desired 
                    outcomes, maximising productivity and success in 
                    endeavours.
                </p>
            </div>
        </div>
        <div>
            <img src="assets/image/feature/perform/2.svg">
        </div>
    </div>

    <div class="perform5">
        <div>
            <img src="assets/image/feature/perform/3.svg">
        </div>
        <div style="display: flex; flex-direction:column">
            <div>
                <p class="sales-p1">
                    Sales Commissions on Motivation and Enthusiasm
                </p>
            </div>
            <div>
                <p class="sales-p2">
                    Sales commissions drive motivation and goal-
                    oriented performance, fostering a competitive 
                    spirit. Careful implementation ensures a customer-
                    centric approach, balancing short-term goals with 
                    long-term growth.
                </p>
            </div>
        </div>
    </div>

    <div class="perform5">
        <div style="display: flex; flex-direction:column">
            <div>
                <p class="encourage-p1">
                    Encourage a competitive spirit to enhance performance
                </p>
            </div>
            <div>
                <p class="encourage-p2">
                    Encouraging healthy competitiveness can drive 
                    performance, boost innovation, and foster 
                    accountability. Striking a balance is essential to 
                    create a supportive and productive work 
                    environment.
                </p>
            </div>
        </div>
        <div>
            <img src="assets/image/feature/perform/4.svg">
        </div>
    </div>

    <div class="perform4">
        <div>
            <img src="assets/image/feature/perform/5.svg">
        </div>
        <div style="display: flex; flex-direction:column">
            <div>
                <p class="indispensable-p1">
                    The Indispensable Role of a Strong Support Team for <br>
                    Sales Teams
                </p>
            </div>
            <div>
                <p class="indispensable-p2">
                    A robust support team empowers sales teams with 
                    tools, streamlined processes, and customer-centric 
                    assistance, driving success, motivation, and growth.
                </p>
            </div>
        </div>
    </div>

    <div class="perform5">
        
        <div style="display: flex; flex-direction:column">
            <div>
                <p class="display-p1">
                    Display prowess and exceed average performance
                </p>
            </div>
            <div>
                <p class="display-p2">
                    Embrace growth, innovation, and customer-
                    centricity to demonstrate strength, surpass 
                    mediocrity, and achieve excellence in personal and 
                    organizational endeavors.
                </p>
            </div>
        </div>
        <div>
            <img src="assets/image/feature/perform/6.svg">
        </div>
    </div>

    <div class="perform6">
        <p class="discover-p">
            Discover the Hidden Potential of Your Company to Achieve Unprecedented Performance and Growth
        </p>
    </div>

    <div class="perform7">
        <div class="perform-col1">
            <div>
                <img src="assets/image/feature/perform/7.svg">
            </div>
            
            <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Increase
                </p>
            </div>
            <div>
                <p class="perform-pbig">
                    86%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Productivity
                </p>
            </div>
        </div>
        <div class="perform-col2">
            <div>
                <img src="assets/image/feature/perform/8.svg">
            </div>

            <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Better
                </p>
            </div>
            <div>
                <p class="perform-pbig">
                    250%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Teeamwork
                </p>
            </div>
        </div>
        <div class="perform-col3">
            <div>
                <img src="assets/image/feature/perform/9.svg">
            </div>
            <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Gain
                </p>
            </div>
            <div>
                <p class="perform-pbig">
                    78%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Sales Volume
                </p>
            </div>
        </div>
        <div class="perform-col4">
            <div>
                <img src="assets/image/feature/perform/10.svg">
            </div>
            <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Higher
                </p>
            </div>
            <div>
                <p class="perform-pbig">
                    52%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Performance
                </p>
            </div>
        </div>
    </div>

    <div class="perform8">
        <button class="btn-getmoreinfo">
            <a href="{{ route('support') }}" class="explore-link">
                <span class="btn-getmoreinfo-span">GET MORE INFO</span>
            </a>
        </button>
    </div>
</div>
@endsection