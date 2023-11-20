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

    .career4 {
        margin-bottom: 0px;
    }
    .career-row3-mobile {
        display: none;
    }
    @media screen and (max-width: 1093px) {
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
            margin-bottom: 38px;
        }
        
        .career4 p {
            font-size: 20px;
            line-height: 23px;
            margin-bottom: 0;
        }
        .career3 {
            width: 100%;
            height: auto;
            /* margin-bottom: 10px; */
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
            display: none;
            /* margin-bottom: 88px; */
            flex-wrap: wrap;
            justify-content: center;
        }
        .career-row3-mobile {
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 8px;
        }
        .container-req-mobile {
            height: auto;
            flex-shrink: 0;
            border-radius: 10px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 40px;
            box-sizing: border-box;
            gap: 26px;
        }
        .container-req-mobile-2 {
            width: auto;
            height: auto;
            flex-shrink: 0;
            border-radius: 10px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 12px 21px 12px;
            box-sizing: border-box;
            gap: 18px;
        }
        .container-req-mobile-2-1 {
            width: auto;
            height: auto;
            flex-shrink: 0;
            border-radius: 10px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 16px 21px 16px;
            box-sizing: border-box;
            gap: 41px;
        }
        .container-req-mobile-2-2 {
            width: auto;
            height: auto;
            flex-shrink: 0;
            border-radius: 10px;
            background: linear-gradient(180deg, rgba(51, 51, 51, 0.40) 0%, rgba(136, 136, 136, 0.24) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 16px 21px 16px;
            box-sizing: border-box;
            gap: 33px;
        }
        .container-req-item {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            width: 100%;

        }
        .container-req-item-2 {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 6.1px;
        }
        .container-req-item p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 0;
        }
        .container-req-item-2 p {
            color: #FFF;
            text-align: left;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 0;
        }
        .container-req-item-2-1 p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 0;
            height: 43.2px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .container-req-item-2-2 p {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
        }
        .skill-word1 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
        }
        .skill-word2 {
            color: #888;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
            margin-top: 2px;
        }
        .career-col2 {
            margin-top: 0;
            
        }
        .career-col3 {
            width: 100%;
            height: 230px;
            margin-right: 0px;
        }
        .career-col4 {
            width: 100%;
            margin-right: 0px;
        }
        .career-col5 {
            width: 100%;
            margin-right: 0px;
        }
        .career-col6 {
            width: 100%;
            margin-right: 0px;
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
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 16px; /* 114.286% */
            /* margin-bottom: 17.94px; */
            margin-top: 0;
        }
        .career-mobile-row {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping in mobile view */
            overflow-x: auto; /* Enable horizontal scrolling if needed */
        }   

        /* .career-col4,
        .career-col5,
        .career-col6,
        .career-col8,
        .career-col9 {
            flex: 0 0 auto; 
            width: calc(100% / 4);
            white-space: nowrap; 
        } */
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
            @lang('public.career 1')
        </p>
    </div>

    <div class="mobile-alignment-30px">
        <div class="career2">
            <p>
                @lang('public.career 2')<br><a href="#" class="href-link" style="text-decoration: none">hr.admin@currenttech.pro</a>
            </p>
        </div>
    </div>
    

    <div class="career3">
        <img src="assets/image/career/1.svg">
    </div>

    <div class="career4">
        <p>
            @lang('public.career 3')
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
                                <span>@lang('public.career 3.1')</span>
                            </button>
                        </a>
                    </div>
                    <p>@lang('public.career 4')</p>
                </div>
                
                <div class="it-program-p2">
                    <p>
                        @lang('public.career 5')
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
                        @lang('public.career 5.1')
                    </p>
                    <br>
                    <p class="career-req-p2">
                        @lang('public.career 5.2')
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
                    <p class="cap-p-p">@lang('public.career 5.3')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.4')</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        @lang('public.career 6') <br><br>
                        @lang('public.career 7') <br><br>
                        @lang('public.career 8') <br><br>
                        @lang('public.career 9')
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.5')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.6')</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        DEGREE
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.7')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.8')</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>
        
        <div class="career-row3-mobile">
            <div class="container-req-mobile">
                <div>
                    <p class="skill-word1">
                        @lang('public.career 5.1')
                    </p>
                    <p class="skill-word2">
                        @lang('public.career 5.2')
                    </p>
                </div>
                <div class="container-req-item">
                    <div style="display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    grid-template-rows: repeat(2, auto);
                    gap: 17px;
                    width: 100%;
                    justify-items: center;">
                        <div>
                            <p>CSS / HTML</p>
                        </div>
                        <div>
                            <p>LARAVEL PHP</p>
                        </div>
                        <div>
                            <p >VUE JS</p>
                        </div>
                        <div>
                            <p>MQL4</p>
                        </div>
                        <div>
                            <p>JAVA SCRIPT</p>
                        </div>
                        <div>
                            <p >REACT JS</p>
                        </div>
                        <div>
                            <p>FLUTTER</p>
                        </div>
                        <div>
                            <p>MQL5</p>
                        </div>
                    </div>
                    
                    {{-- <div style="display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;">
                        <div>
                            <p>JAVA SCRIPT</p>
                        </div>
                        <div>
                            <p style="width: 66.38px;">REACT JS</p>
                        </div>
                        <div>
                            <p>FLUTTER</p>
                        </div>
                        <div>
                            <p>MQL5</p>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                <div class="container-req-mobile-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.3')</p>
                        <p class="skill-word2">@lang('public.career 5.4')</p>
                    </div>
                    <div class="container-req-item-2">
                        <p>@lang('public.career 6')</p>
                        <p>@lang('public.career 7')</p>
                        <p>@lang('public.career 8')</p>
                        <p>@lang('public.career 9')</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.5')</p>
                        <p class="skill-word2">@lang('public.career 5.6')</p>
                    </div>
                    <div class="container-req-item-2-1">
                        <p>DEGREE</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.7')</p>
                        <p class="skill-word2">@lang('public.career 5.8')</p>
                    </div>
                    <div class="container-req-item-2-2">
                        <p>1</p>
                    </div>
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
                                <span>@lang('public.career 3.1')</span>
                            </button>
                        </a>
                    </div>
                    <p>@lang('public.career 21')</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        @lang('public.career 22')
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
                        @lang('public.career 5.1')
                    </p>
                    <br>
                    <p class="career-req-p2">
                        @lang('public.career 5.2')
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
                    <p class="cap-p-p">@lang('public.career 5.3')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.4')</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        @lang('public.career 10') <br><br>
                        @lang('public.career 6') <br><br>
                        @lang('public.career 7') <br><br>
                        @lang('public.career 8') <br><br>
                        @lang('public.career 9') 
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.5')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.6')</p>
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
                    <p class="cap-p-p">@lang('public.career 5.7')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.8')</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>

        <div class="career-row3-mobile">
            <div class="container-req-mobile">
                <div>
                    <p class="skill-word1">
                        @lang('public.career 5.1')
                    </p>
                    <p class="skill-word2">
                        @lang('public.career 5.2')
                    </p>
                </div>
                <div class="container-req-item">
                    <div style="display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    grid-template-rows: repeat(2, auto);
                    gap: 17px;
                    width: 100%;
                    justify-items: center;">
                        <div>
                            <p>FIGMA</p>
                        </div>
                        <div>
                            <p>ADOBE XD</p>
                        </div>
                        <div>
                            <p>ILLUSTRATOR</p>
                        </div>
                        <div>
                            <p>SKETCH</p>
                        </div>
                        <div>
                            <p style="width: 66.38px;">PHOTOSHOP</p>
                        </div>
                    </div>
                    
                    {{-- <div style="display: flex;
                    align-items: center;
                    width: 100%;
                    justify-content: space-between;">
                        <div>
                            <p>SKETCH</p>
                        </div>
                        <div>
                            <p style="width: 66.38px;">PHOTOSHOP</p>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                <div class="container-req-mobile-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.3')</p>
                        <p class="skill-word2">@lang('public.career 5.4')</p>
                    </div>
                    <div class="container-req-item-2">
                        <p>@lang('public.career 10')</p>
                        <p>@lang('public.career 6')</p>
                        <p>@lang('public.career 7')</p>
                        <p>@lang('public.career 8')</p>
                        <p>@lang('public.career 9')</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.5')</p>
                        <p class="skill-word2">@lang('public.career 5.6')</p>
                    </div>
                    <div class="container-req-item-2-1">
                        <p>DEGREE</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.7')</p>
                        <p class="skill-word2">@lang('public.career 5.8')</p>
                    </div>
                    <div class="container-req-item-2-2">
                        <p>1</p>
                    </div>
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
                                <span>@lang('public.career 3.1')</span>
                            </button>
                        </a>
                    </div>
                    <p>@lang('public.career 23')</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        @lang('public.career 24')
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
                        @lang('public.career 5.1')
                    </p>
                    <br>
                    <p class="career-req-p2">
                        @lang('public.career 5.2')
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
                    <p class="cap-p-p">@lang('public.career 5.3')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.4')</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        @lang('public.career 10') <br><br>
                        @lang('public.career 6') <br><br>
                        @lang('public.career 7') <br><br>
                        @lang('public.career 8') <br><br>
                        @lang('public.career 14')
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.5')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.6')</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.7')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.8')</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>

        <div class="career-row3-mobile">
            <div class="container-req-mobile" style="padding: 20px 30px;">
                <div>
                    <p class="skill-word1">
                        @lang('public.career 5.1')
                    </p>
                    <p class="skill-word2">
                        @lang('public.career 5.2')
                    </p>
                </div>
                <div class="container-req-item">
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;justify-items: center;grid-column-gap: 25px;">
                        <div>
                            <p>FB / IG / LINKEDIN ADS</p>
                        </div>
                        <div>
                            <p>CONTENT CREATOR</p>
                        </div>
                        <div style="width:auto">
                            <p>ILLUSTRATOR</p>
                        </div>
                        <div style="width: auto">
                            <p >GOOGLE ADS</p>
                        </div>
                        <div style="width: auto">
                            <p>PHOTOSHOP</p>
                        </div>
                        <div style="width: auto">
                            <p>VIDEO EDITOR</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                <div class="container-req-mobile-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.3')</p>
                        <p class="skill-word2">@lang('public.career 5.4')</p>
                    </div>
                    <div class="container-req-item-2">
                        <p>@lang('public.career 10')</p>
                        <p>@lang('public.career 6')</p>
                        <p>@lang('public.career 7')</p>
                        <p>@lang('public.career 8')</p>
                        <p>@lang('public.career 14')</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.5')</p>
                        <p class="skill-word2">@lang('public.career 5.6')</p>
                    </div>
                    <div class="container-req-item-2-1">
                        <p>DEGREE</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.7')</p>
                        <p class="skill-word2">@lang('public.career 5.8')</p>
                    </div>
                    <div class="container-req-item-2-2">
                        <p>1</p>
                    </div>
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
                                <span>@lang('public.career 3.1')</span>
                            </button>
                        </a>
                    </div>
                    <p>@lang('public.career 25')</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        @lang('public.career 26')
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
                        @lang('public.career 5.1')
                    </p>
                    <br>
                    <p class="career-req-p2">
                        @lang('public.career 5.2')
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
                    <p class="cap-p-p">@lang('public.career 5.3')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.4')</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        @lang('public.career 15') <br><br>
                        @lang('public.career 6') <br><br>
                        @lang('public.career 7') <br><br>
                        @lang('public.career 12') <br><br>
                        @lang('public.career 10')
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.5')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.6')</p>
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
                    <p class="cap-p-p">@lang('public.career 5.7')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.8')</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>

        <div class="career-row3-mobile">
            <div class="container-req-mobile" style="padding: 20px 30px;">
                <div>
                    <p class="skill-word1">
                        @lang('public.career 5.1')
                    </p>
                    <p class="skill-word2">
                        @lang('public.career 5.2')
                    </p>
                </div>
                <div class="container-req-item">
                    <div style="display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 14px;
                    justify-items: center;
                    grid-column-gap: 30px;">
                        <div>
                            <p>BACKEND SYSTEM</p>
                        </div>
                        <div>
                            <p>MANAGEMENT</p>
                        </div>
                        <div style="width:auto">
                            <p>MT4 ADMIN</p>
                        </div>
                        <div style="width: auto">
                            <p >CRM SYSTEM</p>
                        </div>
                        <div style="width: auto">
                            <p>cTrader ADMIN</p>
                        </div>
                        <div style="width: auto">
                            <p>MT5 ADMIN</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                <div class="container-req-mobile-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.3')</p>
                        <p class="skill-word2">@lang('public.career 5.4')</p>
                    </div>
                    <div class="container-req-item-2">
                        <p>@lang('public.career 10')</p>
                        <p>@lang('public.career 6')</p>
                        <p>@lang('public.career 8')</p>
                        <p>@lang('public.career 11')</p>
                        <p>@lang('public.career 15')</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.5')</p>
                        <p class="skill-word2">@lang('public.career 5.6')</p>
                    </div>
                    <div class="container-req-item-2-1">
                        <p>DEGREE</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.7')</p>
                        <p class="skill-word2">@lang('public.career 5.8')</p>
                    </div>
                    <div class="container-req-item-2-2">
                        <p>1</p>
                    </div>
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
                                <span>@lang('public.career 3.1')</span>
                            </button>
                        </a>
                    </div>
                    <p>@lang('public.career 27')</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        @lang('public.career 28')
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
                        @lang('public.career 5.1')
                    </p>
                    <br>
                    <p class="career-req-p2">
                        @lang('public.career 5.2')
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
                    <p class="cap-p-p">@lang('public.career 5.3')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.4')</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        @lang('public.career 15') <br><br>
                        @lang('public.career 6') <br><br>
                        @lang('public.career 11') <br><br>
                        @lang('public.career 8') <br><br>
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.5')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.6')</p>
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
                    <p class="cap-p-p">@lang('public.career 5.7')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.8')</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        1
                    </p>
                </div>
            </div>
        </div>

        <div class="career-row3-mobile">
            <div class="container-req-mobile" style="padding: 20px 30px;">
                <div>
                    <p class="skill-word1">
                        @lang('public.career 5.1')
                    </p>
                    <p class="skill-word2">
                        @lang('public.career 5.2')
                    </p>
                </div>
                <div class="container-req-item">
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;justify-items: center;grid-column-gap: 20px;">
                        <div>
                            <p>@lang('public.career 12')</p>
                        </div>
                        <div>
                            <p>CUSTOMER SERVICE</p>
                        </div>
                        <div style="width:auto">
                            <p>PRESENTATION</p>
                        </div>
                        <div style="width: auto">
                            <p >SALES & SERVICE</p>
                        </div>
                        <div style="width: auto">
                            <p>NEGOTIATION</p>
                        </div>
                        <div style="width: auto">
                            <p>SELF-CONFIDENCE</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                <div class="container-req-mobile-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.3')</p>
                        <p class="skill-word2">@lang('public.career 5.4')</p>
                    </div>
                    <div class="container-req-item-2">
                        <p>@lang('public.career 6')</p>
                        <p>@lang('public.career 7')</p>
                        <p>@lang('public.career 8')</p>
                        <p>@lang('public.career 15')</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.5')</p>
                        <p class="skill-word2">@lang('public.career 5.6')</p>
                    </div>
                    <div class="container-req-item-2-1">
                        <p>DIPLOMA <br>&<br> DEGREE</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.7')</p>
                        <p class="skill-word2">@lang('public.career 5.8')</p>
                    </div>
                    <div class="container-req-item-2-2">
                        <p>1</p>
                    </div>
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
                                <span>@lang('public.career 3.1')</span>
                            </button>
                        </a>
                    </div>
                    <p>@lang('public.career 29')</p>
                </div>
                <div class="it-program-p2">
                    <p>
                        @lang('public.career 30')
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
                        @lang('public.career 5.3')
                    </p>
                    <br>
                    <p class="career-req-p2">
                        @lang('public.career 5.4')
                    </p>
                </div>
                <div style="display: flex;width:315px;justify-content: space-between;">
                    <div class="ctgry-p">
                        <div class="container">
                            <p>@lang('public.career 15')</p>
                            <p>@lang('public.career 6')</p>
                            <p>@lang('public.career 8')</p>
                            <p>@lang('public.career 7')</p>
                        </div>
                    </div>
                    <div class="ctgry-p">
                        <div class="container">
                            <p>@lang('public.career 9')</p>
                            <p>@lang('public.career 17')</p>
                            <p>@lang('public.career 18')</p>
                            <p>@lang('public.career 19')</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="career-col4">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.1')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.2')</p>
                </div>
                <div class="cap-ctgry-p">
                    <p>
                        IT PROGRAMMER <br><br>
                        UI / UX DESIGNER <br><br>
                        MARKETING DESIGN
                    </p>
                </div>
            </div>
            <div class="career-col5">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.5')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.6')</p>
                </div>
                <div class="edu-ctgry-p">
                    <p>
                        Degree
                    </p>
                </div>
            </div>
            <div class="career-col6">
                <div class="cap-p">
                    <p class="cap-p-p">@lang('public.career 5.7')</p>
                    <br>
                    <p class="goodon-p">@lang('public.career 5.8')</p>
                </div>
                <div class="exp-ctgry-p">
                    <p>
                        0
                    </p>
                </div>
            </div>
        </div>

        <div class="career-row3-mobile">
            <div class="container-req-mobile" style="padding: 20px 30px;">
                <div>
                    <p class="skill-word1">
                        @lang('public.career 5.1')
                    </p>
                    <p class="skill-word2">
                        @lang('public.career 5.2')
                    </p>
                </div>
                <div class="container-req-item">
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;justify-items: start;;grid-column-gap: 20px;">
                        <div>
                            <p>ADAPTABILITY</p>
                        </div>
                        <div>
                            <p>INDEPENDENCE</p>
                        </div>
                        <div style="width:auto">
                            <p>HARDWORKING</p>
                        </div>
                        <div style="width: auto">
                            <p >PROBLEM SOLVING</p>
                        </div>
                        <div style="width: auto">
                            <p>AGGRESSIVE</p>
                        </div>
                        <div style="width: auto">
                            <p>SELF-CONFIDENCE</p>
                        </div>
                        <div style="width: auto">
                            <p>COMMUNICATION</p>
                        </div>
                        <div style="width: auto">
                            <p>LEARNING</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                <div class="container-req-mobile-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.3')</p>
                        <p class="skill-word2">@lang('public.career 5.4')</p>
                    </div>
                    <div class="container-req-item-2">
                        <p>IT PROGRAMMER</p>
                        <p>UI / UX DESIGNER</p>
                        <p>MARKETING DESIGN</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.5')</p>
                        <p class="skill-word2">@lang('public.career 5.6')</p>
                    </div>
                    <div class="container-req-item-2-1">
                        <p>DEGREE</p>
                    </div>
                </div>
                <div class="container-req-mobile-2-2">
                    <div>
                        <p class="skill-word1">@lang('public.career 5.7')</p>
                        <p class="skill-word2">@lang('public.career 5.8')</p>
                    </div>
                    <div class="container-req-item-2-2">
                        <p>0</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="career-line1"></div>

    <div class="career7">
        <p>
            @lang('public.career 31')
            <a href="#" class="href-link2">hr.admin@currenttech.pro</a>
        </p>
    </div>
</div>

@endsection