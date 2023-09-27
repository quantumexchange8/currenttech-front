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
        .career1 {
            width: 100%;
            height: auto;
            /* margin-top: 110px; */
        }
        .career1 p {
            width: 100%;
            height: auto;
        }
        .career2 {
            width: 100%;
            height: auto;
        }
        .career2 p {
            width: 100%;
            height: auto;
            font-size: 14px;
        }
        .career3 {
            width: 100%;
            height: auto;
        }
        .career3 img {
            width: 100%;
            height: auto;
        }
        .career5 {
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
        }
        .career-row2 {
            width: 100%;
        }
        .career-row2 img {
            width: 300px;
        }
        .career-row3 {
            display: flex;
            margin-bottom: 88px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .career-col3 {
            margin-bottom: 30px;
            width: 750px;
        }
        .career-col4 {
            width: 250px;
            margin-left: 0px;
        }
        .career-col5 {
            width: 250px;
        }
        .career-col6 {
            width: 250px;
        }
        .career-col7 {
            margin-bottom: 30px;
            width: 750px;
        }
        .career-col8 {
            width: 250px;
        }
        .career-col9 {
            margin-bottom: 30px;
            width: 250px;
        }
        .career-col10 {
            width: 500px;
        }
        .career7 p {
            width: 100%;
            font-size: 19px;
        }
        .href-link {
            font-size: 14px;
        }
        .href-link2 {
            font-size: 19px;
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

<div class="main-content15" style="margin-top: 170px;">
    <div class="career1">
        <p>
            Join Our Team for Exciting Career Opportunities
        </p>
    </div>

    <div class="career2">
        <p>
            Empower your future with Current Tech Industries. Join our visionary team, embrace 
            diversity, and work on impactful projects. Explore career opportunities that fuel your 
            growth and make a difference. Apply now at <a href="#" class="href-link">hr.admin@currenttech.pro</a>
        </p>
    </div>

    <div class="career3">
        <img src="assets/image/career/1.svg">
    </div>

    <div class="career4">
        <p>
            We focus on...
        </p>
    </div>

    <div class="career-line"></div>

    <div class="career5">
        <div class="career-row1">
            <div class="career-col1">
                <div class="it-program-p"><p>IT Programmer</p></div>
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
            <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                </button>
            </div>
        </div>
        <div class="career-row2">
            <div style="margin-right: 9px">
                <img src="assets/image/career/it1.png">
            </div>
            <div style="margin-left:9px;margin-right:9px">
                <img src="assets/image/career/it2.png">
            </div>
            <div style="margin-left: 9px">
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
                <div style="display: flex;width:275px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <p>
                            Laravel PHP <br><br>
                            React JS <br><br>
                            Vue JS <br><br>
                            Flutter
                        </p>
                    </div>
                    <div class="ctgry-p">
                        <p>
                            Java Script <br><br>
                            CSS / HTML <br><br>
                            MQL4 / MQL5 <br><br>
                        </p>
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
                <div class="it-program-p"><p>UI / UX Designer</p></div>
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
            <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div>
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
            <div class="career-col7">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:270px;justify-content: space-between;height: 157.5px">
                    <div class="ctgry-p">
                        <p>
                            Figma <br><br>
                            Sketch <br><br>
                            Adobe XD 
                        </p>
                    </div>
                    <div class="ctgry-p">
                        <p>
                            Photoshop <br><br>
                            Illustrator 
                        </p>
                    </div>
                </div>  
            </div>
            <div class="career-col8">
                <div class="cap-p1">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p2">
                    <p>
                        Creative <br><br>
                        Problem-Solving <br><br>
                        Independence <br><br>
                        Communication <br><br>
                        Aggressive
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p" style="height: 157.5px">
                    <p>
                        Diploma <br>
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p" style="height: 157.5px">
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
                <div class="it-program-p"><p>Marketing Designer</p></div>
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
            <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div>
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
            <div class="career-col7">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:316px;justify-content: space-between;height: 157.5px">
                    <div class="ctgry-p">
                        <p>
                            FB / IG / LinkedIn Ads <br><br>
                            Google Ads <br><br>
                            Content Creator <br><br>
                        </p>
                    </div>
                    <div class="ctgry-p">
                        <p>
                            Photoshop <br><br>
                            Illustrator <br><br>
                            Video Editor
                        </p>
                    </div>
                </div>  
            </div>
            <div class="career-col8">
                <div class="cap-p1">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Creative <br><br>
                        Problem-Solving <br><br>
                        Writting Grammer <br><br>
                        Communication <br><br>
                        Independence
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p" style="height: 157.5px">
                    <p>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p" style="height: 157.5px">
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
                <div class="it-program-p"><p>Backend Operation</p></div>
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
            <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div>
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
            <div class="career-col7">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:316px;justify-content: space-between;height: 157.5px">
                    <div class="ctgry-p">
                        <p>
                            Backend System <br><br>
                            CRM System <br><br>
                            Customer Management <br><br>
                        </p>
                    </div>
                    <div class="ctgry-p">
                        <p>
                            cTrader Admin <br><br>
                            MT4 Admin <br><br>
                            MT5 Admin
                        </p>
                    </div>
                </div>  
            </div>
            <div class="career-col8">
                <div class="cap-p1">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        Adaptability <br><br>
                        Problem-Solving <br><br>
                        Communication <br><br>
                        Independence <br><br>
                        Communication
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p" style="height: 157.5px">
                    <p>
                        Diploma <br>
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p" style="height: 157.5px">
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
                <div class="it-program-p"><p>Indoor / Outdoor Sales</p></div>
                <div class="it-program-p2">
                    <p>
                        Indoor sales occur within physical premises or online, with direct 
                        customer interaction. Outdoor sales involve field activities, reaching 
                        clients at various locations. Both methods are vital for sales success, 
                        depending on business objectives and target audience.
                    </p>
                </div>
            </div>
            <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                    
                </button>
            </div>
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
            <div class="career-col7">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div style="display: flex;width:316px;justify-content: space-between;height: 157.5px">
                    <div class="ctgry-p">
                        <p>
                            Communication <br><br>
                            Sales & Service <br><br>
                            Customer Service <br><br>
                        </p>
                    </div>
                    <div class="ctgry-p">
                        <p>
                            Negotiation <br><br>
                            Presentation <br><br>
                            Self-Confidence
                        </p>
                    </div>
                </div>  
            </div>
            <div class="career-col8">
                <div class="cap-p1">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div class="cap-ctgry-p" style="height: 157.5px">
                    <p>
                        Adaptability <br><br>
                        Problem-Solving <br><br>
                        Communication <br><br>
                        Independence 
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p" style="height: 157.5px">
                    <p>
                        Diploma <br>
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col8">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p" style="height: 157.5px">
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
                <div class="it-program-p"><p>Internship</p></div>
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
            <div class="career-col2" style="margin-top: -60px;">
                <button class="btn-apply">
                    <a href="{{ route('support') }}" class="explore-link">
                        <span>APPLY NOW</span>
                    </a>
                </button>
            </div>
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
            <div class="career-col9">
                <div class="career-req-p">
                    <p class="career-req-p1">
                        SKILLS
                    </p>
                    <br>
                    <p class="career-req-p2">
                        MIN REQUIREMENT
                    </p>
                </div>
                <div class="cap-ctgry-p" style="height: 157.5px">
                    <p>
                        IT Programmer <br><br>
                        UI / UX Designer <br><br>
                        Marketing Design <br><br>
                    </p>
                </div>  
            </div>
            <div class="career-col10">
                <div class="cap-p1">
                    <p class="cap-p-p">CAPABILITY</p>
                    <br>
                    <p class="goodon-p">GOOD ON</p>
                </div>
                <div style="display: flex;width:316px;justify-content: space-between;height: 157.5px">
                    <div class="ctgry-p">
                        <p>
                            Adaptability <br><br>
                            Problem-Solving <br><br>
                            Communication <br><br>
                            Independence 
                        </p>
                    </div>
                    <div class="ctgry-p">
                        <p>
                            Aggressive <br><br>
                            Learning <br><br>
                            Hardworking <br><br>
                            Self-Confidence
                        </p>
                    </div>
                </div>
            </div>
            <div class="career-col9">
                <div class="cap-p">
                    <p class="cap-p-p">EDUCATION</p>
                    <br>
                    <p class="goodon-p">QUALIFICATION</p>
                </div>
                <div class="edu-ctgry-p" style="height: 157.5px">
                    <p>
                        Diploma <br>
                        or <br>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col9">
                <div class="cap-p">
                    <p class="cap-p-p">EXPERIENCES</p>
                    <br>
                    <p class="goodon-p">MIN YEAR</p>
                </div>
                <div class="exp-ctgry-p" style="height: 157.5px">
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
            Apply now at <a href="#" class="href-link2">hr.admin@currenttech.pro</a>
        </p>
    </div>
</div>

@endsection