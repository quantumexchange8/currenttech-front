<div class="blackboard">
    <div class="center-top">
        <div class="bar">
            <nav class="nav">
                <ul>
                    <li class="nav-img nav-border">
                        <a href="{{ route('home') }}">
                            <img src="/assets/image/currenttechlogo.svg" style="width: 25px;">
                        </a>
                    </li>
                    <li class="nav-border-items nav-item menu-items {{ Request::is('POS-System', 'web-app', 'broker', 'expert-advisor', 'web3') ? 'active' : ''}}">
                        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                            <span class="nav-wording">Products</span>
                        </a>
                        <div class="sub collapse" id="product" style="height: auto;">
                            <nav class="sub-navi">
                                <ul>
                                    <li class="{{ Request::is('possystem') ? 'active' : ''}}">
                                        <a href="{{ route('possystem') }}" style="display: inline-block;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'possystem')
                                                <img src="assets/image/top/posactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">POS System</span>
                                            @else
                                                <img src="assets/image/top/posnoactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wording2" style="vertical-align: middle;">POS System</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('webapp') ? 'active' : ''}}">
                                        <a href="{{ route('webapp') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'webapp')
                                                <img src="assets/image/top/webappactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Web & App</span>
                                            @else
                                                <img src="assets/image/top/webappnoactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wording2" style=" vertical-align: middle;">Web & App</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('brokerage') ? 'active' : ''}}">
                                        <a href="{{ route('brokerage') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'brokerage')
                                                <img src="assets/image/top/brokeractive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Brokerage Setup</span>
                                            @else
                                                <img src="assets/image/top/brokernoactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wording2" style=" vertical-align: middle;">Brokerage Setup</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('expert') ? 'active' : ''}}">
                                        <a href="{{ route('expert') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'expert')
                                                <img src="assets/image/top/expertactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Expert Advisor</span>
                                            @else
                                                <img src="assets/image/top/expertnoactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wording2" style=" vertical-align: middle;">Expert Advisor</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('web3') ? 'active' : ''}}">
                                        <a href="{{ route('web3') }}" style="display: inline-block; vertical-align: middle;  white-space: nowrap;">
                                            @if(Route::currentRouteName() === 'web3')
                                                <img src="assets/image/top/web3active.svg" style="vertical-align: middle; margin-right: 10px;">
                                                <span class="nav-wordingAct" style="vertical-align: middle;">Web 3.0</span>
                                            @else
                                                <img src="assets/image/top/web3noactive.svg" style="vertical-align: middle; margin-right: 10px;">
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
                        <div class="sub collapse" id="feature"  style="height: auto;">
                            <nav class="sub-navi">
                                <ul>
                                    <!-- style="width:95px;margin-left:25px;margin-right:25px" -->
                                    <li class="{{ Request::is('performance') ? 'active' : '' }}">
                                        <a href="{{ route('performance') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;"">
                                            @if(Route::currentRouteName() === 'performance')
                                            <img src="assets/image/top/performactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wordingAct">Performance</span>
                                            @else
                                            <img src="assets/image/top/performnoactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wording2">Performance</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('reward') ? 'active' : '' }}">
                                        <a href="{{ route('reward') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;"">
                                            @if(Route::currentRouteName() === 'reward')
                                            <img src="assets/image/top/rewardactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wordingAct">Reward Program</span>
                                            @else
                                            <img src="assets/image/top/rewardicon.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wording2">Reward Program</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('develop') ? 'active' : '' }}">
                                        <a href="{{ route('develop') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;"">
                                            @if(Route::currentRouteName() === 'develop')
                                            <img src="assets/image/top/developactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wordingAct">Develop & Learn</span>
                                            @else
                                            <img src="assets/image/top/developicon.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wording2">Develop & Learn</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('hrmanage') ? 'active' : '' }}">
                                        <a href="{{ route('hrmanage') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;"">
                                            @if(Route::currentRouteName() === 'hrmanage')
                                            <img src="assets/image/top/hractive.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wordingAct">HR Management </span>
                                            @else
                                            <img src="assets/image/top/hricon.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wording2">HR Management</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('report') ? 'active' : '' }}">
                                        <a href="{{ route('report') }}" style="display: inline-block; vertical-align: middle; white-space: nowrap;"">
                                            @if(Route::currentRouteName() === 'report')
                                            <img src="assets/image/top/reportactive.svg" style="vertical-align: middle; margin-right: 10px;">
                                            <span class="nav-wordingAct">Reporting & Analytics</span>
                                            @else
                                            <img src="assets/image/top/reporticon.svg" style="vertical-align: middle; margin-right: 10px;">
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
                                <img src="/assets/image/top/sup.svg"  style="width: 25px;">
                            @else
                                <img src="/assets/image/accdetail.svg"  style="width: 25px;">
                            @endif
                            
                        </a>
                        <a href="#">
                            <img src="/assets/image/lang.svg"  style="width: 25px;">
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

            <li class="smallnav-act {{ Request::is('support') ? 'active' : ''}}"><a href="{{ route('support') }}" style="{{ Request::is('support') ? 'color: #BD00FF;' : '' }}">Support</a></li>

            <li class="smallnav-act {{ Request::is('login') ? 'active' : ''}}"><a href="{{ route('login') }}" style="{{ Request::is('login') ? 'color: #BD00FF;' : '' }}">Login</a></li>
            <li class="smallnav-act {{ Request::is('register') ? 'active' : ''}}"><a href="{{ route('register') }}" style="{{ Request::is('register') ? 'color: #BD00FF;' : '' }}">Register</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </nav>
</div>