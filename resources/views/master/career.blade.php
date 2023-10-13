@extends('layouts.master')
@section('content')

<style>
    .career1 {
        text-align: center;
    }
    .career2 {
        text-align: center;
        margin-bottom: 66px;
    }
    .career7 {
        text-align: center;
        margin-bottom: 66px;
    }

    @media screen and (max-width: 1268px) {
        .career-req-p1 {
            color: #ffffff;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            /* font-weight: 700; */
            line-height: normal;
            margin: 0;
        }
        .edu-ctgry-p p{
            font-size: 10px;
            text-transform: uppercase;
        }
        .ctgry-p p{
            font-size: 10px;
            text-transform: uppercase;
        }
        .cap-p-p{
            font-size: 14px;
        }
        .goodon-p{
            font-size: 10px;
        }
        .cap-ctgry-p p{
            font-size: 10px;
        }
        .cap-ctgry-p2 p{
            font-size: 10px;
        }
        
        .career1 {
            display: flex;
            width: 258px;
            height: 50px;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
        }
        .career1 p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            width: 100%;
            margin-top: 70px;
        }
        .career2 {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .career2 p {
            /* margin-left: 30px; */
            width: 100%;
            height: auto;
            font-size: 14px;
            line-height: 16px;
            margin-top: 38px;
        }
        
        .career4 p {
            font-size: 20px;
            line-height: 23px;
            margin-bottom: 0;
        }
        .career3 {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .career3 img {
            width: 100%;
            height: auto;
            margin-bottom: 38px;
        }
        .career5 {
            /* margin-top: 70px; */
            width: 100%;
            height: auto;
        }
        .career6 {
            width: 100%;
            height: auto;
        }
        .career7 {
            width: 100%;
            height: auto;
            margin-bottom: 88px;
        }
        .career-row1 {
            margin-top: -10px;
            margin-bottom: 0px;
        }
        .career-row2 {
            margin-bottom: 16.42px;
            width: 100%;
        }
        .career-img {
            margin-right: -8px;
        }
        /* .career-row2 img {
            width: 129px;
        } */
        .career-row3 {
            display: flex;
            /* margin-bottom: 88px; */
            flex-wrap: wrap;
            justify-content: center;
        }
        .career-col2 {
            margin-top: 0;
            
        }
        .career-col3 {
            margin-bottom: 7.99px;
            width: 100%;
            margin-right: 0px;
            height: 230px;
            
        }
        .career-col4 {
            width: 100%;
            /* margin-left: 0px; */
        }
        .career-col5 {
            width: 100%;
        }
        .career-col6 {
            width: 100%;
        }
        .career-col7 {
            margin-bottom: 5px;
            width: 100%;
            margin-right: 0px;
            height: 220px;
        }
        .career-col8 {
            width: 250px;
        }
        .career-col9 {
            margin-bottom: 5px;
            width: 100%;
        }
        .career-col10 {
            width: 100%;
            margin-bottom: 5px;
            height: auto;
        }
        .career7 p {
            margin-top: 30px;
            width: 80%;
            font-size: 14px;
            text-align: center;
        }
        .href-link {
            font-size: 14px;
        }
        .href-link2 {
            width: 80%;
            font-size: 14px;
        }
        .it-program-p{
            width: 100%;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 0;
            /* margin-top: -130px; */
        }
        .it-program-p p{
            width: 100%;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 10px;
            margin-top: 0;
        }
        .it-program-p2 {
            height: 0;
            margin-bottom: 17.94px;
        }
        .it-program-p2 p{
            width: 100%;
            font-size: 14px;
            font-weight: 700;
            line-height: 16px;
            /* margin-bottom: 17.94px; */
            margin-top: 0;
        }
        .career-mobile-row {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping in mobile view */
            overflow-x: auto; /* Enable horizontal scrolling if needed */
        }   

        .career-col4,
        .career-col5,
        .career-col6,
        .career-col8,
        .career-col9 {
            flex: 0 0 auto; 
            width: calc(100% / 4);
            /* margin-right: -8px; */
            white-space: nowrap; 
        }
        .career-line {
            margin-top: 68px;
            margin-bottom: 38px;
            width: 100%;
        }
        .career-line1 {
            margin-top: 38.05px;
            margin-bottom: 38px;
            width: 100%;
        }
    }
    @media screen and (min-width: 1800px) {
        .career1 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .career2 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .career3 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .career5 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .career6 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .career7 {
            margin-left: 350px;
            margin-right: 350px;
        }
    }
</style>

<div class="main-content15">
    <div class="career1">
        <p>
            Join Our Team for Exciting Career Opportunities
        </p>
    </div>

    <div class="career2">
        <p>
            Empower your future with Current Tech Industries. Join our visionary team, embrace 
            diversity, and work on impactful projects. Explore career opportunities that fuel your 
            growth and make a difference. Apply now at <br><a href="#" class="href-link">hr.admin@currenttech.pro</a>
        </p>
    </div>

    <div class="career3">
        <img src="assets/image/career/1.svg">
    </div>

    <div class="career4">
        <p>
            We focus on
        </p>
    </div>

    <div class="career-line"></div>

    <div class="career5">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p">
                    <div class="career-col2">
                        <a href="{{ route('support') }}" class="explore-link">
                            <button class="btn-apply">
                                <span>APPLY NOW</span>
                            </button>
                        </a>
                    </div>
                    <p>IT Programmer</p>
                </div>
                
                <div class="it-program-p2">
                    <p>
                        IT programmers write, test, and maintain code for software 
                        applications, using various languages like Java, Python, and 
                        JavaScript. They solve complex problems, collaborate in teams, and 
                        stay updated with technology trends for efficient development and 
                        secure solutions.
                    </p>
                </div>
            </div>
            {{-- <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                </button>
            </div> --}}
        </div>
        <div class="career-row2">
            <div class="career-img" style="margin-right: 9px">
                <img src="assets/image/career/it1.png">
            </div>
            <div class="career-img" style="margin-left:9px;margin-right:9px">
                <img src="assets/image/career/it2.png">
            </div>
            <div class="career-img" style="margin-left: 9px">
                <img src="assets/image/career/it3.png">
            </div>
            
        </div>
        <div class="career-row3">
            <div class="career-col3">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:262px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>CSS / HTML</p>
                            <p>JAVA SCRIPT</p>
                            <p>MQL4</p>
                            <p>MQL5</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>LARAVEL PHP</p>
                            <p>REACT JS</p>
                            <p>VUE JS</p>
                            <p>FLUTTER</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Problem-Solving <br><br>
                        Independence <br><br>
                        Communication <br><br>
                        Aggressive
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        DEGREE
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career6">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p">
                    <div class="career-col2">
                        <a href="{{ route('support') }}" class="explore-link">
                            <button class="btn-apply">
                                <span>APPLY NOW</span>
                            </button>
                        </a>
                    </div>
                    <p>UI / UX Designer</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        UI/UX designer focuses on creating user-friendly interfaces, 
                        conducting research, wireframing, prototyping, and collaborating
                        with stakeholders. They aim to enhance user satisfaction, 
                        engagement, and accessibility through visually appealing designs 
                        and seamless experiences.
                    </p>
                </div>
            </div>
            {{-- <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div> --}}
        </div>
        <div class="career-row2">
            <div style="margin-right: 9px">
                <img src="assets/image/career/ui1.png">
            </div>
            <div style="margin-left: 9px;margin-right:9px">
                <img src="assets/image/career/ui2.png">
            </div>
            <div style="margin-left: 9px">
                <img src="assets/image/career/ui3.png">
            </div>
        </div>
        <div class="career-row3">
            <div class="career-col3">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:265px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>FIGMA</p>
                            <p>SKETCH</p>
                            <p>ADOBE XD</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>PHOTOSHOP</p>
                            <p>ILLUSTRATOR</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Creative <br><br>
                        Problem-Solving <br><br>
                        Independence <br><br>
                        Communication <br><br>
                        Aggressive 
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Diploma <br>
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career6">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p">
                    <div class="career-col2">
                        <a href="{{ route('support') }}" class="explore-link">
                            <button class="btn-apply">
                                <span>APPLY NOW</span>
                            </button>
                        </a>
                    </div>
                    <p>Marketing Designer</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        A marketing designer is a professional who combines marketing 
                        strategies with design skills to create visually compelling materials. 
                        They design marketing collateral, graphics, and advertisements that 
                        effectively communicate brand messages and engage target 
                        audiences to drive business growth.
                    </p>
                </div>
            </div>
            {{-- <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div> --}}
        </div>
        <div class="career-row2">
            <div style="margin-right: 9px">
                <img src="assets/image/career/market1.png" >
            </div>
            <div style="margin-left: 9px; margin-right:9px">
                <img src="assets/image/career/market2.png">
            </div>
            <div style="margin-left : 9px">
                <img src="assets/image/career/market3.png">
            </div>
            
        </div>
        <div class="career-row3">
            <div class="career-col3">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:275px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>FB / IG / LINKEDIN ADS</p>
                            <p>GOOGLE ADS</p>
                            <p>CONTENT CREATOR</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>PHOTOSHOP</p>
                            <p>ILLUSTRATOR</p>
                            <p>VIDEO EDITOR</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Creative <br><br>
                        Problem-Solving <br><br>
                        Independence <br><br>
                        Communication <br><br>
                        Writing Grammar
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career6">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p">
                    <div class="career-col2">
                        <a href="{{ route('support') }}" class="explore-link">
                            <button class="btn-apply">
                                <span>APPLY NOW</span>
                            </button>
                        </a>
                    </div>
                    <p>Backend Operation</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        Operation involves managing and maintaining software in production, 
                        ensuring reliability and performance. Backend development focuses 
                        on server-side logic and infrastructure for data processing, powering 
                        the software's functionality. Both are crucial for a successful 
                        application.
                    </p>
                </div>
            </div>
            {{-- <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div> --}}
        </div>
        <div class="career-row2">
            <div style="margin-right: 9px">
                <img src="assets/image/career/op1.png" >
            </div>
            <div style="margin-left: 9px; margin-right:9px">
                <img src="assets/image/career/op2.png">
            </div>
            <div style="margin-left : 9px">
                <img src="assets/image/career/op3.png" >
            </div>
        </div>
        <div class="career-row3">
            <div class="career-col3">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:295px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>BACKEND SYSTEM</p>
                            <p>CRM SYSTEM</p>
                            <p>MANAGEMENT</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>cTrader ADMIN</p>
                            <p>MT4 ADMIN</p>
                            <p>MT5 ADMIN</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Adaptability <br><br>
                        Problem-Solving <br><br>
                        Independence <br><br>
                        Communication <br><br>
                        Creative
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Diploma <br> 
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career6">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p">
                    <div class="career-col2">
                        <a href="{{ route('support') }}" class="explore-link">
                            <button class="btn-apply">
                                <span>APPLY NOW</span>
                            </button>
                        </a>
                    </div>
                    <p>Indoor / Outdoor Sales</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        Indoor sales occur within physical premises or online, with direct 
                        customer interaction. Outdoor sales involve field activities, reaching 
                        clients at various locations. Both methods are vital for sales success, 
                        depending on business objectives and target audience.
                    </p>
                </div>
            </div>
            {{-- <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div> --}}
        </div>
        <div class="career-row2">
            <div style="margin-right: 9px">
                <img src="assets/image/career/sale1.png">
            </div>
            <div style="margin-left: 9px; margin-right:9px">
                <img src="assets/image/career/sale2.png">
            </div>
            <div style="margin-left : 9px">
                <img src="assets/image/career/sale3.png">
            </div>
            
        </div>
        <div class="career-row3">
            <div class="career-col3">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:335px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>COMMUNICATION</p>
                            <p>SALES & SERVICE</p>
                            <p>CUSTOMER SERVICE</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>NEGOTIATION</p>
                            <p>PRESENTATION</p>
                            <p>SELF-CONFIDENCE</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Adaptability <br><br>
                        Problem-Solving <br><br>
                        Independence <br><br>
                        Communication <br><br>
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Diploma <br> 
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career6">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p">
                    <div class="career-col2">
                        <a href="{{ route('support') }}" class="explore-link">
                            <button class="btn-apply">
                                <span>APPLY NOW</span>
                            </button>
                        </a>
                    </div>
                    <p>Internship</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        An internship is a temporary work opportunity provided by companies 
                        or organizations to students or recent graduates, offering them 
                        practical experience in a specific field. Interns gain valuable skills, 
                        apply theoretical knowledge, and explore potential career paths while 
                        contributing to the company's projects and activities.
                    </p>
                </div>
            </div>
            {{-- <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                </button>
            </div> --}}
        </div>
        <div class="career-row2">
            <div style="margin-right: 9px">
                <img src="assets/image/career/intern1.png">
            </div>
            <div style="margin-left: 9px; margin-right:9px">
                <img src="assets/image/career/intern2.png">
            </div>
            <div style="margin-left : 9px">
                <img src="assets/image/career/intern3.png">
            </div>
            
        </div>
        <div class="career-row3">
            <div class="career-col3">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        CAPABILITY
                    </p>
                    <br>
                    <p class="career-req-p2">
                        GOOD ON
                    </p>
                </div>
                <div style="display: flex;width:315px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>ADAPTABILITY</p>
                            <p>PROBLEM-SOLVING</p>
                            <p>COMMUNICATION</p>
                            <p>INDEPENDENCE</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>AGGRESSIVE</p>
                            <p>LEARNING</p>
                            <p>HARDWORKING</p>
                            <p>SELF-CONFIDENCE</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">SKILL</p>
                    <br>
                    <p class="goodon-p">MIN REQUIREMENT</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        IT Programmer <br><br>
                        UI / UX Desiner <br><br>
                        Marketing Design 
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        0
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career7">
        <p>
            Join us on an exciting journey towards endless possibilities and growth. Embrace diverse 
            career opportunities, unleash your potential, and become part of a supportive community 
            that values lifelong learning and personal fulfillment. Let's build a brighter future together. 
            <br>Apply now at <a href="#" class="href-link2">hr.admin@currenttech.pro</a>
        </p>
    </div>
</div>

@endsection