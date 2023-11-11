{{-- @php
    $banner = App\Models\BannerCms::where('status', 'on')
        ->get()
        ->first();
@endphp --}}

<div id="home">
    <div class="cs-height_50 cs-height_lg_50"></div>
    <section class="cs-hero cs-style1 cs-bg" data-src="{{ asset('assets/img/hero_bg.svg') }}">
        <div class="container">
            <div class="cs-hero_img">
                {{-- <div class="cs-hero_img_bg cs-bg" data-src="{{ asset('assets/img/hero_img_bg.png') }}"></div>
                <img src="{{ asset('uploads/' . $banner->banner_img) }}" alt="Hero Image" class="wow fadeInRight"
                data-wow-duration="1s" data-wow-delay="0.4s" /> --}}
            </div>
            <div class="cs-hero_text">
                <div class="cs-hero_secondary_title">
                    Welcome to
                </div>
                {{-- <h1 class="cs-hero_title">{{ $banner->banner_title ?? '' }}</h1>
                <div class="cs-hero_subtitle">
                    {{ $banner->banner_desc ?? '' }}
                </div> --}}
                <a href="{{url('/signup/create')}}" class="cs-btn"><span>Join now</span></a>
            </div>
            <div class="cs-hero_shapes">
                <div class="cs-shape cs-shape_position1">
                    <img src="{{ asset('assets/img/shape/shape_1.svg') }}" alt="Shape" />
                </div>
                <div class="cs-shape cs-shape_position2">
                    <img src="{{ asset('assets/img/shape/shape_2.svg') }}" alt="Shape" />
                </div>
                <div class="cs-shape cs-shape_position3">
                    <img src="{{ asset('assets/img/shape/shape_3.svg') }}" alt="Shape" />
                </div>
                <div class="cs-shape cs-shape_position4">
                    <img src="{{ asset('assets/img/shape/shape_4.svg') }}" alt="Shape" />
                </div>
                <div class="cs-shape cs-shape_position5">
                    <img src="{{ asset('assets/img/shape/shape_5.svg') }}" alt="Shape" />
                </div>
                <div class="cs-shape cs-shape_position6">
                    <img src="{{ asset('assets/img/shape/shape_6.svg') }}" alt="Shape" />
                </div>
            </div>
        </div>
    </section>
</div>
