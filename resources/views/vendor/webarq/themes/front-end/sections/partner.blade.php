<section class="partner-section padding-top-70 padding-bottom-40">
    <div class="container"><!-- section container -->
        <div class="section-title-wrap margin-bottom-50"><!-- section title -->
            <h4>partners</h4>
            <div class="title-divider">
                <div class="line"></div>
                <i class="fa fa-star-o"></i>
                <div class="line"></div>
            </div>
        </div><!-- section title end -->

        <div class="row partner-wrap style-1 clearfix">
            @foreach($shareData as $row)
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                    <div class="partner shadow-1 clearfix">
                        <a href="{{ url($row->permalink) }}" target="_blank"><img src="{{ asset($row->image) }}" alt="partner"/></a>
                    </div>
                </div><!-- partner end -->
            @endforeach
        </div><!-- .row partner end -->
    </div><!-- container end -->
</section>
