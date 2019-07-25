@extends('frontend.layouts.index')
@section('content')
<!--start slide-->
<section class="sectionhome fade-down">
	
	<!--start rev slider-->
    <div class="tp-banner-container">
		<div class="tp-banner tp-banner-full-width" >
			<ul>
                @foreach($sliders as $slider)
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >
                        <img src="{{ asset($slider->image) }}" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                        
                        @if($slider->image_content !== null)
                            <div class="tp-caption lfr"
                                data-x="550"
                                data-y="200"
                                data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="2000"
                                data-start="200"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 3"><img src="{{ asset($slider->image_content) }}" alt="">
                            </div>
                        @endif

                        @if($slider->text_1 !== null)
                            <div class="tp-caption customin customout"
                                data-x="534"
                                data-y="227"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2400"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 3"><img src="{{ asset('frontend') }}/img/rev-slider/1/arrow1.png" alt="">
                            </div>
                        @endif

                        @if($slider->text_2 !== null)
                            <div class="tp-caption customin customout"
                                data-x="453"
                                data-y="302"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2600"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 3"><img src="{{ asset('frontend') }}/img/rev-slider/1/arrow2.png" alt="">
                            </div>
                        @endif

                        @if($slider->text_3 !== null)
                            <div class="tp-caption customin customout"
                                data-x="372"
                                data-y="377"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2800"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 3"><img src="{{ asset('frontend') }}/img/rev-slider/1/arrow3.png" alt="">
                            </div>
                        @endif

                        @if($slider->text_1 !== null)
                            <div class="tp-caption greybgtextslider skewfromleft customout"
                                data-x="220"
                                data-y="220"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="2000"
                                data-start="700"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">{{ $slider->text_1 }}
                            </div>
                        @endif

                        @if($slider->text_2 !== null)
                            <div class="tp-caption greybgtextslider skewfromleft customout"
                                data-x="106"
                                data-y="295"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="2000"
                                data-start="1200"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 9">{{ $slider->text_2 }}
                            </div>
                        @endif

                        @if($slider->text_3 !== null)
                            <div class="tp-caption greybgtextslider skewfromleft customout"
                                data-x="40"
                                data-y="370"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="2000"
                                data-start="1700"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 9">{{ $slider->text_3 }}
                            </div>
                        @endif

                    </li>
                    <!-- SLIDE  -->
				@endforeach
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
    <!--end rev slider-->

    
</section>
<!--end slide--><!--start services-->
<section id="homeservices" class="sectionhome fade-up">

	<!--start container-->
    <div class="container clearfix">
    
        <!--start 1 service-->
        <div class="grid_4 homeservice">
            
            <div class="imgserviceopen">
            	<img alt="" src="img/service/service1open.jpg" />
            </div>
            
            <div class="imgservice">
            	<!--start percentagehome-->
                <div class="percentagehome" data-percent="90">
                    <img alt="" src="img/service/service1.png" />
                </div>
            	<!--end percentagehome-->
            </div>
            
            <h2><a href="#">ADVENTURE</a></h2>
            <p>Lorem ipsum dolor sit amet</p>   
        </div>
        <!--end 1 service-->
        
        <!--start 2 service-->
        <div class="grid_4 homeservice">
            
            <div class="imgserviceopen">
            	<img alt="" src="img/service/service2open.jpg" />
            </div>
            
            <div class="imgservice">
            
            	<!--start percentagehome-->
                <div class="percentagehome" data-percent="80">
                    <img alt="" src="img/service/service2.png" />
                </div>
            	<!--end percentagehome-->
                
            </div>
            
            <h2><a href="#">RELAX</a></h2>
            <p>Lorem ipsum dolor sit amet</p>    
        </div>
        <!--end 2 service-->
        
        <!--start 3 service-->
        <div class="grid_4 homeservice">
            
            <div class="imgserviceopen">
            	<img alt="" src="img/service/service3open.jpg" />
            </div>
            
            <div class="imgservice">
            
            	<!--start percentagehome-->
                <div class="percentagehome" data-percent="70">
                    <img alt="" src="img/service/service3.png" />
                </div>
            	<!--end percentagehome-->
                
            </div>
            
            <h2><a href="#">HONEYMOON</a></h2>
            <p>Lorem ipsum dolor sit amet</p>   
        </div>
        <!--end 3 service-->
    
    </div>
    <!--end container--> 
    
</section>
<!--end services--><div class="divider"><span></span></div>
<!--start promotions-->
<section class="sectionhome" id="homepromotions">

	<!--start container-->
    <div class="container clearfix">
    
        <div class="grid_4">
            <a class="btnpromotion rotate-In-Down-Left animate1" href="#"><p class="blue">LAST MINUTE</p></a>  
        </div>
        
        <div class="grid_4">
            <h1 class="bounce-in animate2">THE BEST PROMOTIONS</h1>
            <h4 class="bounce-in animate3">LOREM IPSUM DOLOR SIT AMET CONSECTEUR ADIP</h4>   
        </div>

        <div class="grid_4">
            <a class="btnpromotion rotate-In-Down-Right animate1" href="#"><p class="green">PROMOTIONS</p></a>    
        </div>
    
    </div>
    <!--end container--> 
    
</section>
<!--end promotions--><div class="divider"><span></span></div>
<!--start homedestinations-->
<section id="homedestinations">

	<!--start container for arrows-->
    <div class="container arrowscarousel yellow clearfix">
        
        <!--start arrows carousel-->
        <div class="grid_6">
            <div id="showbiz_left_2" class="arrowcarouselprev fade-right"></div>
        </div>
        <div class="grid_6">
            <div id="showbiz_right_2" class="arrowcarouselnext fade-left"></div>
        </div>
        <!--end arrows carousel-->
        
    </div>
    <!--end container for arrows-->
    
    <!--start container-->
    <div class="container clearfix showbiz-container">
    
    
    
    	<div class="showbiz" data-left="#showbiz_left_2" data-right="#showbiz_right_2" data-play="#showbiz_play_2">
        	<div class="overflowholder">
            	<ul>
                
                
                	<li>
                    	<!--start destination 1-->
                        <div class="destinationcarousel single-carousel">
                            
                            <img alt="" class="imgdestination" src="img/destinations/destination1.jpg">
                            
                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">
                                
                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="img/destinations/avatar1.jpg">	
                                </div>
                                <!--end avatar-->
                                
                                <!--title-->
                                <p class="titledestination">
                                    <a href="#">Phuket - Thailandia</a>
                                </p>
                                <!--end title-->
                                
                            </div>
                            <!--end avatarandtitle-->
                          
                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                            
                            <div class="infodestination">
                            
                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>
                               
                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>
                                
                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>
                            
                            </div>
                               
                        </div>
                         <!--end destination 1-->
                    </li>
                    
                    
                    <li>
                    	<!--start destination 2-->
                        <div class="destinationcarousel single-carousel">
                            
                            <img alt="" class="imgdestination" src="img/destinations/destination2.jpg">
                            
                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">
                                
                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="img/destinations/avatar2.jpg">	
                                </div>
                                <!--end avatar-->
                                
                                <!--title-->
                                <p class="titledestination">
                                    <a href="#">Venice - Italy</a>
                                </p>
                                <!--end title-->
                                
                            </div>
                            <!--end avatarandtitle-->
                            
                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                            
                            <div class="infodestination">
                            
                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>
                               
                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>
                                
                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>
                            
                            </div>
                               
                        </div>
                        <!--end destination 2-->	
                    </li>
                    
                    
                    <li>
                    	<!--start destination 3-->
                        <div class="destinationcarousel single-carousel">
                            
                            <img alt="" class="imgdestination" src="img/destinations/destination3.jpg">
                            
                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">
                                
                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="img/destinations/avatar3.jpg">	
                                </div>
                                <!--end avatar-->
                                
                                <!--title-->
                                <p class="titledestination">
                                    <a href="#">Temple - Thailand</a>
                                </p>
                                <!--end title-->
                                
                            </div>
                            <!--end avatarandtitle-->
                            
                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                            
                            <div class="infodestination">
                            
                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>
                               
                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>
                                
                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>
                            
                            </div>
                               
                        </div>
                        <!--end destination 3-->	
                    </li>
                    
                    
                    <li>
                    	<!--start destination 4-->
                        <div class="destinationcarousel single-carousel">
                            
                            <img alt="" class="imgdestination" src="img/destinations/destination4.jpg">
                            
                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">
                                
                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="img/destinations/avatar4.jpg">	
                                </div>
                                <!--end avatar-->
                                
                                <!--title-->
                                <p class="titledestination">
                                    <a href="#">Barcelona - Spain</a>
                                </p>
                                <!--end title-->
                                
                            </div>
                            <!--end avatarandtitle-->
                            
                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                            
                            <div class="infodestination">
                            
                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>
                               
                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>
                                
                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>
                            
                            </div>
                               
                        </div>
                        <!--end destination 4-->
                    </li>
                    

                    
                    <li>
                    	<!--start destination 5-->
                        <div class="destinationcarousel single-carousel">
                            
                            <img alt="" class="imgdestination" src="img/destinations/destination1.jpg">
                            
                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">
                                
                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="img/destinations/avatar1.jpg">	
                                </div>
                                <!--end avatar-->
                                
                                <!--title-->
                                <p class="titledestination">
                                    <a href="#">Phuket - Thailandia</a>
                                </p>
                                <!--end title-->
                                
                            </div>
                            <!--end avatarandtitle-->
                            
                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                            
                            <div class="infodestination">
                            
                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>
                               
                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>
                                
                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>
                            
                            </div>
                               
                        </div>
                        <!--end destination 5-->
                    </li>
                    
                    <li>
                    	<!--start destination 6-->
                        <div class="destinationcarousel single-carousel">
                            
                            <img alt="" class="imgdestination" src="img/destinations/destination2.jpg">
                            
                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">
                                
                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="img/destinations/avatar2.jpg">	
                                </div>
                                <!--end avatar-->
                                
                                <!--title-->
                                <p class="titledestination">
                                    <a href="#">Venice - Italy</a>
                                </p>
                                <!--end title-->
                                
                            </div>
                            <!--end avatarandtitle-->
                            
                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                            
                            <div class="infodestination">
                            
                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>
                               
                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>
                                
                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>
                            
                            </div>
                               
                        </div>
                        <!--end destination 6-->
                    </li>
                
                
                </ul>
          	</div>
   		</div>
    
		
    </div>
    <!--end container--> 
    
</section>
<!--end homedestinations--><div class="divider"><span></span></div>
<!--start hometour-->
<section id="hometours">

	<!--start container-->
    <div class="container clearfix">
    
        <div class="grid_12">
        	<div class="titlesection">
            	<h1>AWESOME TOURS</h1>
            	<h4>LOREM IPSUM DOLOR SIT AMET CONSECTEUR ADIP</h4> 
            </div>  
        </div>
        
        <!--start grid-->
        <div class="grid_6">
        
            <!--START HOME TOUR-->
            <div class="hometour hometour-0 blue fade-down animate1">
                
                <!--start tophometour-->
                <div class="tophometour">
                    <div class="titleimghometour">
                        <p class="titlehometour">WEST COAST - USA</p>
                        <img alt="" class="imghometour" src="img/tours/tour1.jpg">
                    </div>
                    <div class="datedescriptionhometour">
                        <div class="datedayhometour">
                            <p class="datehometour">
                                JANUARY - 3 to 17
                            </p>
                            <div class="dayhometour">
                                <p>15</p>
                                <span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptionhometour">
                            <p><strong class="titledescriptionhometour">Title description</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus ultrices purus, volutpat malesuada sapien sollicitudin vitae.</p>
                        </div>	
                    </div>	
                </div>
                <!--end tophometour-->
                
                <!--start bottomhometour-->
                <div class="bottomhometour">
                    
                    <!--start tabs-->
                    <div class="tabshometour">
                    
                        <div class="hometabs"><ul><li><a title="Weather" href="#tabs-1"><img class="iconhometabsdefault" alt="" src="img/tours/weather.png" /><img class="iconhometabsactive" alt="" src="img/tours/weatheractive.png" /></a></li><li><a title="Price" href="#tabs-2"><img class="iconhometabsdefault" alt="" src="img/tours/money.png" /><img class="iconhometabsactive" alt="" src="img/tours/moneyactive.png" /></a></li><li><a title="Gallery" href="#tabs-3"><img class="iconhometabsdefault" alt="" src="img/tours/gallery.png" /><img class="iconhometabsactive" alt="" src="img/tours/galleryactive.png" /></a></li></ul>
                            <div class="contenthometab weatherhometab" id="tabs-1">
                                <img alt="" src="img/tours/weathertour-blue.png" /><p><strong>RAIN 35 C°</strong></p>
                            </div>
                            <div class="contenthometab moneyhometab" id="tabs-2">
                                <img alt="" src="img/tours/moneytour-blue.png" /><p><strong>2.000 $</strong></p>
                            </div>
                            <div class="contenthometab galleryhometab" id="tabs-3">
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="img/tours/gallery1.jpg"><img src="img/tours/gallery1.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="img/tours/gallery2.jpg"><img src="img/tours/gallery2.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="img/tours/gallery3.jpg"><img src="img/tours/gallery3.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="img/tours/gallery4.jpg"><img src="img/tours/gallery4.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="img/tours/gallery5.jpg"><img src="img/tours/gallery5.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="img/tours/gallery6.jpg"><img src="img/tours/gallery6.jpg" alt="" /></a>
                            </div>
                        </div>
                    
                    </div>
                    <!--end tabs-->
                    
                    <!--start listhometour-->
                    <div class="listhometour">
                        <ul>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                        </ul>
                    </div>
                    <!--end listhometour-->
                    
                    <!--start footer hometour-->
                    <div class="footerhometour">
                        
                        <div class="contacthometour">
                            <a href="#">
								<span>
									<img alt="" src="img/tours/contacticon.png">
									CONTACT
								</span>
							</a>
                        </div>
                       
                        <div class="morehometour">
                            <a href="#">
								<span>
									<img alt="" src="img/tours/moreicon.png">
									MORE
								</span>
							</a>
                        </div>
    
                    </div>
                    <!--end footer hometour-->	
                   
                </div>
                <!--end bottomhometour-->
                
            </div>
            <!--END HOME TOUR-->
        
        </div>
        <!--end grid-->
        
        
        <!--start grid-->
        <div class="grid_6">
        
            <!--START HOME TOUR-->
            <div class="hometour hometour-1 green fade-down animate2">
                
                <!--start tophometour-->
                <div class="tophometour">
                    <div class="titleimghometour">
                        <p class="titlehometour">YUCATAN - MEXICO</p>
                        <img alt="" class="imghometour" src="img/tours/tour2.jpg">
                    </div>
                    <div class="datedescriptionhometour">
                        <div class="datedayhometour">
                            <p class="datehometour">
                                JANUARY - 3 to 17
                            </p>
                            <div class="dayhometour">
                                <p>15</p>
                                <span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptionhometour">
                            <p><strong class="titledescriptionhometour">Title description</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus ultrices purus, volutpat malesuada sapien sollicitudin vitae.</p>
                        </div>	
                    </div>	
                </div>
                <!--end tophometour-->
                
                <!--start bottomhometour-->
                <div class="bottomhometour">
                    
                    <!--start tabs-->
                    <div class="tabshometour">
                    
                        <div class="hometabs"><ul><li><a title="Weather" href="#tabs-4"><img class="iconhometabsdefault" alt="" src="img/tours/weather.png" /><img class="iconhometabsactive" alt="" src="img/tours/weatheractive.png" /></a></li><li><a title="Price" href="#tabs-5"><img class="iconhometabsdefault" alt="" src="img/tours/money.png" /><img class="iconhometabsactive" alt="" src="img/tours/moneyactive.png" /></a></li><li><a title="Gallery" href="#tabs-6"><img class="iconhometabsdefault" alt="" src="img/tours/gallery.png" /><img class="iconhometabsactive" alt="" src="img/tours/galleryactive.png" /></a></li></ul>
                            <div class="contenthometab weatherhometab" id="tabs-4">
                                <img alt="" src="img/tours/weathertour-green.png" /><p><strong>CLOUDY 35 C°</strong></p>
                            </div>
                            <div class="contenthometab moneyhometab" id="tabs-5">
                                <img alt="" src="img/tours/moneytour-green.png" /><p><strong>2.500 $</strong></p>
                            </div>
                            <div class="contenthometab galleryhometab" id="tabs-6">
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="img/tours/gallery1.jpg"><img src="img/tours/gallery1.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="img/tours/gallery2.jpg"><img src="img/tours/gallery2.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="img/tours/gallery3.jpg"><img src="img/tours/gallery3.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="img/tours/gallery4.jpg"><img src="img/tours/gallery4.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="img/tours/gallery5.jpg"><img src="img/tours/gallery5.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="img/tours/gallery6.jpg"><img src="img/tours/gallery6.jpg" alt="" /></a>
                            </div>
                        </div>
                    
                    </div>
                    <!--end tabs-->
                    
                    <!--start listhometour-->
                    <div class="listhometour">
                        <ul>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                        </ul>
                    </div>
                    <!--end listhometour-->
                    
                    <!--start footer hometour-->
    
                    <div class="footerhometour">
                        
                        <div class="contacthometour">
                            <a href="#">
								<span>
									<img alt="" src="img/tours/contacticon.png">
									CONTACT
								</span>
							</a>
                        </div>
                       
                        <div class="morehometour">
                            <a href="#">
								<span>
									<img alt="" src="img/tours/moreicon.png">
									MORE
								</span>
							</a>
                        </div>
    
                    </div>
                    <!--end footer hometour-->	
                   
                </div>
                <!--end bottomhometour-->
                
            </div>
            <!--END HOME TOUR-->
        
        </div>
        <!--end grid-->

    
    </div>
    <!--end container--> 
    
</section>
<!--end hometour--><div class="divider"><span></span></div>
<!--start homeclients-->
<section class="sectionhome">

	<!--start container-->
    <div class="container clearfix">
            
        <div class="grid_12">
            <div class="titlesection">
                <h1>TOUR OPERATORS</h1>
                <h4>LOREM IPSUM DOLOR SIT AMET CONSECTEUR ADIP</h4> 
            </div>  
        </div>
       
        <div class="grid_3">
        	<div class="imgclient fade-left animate1">
                <img alt="" src="img/clients/client1.png">    
            </div>
        </div>
        
       	<div class="grid_3">
            <div class="imgclient fade-left animate2">
                <img alt="" src="img/clients/client2.png">     
            </div>
        </div>
        
        <div class="grid_3">
            <div class="imgclient fade-left animate3">
                <img alt="" src="img/clients/client3.png">    
            </div>
        </div>
        
        <div class="grid_3">
            <div class="imgclient fade-left animate4">
                <img alt="" src="img/clients/client4.png">        
            </div>
        </div>
    
    </div>
    <!--end container--> 
    
</section>
<!--end homeclients-->
@endsection