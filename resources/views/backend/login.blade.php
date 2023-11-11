<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} - LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Deskbook Inventory login" name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="icon" href="{{ asset('images\sms-logo.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->

    <!-- App css -->
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
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
                <div class="col-md-8 col-lg-6 col-xl-5">

                    <div class="card mt-4">
                        <div class="text-center mt-3">
                            <a href="{{ url('/login') }}" style="font-size:28px;">
                                <img src="{{ asset('images/infinyshelf_logo.png') }}" style="width: 100%; max-width: 200px;">
                            </a>
                        </div>
                        <div class="card-body p-4">

                            <form method="POST" action="{{ url('login/check')}}">
                                @csrf
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
                                    Don't have an account?
                                    <span class="cs-text_btn text-primary cs-modal_btn"><a
                                            href="{{ url('signup/create') }}">Register</a></span>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn  btn-block" style="background-color:  #01B0B5!important; border:transparent!important" type="submit"> Log In </button>
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

</body>

</html>
