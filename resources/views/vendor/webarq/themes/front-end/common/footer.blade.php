<section class="social-section  style-2">
    <div class="container"><!-- section container -->
        <div class="row social-wrap clearfix">
            <div class="col-md-2 col-sm-4 col-xs-12 social-connect pull-left">
                <h5>let's connect</h5>
            </div>
            <div class="col-md-10 col-sm-8 col-xs-12 social-links">
                <ul class="pull-right clearfix">
                    @foreach($socials as $soc)
                    <li class="item">
                        <a class="" href="{{ url($soc->permalink) }}" target="_blank"><i class="fa {{ $soc->icon }}"></i></a>
                    </li><!-- .ITEM -->
                    @endforeach
                </ul>
            </div>
        </div>
    </div><!-- container end -->
</section>

<footer class="footer style-1 padding-top-60 bg222">
    <div class="container">
        <div class="footer-main padding-bottom-10">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                    <div class="footer-widget-title">
                        <h5>ABOUT US</h5>
                    </div>
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset(Wa::config('system.site.footer.logo')) }}" alt="footer logo"></a>
                    </div>
                    <div class="footer-intro">
                        <p>{{ Wa::config('system.site.footer.description') }}</p>
                        <a href="{{ url(Wa::config('system.site.footer.permalink')) }}">{{ Wa::config('system.site.footer.button') }}</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                    <div class="footer-widget-title">
                        <h5>recent posts</h5>
                    </div>
                    <div class="footer-recent-post-widget">
                        <div class="footer-recent-post clearfix">
                            <div class="footer-recent-post-figure">
                                <img src="{{ asset('frontend') }}/images/news/thumb/100/01.jpg" alt="recent post"/>
                            </div>
                            <div class="footer-recent-post-content">
                                <div class="footer-recent-post-title">
                                    <a href="#">Hello Classified Listing</a>
                                </div>
                                <div class="footer-recent-post-disc">
                                    <p>Welcome to listing</p>
                                </div>
                                <div class="footer-recent-post-caption">
                                    <p class="date">07 Sep, 2015</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-recent-post clearfix">
                            <div class="footer-recent-post-figure">
                                <img src="{{ asset('frontend') }}/images/news/thumb/100/01.jpg" alt="recent post"/>
                            </div>
                            <div class="footer-recent-post-content">
                                <div class="footer-recent-post-title">
                                    <a href="#">Hello Classified Listing</a>
                                </div>
                                <div class="footer-recent-post-disc">
                                    <p>Welcome to listing</p>
                                </div>
                                <div class="footer-recent-post-caption">
                                    <p class="date">07 Sep, 2015</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-recent-post clearfix">
                            <div class="footer-recent-post-figure">
                                <img src="{{ asset('frontend') }}/images/news/thumb/100/01.jpg" alt="recent post"/>
                            </div>
                            <div class="footer-recent-post-content">
                                <div class="footer-recent-post-title">
                                    <a href="#">Hello Classified Listing</a>
                                </div>
                                <div class="footer-recent-post-disc">
                                    <p>Welcome to listing</p>
                                </div>
                                <div class="footer-recent-post-caption">
                                    <p class="date">07 Sep, 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                    <div class="footer-widget-title">
                        <h5>Galleries</h5>
                    </div>
                    <div class="footer-flikr-widget">
                        <ul class="flikr-list clearfix">
                            <li><a href="#"><img src="{{ asset('frontend') }}/images/news/flikr/01.jpg" alt="flikr photo"></a></li>
                            <li><a href="#"><img src="{{ asset('frontend') }}/images/news/flikr/02.jpg" alt="flikr photo"></a></li>
                            <li><a href="#"><img src="{{ asset('frontend') }}/images/news/flikr/03.jpg" alt="flikr photo"></a></li>
                            <li><a href="#"><img src="{{ asset('frontend') }}/images/news/flikr/04.jpg" alt="flikr photo"></a></li>
                            <li><a href="#"><img src="{{ asset('frontend') }}/images/news/flikr/05.jpg" alt="flikr photo"></a></li>
                            <li><a href="#"><img src="{{ asset('frontend') }}/images/news/flikr/06.jpg" alt="flikr photo"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container end -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-8 col-sm-12 col-xs-12 pull-right margin-bottom-20">
                    <nav class="footer-menu wsmenu clearfix">
                        <ul class="wsmenu-list pull-right">
                            @foreach(Wa::menu()->footer() as $menu)
                                <li><a href="{{ url($menu->permalink) }}" class="">{{ $menu->title }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 pull-left margin-bottom-20">
                    <div class="footer-copyright">
                        <p>{!! Wa::config('system.site.copyright') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
