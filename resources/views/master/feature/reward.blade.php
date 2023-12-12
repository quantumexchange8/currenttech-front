@extends('layouts.master')
@section('content')

<style>
    .unleash-p-mobile {
        display: none;
    }
    .rew3 {
        margin-bottom: 88px;
        display: block;
    }
    .rew3-mobile {
        display: none;
    }
    .rew4 {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .rew5 {
        width: 1000px;
        display: flex;
        justify-content: center;
        margin-bottom: 68px;
    }
    .rew7 {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .rew9 {
        margin-bottom: 128px;
    }
    @media screen and (max-width: 1093px) {
        .rew2 {
            margin-bottom: 68px !important;
        }
        .rew3 {
            margin-bottom: 88px;
            display: none;
        }
        .rew3-mobile {
            display: block;
            margin-bottom: 68px;
        }
        .rew3-mobile object {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .rew4 {
            width: 100%;
            margin-left: 30px;
            margin-right: 30px;
        }
        .rew5 {
            width: auto;
            margin-bottom: 38px;
        }
        .rew6 {
            margin-bottom: 38px !important;
        }
        .rew6 object {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .rew7 {
            width: 100%;
            margin-left: 30px;
            margin-right: 30px;
        }
        .rew7 object {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .rew8 {
            margin-bottom: 38px !important;
        }
        .rew8 object {
            width: 100%;
            max-width: 100%;
            height: auto;
        }
        .rew9 {
            margin-bottom: 68px !important;
        }
        .rew9 object {
            width: 100%;
            max-width: 100%;
            height: auto;
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
        .perform6 {
            margin-bottom: 68px;
        }
        .perform-pbig {
            font-size: 32px;
        }
        .perform-psmall {
            font-size: 10px;
        }
        .ignite-p {
             font-size: 20px; 
             width: 70%;
             line-height: 23px;
             margin-bottom: 38px;
        }
        .unleash-p {
             font-size: 14px; 
             width: 100%;
             line-height: 16px;
             display: none;
        }
        .unleash-p-mobile {
            display: flex;
            justify-content: center;   
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .point-p {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             text-align: left;
             margin-bottom: 0px;
        }
        .badges-p1 {
            font-size: 20px;
            width: 100%;
            line-height: 23px;
            text-align: left;
            margin-bottom: 0px;
        }
        .leveling-p1 {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             margin-left: 0px;
        }
        .incorporate-p1 {
             font-size: 14px; 
             width: 100%;
             line-height: 23px;
        }
        .vip-p1 {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             margin-left: 0px;
        }
        .streak-p1 {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             margin-left: 0px;
        }
        .provid-2{
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             margin-left: 0px;
             text-align: center;
             display: none;
        }
        .provid-2-web {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
             width: 100%;
             margin-left: 0px;
             text-align: center;
             display: block;
        }
        .zh-ignite-p {
            width: 100%;
        }
    }
    @media screen and (max-width: 1600px) {
        .rew11 {
            margin-left: 350px;
            margin-right: 350px;
        }
    }
    @media screen and (max-width: 2500px) {
        .rew11 {
            margin-left: 450px;
            margin-right: 450px;
        }
    }
    @media screen and (max-width: 3500px) {
        .rew11 {
            margin-left: 550px;
            margin-right: 550px;
        }
    }
    .zh-implement-p {
        width: 100% !important;
    }
</style>

<div class="main-content10" style="margin-top:160px;">
    <div class="rew1">
        <p class="ignite-p @if(app()->getLocale() == 'zh') zh-ignite-p @endif">
            @lang('public.reward 1')
        </p>
    </div>

    <div class="rew2" style="margin-bottom: 100px">
        <p class="unleash-p">
            @lang('public.reward 2')
        </p>
        <div class="mobile-alignment-30px">
            <p class="unleash-p-mobile">
                @lang('public.reward 2 mobile')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew3">
            <object type="image/svg+xml" data="assets/image/feature/reward/1.svg"></object>
            {{-- <img src="assets/image/feature/reward/1.svg" style="width: 100%;"> --}}
        </div>
        <div class="rew3-mobile" style="margin-bottom: 68px">
            <object type="image/svg+xml" data="assets/image/feature/reward/7.svg"></object>
            {{-- <img src="assets/image/feature/reward/7.svg" style="width: 100%;"> --}}
        </div>
    </div>

    {{-- <div class="mobile-alignment-30px"> --}}
        <div class="rew4">
            <p class="point-p">
                @lang('public.reward 3')
            </p>
       </div>
    {{-- </div> --}}

    <div class="mobile-alignment-30px">
        <div class="rew5">
            <p class="implement-p @if(app()->getLocale() == 'zh') zh-implement-p @endif">
                @lang('public.reward 4')
            </p>
            <p class="implement-p-mobile">
                @lang('public.reward 4')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew6" style="margin-bottom: 68px;">
            <object type="image/svg+xml" data="assets/image/feature/reward/2.svg"></object>
            {{-- <img src="assets/image/feature/reward/2.svg" style="width: 100%;"> --}}
        </div>
    </div>

    {{-- <div class="mobile-alignment-30px"> --}}
        <div class="rew7">
            <p class="badges-p1">
                @lang('public.reward 5')
            </p>
        </div>
    {{-- </div> --}}

    <div class="mobile-alignment-30px">
        <div class="rew8" style="margin-bottom: 68px;">
            <p class="recognise-p1">
                @lang('public.reward 6')
            </p>
            <p class="recognise-p1-web">
                @lang('public.reward 6 mobile')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew9" style="margin-bottom: 68px;">
            <object type="image/svg+xml" data="assets/image/feature/reward/3.svg"></object>
        </div>
    </div>

    {{-- <div class="rew7">
        <p class="leveling-p1">
            Leveling and Progression
        </p>
    </div> --}}
    {{-- <div class="mobile-alignment-30px"> --}}
        <div class="rew7">
            <p class="badges-p1">
                @lang('public.reward 7')
            </p>
        </div>
    {{-- </div> --}}

    {{-- <div class="rew8" style="margin-bottom: 68px">
        <p class="incorporate-p1">
            Incorporate a leveling system to provide a sense of progression and achievement. 
            As users interact<br> with the app, they can level up based on their activities and accomplishments.
            Each level unlocks<br> new features, benefits, or privileges, motivating users to <br>stay engaged and reach higher levels.
        </p>
    </div> --}}
    <div class="mobile-alignment-30px">
        <div class="rew8" style="margin-bottom: 68px;">
            <p class="recognise-p1">
                @lang('public.reward 8')
            </p>
            <p class="recognise-p1-web">
                @lang('public.reward 8 mobile')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew9" style="margin-bottom: 66px;">
            <object type="image/svg+xml" data="assets/image/feature/reward/4.svg"></object>
        </div>
    </div>

    {{-- <div class="rew7">
        <p class="vip-p1">
            VIP or Premium Membership
        </p>
    </div> --}}
    {{-- <div class="mobile-alignment-30px"> --}}
        <div class="rew7">
            <p class="badges-p1">
                @lang('public.reward 9')
            </p>
        </div>
    {{-- </div> --}}

    {{-- <div class="rew8" style="margin-bottom: 68px">
        <p class="vip-p2">
            Offer a premium or VIP membership tier with exclusive benefits. Users who subscribe to this membership<br>
            level gain access to premium content, enhanced features, personalized support, or priority
            access to new <br>updates. This creates a sense of exclusivity and encourages users to upgrade for enhanced rewards.
        </p>
    </div> --}}
    <div class="mobile-alignment-30px">
        <div class="rew8" style="margin-bottom: 68px;">
            <p class="recognise-p1">
                @lang('public.reward 10')
            </p>
            <p class="recognise-p1-web">
                @lang('public.reward 10 mobile')
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew9" style="margin-bottom: 75px;">
            <object type="image/svg+xml" data="assets/image/feature/reward/5.svg"></object>
            {{-- <img src="assets/image/feature/reward/5.svg" style="width: 100%;"> --}}
        </div>
    </div>
    
    {{-- <div class="rew7">
        <p class="streak-p1">
            Daily Streaks and Challenges
        </p>
    </div> --}}

    {{-- <div class="mobile-alignment-30px"> --}}
        <div class="rew7">
            <p class="badges-p1">
                @lang('public.reward 11')
            </p>
        </div>
    {{-- </div> --}}

    <div class="mobile-alignment-30px">
        <div class="rew8" style="margin-bottom: 68px;">
            <p class="recognise-p1">
                @lang('public.reward 12')
            </p>
            <p class="recognise-p1-web">
                @lang('public.reward 12 mobile')
            </p>
        </div>
    </div>

    {{-- <div class="rew8" style="margin-bottom: 68px;">
        <p class="streak-p2">
            Encourage daily app usage and engagement through daily streaks and challenges. 
            Users who consistently log in or complete certain tasks every day can earn bonus rewards,
            extra points, or exclusive content.<br> This creates a habit-forming experience and keeps users actively engaged with the app.
        </p>
    </div> --}}

    <div class="mobile-alignment-30px">
        <div class="rew9" style="margin-bottom: 128px;">
            <object type="image/svg+xml" data="assets/image/feature/reward/6.svg"></object>
            {{-- <img src="assets/image/feature/reward/6.svg" style="width: 100%;"> --}}
        </div>
    </div>
    
    <div class="mobile-alignment-30px">
        <div class="perform6">
            <p class="provid-2">
                @lang('public.reward 13')
            </p>
            <p class="provid-2-web">
                @lang('public.reward 13')
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
                        @lang('public.reward 14')
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
                        74%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.reward 15')
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
                        168%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.reward 16')
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
                        92%
                    </p>
                </div>
                <div>
                    <p class="perform-psmall">
                        @lang('public.reward 17')
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection