<div class="center-top">
    <div class="bar">
        <nav class="nav">
            <ul>
                <li class="nav-img nav-border">
                    <a href="{{ route('home') }}">
                        <img src="/assets/image/currenttechlogo.svg">
                    </a>
                </li>
                <li class="nav-border-items nav-item menu-items {{ Request::is('possystem', 'webapp', 'brokerage', 'expert', 'web3') ? 'active' : ''}}">
                    <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                        <span class="nav-wording">Products</span>
                    </a>
                    <div class="sub collapse" id="product">
                        <nav class="sub-navi">
                            <ul>
                                <li class="{{ Request::is('possystem') ? 'active' : ''}}">
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
                                <li class="{{ Request::is('webapp') ? 'active' : ''}}">
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
                                <li class="{{ Request::is('brokerage') ? 'active' : ''}}">
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
                                <li class="{{ Request::is('expert') ? 'active' : ''}}">
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
                                <li class="{{ Request::is('web3') ? 'active' : ''}}">
                                    <a href="{{ route('web3') }} ">
                                        @if(Route::currentRouteName() === 'expert')
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
                <li class="nav-border-items">
                    <span class="nav-wording">Features</span>
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