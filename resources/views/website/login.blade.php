<!DOCTYPE html>
<html lang="en">
@include('website.layout.head')

<body>
    <section class="container">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="cs-login">
            <div class="cs-login_left">
                <img src="{{ asset('assets/img/about_img_1.png') }}" alt="Login Thumb" />
            </div>
            <div class="cs-login_right">
                <form class="cs-login_form">
                    <h2>Login in to your account</h2>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <input type="text" class="cs-form_field cs-border_color" placeholder="Email address" />
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <input type="password" class="cs-form_field cs-border_color" placeholder="Password" />
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <div class="cs-login_meta">
                        <div>
                            <div class="cs-check">
                                <input type="checkbox" />
                                <label>Remember me</label>
                            </div>
                        </div>

                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <button class="cs-btn cs-size_md w-100">
                        <span>Login</span>
                    </button>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <p class="cs-m0">
                        Don't have an account?
                        <span class="cs-text_btn cs-modal_btn"><a href="{{ url('register') }}">Register</a></span>
                    </p>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <div class="cs-or"><span>or</span></div>
                    <div class="cs-height_40 cs-height_lg_30"></div>
                    <div class="cs-social_btns cs-style2">
                        <a href="#" target="_blank" class="cs-center cs-color1">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.3187 8.34992C16.329 7.78817 16.2694 7.22728 16.1411 6.67969H8.31738V9.71004H12.9094C12.8229 10.2417 12.6273 10.7506 12.3343 11.206C12.0413 11.6614 11.657 12.0539 11.2047 12.3596V12.4629L13.6785 14.3399L13.8506 14.3562C15.4248 12.9335 16.3326 10.8362 16.3326 8.34992"
                                    fill="currentColor" />
                                <path
                                    d="M8.3182 16.3333C10.567 16.3333 12.4577 15.6097 13.8375 14.3556L11.2055 12.359C10.3535 12.9194 9.34397 13.2048 8.3182 13.1751C7.26397 13.1691 6.23842 12.838 5.38719 12.2286C4.53597 11.6192 3.90232 10.7625 3.57621 9.78021H3.47904L0.905385 11.7306L0.87207 11.8231C1.56522 13.1759 2.62872 14.3132 3.94369 15.1077C5.25865 15.9023 6.77328 16.3228 8.3182 16.3224"
                                    fill="currentColor" />
                                <path
                                    d="M3.58123 9.78285C3.39838 9.26292 3.30457 8.71693 3.3036 8.16701C3.30991 7.61843 3.40359 7.07419 3.58123 6.55392V6.4451L0.977035 4.46204L0.890987 4.50285C0.305173 5.64191 0 6.89966 0 8.17517C0 9.45068 0.305173 10.7084 0.890987 11.8475L3.59513 9.79643"
                                    fill="currentColor" />
                                <path
                                    d="M8.3182 3.15874C9.51172 3.14118 10.6659 3.57696 11.5387 4.37471L13.893 2.12507C12.3845 0.738085 10.3868 -0.0232452 8.3182 0.000541035C6.77299 0.000338841 5.25817 0.421321 3.94318 1.21638C2.62818 2.01144 1.56484 3.14925 0.87207 4.50256L3.56509 6.55363C3.89512 5.57159 4.5313 4.71575 5.38401 4.10671C6.23672 3.49766 7.263 3.16608 8.3182 3.15874Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="cs-center cs-color3">
                            <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.8194 2.64177H8V0.194847C7.30745 0.0755463 6.6076 0.0104213 5.90608 0C3.76786 0 2.37343 1.3769 2.37343 3.86767V6.05804H0V8.93201H2.36884V16H5.2921V8.93201H7.47003L7.88545 6.05804H5.28904V4.19403C5.29668 3.40816 5.65865 2.64177 6.8194 2.64177Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('website.layout.script-links')
</body>

</html>
