@extends('layouts.master')
@section('content')

<style>
    .develop1 {
        text-align: center;
    }
    .develop2 {
        text-align: center;
    }
    .develop3 {
        text-align: center;
    }
    .develop3 img {
        width: 100%;
    }
    .develop4 {
        text-align: center;
    }

    .develop8 {
        text-align: center;
    }

    @media screen and (max-width: 1268px) {
        .line-develop {
            width: 340px;
        }
        .develop1 {
            width: 100%;
            /* margin-top: 100px; */
        }
        .employ-p1 {
            width: 100%;
            /* margin-left: 100px; */
            font-size: 20px;
            /* margin-bottom: 40px; */
            text-align: center;
        }
        .employ-p2 {
            width: 100%;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            margin-left: 0px;
        }
        .develop2 {
            width: 100%;
        }
        .develop3 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        /* .develop4 {
            width: 100%;
        } */
        .develop4 p {
            width: 80%;
            margin-left: 30px;
            margin-bottom: 20px;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
        }
        .develop5 {
            /* margin-left: 0px;
            margin-right: 0px;
            width: 100%; */
        }
        .develop8 {
            width: 100%;
        }
        .develop8 p{
            margin-top: -100px;
            width: 100%;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
        }
        .develop6 {
            width: 100%;
        }
        .develop7 {
            width: 100%;
        }
        .effective-container {
            width: 100%;
            height: 390px;
        }
        .effective {
            width: 100%;
            height: 191px;
        }
        .effective-container img {
            width: 214px;
            height: 191px;
        }
        .effective .exp-color {
            font-size: 14px;
        }
        .career {
            margin-top: -180px;
            width: 100%;
            height: 191px;
        }
        .career img{
            width: 214px;
            height: auto;
        }
        .ongoing {
            width: 100%;
            height: 451px;
        }
        .ongoing img{
            width: 577px;
            height: auto;
        }
        .ongoing p {
            margin-right: 4px;
            font-size: 20px;
            width: 300px;
        }
        .effective p span {
            font-size: 14px;
            width: 100%;
        }
        .effective p {
            font-size: 12px;
            margin-left: 15px;
            width: 345px;
            width: 40%;
            line-height: 15px;
        }
        .career .exp-color {
            font-size: 14px;
            width: 100%;
            line-height: 14px;
        }
        .career p {
            font-size: 12px;
            /* margin-left: 35px; */
            width: 345px;
            width: 40%;
            line-height: 15px;
        }
        .career p span {
            font-size: 14px;
            width: 100%;
        }
        .rew10 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            margin-left: 80px; 
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
        .develop1 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .develop2 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .develop3 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .develop4 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
    }
</style>

<div class="main-content11" style="margin-top: 160px">
    <div class="develop1">
        <p class="employ-p1">
            Employee development is vital
            for a company's success
        </p>
    </div>

    <div class="develop2" style="margin-bottom: 88px;">
        <p class="employ-p2">
            Employee growth is crucial for a company's success, enhances productivity, innovation, 
            retention, adaptability, and leadership, fostering a positive work environment and 
            competitive advantage.
        </p>
    </div>

    <div class="develop3">
        <img src="assets/image/feature/develop/1.svg">
    </div>

    <div class="line-develop"></div>

    <div class="develop4">
        <p>
            The Power of Learning and Development
        </p>
    </div>

    <div class="develop5">
        <div class="effective-container">
            <div class="effective">
                <img src="assets/image/feature/develop/2.svg">
                <p>
                    <span>
                        <span class="exp-color">
                        Effective<br>
                        Knowledge Transfer
                        </span>
                    </span>
                    <br>
                    Efficiently sharing expertise
                    and insights within an
                    organization to enhance performance, continuity, and
                    overall effectiveness.
                    Systematic knowledge
                    transfer benefits growth.
                </p>
            </div>
            
        </div>
    </div>

    <div class="develop6">
        <div class="career">
            <img src="assets/image/feature/develop/3.svg">
            <p>
                <span>
                    <span class="exp-color">
                    Career <br>
                    Development
                    </span>
                </span><br>
                Advancing one's skills and 
                experiences to pursue 
                professional goals and 
                improve job prospects. 
                Career development fosters 
                personal growth and 
                success.
            </p>
        </div>
    </div>

    <div class="develop7">
        <div class="effective-container">
            <div class="effective">
                <img src="assets/image/feature/develop/4.svg">
                <p>
                    <span>
                        <span class="exp-color">
                        Ongoing training<br> 
                        and workshops
                        </span>
                    </span><br>
                    Regular training sessions <br>
                    and workshops keep <br>
                    employees updated with <br>new 
                    skills and knowledge, <br>
                    ensuring their continuous <br>
                    professional development.
                </p>
            </div>
        </div>
        
    </div>

    <div class="develop8">
        <p>
            By introducing the appropriate tasks at the<br>
            optimal moment, we facilitate effective<br>
            development and growth.
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
                    96%
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
                    84%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Teeamwork
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
                    79%
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
                    88%
                </p>
            </div>
            <div>
                <p class="perform-psmall">
                    Performance
                </p>
            </div>
        </div>
    </div>

    {{-- <div class="develop10" style="margin-bottom: 60px">
        <button class="btn-getmoreinfo">
            <a href="{{ route('support') }}" class="explore-link">
                <span class="btn-getmoreinfo-span">GET MORE INFO</span>
            </a>
        </button>
    </div> --}}
</div>

@endsection