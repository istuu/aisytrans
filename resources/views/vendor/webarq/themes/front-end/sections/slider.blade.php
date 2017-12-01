<section id="slider-revolution">
    <div class="fullwidthbanner-container">
        <div class="revolution-slider tx-center">
            <ul><!-- SLIDE  -->
                @foreach ($shareData as $row)
                <!-- Slide1 -->
                <li data-transition="slideright" data-slotamount="5" data-masterspeed="1000">
                <!-- MAIN IMAGE -->
                    <img src="{{ asset($row->image) }}" alt="item slide">
                <!-- LAYERS -->
                    @if($row->title !== '' || $row->description !== '')
                    <!-- LAYER 1 -->
                    <div class="tp-caption lfb stb tp-resizeme" data-x="left" data-y="540" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="100" data-easing="easeInBack" style="z-index: 9;">
                        <img src="{{ asset('frontend') }}/images/item-slider/frame.png" alt="slide">
                    </div>
                    @endif
                    <!-- LAYER 2 -->
                    <div class="tp-caption lfb ltb tp-resizeme" data-x="35" data-y="567" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="100" data-easing="easeInBack" style="z-index: 9;">
                        <div class="sub-title-24 cwhite fwb lh1 lp2 tx-left ffm">
                            {{ $row->title }}
                        </div>
                    </div>
                    <!-- LAYER 3 -->
                    <div class="tp-caption lfb ltb tp-resizeme" data-x="35" data-y="597" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="100" data-easing="easeInBack" style="z-index: 9;">
                        <div class="text-14 cwhite tx-left fwn lp1 lh4 ffm btn-tfl">
                            {{ $row->description }}
                        </div>
                    </div>
                    @if($row->rating !== 0)
                    <!-- LAYER 4 -->
                    <div class="tp-caption lfb ltb tp-resizeme" data-x="35" data-y="625" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="100" data-easing="easeInBack" style="z-index: 9;">
                        <div class="tx-left  ffm">
                            <div class="star-rating pull-right"><!-- rating-->
                                <div class="score-callback" data-score="{{ $row->rating }}"></div>
                            </div><!-- rating end-->
                        </div>
                    </div>
                    @endif
                    @if($row->button !== '' || $row->permalink !== '')
                    <!-- LAYER 5 -->
                    <div class="tp-caption lfb ltb tp-resizeme" data-x="935" data-y="575" data-voffset="0" data-speed="1500" data-endspeed="300" data-start="100" data-easing="easeInBack" style="z-index: 9;">
                        <div class="tx-left dib lp1">
                            <a class="button1 btn-fs-18 white fwn lh1 bgblue-1 btn-tfc btn-br4 hblue hbgwhite" href="{{ url($row->permalink) }}">{{ $row->button }}</a>
                        </div>
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
