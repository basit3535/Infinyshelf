<section class="cs-gradient_bg_1" id="contact">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-8">
                <div class="cs-seciton_heading cs-style1">
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <h3 class="cs-section_title">{{ $contact->contact_title ?? '' }}</h3>
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
                <p>{{ $contact->contact_desc ?? '' }}</p>
                <div class="cs-height_15 cs-height_lg_15"></div>
                <div class="cs-iconbox cs-style3">
                    <div class="cs-iconbox_icon">
                        <img src="{{ asset('assets/img/icons/contact_icon_1.svg') }}" alt="Icon" />
                    </div>
                    <div class="cs-iconbox_right">
                        <h2 class="cs-iconbox_title">Address</h2>
                        <div class="cs-iconbox_subtitle">{{ $contact->address ?? '' }}</div>
                    </div>
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
                <div class="cs-iconbox cs-style3">
                    <div class="cs-iconbox_icon">
                        <img src="{{ asset('assets/img/icons/contact_icon_2.svg') }}" alt="Icon" />
                    </div>
                    <div class="cs-iconbox_right">
                        <h2 class="cs-iconbox_title">Contact Number</h2>
                        <div class="cs-iconbox_subtitle">{{ $contact->phone ?? '' }}</div>
                    </div>
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
                <div class="cs-iconbox cs-style3">
                    <div class="cs-iconbox_icon">
                        <img src="{{ asset('assets/img/icons/contact_icon_3.svg') }}" alt="Icon" />
                    </div>
                    <div class="cs-iconbox_right">
                        <h2 class="cs-iconbox_title">Email Address</h2>
                        <div class="cs-iconbox_subtitle">{{ $contact->email ?? '' }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <div class="cs-height_40 cs-height_lg_40"></div>
                <form class="cs-contact_form" method="POST" action="{{ url('contactus') }}">
                    @csrf
                    <h2 class="cs-contact_form_title">Please fill up the form</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="cs-form_field" name="name" placeholder="Name" required />
                            <div class="cs-height_25 cs-height_lg_25"></div>
                        </div>
                        <div class="col-lg-12">
                            <input type="email" class="cs-form_field" name="email" placeholder="Email address"
                                required />
                            <div class="cs-height_25 cs-height_lg_25"></div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="cs-form_field" name="subject" placeholder="Subject" required />
                            <div class="cs-height_25 cs-height_lg_25"></div>
                        </div>
                        <div class="col-lg-12">
                            <textarea cols="30" rows="5" name="message" class="cs-form_field" placeholder="Write your massage" required></textarea>
                            <div class="cs-height_25 cs-height_lg_25"></div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="cs-btn cs-size_md">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="cs-height_95 cs-height_lg_70"></div>
</section>
