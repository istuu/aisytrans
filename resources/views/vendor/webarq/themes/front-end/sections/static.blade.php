@foreach ($shareData as $row)
    @if(Wa::menu()->getActive()->template == 'packages')
        <section class="about-section">
            <div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30">
                <h4 class="white">{{ $row->title }}</h4>
            </div>
        </section>
        <div class="page-title-wrap padding-top-0 padding-bottom-0">
            <img src="{{ asset($row->banner) }}" alt="item slide">
        </div>
    @else
        <div class="page-title-wrap padding-top-0 padding-bottom-0">
            <img src="{{ asset($row->banner) }}" alt="item slide">
        </div>
        <section class="about-section padding-bottom-40">
            <div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30">
                <h4 class="white">{{ $row->title }}</h4>
            </div>
            @if($row->description !== '')
                <div class="container">
                    <div class="page-title-wrap padding-right-20 padding-top-60 padding-bottom-30">
                        {!! $row->description !!}
                    </div>
                </div>
            @endif
        </section>
    @endif
@endforeach
