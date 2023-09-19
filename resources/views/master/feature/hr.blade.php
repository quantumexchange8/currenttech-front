@extends('layouts.master')
@section('content')

<style>
    .hr2 {
        text-align: center;
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
    }
    .hr5 {
        margin-top: 60px;
    }
    .hr6 {
        text-align: center;
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
        background: #333;
        margin-top: 66px;
        margin-bottom: 66px;
    }

    .hr-container-col-img img {
        width: 530px;
    }

    @media screen and (max-width: 1268px) {
        .hr2 {
            width: 100%;
        }
        .hr2 p {
            width: 100%;
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
        }
        .hr4 p {
            width: 100%;
        }
        .hr5 {
            margin-left: 100px;
            margin-right: 100px;
        }
        .hr6 {
            width: 100%;
        }
        .hr6 p {
            width: 100%;
        }
        .hr-container1 {
            width: 460px;
            height: 741px;
        }
        .hr-container-col-img img {
            width: 460px;
        }
        .hr-container-col1 p {
            margin-bottom: 10px;
            font-size: 28px;
        }
        .hr-container-col2 p {
            width: 400px;
        }
        .hr-container2 {
            width: 460px;
            height: 741px;
        }
        .hr-container2 img {
            width: 460px;
        }
        .hr-container-col3 p {
            font-size: 27px;
        }
        .hr-container-col4 p {
            width: 415px;
        }
        .hr-container3 {
            width: 460px;
            height: 741px;
        }

        .hr-container3 img {
            width: 460px;
        }
        .hr-container-col5 p {
            font-size: 28px;
        }
        .hr-container-col6 p {
            width: 454px;
        }
        .hr-container4 {
            width: 460px;
            height: 741px;
        }
        .hr-container4 img {
            width: 460px;
        }
        .hr-container-col8 p {
            width: 427px;
        }
    }
    @media screen and (min-width: 1600px) {
        .hr2 {
            margin-left: 200px;
            margin-right: 200px;
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
            margin-left: 200px;
            margin-right: 200px;
        }
        .hr6 p {
            margin-left: 200px;
            margin-right: 200px;
        }
        .hr7 {
            margin-left: 200px;
            margin-right: 200px;
        }
        .hr8 {
            margin-left: 200px;
            margin-right: 200px;
        }
    }
    @media screen and (min-width: 2500px) {
        .hr7 {
            margin-left: 350px;
            margin-right: 350px;
        }
        .hr8 {
            margin-left: 350px;
            margin-right: 350px;
        }
    }
</style>

<div class="main-content12" style="margin-top: 120px">
    <div class="hr1">
        <p class="enhanced-p">
            Enhanced HR management for higher efficiency
        </p>
    </div>

    <div class="hr2">
        <p>
            Employing Smart HR strategies to optimise workforce productivity and streamline 
            operations, leading to enhanced efficiency and organizational success.
        </p>
    </div>

    <div class="hr3">
        <img src="assets/image/feature/hr/1.svg">
    </div>

    <div class="hr-line"></div>

    <div class="hr4">
        <p>
            Empowering the HR's Workforce Journey to Success
        </p>
    </div>

    <div class="hr5">
        <div class="hr5-container-row1">
            <div class="hr-container1">
                <div class="hr-container-col1">
                    <p>
                        Smart clock-in for effortless
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
                    <img src="assets/image/feature/hr/2.svg">
                </div>
            </div>

            <div class="hr-container2">
                <div class="hr-container-col3">
                    <p>
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
                    <img src="assets/image/feature/hr/3.svg">
                </div>
            </div>
        </div>

        <div class="hr5-container-row2">
            <div class="hr-container3">
                <div class="hr-container-col5">
                    <p>
                        Smart payroll management system
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
                    <img src="assets/image/feature/hr/4.svg">
                </div>
            </div>
            <div class="hr-container4">
                <div class="hr-container-col-7">
                    <p>
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
                    <img src="assets/image/feature/hr/5.svg">
                </div>
            </div>
        </div>
    </div>

    <div class="line-hr"></div>
    
    <div class="hr6">
        <p>
            Through strategic HR management, ensuring the timely
            assignment of suitable tasks leads to enhanced
            productivity and employee development.
        </p>
    </div>

    <div class="hr7">
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
                    76%
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
                    81%
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
                    90%
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
    <div class="hr8" style="margin-bottom: 60px;display: flex;justify-content: center;">
        <button class="btn-getmoreinfo">
            <a href="{{ route('support') }}" class="explore-link">
                <span class="btn-getmoreinfo-span">GET MORE INFO</span>
            </a>
        </button>
    </div>
</div>
@endsection