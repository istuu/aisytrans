<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="user-scalable = yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('meta-description', $metaDescription )">
	<meta name="keywords" content="Travel, Vacation, Packet">
	<meta name="author" content="Danang Istu Nugroho">

	<title>@yield('meta-title', $metaTitle )</title>

    <!--================================FAVICON================================-->
    <link rel="shortcut icon" type="images/x-icon" href="{{ URL::asset(Wa::config('system.favicon')) }}"/>


    <!-- Enable/Disabled browser system cache -->
    @if (1 === (int) Wa::config('system.site.cache'))
        <meta http-equiv="cache-control" content="max-age=0"/>
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="expires" content="0"/>
        <meta http-equiv="expires" content="{{ date('D, d M Y H:i:s e') }}"/>
        <meta http-equiv="pragma" content="no-cache"/>
    @endif

    <!--================================BOOTSTRAP STYLE SHEETS================================-->

	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/bootstrap/css/bootstrap.min.css">

    <!--================================ Main STYLE SHEETs====================================-->

	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/menu.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/color/color.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/responsive.css">

	<!--================================FONTAWESOME==========================================-->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/font-awesome.css">

	<!--================================GOOGLE FONTS=========================================-->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>

	<!--================================SLIDER REVOLUTION =========================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/revolution_slider/css/revslider.css" media="screen" />

    @stack('view-style')

</head>
<body>
    <div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
        <!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="{{ asset('frontend') }}/images/logo.png" width="120" alt="" /></a>
		</div>

        {!! Wa::getThemesView($shareThemes, 'common.header') !!}
        @yield('content')

        @if(Wa::menu()->getActive()->template == 'contact')
            {!! Wa::getThemesView($shareThemes, 'common.contact') !!}
        @endif

        {!! Wa::getThemesView($shareThemes, 'common.footer') !!}
    </div>

    <!--================================JQuery===========================================-->

	<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-1.11.3.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="{{ asset('frontend') }}/js/jquery.easing.min.js"></script>
	<script src="{{ asset('frontend') }}/js/modernizr.custom.js"></script>

	<!--================================BOOTSTRAP===========================================-->

	<script src="{{ asset('frontend') }}/bootstrap/js/bootstrap.min.js"></script>

	<!--================================NAVIGATION===========================================-->

	<script type="text/javascript" src="{{ asset('frontend') }}/js/menu.js"></script>

	<!--================================SLIDER REVOLUTION===========================================-->

	<script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="{{ asset('frontend') }}/assets/revolution_slider/js/revolution-slider.js"></script>

	<!--================================OWL CARESOUL=============================================-->

	<script src="{{ asset('frontend') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('frontend') }}/js/triger.js" type="text/javascript"></script>

	<!--================================FunFacts Counter===========================================-->

	<script src="{{ asset('frontend') }}/js/jquery.countTo.js"></script>

	<!--================================jquery cycle2=============================================-->

	<script src="{{ asset('frontend') }}/js/jquery.cycle2.min.js" type="text/javascript"></script>

	<!--================================waypoint===========================================-->

	<!-- <script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->

	<!--================================RATINGS===========================================-->

	<script src="{{ asset('frontend') }}/js/jquery.raty-fa.js"></script>
	<script src="{{ asset('frontend') }}/js/rate.js"></script>

	<!--================================ testimonial ===========================================-->
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">

			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>
	<script type="text/javascript" src="{{ asset('frontend') }}/assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="{{ asset('frontend') }}/assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="{{ asset('frontend') }}/assets/testimonial/js/gallery.js"></script>

	<!--================================custom script===========================================-->

	<script type="text/javascript" src="{{ asset('frontend') }}/js/custom.js"></script>
    @stack('view-script')
</body>
</html>
