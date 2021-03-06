@inject('moduleSvc', 'App\Services\ModuleService')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

    <title>@yield('title') - {!! config('app.name') !!}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <link href="{!! public_asset('/assets/frontend/css/bootstrap.min.css') !!}" rel="stylesheet"/>
    <link href="{!! public_asset('/assets/frontend/css/now-ui-kit.css') !!}" rel="stylesheet"/>
    <link href="{!! public_asset('/assets/system/css/vendor.css') !!}" rel="stylesheet"/>
    <link href="{!! public_asset('/assets/frontend/css/styles.css') !!}" rel="stylesheet"/>

    @yield('css')

    <script>
    @if (Auth::user())
        const PHPVMS_USER_API_KEY = "{!! Auth::user()->api_key !!}";
    @else
        const PHPVMS_USER_API_KEY = false;
    @endif
    </script>

</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-toggleable-md" style="background: #067ec1;">
    <div class="container" style="width: 85%!important;">
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <p class="navbar-brand text-white" data-placement="bottom" target="_blank">
                <a href="{!! url('/') !!}">
                    <img src="{!! public_asset('/assets/frontend/img/logo_blue_bg.svg') !!}" width="135px" style=""/>
                </a>
            </p>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            @include("layouts.${SKIN_NAME}.nav")
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="clearfix" style="height: 25px;"></div>
<div class="wrapper">
    <div class="clear"></div>
    <div class="container-fluid" style="width: 85%!important;">
        @include("layouts.${SKIN_NAME}.flash.message")
        @yield('content')
    </div>
    <div class="clearfix" style="height: 200px;"></div>

    <footer class="footer footer-default">
        <div class="container">
            <div class="copyright">
                powered by <a href="http://www.phpvms.net" target="_blank">phpvms</a>
            </div>
        </div>
    </footer>
</div>

<script src="{!! public_asset('/assets/system/js/vendor.js') !!}?v={!! time() !!}"></script>
<script src="{!! public_asset('/assets/system/js/system.js') !!}?v={!! time() !!}"></script>

<script>
$(document).ready(function () {
    $(".select2").select2();
});
</script>

@yield('scripts')

</body>
</html>
