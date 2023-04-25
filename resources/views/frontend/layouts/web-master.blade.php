<!DOCTYPE html>
<html lang="en">
    @include('frontend.components.head')
<body>
    @include('frontend.components.navbar')
    @include('frontend.components.sidebar')
    <main id="main" class="main">
        @include('frontend.components.breadcrumb')
        <div class="float-cart shadow">
            <div class="p-2">
                <i class="bi bi-basket3"></i>
                <p>Total item:0</p>
                <p>Total price:0 &#x9F3;</p>
            </div>
        </div>
        @yield('content')
    </main>
    @include('frontend.components.footer')
    @include('frontend.components.whatsapp')
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/typed-jquery.js') }}"></script>
</body>
</html>
