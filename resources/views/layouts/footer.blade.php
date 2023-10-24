<footer class="footer-desc">
    <div class="center-footer">
        <div class="desc-content">

            <div class="desc-content-row1">
                <div class="desc-content-col1">
                    <img src="/assets/image/currenttechlogo2.svg" style="border-radius: 0px">
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="ft-desc">
                        Current Tech Industries is a leading technology<br>
                        solutions development provider.<br>
                        Founded in 2006, with a primary focus on technology development and distribution, the company is dedicated to driving innovative solutions for digital transformation. By offering cutting-edge IT solutions,<br>
                        Current Tech Industries aims to meet the diverse needs of its partners and customers.
                    </p>
                    <br>
                    <br>
                    <p class="ft-copyright">
                        Copyright ©
                        Current Tech Industries 2023. All rights reserved.
                    </p>
                </div>
            </div>

            <div class="desc-content-row2-main">
                <div class="desc-content-col2">
                    <b style="font-size: 14px;color: #FFF;font-family: SF Pro Text;">Products</b>
                    <br>
                    <br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('possystem') }}">POS System</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('webapp') }}">Web & App</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('brokerage') }}">Brokerage Setup</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('expert') }}">Expert Advisor</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('web3') }}">Web 3.0</a><br>
                </div>

                <div class="desc-content-col3">
                    <b style="font-size: 14px;color: #FFF;font-family: SF Pro Text;">Features</b>
                    <br>
                    <br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('performance') }}">Performance</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('reward') }}">Reward Program</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('develop') }}">Develop & Learn</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('hrmanage') }}">HR Management</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('report') }}">Reporting & Analytics</a><br>
                </div>

                <div class="desc-content-col4">
                    <b style="font-size: 14px;color: #FFF;font-family: SF Pro Text;">Sectors</b>
                    <br>
                    <br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">Retails & Service</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">Food & Beverage</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">Logistic</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">Wholesale</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">Automotive</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">Education</a><br>
                </div>
            </div>

            <div class="desc-content-row3-main">
                <div class="desc-content-col5">
                    <div class="desc-content-row2">
                        <div class="desc-content-col6">
                            <p>Subscribe to our newsletter</p>
                            <form method="POST" action="{{ route('subscribe') }}">
                                @csrf
                                <div class="input-group" style="position: relative;">
                                    <input type="email" name="email" class="form-control-email" placeholder="Your Email" required>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary" style="position: absolute;right: 10px;top: 17px;background: transparent;border: none;">
                                            <img src="assets/image/home/envelope.svg" alt="Subscribe" style="transform: translateY(-50%);">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if(session('error'))
                        <div class="alert alert-success custom-success">
                            {{ session('error') }}
                        </div><br><br>
                        @endif
                        @if(session('success'))
                        <div class="alert alert-success custom-success">
                            {{ session('success') }}
                        </div><br><br>
                        @endif
                        <div class="desc-content-col7">
                            <p>Connect with us</p>
                            <br>
                            <div class="social-row">
                                <div class="social-item1">
                                    <a style="height: 14px" href="https://www.facebook.com/currenttechindustries">
                                        <img src="/assets/image/social/facebook.svg" style="width:14px; height:14px">
                                    </a>
                                </div>
                                <div class="social-item1">
                                    <a style="height: 14px" href="https://instagram.com/currenttechindustries?">
                                        <img src="/assets/image/social/ig.svg" style="width:14px; height:14px">
                                    </a>
                                </div>
                                <div class="social-item1">
                                    <a style="height: 14px" href="https://www.linkedin.com/company/currenttechindustries/">
                                        <img src="/assets/image/social/linkedin.svg" style="width:14px; height:14px">
                                    </a>
                                </div>
                                <div class="social-item1">
                                    <a style="height: 14px">
                                        <img src="/assets/image/social/ws.svg" style="width:14px; height:14px">
                                    </a>
                                </div>
                                <div class="social-item1">
                                    <a style="height: 14px">
                                        <img src="/assets/image/social/telegram.svg" style="width:14px; height:14px">
                                    </a>
                                </div>
                                <div class="social-item1">
                                    <a style="height: 14px">
                                        <img src="/assets/image/social/w7.svg" style="width:14px; height:14px">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="desc-content-col8">
                            <div class="abtus">
                                <a href="{{ route('support') }}" style="text-decoration: none;">
                                    <p>About Career</p>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>