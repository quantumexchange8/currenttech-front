<div class="blackboard">
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
                    <li class="nav-border-items {{ Route::currentRouteName() === 'sector' ? 'active' : '' }}">
                        <a href="{{ route('sector') }}">
                            <span class="nav-wording">Sectors</span>
                        </a>
                    </li>
                    <li class="nav-border-items {{ Route::currentRouteName() === 'career' ? 'active' : '' }}">
                        <a href="{{ route('career') }}">
                            <span class="nav-wording">Career</span>
                        </a>
                        
                    </li>
                    <li class="nav-border-setting">
                        <a href="{{ route('support') }}">
                            @if(Route::currentRouteName() === 'support')
                                <img src="/assets/image/top/sup.svg">
                            @else
                                <img src="/assets/image/accdetail.svg">
                            @endif
                            
                        </a>
                        <a href="#">
                            <img src="/assets/image/lang.svg">
                        </a>
                        <a href="{{ route('register') }}">
                            <img src="/assets/image/edit.svg">
                        </a>
                        <a href="{{ route('login') }}">
                            <img src="/assets/image/login.svg">
                        </a>
                        
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="small-nav-toggle" onclick="toggleNav()">
    <img src="/assets/image/currenttechlogo.svg">
</div>
<div class="small-nav">
    <nav class="nav2">
        <ul>
            <li class="smallnav-act {{ Request::is('home') ? 'active' : ''}}">
                <a href="{{ route('home') }}" style="{{ Request::is('home') ? 'color: #BD00FF;' : '' }}">Home</a>
            </li>
            <li class="{{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'active' : ''}}">
                <a href="#product" class="mobile-nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="product" onclick="toggleSubMenu('ProductSubMenu', 'ProductIcon', 'FeatureSubMenu', 'FeatureIcon')">
                    <span style="{{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? '; color: #BD00FF' : '' }}">Products</span>
                    <i id="ProductIcon" class="mdi mdi-chevron-down" style="margin-left:158px"></i>
                </a>
                <ul id="ProductSubMenu" style="display: none;margin-left: 30px;">
                    <li class="{{ Request::is('POS-System') ? 'active' : '' }}"><a href="{{ route('possystem') }}"><span style="{{ Request::is('POS-System') ? 'color: #BD00FF;' : '' }}" >POS System</span></a></li>
                    <li class="{{ Request::is('web-app') ? 'active' : '' }}"><a href="{{ route('webapp') }}"><span style="{{ Request::is('web-app') ? 'color: #BD00FF;' : '' }}" >Web & App</span></a></li>
                    <li class="{{ Request::is('broker') ? 'active' : '' }}"><a href="{{ route('brokerage') }}"><span style="{{ Request::is('broker') ? 'color: #BD00FF;' : '' }}">Brokerage Setup</span></a></li>
                    <li class="{{ Request::is('expert-advisor') ? 'active' : '' }}"><a href="{{ route('expert') }}"><span style="{{ Request::is('expert-advisor') ? 'color: #BD00FF;' : '' }}">Expert Advisor</span></a></li>
                    <li class="{{ Request::is('web3') ? 'active' : '' }}"><a href="{{ route('web3') }}"><span style="{{ Request::is('web3') ? 'color: #BD00FF;' : '' }}">Web 3.0</span></a></li>
                </ul>
                
            </li>
            <li class="{{ Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? 'active' : ''}}">
                <a href="#feature" class="mobile-nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="feature" onclick="toggleSubMenu('FeatureSubMenu', 'FeatureIcon', 'ProductSubMenu', 'ProductIcon')">
                    <span style="{{ Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? '; color: #BD00FF' : '' }}">Feature</span>
                    <i id="FeatureIcon" class="mdi mdi-chevron-down" style="margin-left:175px"></i>
                </a>
                <ul id="FeatureSubMenu" style="display: none;margin-left: 30px;">
                    <li class="{{ Request::is('performance') ? 'active' : '' }}"><a href="{{ route('performance') }}"><span style="{{ Request::is('performance') ? 'color: #BD00FF;' : '' }}" >Performance</span></a></li>
                    <li class="{{ Request::is('reward-program') ? 'active' : '' }}"><a href="{{ route('reward') }}"><span style="{{ Request::is('reward-program') ? 'color: #BD00FF;' : '' }}" >Reward Program</span></a></li>
                    <li class="{{ Request::is('develop&learn') ? 'active' : '' }}"><a href="{{ route('develop') }}"><span style="{{ Request::is('develop&learn') ? 'color: #BD00FF;' : '' }}" >Develop & Learn</span></a></li>
                    <li class="{{ Request::is('hr_management') ? 'active' : '' }}"><a href="{{ route('hrmanage') }}"><span style="{{ Request::is('hr_management') ? 'color: #BD00FF;' : '' }}" >HR Management</span></a></li>
                    <li class="{{ Request::is('reporting&Analytics') ? 'active' : '' }}"><a href="{{ route('report') }}"><span style="{{ Request::is('reporting&Analytics') ? 'color: #BD00FF;' : '' }}" >Reporting & Analytics</span></a></li>
                </ul>
            </li>
            
            
            <li class="smallnav-act {{ Request::is('sectors') ? 'active' : ''}}"><a href="{{ route('sector') }}" style="{{ Request::is('sectors') ? 'color: #BD00FF;' : '' }}">Sectors</a></li>
            <li class="smallnav-act {{ Request::is('career') ? 'active' : ''}}"><a href="{{ route('career') }}" style="{{ Request::is('career') ? 'color: #BD00FF;' : '' }}">Career</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </nav>
</div>