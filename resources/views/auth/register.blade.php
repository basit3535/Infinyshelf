{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} - SIGNUP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Deskbook Inventory login" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/mini-logo.png') }}">

    <!-- App css -->
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <style>
        .btn {
            background-color: rgb(62, 62, 123) !important;
            border-color: rgb(62, 62, 123) !important;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>

</head>

<body class="authentication-bg">

    <div class="account-pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-8">

                    <div class="card mt-4">
                        <div class="text-center">
                            <a href="{{ url('/') }}" style="font-size:28px;">
                                <img src="{{ asset('images/sms-logo.png') }}" style="width: 100%;max-width: 150px;">
                            </a>
                        </div>
                        <div class="card-body p-4">

                            <form method="POST" action="{{ url('signup/store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="image">Profile pic</label>
                                    <input name="image" id="image" type="file" class="dropify"
                                        data-height="100" value="" />
                                    @error('image')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror()
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control @error('name') is-invalid @enderror()" type="text"
                                        name="name" id="username" required="" value="{{ old('name') }}"
                                        placeholder="Enter Username">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control @error('email') is-invalid @enderror()" type="text"
                                        name="email" id="emailaddress" required="" value="{{ old('email') }}"
                                        placeholder="Enter your email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror()"
                                        type="password" name="password" id="password"
                                        placeholder="Enter your password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="custom-control-label" for="remember">Remember me</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->


                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <!-- Vendor js -->
    <script src="{{ asset('theme/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('theme/assets/js/app.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">
@include('website.layout.head')

<style>
    .dropify-wrapper {
        height: 180px !important;
        margin-top: 30px !important;
    }
</style>

<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<body>
    <section class="container">
        <div class="cs-height_45 cs-height_lg_70"></div>
        <div class="cs-login">
            <div class="cs-login_left">
                <img src="{{ asset('assets/img/retail-store.png') }}" alt="Login Thumb" />
            </div>
            <div class="cs-login_right">
                <div class="text-center">
                    <img src="{{ asset('images/infinyshelf_logo.png') }}" alt="Deskbook Logo"
                        style="width: 100%; max-width:200px;">
                </div>

                <form class="cs-login_form" method="POST" action="{{ url('signup/store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="cs-height_40 cs-height_lg_30"></div>

                    <div class="cs-or"><span class="fw-bold">Create an Account</span></div>

                    <div class="cs-height_30 cs-height_lg_30"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="cs-height_30 cs-height_lg_30"></div>

                            <input type="text" name="name"
                                class="cs-form_field cs-border_color @error('name') is-invalid @enderror()"
                                placeholder="Your Name" value="{{ old('name') }}" />

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="cs-height_20 cs-height_lg_20"></div>

                            <input type="text" name="email"
                                class="cs-form_field cs-border_color @error('email') is-invalid @enderror()"
                                placeholder="Email address" value="{{ old('email') }}" />

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="cs-height_20 cs-height_lg_20"></div>

                            <input type="password" name="password"
                                class="cs-form_field cs-border_color @error('password') is-invalid @enderror()"
                                placeholder="Password" minlength="6" />
                            <span class="text-danger"></span>
                        </div>
                        <div class="col-md-12 mt-4">
                            <input name="image" id="image" type="file" class="form-control dropify" />
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror()

                        </div>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <div class="cs-login_meta">
                        <div class="cs-check">
                            <input type="checkbox" />
                            <label>I agree to the terms of service</label>
                        </div>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <button class="cs-btn cs-size_md w-100">
                        <span>Register</span>
                    </button>
                    <div class="cs-height_20 cs-height_lg_20"></div>

                    <p class="cs-m0">
                        Already have an account?
                        <span class="cs-text_btn cs-modal_btn"><a href="{{ url('login/create') }}">Login</a></span>
                    </p>

                    <div class="cs-height_40 cs-height_lg_30"></div>
                </form>
            </div>
        </div>
    </section>
    @include('website.layout.script-links')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
</body>

</html>
