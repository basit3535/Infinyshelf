@if (Session::get('success'))
    {{-- <div class="jq-toast-wrap top-right toaster_load">
        <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left;">
            <span class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 3.1s ease-in;-o-transition: width 3.1s ease-in;transition: width 3.1s ease-in;background-color: #ff6849;"></span>
            <span class="close-jq-toast-single text-white close-toast">×</span>
            <h2 class="jq-toast-heading text-white">{{ Session::get('success') }}</h2>
        </div>
    </div> --}}
@endif

@if (Session::get('fail'))
    {{-- <div class="jq-toast-wrap top-right toaster_load">
        <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left;">
            <span class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 3.1s ease-in;-o-transition: width 3.1s ease-in;transition: width 3.1s ease-in;background-color: #ff6849;"></span>
            <span class="close-jq-toast-single close-toast"></span>
            <h2 class="jq-toast-heading text-white">{{ Session::get('fail') }}</h2>
        </div>
    </div> --}}
@endif
@if (Session::get('warning'))
    {{-- <div class="jq-toast-wrap top-right toaster_load">
        <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left;">
            <span class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 3.1s ease-in;-o-transition: width 3.1s ease-in;transition: width 3.1s ease-in;background-color: #ff6849;"></span>
            <span class="close-jq-toast-single close-toast"></span>
            <h2 class="jq-toast-heading text-white">{{ Session::get('warning') }}</h2>
        </div>
    </div> --}}
@endif


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::get('success'))
    <script>
        swal("Success!", "{!! Session::get('success') !!}", "success");
    </script>
@endif
@if (Session::get('fail'))
    <script>
        swal("Error!", "{!! Session::get('fail') !!}", "error");
    </script>
@endif
@if (Session::get('warning'))
    <script>
        swal("Warning!", "{!! Session::get('warning') !!}", "warning");
    </script>
@endif
