{{-- @php
    $inventory = App\Models\InventoryCms::where('status', 'on')->get();
    $feature = App\Models\FeatureCms::where('status', 'on')->get();
    $i = 01;
@endphp --}}
<style>
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-md-6 {
        display: flex;
        flex-direction: column;
    }

    .cs-iconbox {
        flex: 1;
    }
</style>
<section id="feature" class="cs-bg" data-src="{{ asset('assets/img/feature_bg.svg') }}">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-seciton_heading cs-style1 text-center">
            <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                Office & Inventory
            </div>
            <div class="cs-height_10 cs-height_lg_10"></div>
            <h3 class="cs-section_title">Our best inventory</h3>
        </div>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="row" style="display: flex; flex-wrap: wrap;">

            {{-- @foreach ($inventory as $value)
                <div class="col-md-6" style="flex: 1 0 50%;">
                    <div class="cs-height_25 cs-height_lg_0"></div>
                    <div class="cs-iconbox cs-style1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('uploads/' . $value->inventory_img) }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <div class="cs-iconbox_number cs-primary_font">0{{ $i++ }}</div>
                            <h3 class="cs-iconbox_title">{{ $value->inventory_title }}</h3>
                            <div class="cs-iconbox_subtitle">
                                {{ $value->inventory_desc }}
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
            @endforeach --}}
        </div>
    </div>
</section>

<section class="cs-bg" data-src="{{ asset('assets/img/feature_bg.svg') }}">
    <div class="cs-height_45 cs-height_lg_0"></div>
    <div id="feature">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-seciton_heading cs-style1 text-center">
                <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    POS Features
                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
                <h3 class="cs-section_title">Available features</h3>
            </div>
            <div class="cs-height_50 cs-height_lg_40"></div>
            <div class="row">
                {{-- @foreach ($feature as $item)
                    <div class="col-xl-6 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('uploads/' . $item->feature_img) }}" alt="Icon" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">{{ $item->feature_title }}</h3>
                                <div class="cs-iconbox_subtitle">
                                    {{ $item->feature_desc }}
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                @endforeach --}}
                {{-- <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('assets/img/icons/icon_box_5.svg') }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Effortless card</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the most printing and
                                typese Ipsum is simply dummy
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('assets/img/icons/icon_box_6.svg') }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Software accuracy</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the most printing and
                                typese Ipsum is simply dummy
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('assets/img/icons/icon_box_7.svg') }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Customization</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the most printing and
                                typese Ipsum is simply dummy
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('assets/img/icons/icon_box_8.svg') }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Customer data</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the most printing and
                                typese Ipsum is simply dummy
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('assets/img/icons/icon_box_9.svg') }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Seamless checkout</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the most printing and
                                typese Ipsum is simply dummy
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="{{ asset('assets/img/icons/icon_box_10.svg') }}" alt="Icon" />
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">High speed process</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the most printing and
                                typese Ipsum is simply dummy
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div> --}}
            </div>
        </div>
        <div class="cs-height_25 cs-height_lg_45"></div>
    </div>
</section>
