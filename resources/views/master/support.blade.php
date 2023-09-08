@extends('layouts.master')
@section('content')

<style>
    @media screen and (max-width: 1268px) {
        .support3 {
            width: 100%;
        }
        .support-row1 {
            width: 460px;
        }
        .support-row2 {
            width: 460px;
        }
        .support-row3 {
            width: 460px;
        }
        .support-row4 {
            width: 460px;
        }
        .support-row5 {
            width: 460px;
        }
        .support-row6 {
            width: 460px;
        }
        .sup-row1-cont {
            margin-left: 20px;
        }
    }
</style>

<div class="main-content16">
    <div class="support1">
        <p>
            Contact Us for Inquiries Support, and Collaborations
        </p>
    </div>

    <div class="support2">
        <img src="assets/image/support.png">
    </div>

    <div class="support3">
        <div class="support-col1">
            <div class="support-row1">
                <div class="sup-row1-cont">
                    <label>
                        <input type="radio" name="pos" value="pos_system"> <span >POS System</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="package" value="standard_package"> <span>Standard Package</span>
                    </label>
                    <label>
                        <input type="radio" name="package" value="advance_package"> <span>Advance Package</span>
                    </label>
                </div>
            </div>
            <div class="support-row2">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 310px;">
                        <div>
                            <label>
                                <input type="radio" name="web" value="web"> <span>Web</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="app" value="app"> <span>App</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="website" value="website"> <span>Website Development</span>
                    </label>
                    <label>
                        <input type="radio" name="appdev" value="appdev"> <span>App Development</span>
                    </label>
                    <label>
                        <input type="radio" name="crm" value="crm"> <span>CRM Development</span>
                    </label>
                </div>
            </div>
            <div class="support-row3">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 430px">
                        <div>
                            <label>
                                <input type="radio" name="ctrader" value="ctrader"> <span>cTrader</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="mt5" value="mt5"> <span>Metatrader 5</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="whitelabel" value="whitelabel"> <span>White Label Solutions</span>
                    </label>
                    <label>
                        <input type="radio" name="appdev" value="appdev"> <span>Payment Solutions</span>
                    </label>
                    <label>
                        <input type="radio" name="crmsolu" value="crmsolu"> <span>CRM Solutions</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="support-col2">
            <div class="support-row4">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 430px">
                        <div>
                            <label>
                                <input type="radio" name="prochip" value="prochip"> <span>Pro Chip</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="ultrachip" value="ultrachip"> <span>Ultra Chip</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="medusa" value="medusa"> <span>MEDUSA</span>
                    </label>
                    <label>
                        <input type="radio" name="mercury" value="mercury"> <span>MERCURY</span>
                    </label>
                    <label>
                        <input type="radio" name="ragnarok" value="ragnarok"> <span>RAGNAROK</span>
                    </label>
                </div>
            </div>
            <div class="support-row5">
                <div class="sup-row1-cont">
                    <label class="web3hide">
                        <input type="radio" name="web3" value="web3"> <span >Web 3.0</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="nft" value="nft"> <span>NFT Trading Board</span>
                    </label>
                    <label>
                        <input type="radio" name="crypto" value="crypto"> <span>Cryptocurrency Exchange</span>
                    </label>
                </div>
            </div>
            <div class="support-row6">
                <div class="sup-row1-cont">
                    <div style="display: flex;justify-content: space-between;width: 380px">
                        <div>
                            <label>
                                <input type="radio" name="intern" value="intern"> <span>Internship</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="fulltime" value="fulltime"> <span>Full-Time</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <label>
                        <input type="radio" name="itprogram" value="itprogram"> <span>IT Programmer</span>
                    </label>
                    <label>
                        <input type="radio" name="uiux" value="uiux"> <span>UI / UX Designer</span>
                    </label>
                    <label>
                        <input type="radio" name="market" value="market"> <span>Marketing Designer</span>
                    </label>
                    <label>
                        <input type="radio" name="op" value="op"> <span>Backend Operation</span>
                    </label>
                    <label>
                        <input type="radio" name="sales" value="sales"> <span>Indoor / Outdoor Sales</span>
                    </label>
                    <label>
                        <input type="radio" name="intern" value="intern"> <span>New Intern</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <form>
        <div class="support4">
            <input type="text" class="sup-form-control" placeholder="Full Name">
            <input type="text" class="sup-form-control" placeholder="Contac Number">
            <input type="email" class="sup-form-control" placeholder="Email Address">
            
            <button class="btn-sup-submit">
                <span>Submit</span>
            </button>
        </div>
    </form>
    
</div>

@endsection