@extends('layouts.master')
@section('content')

<style>
    .slick-slide img {
    display: block;
    margin-bottom: 20px;
    margin-top: 20px;
}
    /* Change the color of slick dots */
    .slick-dots li button {
        background-color: rgb(255, 255, 255); /* Change to your desired dot color */
        border-radius: 50%; /* Make the dots circular */
        width: 10px; /* Adjust the width of the dots */
        height: 10px; /* Adjust the height of the dots */
        transition: background-color 0.3s ease; /* Optional: Add a transition effect */
    }

    .slick-dots li.slick-active button {
        background-color: rgb(148, 137, 137); /* Change to your desired active dot color */
    }
    .web3-8 {
        text-align: center;
        margin-bottom: 68px;
    }
    .work-container-1-2 {
        display: flex; 
        flex-direction:column;
        margin-right: 43px
    }
    .zombie-img2 {
        /* margin-right: 50px; */
    }
    .zombie-img3 img {
        margin-top: -23px;
    }
    .zombie-img4 img {
        margin-right: 51px;
        /* margin-top: -23px; */
    }
    .line1 {
        display: none;
    }
    .line5 {
        display: none;
    }
    .alien-web {
        display: block;
    }
    .alien-mobile {
        display: none;
    }
    @media only screen and (min-width: 1440px) {
        .responsive {
            display: none;
        }
    }
    @media only screen and (min-width: 1440px) {
        .res {
            display: block;
        }
    }
    @media screen and (max-width: 1093px) {
        .web3-7 {
            width: 100%;
            height: auto;
            margin-bottom: 16px;
        }
        .web3-7 p {
            width: 100%;
            height: auto;
        }
        .web3-8 {
            width: 100%;
            height: auto;
            margin-bottom: 68px !important;
        }
        .web3-8 p {
            width: 94%;
            height: auto;
        }
        .web3-2 {
            width: 100%;
            margin-bottom: 38px;
        }
        .web3-1 {
            margin-bottom: 38px;
        }

        .line5 {
            display: block;
            width: 100%;
            height: 0.5px;
            background: #666;
            margin-bottom: 38px;
        }

        .alien-web {
            display: none;
        }   
        .alien-mobile {
            display: block;
            margin-left: 15px;
            margin-right: 15px;
        }
        .revo-p {
            width: 100%;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .revo-p2 {
            width: 100%;
            font-size: 14px;
        }
        .web3-4 {
            width: 100%;
            margin-bottom: 68px;
        }
        .empowering-p {
            width: 50%;
            text-align: left;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .empowering-p2 {
            width: 90%;
            text-align: left;
            color: #FFF;

            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 18px; /* 128.571% */
        }
        .howwork-p {
            margin-bottom: 37px;
            width: 100%;
            font-size: 20px;
        }
        .web3-5 {
            width: 100%;
        }
        .step1-p {
            width: 100%;
            color: #BD00FF;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 18px; /* 90% */

        }
        .step1-p2 {
            /* margin-left: 50px; */
            width: 100%;
            margin-bottom: 68px;
            font-size: 14px;
            padding-left: 20px;
            box-sizing: border-box;
        }
        .step2-p {
            width: 600px;
            margin-left: -110px;
            font-size: 14px;
        }
        .step2-p2 {
            margin-left: -160px;
            width: 70%;
            font-size: 14px;
        }
        .work-container-1 {
            height: auto;
            width: 100%;
            margin-top: 80px;
            margin-bottom: 0px;
            display: block;
            position: relative; /* Add this line */
            z-index: 1; /* Add this line */
        }
        .work-container-2-mobile {
            height: auto;
            width: 100%;
            margin-top: 80px;
            margin-bottom: 0px;
            display: block;
            position: relative; /* Add this line */
            z-index: 1; /* Add this line */
        }
        .zombie-img {
            position: relative;
            z-index: -1; 
            opacity: 0.5; 
            margin-left: -180px;
            width: 140px;
            height: 170px;
            margin-top: -250px;
        }
        .zombie-img-mobile img {
            width: 140px;
            height: 170px;
            position: absolute;
            z-index: -1;
            top: -72px;
            right: 33px;
        
        }
        .zombie-img-mobile2 img {
            width: 140px;
            height: 170px;
            position: absolute;
            z-index: -1;
            top: -88px;
            left: 28px;
        }

        .zombie-img2 {
            /* margin-top: -750px; */
            margin-right: 35px;
            display: flex;
            position: relative;
            z-index: -1; 
            opacity: 0.5;
        }
        .zombie-img2 img {
            width: 140px;
            height: 170px;
            margin-top: 190px !important;
        }
        .work-container-1-2 {
            margin-right: 0px;
        }
        .work-container-2 {
            height: auto;
            width: 100%;
        }
        .work-container-3 {
            height: auto;
            width: 100%;
        }
        .work-container-4 {
            height: auto;
            width: 100%;
        }
        .zombie-img3 {
            position: relative;
            z-index: -1; 
            opacity: 0.5; 
            margin-left: -180px;
            width: 140px;
            height: 170px;
            margin-top: -250px;
        }
        .zombie-img4 {
            /* margin-top: -550px; */
            margin-right: 35px;
            display: flex;
            position: relative;
            z-index: -1; 
            opacity: 0.5; 
            width: 140px;
            height: 170px;
        }
        .craft-p {
            width: 100%;
            font-size: 16px;
            text-align: left;
            margin: 0;
            display: none;
        }
        .craft-p-mobile {
            width: 100%;
            font-size: 16px;
            text-align: left;
            margin: 0;
            display: block;
            color: #FFF;

            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .craft-p2 {
            width: 100%;
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: left;
            margin: 0;
            margin-bottom: 38px;
        }
        .dashimg img {
            width: 100%;
        }
        .personal-nft-cont {
            width: 100%;
            height: auto;
            margin-bottom: 0px;
        }
        .personal-nft-cont2 {
            width: 100%;
            height: auto;
        }
        .remark-p {
            width: 100%;
            font-size: 10px;
            margin-bottom: 68px;
        }
        .create-p {
            width: 90%;
            /* margin-left: 40px; */
            color: #FFF;

            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: left;
        }
        .create-p2 {
            width: 100%;
            /* margin-left: 40px; */
            color: #FFF;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: left;
        }
        .line1 {
            margin-top: 50px;
            margin-left: 60px;
            width: 70%;
            display: block;
        }
        .inline-display {
            /* margin-top: -8px; */
            display: flex;
            flex-direction: column;

        }
        .web3-marquee-item img {
            width: 150px;
            height: 150px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 27px;
        }
        .web3-marquee-item-2 img {
            width: 150px;
            height: 150px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 27px;
        }
        .web3-marqueee-item img {
            width: 150px;
            height: auto;
            border: 2px solid #69EACB;
            border-radius: 20px;
            margin-left: 27px;
        }
        .web3-marqueee-item-2 img {
            width: 150px;
            margin-left: 27px;
            /* height: 150px; */
        }
        .web3-marquee-itemm img {
            width: 100%;
            height: 300px;
        }
        .web3-marqueee {
            margin-bottom: 10px;
            margin-top: 0px !important;
        }
        .web3-3 {
            width: 100%;
            margin-bottom: 16px;
        }
        .web3-marquee {
            margin-top: 68px !important;
            margin-bottom: 16px;
        }
        .web3-marquee-2 {
            margin-bottom: 68px;
        }
        .web3-marquee-3 {
            margin-bottom: 68px;
        }
        .many-icon {
            height: 300px !important;
        }
    }

    @media screen and (max-width: 1600px) {
        
    }

    @media screen and (min-width: 2000px) {
        .web3-8 {
            /* margin-left: 350px;
            margin-right: 350px; */
        }
    }

    @media screen and (min-width: 3000px) {
        .web3-8 {
            /* margin-left: 550px;
            margin-right: 550px; */
        }
    }

    @media screen and (min-width: 3800px) {
        .web3-8 {
            /* margin-left: 650px;
            margin-right: 650px; */
        }
    }
</style>

<div class="main-content5" style="margin-top:160px;">
    <div class="web3-1">
        <p class="revo-p">
            @lang('public.web 1')
        </p>
    </div>
    <div class="web3-2">
        <div class="mobile-alignment-30px">
            <p class="revo-p2">
                @lang('public.web 2')
            </p>
        </div>
    </div>
</div>

<div class="alien-web" style="margin-bottom:68px">
    <img src="assets/image/product/web3/alien.svg" style="max-width: 100%; height: auto;width: 100%;">
</div>

<div class="alien-mobile" style="margin-bottom:68px">
    <img src="assets/image/product/web3/alien.svg" style="max-width: 100%; height: auto;width: 100%;">
</div>

<div class="main-content5">

    <div class="mobile-alignment-30px">
        <div class="line5"></div>
    </div>
    
    <div class="web3-3">
        <div class="mobile-alignment-30px">
            <p class="empowering-p">
                @lang('public.web 3')
            </p>
        </div>
    </div>

    <div class="web3-4">
        <div class="mobile-alignment-30px">
            <p class="empowering-p2">
                @lang('public.web 4')
            </p>
        </div>
    </div>
</div>

<div class="main-content6" >
    <div class="web3-5">
        <div class="mobile-alignment-30px">
            <p class="howwork-p">@lang('public.web 5')</p>
        </div>

        <div class="work-container-1">
            <div class="work-container-1-2">
                <div class="mobile-alignment-30px">
                    <p class="step1-p">
                        @lang('public.web 7')
                    </p>
                </div>
                <div class="mobile-alignment-30px">
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 7.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 7.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 7.3')
                        </li>
                        <li style="margin-bottom: 5px">
                            @lang('public.web 7.4')
                        </li>
                    </ul>
                </div>
            </div>

            <div class="zombie-img">
                <img src="assets/image/product/web3/zombie.svg" style="margin-top: -75px;">
            </div>
        </div>
        <div class="work-container-2">
            <div class="zombie-img2">
                <img src="assets/image/product/web3/slpmonk.svg" style="margin-top: -30px;">
            </div>
            <div style="display: flex; flex-direction:column">
                <div><p class="step2-p">@lang('public.web 8')</p></div>
                <div>
                    <ul class="step2-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 8.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 8.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 8.3')
                        </li>
                        <li style="margin-bottom: 5px">
                            @lang('public.web 8.4')
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="work-container-3">
            <div style="display: flex; flex-direction:column;margin-right: 43px">
                <div><p class="step1-p">@lang('public.web 9')</p></div>
                <div>
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 9.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 9.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 9.3')
                        </li>
                        <li style="margin-bottom: 5px">
                            @lang('public.web 9.4')
                        </li>
                    </ul>
                </div>
            </div>

            <div class="zombie-img3">
                <img src="assets/image/product/web3/goldmonk.svg">
            </div>
        </div>

        <div class="work-container-4">

            <div class="zombie-img4">
                <img src="assets/image/product/web3/firemonk.svg">
            </div>

            <div style="display: flex; flex-direction:column;">
                <div><p class="step2-p">@lang('public.web 10')</p></div>
                <div>
                    <ul class="step2-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 10.1')
                        </li>
                        <li style="margin-bottom: 20px">
                            @lang('public.web 10.2')
                        </li>
                        <li style="margin-bottom: 20px">
                            @lang('public.web 10.3')
                        </li>
                    </ul>
                </div>
            </div>

            
        </div>
    </div>
</div>

<div class="main-content6-mobile">
    <div class="web3-5">
        <div class="mobile-alignment-30px">
            <p class="howwork-p">@lang('public.web 5')</p>
        </div>

        <div class="work-container-1">
            <div class="zombie-img-mobile">
                <img src="assets/image/product/web3/1.svg">
            </div>
            <div class="work-container-1-2">
                <div class="mobile-alignment-30px">
                    <p class="step1-p">
                        @lang('public.web 7')
                    </p>
                </div>
                <div class="mobile-alignment-30px">
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 7.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 7.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 7.3')
                        </li>
                        <li style="margin-bottom: 5px">
                            @lang('public.web 7.4')
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        {{-- <div class="work-container-1"> --}}
            {{-- <div class="zombie-img2">
                <img src="assets/image/product/web3/slpmonk.svg" style="margin-top: -30px;">
            </div> --}}
            {{-- <div class="work-container-1-2">
                <div class="mobile-alignment-30px">
                    <p class="step2-p">
                        Step 2
                    </p>
                </div>
                <div class="mobile-alignment-30px">
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            Add NFT metadata: In the smart contract, you can include metadata for the NFT, such as image URLs, creator information, copyright details, etc.
                        </li>
                        <li style="margin-bottom: 15px">
                            Set NFT attributes: Customize the NFT attributes in the smart contract, such as whether it's transferable, whether it's limited edition, etc.
                        </li>
                        <li style="margin-bottom: 15px">
                            Implement NFT ownership transfer: Ensure that the smart contract can handle the transfer of NFT ownership, enabling smooth transactions when the NFT is bought or sold.
                        </li>
                        <li style="margin-bottom: 5px">
                            Deploy the smart contract: Deploy the written smart contract to the chosen blockchain platform, such as Ethereum.
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="work-container-2-mobile">
            <div class="zombie-img-mobile2">
                <img src="assets/image/product/web3/2.svg">
            </div>
            <div class="work-container-1-2">
                <div class="mobile-alignment-30px">
                    <p class="step1-p">
                        @lang('public.web 8')
                    </p>
                </div>
                <div class="mobile-alignment-30px">
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 8.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 8.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 8.3')
                        </li>
                        <li style="margin-bottom: 5px">
                            @lang('public.web 8.4')
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="work-container-1">
            <div class="zombie-img-mobile">
                <img src="assets/image/product/web3/3.svg">
            </div>
            <div class="work-container-1-2">
                <div class="mobile-alignment-30px">
                    <p class="step1-p">
                        @lang('public.web 9')
                    </p>
                </div>
                <div class="mobile-alignment-30px">
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 9.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 9.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 9.3')
                        </li>
                        <li style="margin-bottom: 5px">
                            @lang('public.web 9.4')
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="work-container-2-mobile">
            <div class="zombie-img-mobile2">
                <img src="assets/image/product/web3/4.svg">
            </div>
            <div class="work-container-1-2">
                <div class="mobile-alignment-30px">
                    <p class="step1-p">
                        @lang('public.web 10')
                    </p>
                </div>
                <div class="mobile-alignment-30px">
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            @lang('public.web 10.1')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 10.2')
                        </li>
                        <li style="margin-bottom: 15px">
                            @lang('public.web 10.3')
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="work-container-3">
            <div style="display: flex; flex-direction:column;margin-right: 43px">
                <div><p class="step1-p">Step 3</p></div>
                <div>
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            Connect wallet and contract: Link your digital wallet to the deployed smart contract, enabling you to manage and trade your NFTs.
                        </li>
                        <li style="margin-bottom: 15px">
                            Create the NFT: Access an NFT marketplace, choose the "Create NFT" option, upload your digital asset, and provide necessary information. This will trigger the execution of the smart contract, creating your NFT.
                        </li>
                        <li style="margin-bottom: 15px">
                            Set attributes: Customize NFT attributes such as name, description, limited edition, etc.
                        </li>
                        <li style="margin-bottom: 5px">
                            Pay the fees: Cover the fees required for creating the NFT, usually involving some cryptocurrency transaction fees.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="zombie-img3">
                <img src="assets/image/product/web3/goldmonk.svg">
            </div>
        </div> --}}

        {{-- <div class="work-container-4">

            <div class="zombie-img4">
                <img src="assets/image/product/web3/firemonk.svg">
            </div>

            <div style="display: flex; flex-direction:column;">
                <div><p class="step2-p">Step 4</p></div>
                <div>
                    <ul class="step2-p2">
                        <li style="margin-bottom: 15px">
                            Publish the NFT: Once the creation process is complete, your NFT will be published on the blockchain for others to view and purchase.
                        </li>
                        <li style="margin-bottom: 20px">
                            Promote your NFT: Actively promote your NFT through social media and other platforms to attract potential buyers.
                        </li>
                        <li style="margin-bottom: 20px">
                            Handle transactions: If someone shows interest and is willing to buy your NFT, ensure prompt handling of the transaction and transfer the NFT to the buyer's wallet.
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="main-content7">
    <div class="web3-6">
        <div class="mobile-alignment-30px">
            <p class="remark-p">
                <span style="color:#F00">@lang('public.web 10.4')</span>
                <br>
                @lang('public.web 11')
            </p>
        </div>
    </div>

    <div class="web3-7">
        <div class="mobile-alignment-30px">
            <p class="craft-p">
                @lang('public.web 12')
            </p>
            <p class="craft-p-mobile">
                @lang('public.web 12')
            </p>
        </div>
    </div>
    <div class="mobile-alignment-30px">
        <p class="craft-p2">
            @lang('public.web 13')
        </p>
    </div>
    <div class="dashimg">
        <div class="mobile-alignment-30px">
            <img src="assets/image/product/web3/dashboardnew.png">
        </div>
    </div>
</div>

{{-- <div class="web3-marquee" style="margin-top: 88px;">
    <div class="web3-marquee-content"> --}}
    <div class="res">
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple1.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple2.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple3.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple4.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple5.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple6.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple7.svg">
        </div>
        <div class="web3-marquee-item">
            <img src="assets/image/product/web3/purple8.svg">
        </div>
    </div>
{{-- </div> --}}
{{-- <div class="web3-marquee-2">
    <div class="web3-marquee-content-2"> --}}
        <div class="res">
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red1.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red2.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red3.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red4.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red5.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red6.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red7.svg">
        </div>
        <div class="web3-marquee-item-2">
            <img src="assets/image/product/web3/red8.svg">
        </div>
    </div>
{{-- </div> --}}
<div class="main-content7">
    <div class="web3-8">
        <div class="mobile-alignment-30px">
            <p class="create-p">
                @lang('public.web 14')
            </p>
        </div>
    </div>
    <div class="web3-8">
        <div class="mobile-alignment-30px">
            <p class="create-p2">
                @lang('public.web 15')
            </p>
        </div>
    </div>
</div>
<div class="responsive">
    {{-- <div class="web3-marqueee" style="margin-top: 66px;"> --}}
        {{-- <div class="web3-marqueee-content"> --}}
            <div class="web3-marqueee-item">
                <img src="assets/image/product/web3/test.png">
            </div>
            <div class="web3-marqueee-item">
                <img src="assets/image/product/web3/test2.png">
            </div>
            <div class="web3-marqueee-item">
                <img src="assets/image/product/web3/test3.png">
            </div>
            </div>
        {{-- </div> --}}
</div>
<div class="responsive">
    {{-- <div class="web3-marqueee" style="margin-top: 66px;"> --}}
        {{-- <div class="web3-marqueee-content"> --}}
            <div class="web3-marqueee-item-2">
                <img src="assets/image/product/web3/monkey.svg">
            </div>
            <div class="web3-marqueee-item-2">
                <img src="assets/image/product/web3/monkey2.svg">
            </div>
            <div class="web3-marqueee-item-2">
                <img src="assets/image/product/web3/monkey3.svg">
            </div>
        {{-- </div> --}}
</div>

<div class="main-content8">
    <div class="personal-nft-cont">
        <div class="nft-container1-1">
            
            <img src="assets/image/product/web3/test.png">
        </div>
        <div class="nft-container1-2">
           
            <img src="assets/image/product/web3/test2.png">
        </div>
        <div class="nft-container1-3">
            <img src="assets/image/product/web3/test3.png">
        </div>
        <div class="nft-container1-4">
            <img src="assets/image/product/web3/monkey.svg">
        </div>

        <div class="nft-container1-5">
            <img src="assets/image/product/web3/monkey2.svg">
        </div> 

        <div class="nft-container1-6">
            <img src="assets/image/product/web3/monkey3.svg">
        </div>
    </div>
    <div class="main-content7">
        <div class="web3-8">
            <div class="mobile-alignment-30px">
                <p class="create-p">
                    @lang('public.web 16')
                </p>
            </div>
        </div>
        <div class="web3-8" style="margin-bottom:96px">
            <div class="mobile-alignment-30px">
                <p class="create-p2">
                    @lang('public.web 17')
                </p>
            </div>
        </div>
    </div>
</div>

<div class="web3-marquee-3">
    <div class="web3-marquee-content-3">
        <div class="web3-marquee-item-3">
            <img src="assets/image/product/web3/crypto.svg" class="many-icon" style="height:500px">
        </div>
        <div class="web3-marquee-item-3">
            <img src="assets/image/product/web3/crypto.svg" class="many-icon" style="height:500px">
        </div>
    </div>
</div>


<div class="main-content8">
    <div class="joinnow-row">
        <div class="mobile-alignment-30px">
            <div class="join-container">
                <div class="inline-display">
                    <div>
                        <p class="joinworld-p">
                            @lang('public.web 18')
                        </p>
                    </div>
                    <div>
                        <button class="btn-startnow">
                            <a href="{{ route('support') }}" class="explore-link">
                                <span class="startnow-span">@lang('public.web 19')</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.responsive').slick({
            arrows: true,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.res').slick({
            arrows: true,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    });
</script>
@endsection