@extends('layouts.master')
@section('content')

<style>
    .perform1 {
        text-align: center;
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .perform2 {
        text-align: center;
    }

    @media screen and (max-width: 1093px) {
        .perform1 {
            width: 100%;
            height: auto;
        }
        .perform1 p {
            width: 100%;
            height: auto;
            /* margin-top: 170px; */
        }

        .perform2 {
            width: 100%;
            height: auto;
        }
        .perform2 p {
            width: 100%;
            height: auto;
        }
        .perform3 img {
            width: 100%;
            /* max-width: 100%; */
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
            width: 100%;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
        }
        .building-p1 {
            width: 100%;
            height: auto;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
            margin-top: -100px;
        }
        .emphasise-p1 {
            width: 100%;
            font-size: 14px;
        }
        .emphasise-p2 {
            width: 100%;
            font-size: 12px;
        }
        .sales-p1 {
            width: 100%;
            font-size: 14px;
        }
        .sales-p2 {
            width: 100%;
            font-size: 12px;
        }
        .encourage-p1 {
            width: 100%;
            font-size: 14px;
        }
        .encourage-p2 {
            width: 100%;
            font-size: 12px;
        }
        .indispensable-p1 {
            width: 100%;
            font-size: 14px;
        }
        .indispensable-p2 {
            width: 100%;
            font-size: 12px;
        }
        .display-p1 {
            width: 100%;
            font-size: 14px;
        }
        .display-p2 {
            width: 100%;
            font-size: 12px;
        }        
        .rew10 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            margin-left: 50px; 
            margin-bottom: 20px;
        }

        .perform-col {
            width: 48%; 
            margin-bottom: 20px; 
            margin-bottom: 20px; 
        }
        .perform-col img {
            width: 50px;
            height: 50px;
        }
        .perform-pbig {
            font-size: 32px;
        }
        .perform-psmall {
            font-size: 10px;
        }
    }
    @media screen and (min-width: 1800px) {
        .perform1 {
            /* margin-left: 250px;
            margin-right: 250px; */
        }
        .perform1 p {
            /* margin-left: 250px;
            margin-right: 250px; */
        }

        .perform2 {
            /* margin-left: 250px;
            margin-right: 250px; */
        }
        .perform2 p {
            /* margin-left: 250px;
            margin-right: 250px; */
        }
    }
    @media screen and (min-width: 2500px) {
        .perform1 {
            /* margin-left: 350px;
            margin-right: : 350px; */
        }
        .perform2 {
            /* margin-left: 350px;
            margin-right: : 350px; */
        }
    }
    @media screen and (min-width: 3500px) {
        .perform1 {
            /* margin-left: 550px;
            margin-right: : 550px; */
        }
        .perform2 {
            /* margin-left: 550px;
            margin-right: : 550px; */
        }
    }
</style>

<div class="main-content9" style="margin-top:160px;">
    <div class="perform1">
        <p class="building-p1">
            Building Success
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

<div class="main-content9">
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
            <div style="width: 440px">
                <p class="sales-p1">
                    Sales Commissions on
                    Motivation
                </p>
            </div>
            <div style="width: 440px">
                <p class="sales-p2">
                    Sales incentives motivate, 
                    drive goal-oriented 
                    performance, and balance 
                    short-term objectives with 
                    long-term growth while 
                    prioritising customers.
                </p>
            </div>
        </div>
    </div>

    <div class="perform5">
        <div style="display: flex; flex-direction:column">
            <div>
                <p class="encourage-p1">
                    Promote competitiveness for better results.
                </p>
            </div>
            <div>
                <p class="encourage-p2">
                    Promoting constructive competition can
                    enhance performance, innovation, accountability, to
                    create a supportive and productive
                    work environment.
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
            <div style="width: 400px">
                <p class="indispensable-p1">
                    The Essential Function of a Sales Support Team.
                </p>
            </div>
            <div style="width: 380px">
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
            <div style="width:430px">
                <p class="display-p1">
                    Demonstrate skill and surpass performance.
                </p>
            </div>
            <div style="width:430px">
                <p class="display-p2">
                    Embrace growth, innovation, and customer-centricity to demonstrate strength,
                     surpass mediocrity, and achieve excellence in personal and organisational endeavour.
                </p>
            </div>
        </div>
        <div>
            <img src="assets/image/feature/perform/6.svg">
        </div>
    </div>

    <div class="perform6">
        <p class="discover-p">
            Discover the Potential of Your Company to Achieve Performance and Growth
        </p>
    </div>

    <div class="rew10">
        <div class="perform-col">
            <div>
                <img src="assets/image/feature/perform/7.svg">
            </div>
            
            {{-- <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Increase
                </p>
            </div> --}}
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
        <div class="perform-col">
            <div>
                <img src="assets/image/feature/perform/8.svg">
            </div>

            {{-- <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Better
                </p>
            </div> --}}
            <div>
                <p class="perform-pbig">
                    250%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Teamwork
                </p>
            </div>
        </div>
        <div class="perform-col">
            <div>
                <img src="assets/image/feature/perform/9.svg">
            </div>
            {{-- <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Gain
                </p>
            </div> --}}
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
        <div class="perform-col">
            <div>
                <img src="assets/image/feature/perform/10.svg">
            </div>
            {{-- <div style="margin-top: 54px">
                <p class="perform-psmall">
                    Higher
                </p>
            </div> --}}
            <div>
                <p class="perform-pbig">
                    91%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Performance
                </p>
            </div>
        </div>
    </div>
    
    {{-- <div class="perform7">
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
    </div> --}}

    {{-- <div class="perform8">
        <button class="btn-getmoreinfo">
            <a href="{{ route('support') }}" class="explore-link">
                <span class="btn-getmoreinfo-span">GET MORE INFO</span>
            </a>
        </button>
    </div> --}}
</div>
@endsection