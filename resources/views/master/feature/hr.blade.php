@extends('layouts.master')
@section('content')

<style>
    .hr2 {
        text-align: center;
        margin-bottom: 68px;
        display: block;
    }
    .hr2-mobile {
        display: none;
    }
    .hr3 {
        text-align: center;
    }
    .hr3 img {
        width: 100%;
    }
    .hr4 {
        text-align: center;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 66px;
    }
    .hr5 {
        margin-bottom: 128px;
    }
    .hr5-mobile {
        display: none;
    }
    .hr6 {
        text-align: center;
        display: block;
    }
    .hr6-mobile {
        text-align: center;
        display: none;
    }
    .hr7 {
        margin-bottom: 168px;
        display: flex;
        justify-content: center;
        width: 1268px;
        justify-content: space-between;
    }

    .hr-line {
        width: 1257px;
        height: 1.5px;
        background: #888888;
        margin-top: 68px;
        margin-bottom: 128px;
    }

    .hr-container-col-img img {
        width: 530px;
    }

    @media screen and (max-width: 1093px) {
        .hr5-container-row1,
    .hr5-container-row2 {
        display: block; 
    }

    .hr-line {
        width: 100%;
        height: 0.5px;
        background: #666;
        margin-top: 68px;
        margin-bottom: 38px;
        margin-left: 30px;
        margin-right: 30px;
    }

    /* .hr-container1,
    .hr-container2,
    .hr-container3,
    .hr-container4 {
        width: 100%; 
    } */

    /* .hr-container-col1,
    .hr-container-col2,
    .hr-container-col3,
    .hr-container-col4,
    .hr-container-col5,
    .hr-container-col6,
    .hr-container-col-7,
    .hr-container-col8,
    .hr-container-col-img {
        width: 100%; 
        text-align: left; 
        margin-right: 0; 
    } */

    .hr5-container-row1 {
        width: 100%;
    }

        .hr2 {
            width: 100%;
            display: none;
        }
        .hr2 p {
            width: 100%;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            margin-top: 38px;
        }
        .hr2-mobile {
            display: block;
            width: 100%;
        }
        .hr2-mobile p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin-top: 38px;
            margin-bottom: 38px;
        }
        .smart-purple {
            color: #BD00FF;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 18px; /* 112.5% */
            margin-top: 0px;
            margin-bottom: 5px;
        }
        .smart-black {
            color: #000;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 16px; /* 114.286% */
            margin-top: 5px;
            margin-bottom: 34px;
        }
        .hr3 {
            width: 100%;
        }
        .hr3 img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .hr4 {
            width: 100%;
            margin-bottom: 38px;
        }
        .hr4 p {
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
        .hr5 {
            /* margin-left: 100px;
            margin-right: 100px; */
            display: none;
        }
        .hr5-mobile {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .hr-container1-mobile {
            width: 100%;
            height: auto;
            background: #FFF;
            border-radius: 35px;
            display: flex;
            flex-direction: column;
            padding: 30px 45px 0px 45px;
            box-sizing: border-box;
        }
        .hr6 {
            width: 100%;
            display: none;
        }
        .hr6-mobile {
            text-align: center;
            display: block;
            margin-bottom: 68px;
        }
        .hr6-mobile p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            width: 96%;
        }

        .hr6 p {
            width: 100%;
            /* font-size: 40px; */
            margin: 0px;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
        }
        .hr-container1 {
            width: 100%;
            height: auto;
            border-radius: 70px;
        }
        .hr-container-col-img img {
            width: 460px;
            margin-left: 130px;
        }
        /* .hr-container-col1 p {
            margin-bottom: 10px;
            font-size: 28px;
            margin-left: 90px;
            width: 80%;
        } */
        .hr-container-col2 p {
            width: 70%;
            margin-left: 90px;
        }
        .hr-container2 {
            width: 750px;
            height: 741px;
            margin-left: 270px;
            border-radius: 70px;
            margin-bottom: 50px;
        }
        .hr-container2 img {
            width: 460px;
            margin-left: 130px;
        }
        .hr-container-col3 p {
            font-size: 27px;
            margin-left: 90px;
            width: 80%;
        }
        .hr-container-col4 p {
            width: 70%;
            margin-left: 90px;
        }
        .hr-container3 {
            width: 750px;
            height: 741px;
            margin-left: 270px;
            border-radius: 70px;
            margin-bottom: 50px;
        }

        .hr-container3 img {
            width: 460px;
            margin-left: 130px;
        }
        .hr-container-col5 p {
            font-size: 27px;
            margin-left: 90px;
            width: 80%;
        }
        .hr-container-col6 p {
            width: 70%;
            margin-left: 90px;
        }
        .hr-container4 {
            width: 750px;
            height: 741px;
            margin-left: 270px;
            border-radius: 70px;
        }
        .hr-container4 img {
            width: 460px;
            margin-left: 130px;
        }
        .hr-container-col-7 p {
            font-size: 27px;
            margin-left: 90px;
            width: 80%;
        }
        .hr-container-col8 p {
            width: 70%;
            margin-left: 90px;
        }
        .enhanced-p {
            width: 80%;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
        }
        .rew10 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            margin-bottom: 88px;
            gap: 43px;
        }

        .perform-col {
            width: 25%; 
            margin-bottom: 20px; 
            margin-bottom: 20px; 
        }
        .perform-col object {
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
    @media screen and (min-width: 1600px) {
        .hr2 {
            /* margin-left: 200px; */
            /* margin-right: 200px; */
        }
        .hr2 p {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr3 {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr4 {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr4 p {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr6 {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr6 p {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr7 {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
        .hr8 {
            /* margin-left: 200px;
            margin-right: 200px; */
        }
    }
    @media screen and (min-width: 2500px) {
        .hr7 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .hr8 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
    }

    .clock-purple {
        color: #BD00FF !important;
        font-family: SF Pro Text;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 125% */
        margin: 0;
        width: 424px;
    }

    .hr-container-col-img {
        display: flex;
        justify-content: center;
    }
</style>

<div class="main-content12" style="margin-top: 160px">
    <div class="hr1">
        <p class="enhanced-p">
            Enhanced HR management for higher efficiency
        </p>
    </div>

    <div class="hr2">
        <p>
            Employing Smart HR strategies to optimise workforce productivity and<br> streamline 
            operations, leading to enhanced efficiency and organizational success.
        </p>
    </div>
    <div class="mobile-alignment-30px">
        <div class="hr2-mobile">
            <p>
                Employing Smart HR strategies to optimise workforce productivity and streamline 
                operations, leading to enhanced efficiency and organizational success.
            </p>
        </div>
    </div>
    

    <div class="hr3">
        <img src="assets/image/feature/hr/1.svg">
    </div>

    <div class="hr-line"></div>

    <div class="mobile-alignment-30px">
        <div class="hr4">
            <p>
                Empowering the HR's Workforce Journey to Success
            </p>
        </div>
    </div>

    <div class="hr5">
        <div class="hr5-container-row1">
            <div class="hr-container1">
                <div class="hr-container-col1">
                    <p class="clock-purple">
                        Smart clock-in for<br> effortless
                        attendance tracking
                    </p>
                </div>
                <div class="hr-container-col2">
                    <p>
                        Effortless attendance tracking with a
                        smart clock-in system for streamlined and
                        convenient time management.
                    </p>
                </div>
                <div class="hr-container-col-img">
                    <img src="assets/image/feature/hr/2.svg" style="width: 500px">
                </div>
            </div>

            <div class="hr-container2">
                <div class="hr-container-col3">
                    <p class="clock-purple">
                        Make the reimbursement
                        process more straightforward
                    </p>
                </div>
                <div class="hr-container-col4">
                    <p>
                        Streamline and simplify the arduous
                        reimbursement process, making it more efficient
                        and less time-consuming for employees
                        and administrators.
                    </p>
                </div>
                <div class="hr-container-col-img">
                    <img src="assets/image/feature/hr/3.svg" style="width: 500px">
                </div>
            </div>

            <div class="hr-container3">
                <div class="hr-container-col5">
                    <p class="clock-purple">
                        Smart payroll management<br> system
                    </p>
                </div>
                <div class="hr-container-col6">
                    <p>
                        Efficiently manage payroll with a smart system
                        that automates tasks, ensuring accuracy and
                        timeliness while reducing manual effort.
                    </p>
                </div>
                <div class="hr-container-col-img">
                    <img src="assets/image/feature/hr/4.svg" style="width: 500px">
                </div>
            </div>

            <div class="hr-container4">
                <div class="hr-container-col-7">
                    <p class="clock-purple">
                        Learning Management System (LMS)
                    </p>
                </div>
                <div class="hr-container-col8">
                    <p>
                        An LMS is used for employee training and
                        development. It offers online courses, tracks
                        employee training progress, and assesses their
                        learning outcomes.
                    </p>
                </div>
                <div class="hr-container-col-img">
                    <img src="assets/image/feature/hr/5.svg" style="width: 500px">
                </div>
            </div>
        </div>

        {{-- <div class="hr5-container-row2">
            
        </div> --}}
    </div>

    <div class="mobile-alignment-30px">
        <div class="hr5-mobile">
            <div class="hr-container1-mobile">
                <div>
                    <p class="smart-purple">
                        Smart clock-in for<br>
                        effortless attendance tracking
                    </p>
                </div>
                <div>
                    <p class="smart-black">
                        Effortless attendance tracking with a
                        smart clock-in system for streamlined
                        and convenient time management.
                    </p>
                </div>
                <div style="display: flex;
                flex-direction: column;
                align-items: center;">
                <object type="image/svg+xml" data="assets/image/feature/hr/6.svg"></object>
                    {{-- <img src="assets/image/feature/hr/6.svg"> --}}
                </div>
            </div>

            <div class="hr-container1-mobile" style="margin-top: 48px;margin-bottom:48px">
                <div>
                    <p class="smart-purple">
                        Make the reimbursement<br>
                        process more straightforward
                    </p>
                </div>
                <div>
                    <p class="smart-black" style="margin-bottom:4px;">
                        Streamline and simplify the arduous
                        reimbursement process, making it more efficient and less time-consuming for employees and administrators.
                    </p>
                </div>
                <div style="display: flex;
                flex-direction: column;
                align-items: center;">
                <object type="image/svg+xml" data="assets/image/feature/hr/7.svg"></object>
                    {{-- <img src="assets/image/feature/hr/7.svg"> --}}
                </div>
            </div>

            <div class="hr-container1-mobile" style="margin-bottom:48px">
                <div>
                    <p class="smart-purple">
                        Smart payroll<br>
                        management system
                    </p>
                </div>
                <div>
                    <p class="smart-black" style="margin-bottom:14px">
                        Efficiently manage payroll with a smart system that automates tasks, 
                        ensuring accuracy and timeliness while reducing manual effort.
                    </p>
                </div>
                <div style="display: flex;
                flex-direction: column;
                align-items: center;">
                <object type="image/svg+xml" data="assets/image/feature/hr/8.svg"></object>
                    {{-- <img src="assets/image/feature/hr/8.svg"> --}}
                </div>
            </div>

            <div class="hr-container1-mobile" style="margin-bottom: 68px">
                <div>
                    <p class="smart-purple">
                        Learning Management System<br>(LMS)
                    </p>
                </div>
                <div>
                    <p class="smart-black" style="margin-bottom:4px">
                        An LMS is used for employee training and 
                        development. It offers online courses, tracks employee 
                        training progress, and assesses their learning outcomes.
                    </p>
                </div>
                <div style="display: flex;
                flex-direction: column;
                align-items: center;">
                    <img src="assets/image/feature/hr/9.svg">
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="line-hr"></div> --}}
    
    <div class="mobile-alignment-30px">
        <div class="hr6">
            <p>
                Through strategic HR management, ensuring the timely
                assignment of suitable tasks leads to enhanced
                productivity and <br>employee development.
            </p>
        </div>
        <div class="hr6-mobile">
            <p>
                Through strategic HR management, ensuring the timely
                assignment of suitable tasks leads to enhanced
                productivity and employee development.
            </p>
        </div>
    </div>
    
    <div class="mobile-alignment-30px">
        <div class="rew10">
            <div class="perform-col">
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/perform/7.svg"></object>
                    {{-- <img src="assets/image/feature/perform/7.svg"> --}}
                </div>
                
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Increase
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        76%
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
                    <object type="image/svg+xml" data="assets/image/feature/perform/8.svg"></object>
                    {{-- <img src="assets/image/feature/perform/8.svg"> --}}
                </div>
    
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Better
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        81%
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
                    <object type="image/svg+xml" data="assets/image/feature/perform/9.svg"></object>
                    {{-- <img src="assets/image/feature/perform/9.svg"> --}}
                </div>
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Gain
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        90%
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
                    <object type="image/svg+xml" data="assets/image/feature/perform/10.svg"></object>
                    {{-- <img src="assets/image/feature/perform/10.svg"> --}}
                </div>
                {{-- <div style="margin-top: 54px">
                    <p class="perform-psmall">
                        Higher
                    </p>
                </div> --}}
                <div>
                    <p class="perform-pbig">
                        78%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        Performance
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection