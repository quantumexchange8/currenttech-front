@extends('layouts.master')
@section('content')

<style>
    @media screen and (max-width: 1280px) {
        .rew10 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            margin-left: 50px; 
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
        .ignite-p {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             margin-top: -80px;
        }
        .unleash-p {
             font-size: 14px; 
             width: 100%;
             line-height: 16px;
        }
        .point-p {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
        }
        .badges-p1 {
             font-size: 20px; 
             width: 100%;
             line-height: 23px;
             margin-left: 0px;
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
    </div>

    <div class="rew3" style="margin-bottom: 88px">
        <img src="assets/image/feature/reward/1.svg" style="width: 100%;">
    </div>

    <div class="rew4" style="width: 1000px;display: flex;justify-content: center;">
         <p class="point-p">
            Points and Loyalty Programs
         </p>
    </div>

    <div class="rew5" style="width: 1000px;display: flex;justify-content: center;margin-bottom: 68px;">
        <p class="implement-p">
            Implement a points-based rewards system to incentivize user engagement.<br>
            Users can earn points for various actions within the app, such as completing tasks,<br>
            referring friends, or making purchases. Accumulated points can be redeemed for<br>
            exclusive discounts, upgrades, or special perks.
        </p>
    </div>

    <div class="rew6" style="margin-bottom: 68px;">
        <img src="assets/image/feature/reward/2.svg" style="width: 100%;">
    </div>

    <div class="rew7">
        <p class="badges-p1">
            Badges and Achievements
        </p>
    </div>

    <div class="rew8" style="margin-bottom: 68px;">
        <p class="recognise-p1">
            Recognise and reward user achievements with virtual badges. Users can unlock badges by reaching <br>
            specific milestones, completing challenges, or demonstrating exceptional performance. 
            Displaying badges <br>on user profiles adds a gamified element and encourages users to strive for more accomplishments.
        </p>
    </div>

    <div class="rew-9" style="margin-bottom: 68px;">
        <img src="assets/image/feature/reward/3.svg" style="width: 100%;">
    </div>

    <div class="rew7">
        <p class="leveling-p1">
            Leveling and Progression
        </p>
    </div>

    <div class="rew8" style="margin-bottom: 68px">
        <p class="incorporate-p1">
            Incorporate a leveling system to provide a sense of progression and achievement. 
            As users interact<br> with the app, they can level up based on their activities and accomplishments.
            Each level unlocks<br> new features, benefits, or privileges, motivating users to <br>stay engaged and reach higher levels.
        </p>
    </div>

    <div class="rew9" style="margin-bottom: 66px;">
        <img src="assets/image/feature/reward/4.svg" style="width: 100%;">
    </div>

    <div class="rew7">
        <p class="vip-p1">
            VIP or Premium Membership
        </p>
    </div>

    <div class="rew8" style="margin-bottom: 68px">
        <p class="vip-p2">
            Offer a premium or VIP membership tier with exclusive benefits. Users who subscribe to this membership<br>
            level gain access to premium content, enhanced features, personalized support, or priority
            access to new <br>updates. This creates a sense of exclusivity and encourages users to upgrade for enhanced rewards.
        </p>
    </div>

    <div class="rew9" style="margin-bottom: 75px;">
        <img src="assets/image/feature/reward/5.svg" style="width: 100%;">
    </div>

    <div class="rew7">
        <p class="streak-p1">
            Daily Streaks and Challenges
        </p>
    </div>

    <div class="rew8" style="margin-bottom: 68px;">
        <p class="streak-p2">
            Encourage daily app usage and engagement through daily streaks and challenges. 
            Users who consistently log in or complete certain tasks every day can earn bonus rewards,
            extra points, or exclusive content.<br> This creates a habit-forming experience and keeps users actively engaged with the app.
        </p>
    </div>

    <div class="rew9" style="margin-bottom: 128px;">
        <img src="assets/image/feature/reward/6.svg" style="width: 100%;">
    </div>

    <div class="perform6">
        <p class="provid-2">
            By providing suitable rewards at the <br>
            appropriate moment, we ensure that the<br> desired
            activity is accomplished effectively.
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
                    78%
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
@endsection