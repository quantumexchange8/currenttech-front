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
    .sales-p1-mobile {
        display: none;
    }
    .encourage-p1-mobile {
        display: none;
    }
    .display-p1-mobile {
        display: none;
    }
    .zh-discover-p {
        width: 100%;
    }

    @media screen and (max-width: 1093px) {
        .perform1 {
            width: 100%;
            height: auto;
        }
        .perform1 p {
            width: 70%;
            height: auto;
            /* margin-top: 170px; */
        }

        .perform2 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 68px;
        }
        .perform2 p {
            width: 80%;
            height: auto;
        }
        .perform3 {
            margin-bottom: 68px;
        }

        .perform3 object {
            width: 100%;
            /* max-width: 100%; */
            height: auto;
        }
        .perform4 {
            width: 100%;
            height: auto;
            margin-bottom: 38px;
            justify-content: center;
        }
        .perform4 object {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .perform5 {
            width: 100%;
            height: auto;
            margin-bottom: 38px;
        }
        .perform5 object {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .perform6 {
            margin-top: 30px;
            margin-bottom: 68px;
        }
        .through-p2 {
            width: 100%;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            display: none;
        }
        .through-p2-mobile {
            width: 100%;
            color: #ffffff;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            line-height: 16px;
            display: block;
            margin: 0;
        }
        .building-p1 {
            width: 100%;
            height: auto;
            font-size: 20px;
            line-height: 23px;
            text-align: center;
            margin-bottom: 38px;
        }
        .emphasise-p1 {
            width: 100%;
            font-size: 14px;
        }
        .emphasise-p2 {
            width: 100%;
            font-size: 12px;
        }
        .mobile-emphasise {
            width: 160%;
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
            width: 80%;
            font-size: 14px;
        }
        .encourage-p2 {
            width: 100%;
            font-size: 12px;
        }
        .indispensable-p1 {
            width: 92%;
            font-size: 14px;
            margin-top: 0px;
        }
        .indispensable-p2 {
            width: 92%;
            font-size: 12px;
        }
        .display-p1 {
            width: 100%;
            font-size: 14px;
            margin-top: 0px;
        }
        .display-p2 {
            width: 100%;
            font-size: 12px;
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
        .perform-col object{
            width: 50px;
            height: 50px;
        }
        .perform-pbig {
            font-size: 32px;
        }
        .perform-psmall {
            font-size: 10px;
        }
        .sales-p1-web {
            display: none;
        }
        .sales-p1-mobile {
            display: block;
        }
        .encourage-p1-web {
            display: none;
        }
        .encourage-p1-mobile {
            display: block;
        }
        .display-p1-mobile {
            display: block;
        }
        .display-p1-web {
            display: none;
        }
        .zh-discover-p {
            width: 95%;
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
            @lang('public.performance 1')
        </p>

        
    </div>
    <div class="perform2">
        <p class="through-p2">
            @lang('public.performance 2')
        </p>
        <p class="through-p2-mobile">
            @lang('public.performance 2 mobile')
        </p>
    </div>

    <div class="mobile-alignment-30px">
        <div class="perform3">
            <object type="image/svg+xml" data="assets/image/feature/perform/1.svg"></object>
            {{-- <img src="assets/image/feature/perform/1.svg"> --}}
        </div>
    </div>
</div>

<div class="main-content9-1">
    <div class="mobile-alignment-30px">
        <div class="perform4">
            <div class="mobile-emphasise" style="display: flex; flex-direction:column">
                {{-- <div> --}}
                    <p class="emphasise-p1">
                        @lang('public.performance 3')
                    </p>
                {{-- </div> --}}
                {{-- <div> --}}
                    <p class="emphasise-p2">
                        @lang('public.performance 4')
                    </p>
                {{-- </div> --}}
            </div>
            <div>
                <object type="image/svg+xml" data="assets/image/feature/perform/2.svg"></object>
                {{-- <img src="assets/image/feature/perform/2.svg"> --}}
            </div>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="perform5">
            <div>
                <object type="image/svg+xml" data="assets/image/feature/perform/3.svg"></object>
                {{-- <img src="assets/image/feature/perform/3.svg"> --}}
            </div>
            <div class="mobile-emphasise" style="display: flex; flex-direction:column">
                <div>
                    @if(app()->getLocale() == 'zh')
                        <p class="sales-p1 sales-p1-web">
                            @lang('public.performance 5')
                        </p>
                        <p class="sales-p1 sales-p1-mobile">
                            @lang('public.performance 5 mobile')
                        </p>
                    @else
                        <p class="sales-p1">
                            @lang('public.performance 5')
                        </p>
                    @endif
                    
                </div>
                <div>
                    <p class="sales-p2">
                        @lang('public.performance 6')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="perform5">
            <div class="mobile-emphasise" style="display: flex; flex-direction:column">
                <div>
                    @if(app()->getLocale() == 'zh')
                        <p class="encourage-p1 encourage-p1-web">
                            @lang('public.performance 7')
                        </p>
                        <p class="encourage-p1 encourage-p1-mobile">
                            @lang('public.performance 7 mobile')
                        </p>
                    @else
                        <p class="encourage-p1">
                            @lang('public.performance 7')
                        </p>
                    @endif
                    
                </div>
                <div>
                    <p class="encourage-p2">
                        @lang('public.performance 8')
                    </p>
                </div>
            </div>
            <div>
                <object type="image/svg+xml" data="assets/image/feature/perform/4.svg"></object>
                {{-- <img src="assets/image/feature/perform/4.svg"> --}}
            </div>
        </div>
    </div>
    
    <div class="mobile-alignment-30px">
        <div class="perform4">
            <div>
                <object type="image/svg+xml" data="assets/image/feature/perform/5.svg"></object>
                {{-- <img src="assets/image/feature/perform/5.svg"> --}}
            </div>
            <div class="mobile-emphasise" style="display: flex; flex-direction:column">
                {{-- <div > --}}
                    <p class="indispensable-p1">
                        @lang('public.performance 9')
                    </p>
                {{-- </div>
                <div> --}}
                    <p class="indispensable-p2">
                        @lang('public.performance 10')
                    </p>
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="perform5">
        
            <div class="mobile-emphasise" style="display: flex; flex-direction:column">
                <div>
                    @if(app()->getLocale() == 'zh')
                        <p class="display-p1 display-p1-web">
                            @lang('public.performance 11')
                        </p>
                        <p class="display-p1 display-p1-mobile">
                            @lang('public.performance 11 mobile')
                        </p>
                    @else
                        <p class="display-p1">
                            @lang('public.performance 11')
                        </p>
                    @endif
                    
                </div>
                <div>
                    <p class="display-p2">
                        @lang('public.performance 12')
                    </p>
                </div>
            </div>
            <div>
                <object type="image/svg+xml" data="assets/image/feature/perform/6.svg"></object>
                {{-- <img src="assets/image/feature/perform/6.svg"> --}}
            </div>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="perform6">
            <p class="discover-p @if(app()->getLocale() == 'zh') zh-discover-p @endif">
                @lang('public.performance 13')
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
                        86%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.performance 14')
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
                        250%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.performance 15')
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
                        78%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.performance 16')
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
                        91%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.performance 17')
                    </p>
                </div>
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