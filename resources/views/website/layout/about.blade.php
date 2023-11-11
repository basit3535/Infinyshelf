{{-- @php
    $about_title = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_title')
        ->first();

    $about_img = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_img')
        ->first();

    $about_desc = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_desc')
        ->first();

    $about_point1_title = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_point1_title')
        ->first();

    $about_point2_title = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_point2_title')
        ->first();

    $about_point1_desc = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_point1_desc')
        ->first();

    $about_point2_desc = App\Models\AboutCms::where('status', 'on')
        ->pluck('about_point2_desc')
        ->first();

@endphp --}}
<section id="about" class="cs-gradient_bg_1">
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="row align-items-center flex-column-reverse-lg">
            <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="cs-left_full_width cs-space110">
                    <div class="cs-left_sided_img">
                        {{-- <img src="{{ asset('uploads/' . $about_img) }}" alt="About" /> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-6">
                <div class="cs-height_0 cs-height_lg_40"></div>
                <div class="cs-seciton_heading cs-style1">
                    <div class="cs-section_subtitle">About The POS</div>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <h3 class="cs-section_title">{{ $about_title ?? '' }}</h3>
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
                <p>{{ $about_desc ?? '' }}</p>
                <div class="cs-height_15 cs-height_lg_15"></div>
                <div class="cs-list_1_wrap">
                    <ul class="cs-list cs-style1 cs-mp0">
                        <li>
                            <span class="cs-list_icon">
                                <img src="{{ asset('assets/img/icons/tick.svg') }}" alt="Tick" />
                            </span>
                            <div class="cs-list_right">
                                <h3>{{ $about_point1_title }}</h3>
                                <p>{{ $about_point1_desc }}</p>
                            </div>
                        </li>
                        <li>
                            <span class="cs-list_icon">
                                <img src="{{ asset('assets/img/icons/tick.svg') }}" alt="Tick" />
                            </span>
                            <div class="cs-list_right">
                                <h3>{{ $about_point2_title }}</h3>
                                <p>{{ $about_point2_desc }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="cs-height_135 cs-height_lg_0"></div>
</section>
