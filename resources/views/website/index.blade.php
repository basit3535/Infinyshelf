<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('website.layout.head')

<body>
    <div class="cs-preloader cs-white_bg cs-center">
        <div class="cs-preloader_in">
            <img src="{{ asset('images\infinyshelf_logo.png') }}" alt="Loader Logo" style="width:100%;min-width:100px;" />
        </div>
    </div>
    <!-- Start Header Section -->
    @include('backend.includes.alerts')
    @include('website.layout.navbar')
    <!-- End Header Section -->

    <!-- Start Hero -->
    @include('website.layout.main-banner')
    <!-- End Hero -->

    <!-- Start Main Feature -->
    @include('website.layout.feature')
    <!-- End Main Feature -->

    <!-- Start About -->
    @include('website.layout.about')
    <!-- End About -->

    <!-- Start Fun Fact -->
    @include('website.layout.counter')
    <!-- End Fun Fact -->


    <!-- Start Retail Stores -->
    @include('website.layout.suitable')
    <!-- End Retail Stores -->

    <!-- Start Price Section -->
    @include('website.layout.plans')
    <!-- End Price Section -->

    <!-- Start Contact Section -->
    @include('website.layout.contact')
    <!-- End Contact Section -->

    <!-- Start Footer -->
    @include('website.layout.footer')
    <!-- End Footer -->

    @include('website.layout.modals')

    <!-- Script -->
    {{-- @include('website.layout.whatsapp') --}}
    @include('website.layout.script-links')
</body>

</html>
