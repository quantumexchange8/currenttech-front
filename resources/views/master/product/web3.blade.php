@extends('layouts.master')
@section('content')

<style>
    
    .web3-8 {
        text-align: center;
    }
    .work-container-1-2 {
        display: flex; 
        flex-direction:column;
        margin-right: 43px
    }
    .zombie-img2 {
        margin-right: 50px;
    }
    .zombie-img3 img {
        margin-top: -23px;
    }
    .zombie-img4 img {
        margin-right: 51px;
        margin-top: -23px;
    }
    @media screen and (max-width: 1280px) {
        .web3-7 {
            width: 100%;
            height: auto;
        }
        .web3-7 p {
            width: 100%;
            height: auto;
        }
        .web3-8 {
            width: 100%;
            height: auto;
        }
        .web3-8 p {
            width: 100%;
            height: auto;
        }
        .web3-2 {
            width: 100%;
        }
        .revo-p2 {
            width: 100%;
            font-size: 14px;
        }
        .web3-4 {
            width: 100%;
        }
        .empowering-p2 {
            width: 100%;
            
        }
        .web3-5 {
            width: 100%;
        }
        .step1-p {
            width: 600px;
        }
        .step1-p2 {
            width: 600px;
        }
        .work-container-1 {
            height: auto;
            width: 100%;
        }
        .zombie-img {
            display: flex;
        }
        .zombie-img2 {
            margin-right: 35px;
            display: flex;
        }
        .work-container-1-2 {
            margin-right: 20px;
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
        .zombie-img3 img{
            margin-top: 200px;
        }
        .zombie-img4 img {
            margin-top: 150px;
            margin-right: 10px;
        }
        .craft-p2 {
            width: 100%;
            font-size: 14px;
        }
        .dashimg {
            width: 100%;
        }
        .dashimg img {
            width: 100%;
        }
        .personal-nft-cont {
            width: 100%;
            height: auto;
        }
        .personal-nft-cont2 {
            width: 100%;
            height: auto;
        }
        .remark-p {
            font-size: 7px
        }
        .create-p2 {
            width: 100%;
            height: auto;
            font-size: 13px;
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

<div class="main-content5" style="margin-top:170px;">
    <div class="web3-1">
        <p class="revo-p">
            The Revolution of Web 3.0
        </p>
    </div>
    <div class="web3-2">
        <p class="revo-p2">
            Web 3.0 revolutionizes content with decentralized, user-centric platforms. It empowers 
            creators, ensures data privacy, utilizes blockchain for transparency, and enables immersive 
            experiences through AI, AR, and VR technologies.
        </p>
    </div>
</div>

<div>
    <img src="assets/image/product/web3/alien.svg" style="max-width: 100%; height: auto;width: 100%;">
</div>

<div class="main-content5" style="margin-top: 120px">
    <div class="web3-3">
        <p class="empowering-p">
            Empowering Creativity
            in the Digital Age
        </p>
    </div>

    <div class="web3-4">
        <p class="empowering-p2">
            Embrace limitless possibilities. Embody innovation. Unleash digital tools. Ignite artistic 
            expression. EmPower Creativity in the Digital Age and paint a vibrant canvas of boundless 
            imagination.
        </p>
    </div>
</div>

<div class="main-content6" >
    <div class="web3-5">
        <div>
            <p class="howwork-p">How it works?</p>
        </div>

        <div class="work-container-1">
            <div class="work-container-1-2">
                <div><p class="step1-p">Step 1</p></div>
                <div>
                    <ul class="step1-p2">
                        <li style="margin-bottom: 15px">
                            Choose a blockchain platform: Select a blockchain platform that supports NFTs, such as Ethereum.
                        </li>
                        <li style="margin-bottom: 15px">
                            Create a digital wallet: Set up a digital wallet on the chosen blockchain platform to store and manage your NFTs.
                        </li>
                        <li style="margin-bottom: 15px">
                            Prepare the digital asset: Get your digital asset ready to be turned into an NFT; it can be digital art, music, videos, etc.
                        </li>
                        <li style="margin-bottom: 5px">
                            Write a smart contract: Use a smart contract programming language like Solidity to write a smart contract that will create the NFT. This contract should include the basic attributes of the NFT, such as name, description, owner, etc.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="zombie-img">
                <img src="assets/image/product/web3/zombie1.svg" style="margin-top: -23px;">
            </div>
        </div>
        <div class="work-container-2">
            <div class="zombie-img2">
                <img src="assets/image/product/web3/zombie2.svg" style="margin-top: -23px;">
            </div>
            <div style="display: flex; flex-direction:column">
                <div><p class="step1-p">Step 2</p></div>
                <div>
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
        </div>

        <div class="work-container-3">
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
                <img src="assets/image/product/web3/zombie3.svg">
            </div>
        </div>

        <div class="work-container-4">

            <div class="zombie-img4">
                <img src="assets/image/product/web3/zombie4.svg">
            </div>

            <div style="display: flex; flex-direction:column;">
                <div><p class="step1-p">Step 4</p></div>
                <div>
                    <ul class="step1-p2">
                        <li style="margin-bottom: 20px">
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

            
        </div>
    </div>
</div>

<div class="main-content7">
    <div class="web3-6">
        <p class="remark-p">
            <span style="color:#F00">Remarks:</span>
            <br>
            Creating a smart contract involves advanced technical knowledge and security considerations. If you're a beginner, it's advisable to learn the basics of blockchain and smart contract development before attempting to write one. Also, exercise caution in dealing with security and logic while developing the smart contract to protect your digital assets.
        </p>
    </div>

    <div class="web3-7">
        <p class="craft-p">
            Crafting Digital Experiences for Future
            WEB 3.0
        </p>
    </div>
    <div style="margin-bottom: 50px;">
        <p class="craft-p2">
            Designing cutting-edge NFT-based digital experiences to revolutionize content 
            consumption, ownership, and engagement, shaping the future of the digital art and 
            collectibles landscape.
        </p>
    </div>
    <div class="dashimg">
        <img src="assets/image/product/web3/dashboardnew.png">
    </div>
</div>

<div class="web3-marquee" style="margin-top: 66px;">
    <div class="web3-marquee-content">
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
</div>
<div class="web3-marquee-2">
    <div class="web3-marquee-content-2">
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
</div>
<div class="main-content7">
    <div class="web3-8">
        <p class="create-p">
            Creating Personal NFTs Collection
        </p>
    </div>
    <div class="web3-8" style="margin-bottom:96px">
        <p class="create-p2">
            Transform your artwork or content into blockchain-based NFTs.
            Mint and own one-of-a-kind digital assets. Showcase, sell,
            or trade your personalized creations with the world.
        </p>
    </div>
</div>
<div class="web3-marqueee" style="margin-top: 66px;">
    <div class="web3-marqueee-content">
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
</div>
<div class="web3-marqueee-2">
    <div class="web3-marqueee-content-2">
        <div class="web3-marqueee-item-2">
            <img src="assets/image/product/web3/monkey.svg">
        </div>
        <div class="web3-marqueee-item-2">
            <img src="assets/image/product/web3/monkey2.svg">
        </div>
        <div class="web3-marqueee-item-2">
            <img src="assets/image/product/web3/monkey3.svg">
        </div>
    </div>
</div>
<div class="main-content8">
    <div class="personal-nft-cont">
        <div class="nft-container1-1">
            {{-- <div>
                <img src="assets/image/product/web3/cat.svg">
            </div>
            <div style="display: flex;align-items:center; width:400px">
                <div>
                    <img src="assets/image/product/web3/c.svg">
                </div>
                <div style="display: flex; flex-direction:column;margin-left:20px;width:267px">
                    <div>
                        <p class="nft1-p1"><b>HAPPY #8064</b></p>
                    </div>
                    <div>
                        <p class="nft1-p2">HAPE PRIME</p>
                    </div>
                </div>
                <div>
                    <img src="assets/image/product/web3/iconarrow.svg">
                </div>
            </div>

            <div style="display: flex; justify-content:space-between">
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p">15.8 ETH</p>
                    </div>
                    <div>
                        <p class="bid-p">latest Bid</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p">9.45 ETH</p>
                    </div>
                    <div>
                        <p class="bid-p">from</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p2">$180,345</p>
                    </div>
                    <div>
                        <p class="bid-p2">+12.45</p>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn-collect">
                    <span class="collect-btn">Collect Now</span>
                </button>
            </div> --}}
            <img src="assets/image/product/web3/test.png">
        </div>
        <div class="nft-container1-2">
            {{-- <div>
                <img src="assets/image/product/web3/cow.svg">
            </div>
            <div style="display: flex;align-items:center; width:400px">
                <div>
                    <img src="assets/image/product/web3/c.svg">
                </div>
                <div style="display: flex; flex-direction:column;margin-left:20px;width:267px">
                    <div>
                        <p class="nft1-p1"><b>HAPPY #8064</b></p>
                    </div>
                    <div>
                        <p class="nft1-p2">HAPE PRIME</p>
                    </div>
                </div>
                <div>
                    <img src="assets/image/product/web3/iconarrow.svg">
                </div>
            </div>

            <div style="display: flex; justify-content:space-between">
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p">15.8 ETH</p>
                    </div>
                    <div>
                        <p class="bid-p">latest Bid</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p">9.45 ETH</p>
                    </div>
                    <div>
                        <p class="bid-p">from</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p2">$180,345</p>
                    </div>
                    <div>
                        <p class="bid-p2">+12.45</p>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn-collect">
                    <span class="collect-btn">Collect Now</span>
                </button>
            </div> --}}
            <img src="assets/image/product/web3/test2.png">
        </div>
        <div class="nft-container1-3">
            {{-- <div>
                <img src="assets/image/product/web3/chick.svg">
            </div>
            <div style="display: flex;align-items:center; width:400px">
                <div>
                    <img src="assets/image/product/web3/c.svg">
                </div>
                <div style="display: flex; flex-direction:column;margin-left:20px;width:267px">
                    <div>
                        <p class="nft1-p1"><b>HAPPY #8064</b></p>
                    </div>
                    <div>
                        <p class="nft1-p2">HAPE PRIME</p>
                    </div>
                </div>
                <div>
                    <img src="assets/image/product/web3/iconarrow.svg">
                </div>
            </div>

            <div style="display: flex; justify-content:space-between">
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p">15.8 ETH</p>
                    </div>
                    <div>
                        <p class="bid-p">latest Bid</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p">9.45 ETH</p>
                    </div>
                    <div>
                        <p class="bid-p">from</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;width:130px">
                    <div>
                        <p class="eth-p2">$180,345</p>
                    </div>
                    <div>
                        <p class="bid-p2">+12.45</p>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn-collect">
                    <span class="collect-btn">Collect Now</span>
                </button>
            </div> --}}
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

    {{-- <div class="personal-nft-cont2">
        <div>
            <img src="assets/image/product/web3/monkey.svg" style="margin-right: 25px">
        </div>

        <div>
            <img src="assets/image/product/web3/monkey2.svg" style="margin-right: 25px;margin-left: 25px">
        </div> 

        <div>
            <img src="assets/image/product/web3/monkey3.svg" style="margin-left: 25px">
        </div>
    </div> --}}

    <div class="joinnow-row">
        <div class="join-container">
            <div class="inline-display">
                <div>
                    <p class="joinworld-p">
                        Join the Digital Art World Community
                    </p>
                </div>
                <div>
                    <button class="btn-startnow">
                        <a href="{{ route('support') }}" class="explore-link">
                            <span class="startnow-span">Start Now!</span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection