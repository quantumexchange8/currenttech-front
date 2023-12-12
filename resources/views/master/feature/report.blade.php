@extends('layouts.master')
@section('content')


<style>
    .report1 {
        text-align: center;
        width: 100%;
    }
    .report2 {
        text-align: center;
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .report4 {
        text-align: center;
    }
    .report8 {
        text-align: center;
        margin-bottom: 100px;
    }
    .report8-mobile {
        display: none;
    }
    .report6 {
        display: block;
        width: 100%;
    }
    .report6-mobile {
        display: none;
    }
    .report5 {
        display: block;
        width: 100%;
    }
    .report5-mobile {
        display: none;
    }
    .report7 {
        display: block;
        width: 100%;
    }
    .report7-mobile {
        display: none;
    }

    .report9-mobile {
        display: none;
    }

    @media screen and (max-width: 1093px) {
        .report1 {
            width: 79%;
            height: auto;
            display: flex;
            justify-content: center;
            /* margin-top: 212px; */
        }
        .report1 p {
            width: 100%;
            height: auto;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
            margin-bottom: 38px;
        }
        .report2 {
            width: 100%;
            height: auto;
        }
        .report2 p {
            width: 100%;
            height: auto;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            margin-bottom: 68px;
        }
        .report3 {
            width: 100%;
            height: auto;
        }
        .report3 img {
            width: 100%;
            height: auto;
        }
        .report4 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }
        .report4 p {
            width: 70%;
            height: auto;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
            margin-bottom: 38px;
        }
        .report8 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 68px;
            display: none;
        }
        .report8-mobile {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 68px;
        }
        .report8 p {
            width: 90%;
            height: auto;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
            margin: 0;
        }
        .report8-mobile p {
            color: #FFF;
            font-family: SF Pro Text;
            width: 90%;
            height: auto;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
            margin: 0;
        }
        .report9 {
            width: 100%;
            height: auto;
            display: none;
        }
        .report9-mobile {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
            margin-bottom: 88px;
        }
        .report5 {
            width: 100%;
            display: none;
        }
        .report5-mobile {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 48px;
        }
        .report5-container {
            /* margin-left: 50px; */
            width: 100%;
            height: 400px;
            border-radius: 40px;
        }
        .report5-col1 object {
            width: 255px;
            margin-right: 200px;
            margin-top: 400px;
            display: none;
        }
        .report5-col11 object {
            width: 235px;
            margin-right: 200px;
            margin-top: 400px;
            display: block;
        }
        .report-enhancing-p1 {
            font-size: 16px;
            width: 80%;    
            text-align: left;
            margin-left: 40px;
            line-height: 18px;
        }
        .report-app-p2 {
            font-size: 16px;
            width: 80%;    
            text-align: left;
            margin-left: 30px;
            line-height: 18px;
            margin-top: -5px;
        }
        .report-data-p1 {
            width: 80%;
            font-size: 14px;
            margin-left: 40px;
            text-align: left;
            line-height: 16px;
            margin-top: -50px;
        }
        .report-data-p2 {
            width: 100%;
            font-size: 14px;
            margin-left: 30px;
            text-align: left;
            line-height: 16px;
            margin-top: -50px;
        }
        .report5-col1 {
            margin-left: 5px;
        }
        .report5-col11 {
            /* margin-left: 5px; */
            display: block;
            margin-top: -230px;
        }
        .report5-col2 {
            margin-right: 20px;
            margin-top: 0px;
        }

        .report6 {
            width: 100%;
            height: auto;
            display: none;
        }
        .report6-mobile {
            display: flex;
        }
        .report6-container {
            /* margin-left: 50px; */
            width: 100%;
            height: 400px;
            border-radius: 40px;
        }
        .report-col4 object {
            width: 255px;
            margin-left: 170px;
            display: none;
        }
        .report-col3 {
            margin-left: 20px;
        }

        .report7 {
            width: 100%;
            display: none;
        }
        .report7-mobile {
            display: flex;
        }
        .report7-container {
            width: 100%;
            height: 400px;
            border-radius: 40px;
        }
        .report7-col5 object {
            width: 255px;
            margin-right: 200px;
            margin-top: 400px;
            display: none;
        }
        .report-unveil-p2 {
            font-size: 16px;
            width: 80%;    
            text-align: left;
            margin-left: 40px;
            line-height: 18px;
        }
        .report-data-p3 {
            width: 100%;
            font-size: 14px;
            margin-left: 40px;
            text-align: left;
            line-height: 16px;
            margin-top: -50px;
        }
        .report-line {
            margin-top: 68px;
            margin-bottom: 38px;
            margin-left: 30px;
            margin-right: 30px;
            width: 100%;
        }

        .report-container {
            width: 100%;
            height: auto;
            background: #FFF;
            border-radius: 35px;
            display: flex;
            flex-direction: column;
            padding: 30px 40px 0px 43px;
            box-sizing: border-box;
        }

        .enhance-purple {
            color: #BD00FF;
            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 18px; /* 112.5% */
            margin-top: 0px;
            margin-bottom: 10px;
        }
        .enhance-black {
            color: #000;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 16px; /* 114.286% */
            margin-top: 0px;
            margin-bottom: 17px;
        }
        .report-line2 {
            margin-top: 68px;
            margin-bottom: 38px;
            margin-left: 30px;
            margin-right: 30px;
        }
        .report-small-icon {
            width: 51.059px;
            height: 50px;
            flex-shrink: 0;
        }
        .report9-col1 {
            width: 91.907px;
        }
        .report-p1 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            width: auto;
            height: auto;
        }
        .report-p2 {
            color: #888;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            width: auto;
        }
        .zh-report4 p {
            width: 100%;
        }
    }
    @media screen and (min-width: 1800px) {
        .report1 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report1 p {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report2 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report2 p {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report3 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report3 img {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report4 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report4 p {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report8 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report8 p {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
        .report9 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
    }
</style>


<div class="main-content13" style="margin-top: 160px">
    <div class="report1">
        <p>
            @lang('public.report 1')
        </p>
    </div>
    <div class="mobile-alignment-30px">
        <div class="report2">
            <p>
                @lang('public.report 2')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="report3">
            <img src="assets/image/feature/report/1.svg">
        </div>
    </div>

    <div class="report-line"></div>

    <div class="mobile-alignment-30px">
        <div class="report4 @if(app()->getLocale() == 'zh') zh-report4 @endif">
            <p>
                @lang('public.report 3')
            </p>
        </div>
    </div>
    
    <div class="report5">
        <div class="report5-container">
            <div class="report5-col1">
                <object type="image/svg+xml" data="assets/image/feature/report/2.svg"></object>
                {{-- <img src="assets/image/feature/report/2.svg"> --}}
            </div>
            <div class="report5-col2">
                
                <span class="exp-color">
                    @lang('public.report 4')
                </span>
                

                <p class="report-data-p1">
                    @lang('public.report 5')
                </p>
            </div>
        </div>
        <div class="report5-col11">
            <object type="image/svg+xml" data="assets/image/feature/report/2.svg"></object>
            {{-- <img src="assets/image/feature/report/2.svg"> --}}
        </div>
    </div>

    <div class="report6">
        <div class="report6-container">
            <div class="report-col3">
                <p class="report-app-p2">
                    <span class="exp-color">
                        @lang('public.report 6')
                    </span>
                </p>

                <p class="report-data-p2">
                    @lang('public.report 7')
                </p>
            </div>
            <div class="report-col4">
                <object type="image/svg+xml" data="assets/image/feature/report/3.svg"></object>
                {{-- <img src="assets/image/feature/report/3.svg"> --}}
            </div>
        </div>
        <div class="report5-col11">
            <object type="image/svg+xml" data="assets/image/feature/report/3.svg"></object>
            {{-- <img src="assets/image/feature/report/3.svg"> --}}
        </div>
    </div>

    <div class="report7">
        <div class="report7-container">
            <div class="report7-col5">
                <object type="image/svg+xml" data="assets/image/feature/report/4.svg"></object>
                {{-- <img src="assets/image/feature/report/4.svg" >      --}}
            </div>
            <div class="report7-col6">
                <p class="report-unveil-p2">
                    <span class="exp-color">
                        @lang('public.report 8')
                    </span>
                </p>

                <p class="report-data-p3">
                    @lang('public.report 9')
                </p>
            </div>
        </div>
        <div class="report5-col11">
            <object type="image/svg+xml" data="assets/image/feature/report/4.svg" style="margin-top: 20px"></object>
            {{-- <img src="assets/image/feature/report/4.svg" style="margin-top: 20px">  --}}
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="report5-mobile">
            <div class="report-container">
                <div>
                    <p class="enhance-purple">
                        @lang('public.report 4')
                    </p>
                </div>
                <div>
                    <p class="enhance-black">
                        @lang('public.report 5')
                    </p>
                </div>
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/report/18.svg"></object>
                    {{-- <img src="assets/image/feature/report/18.svg"> --}}
                </div>
            </div>

            <div class="report-container">
                <div>
                    <p class="enhance-purple">
                        @lang('public.report 6')
                    </p>
                </div>
                <div>
                    <p class="enhance-black">
                        @lang('public.report 7')
                    </p>
                </div>
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/report/19.svg"></object>
                    {{-- <img src="assets/image/feature/report/19.svg"> --}}
                </div>
            </div>

            <div class="report-container">
                <div>
                    <p class="enhance-purple">
                        @lang('public.report 8 mobile')
                    </p>
                </div>
                <div>
                    <p class="enhance-black" style="margin-bottom:29px;">
                        @lang('public.report 9')
                    </p>
                </div>
                <div>
                    <object type="image/svg+xml" data="assets/image/feature/report/20.svg"></object>
                    {{-- <img src="assets/image/feature/report/20.svg"> --}}
                </div>
            </div>
            
        </div>
    </div>
    <div class="report5-mobile">
    
    </div>

    <div class="report6-mobile">
        
    </div>

    <div class="report7-mobile">
        
    </div>

    <div class="report-line2"></div>

    <div class="mobile-alignment-30px">
        <div class="report8">
            <p>
                @lang('public.report 10')
            </p>
        </div>
        <div class="report8-mobile">
            <p>
                @lang('public.report 10 mobile')
            </p>
        </div>
    </div>
    

    <div class="report9">
        {{-- <img src="assets/image/feature/report/5.svg"> --}}
        <div class="report9-row1">
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/6.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        76%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 11')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/7.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        81%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:177px">
                        @lang('public.report 12')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/8.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        90%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:213px">
                        @lang('public.report 13')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/9.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        78%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:108px">
                        @lang('public.report 14')
                    </p>
                </div>
            </div>
        </div>
        <div class="report9-row2">
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/10.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        76%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:115px">
                        @lang('public.report 15')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/11.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        81%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:177px">
                        @lang('public.report 16')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/12.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 11px">
                        90%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:213px">
                        @lang('public.report 17')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/13.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        78%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:108px">
                        @lang('public.report 18')
                    </p>
                </div>
            </div>
        </div>
        <div class="report9-row3">
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/14.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1">
                        76%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:115px">
                        @lang('public.report 19')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/15.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 34px">
                        81%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:177px">
                        @lang('public.report 20')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/16.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 43px">
                        90%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:213px">
                        @lang('public.report 21')
                    </p>
                </div>
            </div>
            <div class="report9-col2">
                <div>
                    <img src="assets/image/feature/report/17.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 44px">
                        78%
                    </p>
                </div>
                <div>
                    <p class="report-p2" style="width:108px">
                        @lang('public.report 22')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="report9-mobile">
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/6.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        76%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 11')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/7.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        81%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 12')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/8.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        90%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 13')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/9.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        78%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 14')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/10.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        76%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 15')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/11.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        81%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 16')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/12.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        90%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 17')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/13.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        78%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 18')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/14.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        76%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 19')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/15.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        81%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 20')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/16.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        90%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 21')
                    </p>
                </div>
            </div>
            <div class="report9-col1">
                <div>
                    <img src="assets/image/feature/report/17.svg" class="report-small-icon">
                </div>
                <div>
                    <p class="report-p1" style="margin-top: 16px">
                        78%
                    </p>
                </div>
                <div>
                    <p class="report-p2">
                        @lang('public.report 22')
                    </p>
                </div>
            </div>
        </div>
    </div>
    

    {{-- <div class="report10">
        <div class="rew11" style="margin-bottom: 60px;display: flex;justify-content: center;">
            <button class="btn-getmoreinfo">
                <a href="{{ route('support') }}" class="explore-link">
                    <span class="btn-getmoreinfo-span">GET MORE INFO</span>
                </a>
            </button>
        </div>
    </div> --}}
</div>

@endsection