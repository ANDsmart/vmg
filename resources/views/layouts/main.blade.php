<!DOCTYPE html>
<html data-style-switcher-options="{'colorPrimary': '#0088cc', 'colorSecondary': '#0169fe', 'colorTertiary': '#005AEF', 'colorQuaternary': '#383f48'}">

<!-- Mirrored from preview.oklerthemes.com/porto/8.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 15:43:56 GMT -->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VMG</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->


    <!-- Vendor CSS -->
    {{ Html::style(url('vendor/bootstrap/css/bootstrap.min.css')) }}
    {{ Html::style(url('vendor/fontawesome-free/css/all.min.css')) }}
    {{ Html::style(url('vendor/animate/animate.min.css')) }}
    {{ Html::style(url('vendor/simple-line-icons/css/simple-line-icons.min.css')) }}
    {{ Html::style(url('vendor/owl.carousel/assets/owl.carousel.min.css')) }}
    {{ Html::style(url('vendor/owl.carousel/assets/owl.theme.default.min.css')) }}
    {{ Html::style(url('vendor/magnific-popup/magnific-popup.min.css')) }}

    <!-- Theme CSS -->
    {{ Html::style(url('css/theme.css')) }}
    {{ Html::style(url('css/theme-elements.css')) }}
    {{ Html::style(url('css/theme-blog.css')) }}
    {{ Html::style(url('css/theme-shop.css')) }}
    {{ Html::style(url('vendor/rs-plugin/css/settings.css')) }}
    {{ Html::style(url('vendor/rs-plugin/css/layers.css')) }}
    {{ Html::style(url('vendor/rs-plugin/css/navigation.css')) }}


    <!-- Demo CSS -->
    {{ Html::style(url('css/demos/demo-landing.css')) }}
    {{ Html::style(url('css/demos/demo-business-consulting.css')) }}
    {{ Html::style(url('css/demos/demo-business-consulting-2.css')) }}
    {{ Html::style(url('css/demos/demo-medical.css')) }}

    <!-- Skin CSS -->
{{--    {{ Html::style(url('css/skins/skin-business-consulting.css')) }}--}}

    <link rel="stylesheet" href="">


    <!-- Skin CSS -->
    {{ Html::style(url('css/skins/skin-landing.css')) }}
    {{ Html::script(url('master/style-switcher/style.switcher.localstorage.js')) }}


    <!-- Theme Custom CSS -->
    {{ Html::style(url('css/custom.css')) }}

    <style>

        body  h4, h5,a, p, span, button, input, textarea {

            /*font-family: Open Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif;*/
        }

    </style>

       @yield('after-styles')

       @yield('after-scripts')

    <!-- Head Libs -->
    {{ Html::script(url('vendor/modernizr/modernizr.min.js')) }}

</head>
<body class="alternative-font-4 loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 100}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="body">
    @include('includes.header')
    <div role="main" class="main">
        @yield('content')
    </div>

    @include('includes.footer')
</div>

<!-- Vendor -->
{{ Html::script(url('vendor/jquery/jquery.min.js')) }}
{{ Html::script(url('vendor/jquery.appear/jquery.appear.min.js')) }}
{{ Html::script(url('vendor/jquery.easing/jquery.easing.min.js')) }}
{{ Html::script(url('vendor/jquery.cookie/jquery.cookie.min.js')) }}
{{ Html::script(url('vendor/jquery.cookie/jquery.cookie.min.js')) }}
<script src="{{url('master/style-switcher/style.switcher.js')}}" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>


<script src="{{url('vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('vendor/common/common.min.js')}}"></script>
<script src="{{url('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{url('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{url('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{url('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{url('vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{url('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{url('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{url('vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{url('js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{url('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{url('js/theme.init.js')}}"></script>

<!-- Examples -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42715764-5', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
