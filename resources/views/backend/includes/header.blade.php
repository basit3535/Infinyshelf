<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>infinyShelf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="POS" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/infinyshelf_logo.png') }}">

    <link href="{{ asset('theme/assets/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('theme/assets/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('theme/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/datatable.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <style>
        .dataTables_length {
            position: relative;
            top: 35px;
        }

        .dataTables_info {
            position: relative;
            top: 28px;
            font-weight: 300;
        }

        .dataTables_length select,
        .dataTables_length select:focus {
            height: 30px !important;
            border: 1px solid rgb(62, 62, 123) !important;
            outline: none !important;
        }

        .dataTables_filter input,
        .dataTables_filter input:focus {
            border: 1px solid rgb(62, 62, 123) !important;
            outline: none !important
        }

        .paginate_button,
        .paginate_button:hover {
            background: rgb(62, 62, 123) !important;
            display: inline-block;
            font-weight: 400;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border-left: 1px solid white;
            border-right: 1px solid white;
            padding: 0.45rem 0.9rem;
            font-size: .9rem;
            line-height: 1.5;
        }

        input,
        select,
        textarea,
        .btn {
            border-radius: 3px !important;
        }

        .card {
            border-radius: 10px !important;
        }

        input:read-only {
            background-color: lightgrey !important;
            cursor: not-allowed;
        }

        .btn-danger,
        .btn-info,
        .btn-success,
        .btn-warning,
        .btn-primary,
        .btn-bordred-primary,
        .btn-bordred-info,
        .btn-bordred-warning,
        .btn-bordred-success,
        .btn-bordred-danger {
            background-color: rgb(62, 62, 123) !important;
            border-color: rgb(62, 62, 123) !important;

        }

        ul li,
        ul li a,
        ul li a span {
            font-size: 16px;
            font-weight: 500;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .text-primary,
        .text-info,
        .text-warning,
        .text-primary:hover,
        .text-danger:hover,
        .text-info:hover,
        .text-warning:hover {
            color: rgb(62, 62, 123) !important;
        }

        .navbar-custom,
        .footer {
            background-color: #ffffff !important;
        }

        /* .select2-selection__rendered {
            color: grey !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__clear {
            display: none;
        }

        .select2-container .select2-selection--single {
            color: grey;
            height: 38px !important;
        } */

        @media (min-width:767px) {

            .sm-logo,
            .hide-sm-btn {
                display: none;
            }

            .company-logo {
                width: 100%;
                max-width: 100px;
                height: auto;
            }
        }

        @media (max-width:767px) {
            .sm-btn {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <!-- End Preloader-->
