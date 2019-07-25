<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
 
    <meta charset="utf-8">  
    
    <title>Love Travel</title> <!--insert your title here-->  
    <meta name="description" content="Love Travel HTML5 version"> <!--insert your description here-->  
    <meta name="author" content="nicDark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
  	<!--START CSS--> 
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css"> <!--main-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/grid.css"> <!--grid-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css"> <!--responsive-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/rs-plugin/css/settings.css" media="screen" /> <!--rev slider-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/showbizpro/css/settings.css" media="screen" /> <!--showbiz-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css"> <!--animate-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/superfish.css" media="screen"> <!--menu-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fancybox/jquery.fancybox.css"> <!--main fancybox-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fancybox/jquery.fancybox-thumbs.css"> <!--fancybox thumbs-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/isotope.css"> <!--isotope-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/flexslider.css"> <!--flexslider-->
    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend') }}/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend') }}/img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->
    
    
</head>  
<body id="startpage">

    @include('frontend.includes.aside')
    @include('frontend.includes.header')

    @yield('content')

    <div class="divider"><span></span></div>
    @include('frontend.includes.footer')
	<!--Start js-->    
    <script src="{{ asset('frontend') }}/js/jquery.min.js"></script> <!--Jquery-->
    <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="{{ asset('frontend') }}/js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="{{ asset('frontend') }}/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!--rev slider-->
    <script src="{{ asset('frontend') }}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!--rev slider-->
    <script type="text/javascript" src="{{ asset('frontend') }}/showbizpro/js/jquery.themepunch.plugins.min.js"></script> <!--showbiz-->						
	<script type="text/javascript" src="{{ asset('frontend') }}/showbizpro/js/jquery.themepunch.showbizpro.min.js"></script> <!--showbiz-->
    <script src="{{ asset('frontend') }}/{{ asset('frontend') }}/js/scroolto.js"></script> <!--Scrool To-->
    <script src="{{ asset('frontend') }}/js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="{{ asset('frontend') }}/js/jquery.easy-pie-chart.js"></script> <!--Chart-->
    <script src="{{ asset('frontend') }}/js/fancybox/jquery.fancybox.js"></script> <!--main fancybox-->
    <script src="{{ asset('frontend') }}/js/fancybox/jquery.fancybox-thumbs.js"></script> <!--fancybox thumbs-->
    <script src="{{ asset('frontend') }}/js/jquery.inview.min.js"></script> <!--inview-->
	<script src="{{ asset('frontend') }}/js/menu/hoverIntent.js"></script> <!--superfish-->
	<script src="{{ asset('frontend') }}/js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="{{ asset('frontend') }}/js/menu/tinynav.min.js"></script> <!--tinynav-->
	<script src="{{ asset('frontend') }}/js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
    <script src="{{ asset('frontend') }}/js/settings.js"></script> <!--settings-->
    <!--End js-->
	
	<script type='text/javascript'>
		/* <![CDATA[ */
		
		
		//start carousel
		jQuery(document).ready(function() {

			jQuery('.showbiz-container').showbizpro({
				dragAndScroll:"on",
				visibleElementsArray:[4,3,2,1]
			});
		   
		});
		//end carousel
		
		
		//start revolution slider
		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner-full-width').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:650,
					hideThumbs:10,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready
		//end revolution slider
		
		
		//start chart
		$(document).ready(function(){
						
			$('.percentagehome').easyPieChart({
				size: 140,
				rotate: 0,
				lineWidth: 10,
				animate: 1000,
				barColor: '#55738F',
				trackColor: 'transparent',
				scaleColor: false,
				lineCap: 'butt',
			});

		});
		//end chart
		
		//start tour
		$(document).ready(function(){

			var qnthometour = $('.hometour').length;
			
			
			setInterval(function(){
				
				i=0;
				
				while ( i < qnthometour ){

					//title and img hometours height
					var titleimghometourheight = $(".hometour-"+i+" .titleimghometour").height();
					var datedayhometourheight = $(".hometour-"+i+" .datedayhometour").height();
			
					$(".hometour-"+i+" .descriptionhometour").css({
					  "height": titleimghometourheight - datedayhometourheight
					});	
	
					//tabshometourheight
					var tabshometourheight = $(".hometour-"+i+" .tabshometour").height();
					var footerhometourheight = $(".hometour-"+i+" .footerhometour").height();
			
					$(".hometour-"+i+" .listhometour").css({
					  "height": tabshometourheight - footerhometourheight
					});
					
					i++;	
				}
			
			}, 0);
			
		});
		//end tour
		
		
		//start tab and tooltip
		$(document).ready(function() {
			$(".hometabs").tabs();
			$( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
		});
		//end tab and tooltip
		
		
		//start scroll
		$(document).ready(function() {
			//description hometour
			$(".descriptionhometour").niceScroll({
				touchbehavior:false,
				cursorcolor:"#EBEEF2",
				cursoropacitymax:0.9,
				cursorwidth:3,
				autohidemode:true,
				cursorborder:"0px solid #2848BE",
				cursorborderradius:"0px"
				
			});
			
			//list home tour
			$(".listhometour, .listarchivedestination").niceScroll({
				touchbehavior:true,
				cursorcolor:"#EBEEF2",
				cursoropacitymax:0.9,
				cursorwidth:3,
				autohidemode:true,
				cursorborder:"0px solid #2848BE",
				cursorborderradius:"0px"
				
			});
		});
		//end scroll
		
		
		//start fancybox
		$(document).ready(function(){
						
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : true,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
			
		});
		//end fancybox
		
		
		/* ]]> */
	</script>
	
    
</body>  
</html>