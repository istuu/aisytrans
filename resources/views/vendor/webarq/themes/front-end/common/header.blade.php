<div class="header">
    <div class="top-toolbar"><!--header toolbar-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                    <div class="social-content">
                        <ul class="social-links">
                            @foreach($socials as $soc)
                                <li><a class="facebook" href="{{ url($soc->permalink) }}" target="_blank"><i class="fa {{ $soc->icon }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                    <div class="top-contact-info">
                        <ul>
                            <li class="toolbar-email"><i class="fa fa-envelope-o"></i> {{ Wa::config('system.site.email') }}</li>
                            <li class="toolbar-contact"><i class="fa fa-phone"></i> {{ Wa::config('system.site.phone') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--header toolbar end-->
    <div class="nav-wrapper"><!--main navigation-->
        <div class="container">
            <!--Main Menu HTML Code-->
            <nav class="wsmenu slideLeft clearfix">
                <div class="logo pull-left"><a href="{{ url('/') }}" title="Responsive Slide Menus"><img src="{{ URL::asset(Wa::config('system.site.logo')) }}" alt="" /></a></div>
                <ul class="mobile-sub wsmenu-list pull-right">
                    @foreach(Wa::menu()->main() as $menu)
                    <li><a href="{{ url($menu->permalink) }}" class="{{ count($menu->getChild()) == 0 ? 'arrow':null }}">{{ $menu->title }}</a>
                        @if(count($menu->getChild()) !== 0)
                        <ul class="wsmenu-submenu">
                            @foreach($menu->getChild() as $sub)
                                <li><a href="{{ url($sub->permalink) }}">{{ $sub->title }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div><!--main navigation end-->
</div><!-- header end -->
