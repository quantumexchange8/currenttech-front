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
        .rew4 {
            width: 340px;
        }
        .rew5 {
            width: auto;
            margin-bottom: 38px;
        }
        .rew6 {
            margin-bottom: 38px !important;
        }
        .rew7 {
            width: 340px;
        }
        .rew8 {
            margin-bottom: 38px !important;
        }
        .rew9 {
            margin-bottom: 68px !important;
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
        .perform-col img {
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
</style>

<div class="main-content10" style="margin-top:160px;">
    <div class="rew1">
        <p class="ignite-p">
            Ignite Engagement and Unlock Exclusive Benefits
        </p>
    </div>

    <div class="rew2" style="margin-bottom: 100px">
        <p class="unleash-p">
            Unleash engagement, earn points, unlock badges, and enjoy exclusive benefits.<br>
             Join now for 
            personalized offers, contests, and delightful surprises. <br>Elevate your experience with 
            rewarding app features!
        </p>
        <div class="mobile-alignment-30px">
            <p class="unleash-p-mobile">
                Unleash engagement, earn points, unlock badges, and enjoy exclusive benefits.
                 Join now for 
                personalized offers, contests, and delightful surprises. Elevate your experience with 
                rewarding app features!
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew3">
            <img src="assets/image/feature/reward/1.svg" style="width: 100%;">
        </div>
        <div class="rew3-mobile" style="margin-bottom: 68px">
            <img src="assets/image/feature/reward/7.svg" style="width: 100%;">
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew4">
            <p class="point-p">
               Points and Loyalty Programs
            </p>
       </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew5">
            <p class="implement-p">
                Implement a points-based rewards system to incentivize user engagement.<br>
                Users can earn points for various actions within the app, such as completing tasks,<br>
                referring friends, or making purchases. Accumulated points can be redeemed for<br>
                exclusive discounts, upgrades, or special perks.
            </p>
            <p class="implement-p-mobile">
                Implement a points-based rewards system to incentivize user engagement.
                Users can earn points for various actions within the app, such as completing tasks,
                referring friends, or making purchases. Accumulated points can be redeemed for
                exclusive discounts, upgrades, or special perks.
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew6" style="margin-bottom: 68px;">
            <img src="assets/image/feature/reward/2.svg" style="width: 100%;">
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew7">
            <p class="badges-p1">
                Badges and Achievements
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew8" style="margin-bottom: 68px;">
            <p class="recognise-p1">
                Recognise and reward user achievements with virtual badges. Users can unlock badges by reaching <br>
                specific milestones, completing challenges, or demonstrating exceptional performance. 
                Displaying badges <br>on user profiles adds a gamified element and encourages users to strive for more accomplishments.
            </p>
            <p class="recognise-p1-web">
                Recognise and reward user achievements with virtual badges. Users can unlock badges by reaching 
                specific milestones, completing challenges, or demonstrating exceptional performance. 
                Displaying badges on user profiles adds a gamified element and encourages users to strive for more accomplishments.
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew-9" style="margin-bottom: 68px;">
            <img src="assets/image/feature/reward/3.svg" style="width: 100%;">
        </div>
    </div>

    {{-- <div class="rew7">
        <p class="leveling-p1">
            Leveling and Progression
        </p>
    </div> --}}
    <div class="mobile-alignment-30px">
        <div class="rew7">
            <p class="badges-p1">
                Leveling and Progression
            </p>
        </div>
    </div>

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
                Incorporate a leveling system to provide a sense of progression and achievement. 
            As users interact<br> with the app, they can level up based on their activities and accomplishments.
            Each level unlocks<br> new features, benefits, or privileges, motivating users to <br>stay engaged and reach higher levels.
            </p>
            <p class="recognise-p1-web">
                Incorporate a leveling system to provide a sense of progression and achievement. 
            As users interact with the app, they can level up based on their activities and accomplishments.
            Each level unlocks new features, benefits, or privileges, motivating users to stay engaged and reach higher levels.
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew9" style="margin-bottom: 66px;">
            <img src="assets/image/feature/reward/4.svg" style="width: 100%;">
        </div>
    </div>

    {{-- <div class="rew7">
        <p class="vip-p1">
            VIP or Premium Membership
        </p>
    </div> --}}
    <div class="mobile-alignment-30px">
        <div class="rew7">
            <p class="badges-p1">
                VIP or Premium Membership
            </p>
        </div>
    </div>

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
                Offer a premium or VIP membership tier with exclusive benefits. Users who subscribe to this membership<br>
                level gain access to premium content, enhanced features, personalized support, or priority
                access to new <br>updates. This creates a sense of exclusivity and encourages users to upgrade for enhanced rewards.
            </p>
            <p class="recognise-p1-web">
                Offer a premium or VIP membership tier with exclusive benefits. Users who subscribe to this membership
                level gain access to premium content, enhanced features, personalized support, or priority
                access to new updates. This creates a sense of exclusivity and encourages users to upgrade for enhanced rewards.
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew9" style="margin-bottom: 75px;">
            <img src="assets/image/feature/reward/5.svg" style="width: 100%;">
        </div>
    </div>
    
    {{-- <div class="rew7">
        <p class="streak-p1">
            Daily Streaks and Challenges
        </p>
    </div> --}}

    <div class="mobile-alignment-30px">
        <div class="rew7">
            <p class="badges-p1">
                Daily Streaks and Challenges
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
        <div class="rew8" style="margin-bottom: 68px;">
            <p class="recognise-p1">
                Encourage daily app usage and engagement through daily streaks and challenges. 
                Users who consistently log in or complete certain tasks every day can earn bonus rewards,
                extra points, or exclusive content.<br> This creates a habit-forming experience and keeps users actively engaged with the app.
            </p>
            <p class="recognise-p1-web">
                Encourage daily app usage and engagement through daily streaks and challenges. 
                Users who consistently log in or complete certain tasks every day can earn bonus rewards,
                extra points, or exclusive content. This creates a habit-forming experience and keeps users actively engaged with the app.
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
            <img src="assets/image/feature/reward/6.svg" style="width: 100%;">
        </div>
    </div>
    
    <div class="mobile-alignment-30px">
        <div class="perform6">
            <p class="provid-2">
                By providing suitable rewards at the <br>
                appropriate moment, we ensure that the<br> desired
                activity is accomplished effectively.
            </p>
            <p class="provid-2-web">
                By providing suitable rewards at the 
                appropriate moment, we ensure that the desired
                activity is accomplished effectively.
            </p>
        </div>
    </div>

    <div class="mobile-alignment-30px">
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
                        74%
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
                        168%
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
                        92%
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