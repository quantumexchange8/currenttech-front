<div class="center-top">
    <div class="bar">
        <nav class="nav">
            <ul>
                <li class="nav-img nav-border">
                    <a href="{{ route('home') }}">
                        <img src="/assets/image/currenttechlogo.svg">
                    </a>
                </li>
                <li class="nav-border-items nav-item menu-items {{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'active' : ''}}">
                    <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                        <span class="nav-wording">Products</span>
                    </a>
                    <div class="sub collapse" id="product">
                        <nav class="sub-navi">
                            <ul>
                                <li class="{{ Request::is('possystem') ? 'active' : ''}}" style="width:88px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('possystem') }}">
                                        @if(Route::currentRouteName() === 'possystem')
                                        <img src="assets/image/top/posactive.svg">
                                        <span class="nav-wordingAct">POS System</span>
                                        @else
                                        <img src="assets/image/top/posnoactive.svg">
                                        <span class="nav-wording2">POS System</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="{{ Request::is('webapp') ? 'active' : ''}}" style="width:79px;margin-right:25px;margin-left:25px">
                                    <a href="{{ route('webapp') }}">
                                        @if(Route::currentRouteName() === 'webapp')
                                        <img src="assets/image/top/webappactive.svg">
                                        <span class="nav-wordingAct">Web & App</span>
                                        @else
                                        <img src="assets/image/top/webappnoactive.svg">
                                        <span class="nav-wording2">Web & App</span>
                                        @endif
                                        
                                    </a>
                                </li>
                                <li class="{{ Request::is('brokerage') ? 'active' : ''}}" style="width:124px;margin-right:25px;margin-left:25px">
                                    <a href="{{ route('brokerage') }}">
                                        @if(Route::currentRouteName() === 'brokerage')
                                        <img src="assets/image/top/brokeractive.svg">
                                        <span class="nav-wordingAct">Brokerage Setup</span>
                                        @else
                                        <img src="assets/image/top/brokernoactive.svg">
                                        <span class="nav-wording2">Brokerage Setup</span>
                                        @endif
                                        
                                    </a>
                                </li>
                                <li class="{{ Request::is('expert') ? 'active' : ''}}" style="width:107px;margin-right:25px;margin-left:25px">
                                    <a href="{{ route('expert') }}">
                                        @if(Route::currentRouteName() === 'expert')
                                        <img src="assets/image/top/expertactive.svg">
                                        <span class="nav-wordingAct">Expert Advisor </span>
                                        @else
                                        <img src="assets/image/top/expertnoactive.svg">
                                        <span class="nav-wording2">Expert Advisor </span>
                                        @endif
                                        
                                    </a>
                                </li>
                                <li class="{{ Request::is('web3') ? 'active' : ''}}" style="width:54px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('web3') }} ">
                                        @if(Route::currentRouteName() === 'web3')
                                        <img src="assets/image/top/web3active.svg">
                                        <span class="nav-wordingAct">Web 3.0</span>
                                        @else
                                        <img src="assets/image/top/web3noactive.svg">
                                        <span class="nav-wording2">Web 3.0</span>
                                        @endif
                                        
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </li>
                <li class="nav-border-items nav-item menu-items {{ Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? 'active' : ''}}">
                    <a class="nav-link" data-toggle="collapse" href="#feature" aria-expanded="false" aria-controls="feature">
                        <span class="nav-wording">Features</span>
                    </a>
                    <div class="sub collapse" id="feature">
                        <nav class="sub-navi">
                            <ul>
                                <li class="{{ Request::is('performance') ? 'active' : '' }}" style="width:95px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('performance') }}">
                                        @if(Route::currentRouteName() === 'performance')
                                        <img src="assets/image/top/performactive.svg">
                                        <span class="nav-wordingAct">Performance</span>
                                        @else
                                        <img src="assets/image/top/performnoactive.svg">
                                        <span class="nav-wording2">Performance</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="{{ Request::is('reward') ? 'active' : '' }}" style="width:120px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('reward') }}">
                                        @if(Route::currentRouteName() === 'reward')
                                        <img src="assets/image/top/rewardactive.svg">
                                        <span class="nav-wordingAct">Reward Program</span>
                                        @else
                                        <img src="assets/image/top/rewardicon.svg">
                                        <span class="nav-wording2">Reward Program</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="{{ Request::is('develop') ? 'active' : '' }}" style="width:121px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('develop') }}">
                                        @if(Route::currentRouteName() === 'develop')
                                        <img src="assets/image/top/developactive.svg">
                                        <span class="nav-wordingAct">Develop & Learn</span>
                                        @else
                                        <img src="assets/image/top/developicon.svg">
                                        <span class="nav-wording2">Develop & Learn</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="{{ Request::is('hrmanage') ? 'active' : '' }}" style="width:123px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('hrmanage') }}">
                                        @if(Route::currentRouteName() === 'hrmanage')
                                        <img src="assets/image/top/hractive.svg">
                                        <span class="nav-wordingAct">HR Management </span>
                                        @else
                                        <img src="assets/image/top/hricon.svg">
                                        <span class="nav-wording2">HR Management</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="{{ Request::is('report') ? 'active' : '' }}" style="width:158px;margin-left:25px;margin-right:25px">
                                    <a href="{{ route('report') }}">
                                        @if(Route::currentRouteName() === 'report')
                                        <img src="assets/image/top/reportactive.svg">
                                        <span class="nav-wordingAct">Reporting & Analytics</span>
                                        @else
                                        <img src="assets/image/top/reporticon.svg">
                                        <span class="nav-wording2">Reporting & Analytics</span>
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </li>
                <li class="nav-border-items">
                    <span class="nav-wording">Sectors</span>
                </li>
                <li class="nav-border-items">
                    <span class="nav-wording">Career</span>
                </li>
                <li class="nav-border-setting">
                    <img src="/assets/image/accdetail.svg">
                    <img src="/assets/image/lang.svg">
                    <img src="/assets/image/edit.svg">
                    <img src="/assets/image/login.svg">
                </li>
            </ul>
        </nav>
    </div>
</div>