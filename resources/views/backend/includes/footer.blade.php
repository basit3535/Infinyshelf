<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <small>
                    Copy Right &copy; privacy & terms of <a href="{{ url('dashboard') }}" class="mr-1">infinyshelf
                        </a>
                    Software developed by <a href=""
                        class="mr-1"> Abdul-Basit</a>
                </small>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>
</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{ asset('theme/assets/js/vendor.min.js') }}"></script>

<script src="{{ asset('theme/assets/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('theme/assets/select2/dist/js/select2.min.js') }}"></script>

<!-- knob plugin -->
<script src="{{ asset('theme/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

{{-- sweetalert --}}
<script src="{{ asset('theme/assets/libs/jquery-knob/sweetalert.js') }}"></script>

<!-- App js -->
<script src="{{ asset('theme/assets/js/app.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/datatable1.js') }}"></script>
<script src="{{ asset('theme/assets/js/datatable2.js') }}"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
@yield('scripts')
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('#datepicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true
        });
        $(document).ready(function() {
            $('#example').DataTable();
        });

        $("#single").select2({
            placeholder: "Select a category",
            allowClear: true
        });

        $("#category").select2({
            placeholder: "Select a category",
            allowClear: true
        });

        $("#product").select2({
            placeholder: "Select a Product",
            allowClear: true
        });

    });
</script>

</body>

</html>
