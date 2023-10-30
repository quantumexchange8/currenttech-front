<div class="blackboard">
    <div class="center-top">
        <div class="bar">
            <nav class="nav">
                <ul>
                    <li class="nav-img nav-border">
                        <a href="{{ route('home') }}">
                            <img src="/assets/image/currenttechlogo.svg" style="width: 18px;margin-bottom: 2px;">
                        </a>
                    </li>
                    <li class="nav-border-items nav-item menu-items {{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'active' : ''}}">
                        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                            <span class="nav-wording">Products</span>
                        </a>
                        <div class="sub collapse" id="product" style="display: none;">
                            <nav class="sub-navi">
                                <ul>
                                    <li class="{{ Request::is('possystem') ? 'active' : ''}}">
                                        <a href="{{ route('possystem') }}" style="display: inline-block;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'possystem')
                                                <img src="assets/image/top/posactive.svg" style="vertical-align: middle; margin-right: 6px;width:18.807px;height:16px">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">POS System</span>
                                            @else
                                                <img src="assets/image/top/posnoactive.svg" style="vertical-align: middle; margin-right: 6px;width:18.807px;height:16px">
                                                <span class="nav-wording2" style="vertical-align: middle;">POS System</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('webapp') ? 'active' : ''}}">
                                        <a href="{{ route('webapp') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'webapp')
                                                <img src="assets/image/top/webappactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Web & App</span>
                                            @else
                                                <img src="assets/image/top/webappnoactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wording2" style=" vertical-align: middle;">Web & App</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('brokerage') ? 'active' : ''}}" style=" width:144px">
                                        <a href="{{ route('brokerage') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'brokerage')
                                                <img src="assets/image/top/brokeractive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Brokerage Setup</span>
                                            @else
                                                <img src="assets/image/top/brokernoactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wording2" style=" vertical-align: middle;">Brokerage Setup</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('expert') ? 'active' : ''}}" style=" width:123px">
                                        <a href="{{ route('expert') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'expert')
                                                <img src="assets/image/top/expertactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Expert Advisor</span>
                                            @else
                                                <img src="assets/image/top/expertnoactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wording2" style=" vertical-align: middle;">Expert Advisor</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('web3') ? 'active' : ''}}">
                                        <a href="{{ route('web3') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'web3')
                                                <img src="assets/image/top/web3active.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Web 3.0</span>
                                            @else
                                                <img src="assets/image/top/web3noactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                                <span class="nav-wording2" style="vertical-align: middle;">Web 3.0</span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- style="width:80px;margin-left:15px;margin-right:25px" -->
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="nav-border-items nav-item menu-items {{ Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? 'active' : ''}}">
                        <a class="nav-link" data-toggle="collapse" href="#feature" aria-expanded="false" aria-controls="feature">
                            <span class="nav-wording">Features</span>
                        </a>
                        <div class="sub collapse" id="feature" style="display: none;">
                            <nav class="sub-navi">
                                <ul>
                                    <!-- style="width:95px;margin-left:25px;margin-right:25px" -->
                                    <li class="{{ Request::is('performance') ? 'active' : '' }}">
                                        <a href="{{ route('performance') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'performance')
                                            <img src="assets/image/top/performactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wordingAct">Performance</span>
                                            @else
                                            <img src="assets/image/top/performnoactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wording2">Performance</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('reward') ? 'active' : '' }}">
                                        <a href="{{ route('reward') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'reward')
                                            <img src="assets/image/top/rewardactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wordingAct">Reward Program</span>
                                            @else
                                            <img src="assets/image/top/rewardicon.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wording2">Reward Program</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('develop') ? 'active' : '' }}">
                                        <a href="{{ route('develop') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'develop')
                                            <img src="assets/image/top/developactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wordingAct">Develop & Learn</span>
                                            @else
                                            <img src="assets/image/top/developicon.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wording2">Develop & Learn</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('hrmanage') ? 'active' : '' }}">
                                        <a href="{{ route('hrmanage') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'hrmanage')
                                            <img src="assets/image/top/hractive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wordingAct">HR Management </span>
                                            @else
                                            <img src="assets/image/top/hricon.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wording2">HR Management</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('report') ? 'active' : '' }}">
                                        <a href="{{ route('report') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'report')
                                            <img src="assets/image/top/reportactive.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
                                            <span class="nav-wordingAct">Reporting & Analytics</span>
                                            @else
                                            <img src="assets/image/top/reporticon.svg" style="vertical-align: middle; margin-right: 6px;width:16px;height:16px">
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
                                <img src="/assets/image/top/sup.svg"  style="width: 21px;">
                            @else
                                <img src="/assets/image/accdetail.svg"  style="width: 21px;">
                            @endif
                            
                        </a>
                        <a href="#">
                            <img src="/assets/image/lang.svg"  style="width: 21px;height:18px">
                        </a>
                        {{-- <a href="{{ route('register') }}">
                            <img src="/assets/image/edit.svg">
                        </a>
                        <a href="{{ route('login') }}">
                            <img src="/assets/image/login.svg">
                        </a> --}}
                        
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="small-nav-toggle nav-border-mobile" onclick="toggleNav()">
    <div class="center-image">
        <img src="/assets/image/currenttechlogo.svg" alt="Logo" style="width: 30px; height: 30px;">
    </div>
</div>
<div class="small-nav">
    <nav class="nav2">
        <ul style="margin: 13px 0px;">
            <li class="smallnav-act {{ Request::is('home') ? 'active' : ''}}">
                <a href="{{ route('home') }}" style="{{ Request::is('home') ? 'color: #BD00FF;' : '' }}"
                style="padding-left: 25px;
                padding-top: 26px;
                padding-right: 30px;
                padding-bottom: 13px;"
                >
                    <span>
                        Home
                    </span>
                </a>
            </li>
            <li class="{{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'active' : ''}}">
                <a href="#product" class="mobile-nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="product" onclick="toggleSubMenu('ProductSubMenu', 'ProductIcon', 'FeatureSubMenu', 'FeatureIcon')">
                    <span style="display: inline-block; {{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'color: #BD00FF;' : '' }} width: 80px;">Products</span>
                    {{-- <i id="ProductIcon" class="mdi mdi-chevron-down" style="margin-left: 30px"></i> --}}
                    @if(Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'active' : '')
                        <img src="/assets/image/arrowdown_act.svg" style="margin-left: 32px;">
                    @else
                        <img src="/assets/image/arrowdown.svg" style="margin-left: 32px"> 
                    @endif
                </a>
                <ul id="ProductSubMenu" style="display: none;margin-left: 30px;">
                    <li class="{{ Request::is('possystem') ? 'active' : ''}}" style="margin-left: -30px;">
                        <a href="{{ route('possystem') }}" style="display: inline-block;  white-space: nowrap;">
                            @if(Route::currentRouteName() === 'possystem')
                                <img src="assets/image/top/posactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wordingAct" style="vertical-align: middle;">POS System</span>
                            @else
                                <img src="assets/image/top/posnoactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wording2" style="vertical-align: middle;">POS System</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('webapp') ? 'active' : ''}}" style="margin-left: -30px;">
                        <a href="{{ route('webapp') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                            @if(Route::currentRouteName() === 'webapp')
                                <img src="assets/image/top/webappactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wordingAct" style="vertical-align: middle;">Web & App</span>
                            @else
                                <img src="assets/image/top/webappnoactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wording2" style=" vertical-align: middle;">Web & App</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('brokerage') ? 'active' : ''}}" style="margin-left: -30px;">
                        <a href="{{ route('brokerage') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                            @if(Route::currentRouteName() === 'brokerage')
                                <img src="assets/image/top/brokeractive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wordingAct" style="vertical-align: middle;">Brokerage Setup</span>
                            @else
                                <img src="assets/image/top/brokernoactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wording2" style=" vertical-align: middle;">Brokerage Setup</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('expert') ? 'active' : ''}}" style="margin-left: -30px;">
                        <a href="{{ route('expert') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                            @if(Route::currentRouteName() === 'expert')
                                <img src="assets/image/top/expertactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wordingAct" style="vertical-align: middle;">Expert Advisor</span>
                            @else
                                <img src="assets/image/top/expertnoactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wording2" style=" vertical-align: middle;">Expert Advisor</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('web3') ? 'active' : ''}}" style="margin-left: -30px;">
                        <a href="{{ route('web3') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                            @if(Route::currentRouteName() === 'web3')
                                <img src="assets/image/top/web3active.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wordingAct" style="vertical-align: middle;">Web 3.0</span>
                            @else
                                <img src="assets/image/top/web3noactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                                <span class="nav-wording2" style="vertical-align: middle;">Web 3.0</span>
                            @endif
                        </a>
                    </li>
                    {{-- <li class="{{ Request::is('POS-System') ? 'active' : '' }}"><a href="{{ route('possystem') }}"><span style="{{ Request::is('POS-System') ? 'color: #BD00FF;' : '' }}" >POS System</span></a></li>
                    <li class="{{ Request::is('web-app') ? 'active' : '' }}"><a href="{{ route('webapp') }}"><span style="{{ Request::is('web-app') ? 'color: #BD00FF;' : '' }}" >Web & App</span></a></li>
                    <li class="{{ Request::is('broker') ? 'active' : '' }}"><a href="{{ route('brokerage') }}"><span style="{{ Request::is('broker') ? 'color: #BD00FF;' : '' }}">Brokerage Setup</span></a></li>
                    <li class="{{ Request::is('expert-advisor') ? 'active' : '' }}"><a href="{{ route('expert') }}"><span style="{{ Request::is('expert-advisor') ? 'color: #BD00FF;' : '' }}">Expert Advisor</span></a></li>
                    <li class="{{ Request::is('web3') ? 'active' : '' }}"><a href="{{ route('web3') }}"><span style="{{ Request::is('web3') ? 'color: #BD00FF;' : '' }}">Web 3.0</span></a></li> --}}
                </ul>
                
            </li>
            <li class="{{ Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? 'active' : ''}}">
                <a href="#feature" class="mobile-nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="feature" onclick="toggleSubMenu('FeatureSubMenu', 'FeatureIcon', 'ProductSubMenu', 'ProductIcon')">
                    <span style="display: inline-block; {{ Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? ' color: #BD00FF;' : '' }} width: 90px;">Features</span>
                    @if(Request::is('performance', 'reward-program', 'develop&learn', 'hr_management', 'reporting&Analytics') ? 'active' : '')
                        <img src="/assets/image/arrowdown_act.svg" style="margin-left: 22px">
                    @else
                        <img src="/assets/image/arrowdown.svg" style="margin-left: 22px"> 
                    @endif
                </a>
                <ul id="FeatureSubMenu" style="display: none;margin-left: 30px;">
                    {{-- <li class="{{ Request::is('performance') ? 'active' : '' }}"><a href="{{ route('performance') }}"><span style="{{ Request::is('performance') ? 'color: #BD00FF;' : '' }}" >Performance</span></a></li>
                    <li class="{{ Request::is('reward-program') ? 'active' : '' }}"><a href="{{ route('reward') }}"><span style="{{ Request::is('reward-program') ? 'color: #BD00FF;' : '' }}" >Reward Program</span></a></li>
                    <li class="{{ Request::is('develop&learn') ? 'active' : '' }}"><a href="{{ route('develop') }}"><span style="{{ Request::is('develop&learn') ? 'color: #BD00FF;' : '' }}" >Develop & Learn</span></a></li>
                    <li class="{{ Request::is('hr_management') ? 'active' : '' }}"><a href="{{ route('hrmanage') }}"><span style="{{ Request::is('hr_management') ? 'color: #BD00FF;' : '' }}" >HR Management</span></a></li>
                    <li class="{{ Request::is('reporting&Analytics') ? 'active' : '' }}"><a href="{{ route('report') }}"><span style="{{ Request::is('reporting&Analytics') ? 'color: #BD00FF;' : '' }}" >Reporting & Analytics</span></a></li> --}}

                    <li class="{{ Request::is('performance') ? 'active' : '' }}" style="margin-left: -30px;">
                        <a href="{{ route('performance') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                            @if(Route::currentRouteName() === 'performance')
                            <img src="assets/image/top/performactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wordingAct">Performance</span>
                            @else
                            <img src="assets/image/top/performnoactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wording2">Performance</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('reward') ? 'active' : '' }}" style="margin-left: -30px;">
                        <a href="{{ route('reward') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                            @if(Route::currentRouteName() === 'reward')
                            <img src="assets/image/top/rewardactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wordingAct">Reward Program</span>
                            @else
                            <img src="assets/image/top/rewardicon.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wording2">Reward Program</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('develop') ? 'active' : '' }}" style="margin-left: -30px;">
                        <a href="{{ route('develop') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                            @if(Route::currentRouteName() === 'develop')
                            <img src="assets/image/top/developactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wordingAct">Develop & Learn</span>
                            @else
                            <img src="assets/image/top/developicon.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wording2">Develop & Learn</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('hrmanage') ? 'active' : '' }}" style="margin-left: -30px;">
                        <a href="{{ route('hrmanage') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                            @if(Route::currentRouteName() === 'hrmanage')
                            <img src="assets/image/top/hractive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wordingAct">HR Management </span>
                            @else
                            <img src="assets/image/top/hricon.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wording2">HR Management</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('report') ? 'active' : '' }}" style="margin-left: -30px;">
                        <a href="{{ route('report') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                            @if(Route::currentRouteName() === 'report')
                            <img src="assets/image/top/reportactive.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wordingAct">Report & Analysis</span>
                            @else
                            <img src="assets/image/top/reporticon.svg" style="vertical-align: middle; margin-right: 10px;width:19px;height:19px">
                            <span class="nav-wording2">Report & Analysis</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </li>
            
            
            <li class="smallnav-act {{ Request::is('sectors') ? 'active' : ''}}">
                <a href="{{ route('sector') }}" style="{{ Request::is('sectors') ? 'color: #BD00FF;' : '' }}">
                    Sectors
                </a>
            </li>
            <li class="smallnav-act {{ Request::is('career') ? 'active' : ''}}">
                <a href="{{ route('career') }}" style="{{ Request::is('career') ? 'color: #BD00FF;' : '' }}">
                    Career
                </a>
            </li>
            <li class="smallnav-act {{ Request::is('support') ? 'active' : ''}}">
                <a href="{{ route('support') }}" style="{{ Request::is('support') ? 'color: #BD00FF;' : '' }}">
                    Support
                </a>
            </li>
{{-- 
            <li class="smallnav-act {{ Request::is('login') ? 'active' : ''}} mobile-hidden"><a href="{{ route('login') }}" style="{{ Request::is('login') ? 'color: #BD00FF;' : '' }}">Login</a></li>
            <li class="smallnav-act {{ Request::is('register') ? 'active' : ''}} mobile-hidden"><a href="{{ route('register') }}" style="{{ Request::is('register') ? 'color: #BD00FF;' : '' }}">Register</a></li> --}}

            <li>
                <a href="#language" class="mobile-nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="feature" onclick="toggleSubMenu('FeatureSubMenu', 'FeatureIcon', 'ProductSubMenu', 'ProductIcon')">
                    {{-- <a href="#" class="mobile-nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="product" onclick="toggleSubMenu('ProductSubMenu', 'ProductIcon', 'FeatureSubMenu', 'FeatureIcon')"> --}}
                    <span style="display:inline-block;color: #FFFFFF;width:90px">Language</span>
                    <img src="/assets/image/arrowdown.svg" style="margin-left: 22px"> 
                </a>
                <ul id="#language" style="display: none;margin-left: 30px;">
                    <li class=""><a href="#"><span class="lang-word" style="color: #FFFFFF" >English</span></a></li>
                    <li class=""><a href="#"><span class="lang-word" style="color: #FFFFFF" >Bahasa Malaysia</span></a></li>
                    <li class=""><a href="#"><span class="lang-word" style="color: #FFFFFF">Chinese (S)</span></a></li>
                </ul>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
    </nav>
</div>