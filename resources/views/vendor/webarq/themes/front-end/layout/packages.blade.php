<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 5:40 PM
 */ ?>

@extends('webarq::themes.front-end.layout.index')

@section('content')
    @if ([] !== $shareSections)
        {!! implode('', $shareSections) !!}
    @else
        <div class="callout callout-info">
            <h4>Welcome!</h4>

            <p>
                Welcome. If this is appear on your screen, it does mean the system could not find proper
                content due to missing active menu.
            </p>

            <p>
                Contact your administrator if you think this is an error
            </p>
        </div>
    @endif
    <section id="search-form">
        <div class="container">
            <div class="search-form-wrap">
                <form class="clearfix" action="#">
                    <div class="input-field-wrap pull-left">
                        <input class="search-form-input" name="key-word" placeholder="enter keyword" type="text"/>
                    </div>
                    <div class="select-field-wrap pull-left">
                        <select class="search-form-select" name="location" >
                            <option class="options" value="all-locations">all locations</option>
                            @foreach($locations as $loc)
                                <option class="options" value="{{ $loc->id }}">{{ $loc->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="select-field-wrap pull-left">
                        <select class="search-form-select" name="categories" >
                            <option class="options" value="all-categories">all categories</option>
                            @foreach($categories as $cat)
                                <option class="options" value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="submit-field-wrap pull-left">
                        <input class="search-form-submit bgyallow-1 white" value="Cari" name="key-word" type="submit"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="aside-layout-section padding-top-20 padding-bottom-40">
        <div class="container"><!-- section container -->
            <div class="row"><!-- row -->
                <div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                    <div class="listing-section padding-bottom-40">
                        <div class=""><!-- section container -->
                            <div class="add-listing-wrapper">
                                <div class="listing-main gridview tab-content">
                                    <div id="latest-listing" class="tab-pane active">
                                        <div class="listing-wrapper three-column row">
                                            @foreach($models as $model)
                                                <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                    <div class="listing-item clearfix">
                                                        <div class="figure">
                                                            <img src="{{ asset($model->image) }}" alt="listing item"/>
                                                            <div class="listing-overlay">
                                                                <div class="listing-overlay-inner rgba-{{ $model->categories->color }}">
                                                                    <div class="overlay-content">
                                                                        <ul class="listing-links">
                                                                            <!-- <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li> -->
                                                                            <li><a class="bgwhite nohover" href="{{ url(Wa::menu()->getActive()->permalink.'/detail/'.$model->permalink) }}"><i class="fa fa-eye blue-1"></i></a></li>
                                                                            <!-- <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li> -->
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="listing-content clearfix">
                                                            <div class="listing-meta-cat">
                                                                <a class="{{ $model->categories->color }}"><i class="fa {{ $model->categories->icon }} white"></i></a>
                                                            </div>
                                                            <div class="listing-title">
                                                                <h6><a href="{{ url(Wa::menu()->getActive()->permalink.'/detail/'.$model->permalink) }}">{{ $model->title }}</a></h6>
                                                            </div>
                                                            <!-- <div class="listing-disc">
                                                                <p>{{ strip_tags($model->description) }}</p>
                                                            </div> -->
                                                            <div class="listing-location pull-left"><!-- location-->
                                                                <a href="#"><i class="fa fa-map-marker"></i> {{ $model->locations->title }}</a>
                                                                <a href="#"><i class="fa fa-map-marker"></i> {{ $model->categories->title }}</a>
                                                            </div><!-- location end-->
                                                            <!-- <div class="star-rating pull-right">
                                                                <div class="score-callback" data-score="5"></div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="listing-border-bottom bgyallow-1"></div>
                                                </div><!-- /.ITEM -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- section container end -->
                    </div>
                    {!! $models->links() !!}
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12"><!-- sidebar column -->
                    <div class="sidebar sidebar-wrap">
                        <div class="sidebar-widget shadow-1">
                            <div class="sidebar-widget-title">
                                <h5><span class="bgyallow-1"></span>recent posts</h5>
                            </div>
                            <div class="sidebar-widget-content recent-post clearfix">
                                <div class="recent-post-entry clearfix">
                                    <div class="recent-entry-figure">
                                        <img src="images/news/thumb/70/01.jpg" alt="recent post"/>
                                    </div>
                                    <div class="recent-entry-content">
                                        <p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
                                        <p class="recent-entry-disc">Welcome Dirctorium</p>
                                        <p class="recent-entry-meta date">07 Sep, 2015</p>
                                    </div>
                                </div>
                                <div class="recent-post-entry clearfix">
                                    <div class="recent-entry-figure">
                                        <img src="images/news/thumb/70/02.jpg" alt="recent post"/>
                                    </div>
                                    <div class="recent-entry-content">
                                        <p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
                                        <p class="recent-entry-disc">Welcome Dirctorium</p>
                                        <p class="recent-entry-meta date">07 Sep, 2015</p>
                                    </div>
                                </div>
                                <div class="recent-post-entry clearfix">
                                    <div class="recent-entry-figure">
                                        <img src="images/news/thumb/70/03.jpg" alt="recent post"/>
                                    </div>
                                    <div class="recent-entry-content">
                                        <p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
                                        <p class="recent-entry-disc">Welcome Dirctorium</p>
                                        <p class="recent-entry-meta date">07 Sep, 2015</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget shadow-1">
                            <div class="sidebar-widget-title">
                                <h5><span class="bgblue-1"></span>ADVERTISING</h5>
                            </div>
                            <div class="sidebar-widget-content advertise  clearfix">
                                <div class="sidebar-image-ads">
                                    <a href="#"><img src="images/01.jpg" alt="custom-image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget shadow-1">
                            <div class="sidebar-widget-title">
                                <h5><span class="bggreen-2"></span>Item tags</h5>
                            </div>
                            <div class="sidebar-widget-content tags  clearfix">
                                <div class="sidebar-tag-cloud">
                                    <ul>
                                        <li><a href="#">food</a></li>
                                        <li><a href="#">Marriage</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">car</a></li>
                                        <li><a href="#">house</a></li>
                                        <li><a href="#">events</a></li>
                                        <li><a href="#">business</a></li>
                                        <li><a href="#">job</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- section container end -->
    </section>
@endsection
