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
                        @lang('public.footer 1')
                    </p>
                    <br>
                    <br>
                    <p class="ft-copyright">
                        @lang('public.footer 2')
                    </p>
                </div>
            </div>

            <div class="desc-content-row2-main">
                <div class="desc-content-col2">
                    <b style="font-size: 14px;color: #FFF;font-family: SF Pro Text;">@lang('public.footer 3')</b>
                    <br>
                    <br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('possystem') }}">@lang('public.footer 3.1')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('webapp') }}">@lang('public.footer 3.2')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('brokerage') }}">@lang('public.footer 3.3')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('expert') }}">@lang('public.footer 3.4')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('web3') }}">@lang('public.footer 3.5')</a><br>
                </div>

                <div class="desc-content-col3">
                    <b style="font-size: 14px;color: #FFF;font-family: SF Pro Text;">@lang('public.footer 4')</b>
                    <br>
                    <br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('performance') }}">@lang('public.footer 4.1')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('reward') }}">@lang('public.footer 4.2')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('develop') }}">@lang('public.footer 4.3')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('hrmanage') }}">@lang('public.footer 4.4')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('report') }}">@lang('public.footer 4.5')</a><br>
                </div>

                <div class="desc-content-col4">
                    <b style="font-size: 14px;color: #FFF;font-family: SF Pro Text;">@lang('public.footer 5')</b>
                    <br>
                    <br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">@lang('public.footer 5.1')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">@lang('public.footer 5.2')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">@lang('public.footer 5.3')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">@lang('public.footer 5.4')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">@lang('public.footer 5.5')</a><br>
                    <a class="explore-link" style="font-size: 12px;" href="{{ route('sector') }}">@lang('public.footer 5.6')</a><br>
                </div>
            </div>

            <div class="desc-content-row3-main">
                <div class="desc-content-col5">
                    <div class="desc-content-row2">
                        <div class="desc-content-col6">
                            <p>@lang('public.footer 6')</p>
                            <form method="POST" action="{{ route('subscribe') }}">
                                @csrf
                                <div class="input-group" style="position: relative;">
                                    <input type="email" name="email" class="form-control-email" placeholder="{{ __('public.footer 7') }}" required>
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
                            <p>@lang('public.footer 8')</p>
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
                                    <p>@lang('public.footer 9')</p>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>