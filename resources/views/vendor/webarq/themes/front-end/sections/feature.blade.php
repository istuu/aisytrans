<section class="about-section padding-bottom-40">
    <div class="container"><!-- section container -->
        <div class="row category-section-wrap cat-style-3">
            @foreach ($shareData as $row)
            <div class="col-md-4 col-sm-6 col-xs-12 main-wrap"><!-- category column -->
                <div class="cat-wrap shadow-1">
                    <p><i class="fa {{ $row->icon }} {{ $row->color }} white"></i></p>
                    <h5>{{ $row->title }}</h5>
                    {!! $row->description !!}
                </div>
                <div class="listing-border-bottom {{ $row->color }}"></div>
            </div><!-- category column end -->
            @endforeach
        </div>
    </div><!-- section container end -->
</section>
