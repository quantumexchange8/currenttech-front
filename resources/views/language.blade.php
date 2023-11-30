<!-- Include Bootstrap CSS and JS in your HTML -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="dropdown">
    <a href="#" role="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="/assets/image/lang.svg" style="width: 21px; height: 18px;">
    </a>
    <div class="dropdown-menu" aria-labelledby="languageDropdown">
        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">@lang('public.language 1')</a>
        <a class="dropdown-item" href="{{ route('lang.switch', 'my') }}">@lang('public.language 2')</a>
        <a class="dropdown-item" href="{{ route('lang.switch', 'zh') }}">@lang('public.language 3')</a>
    </div>
</div>

