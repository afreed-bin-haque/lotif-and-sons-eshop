<!DOCTYPE html>
<html lang="en">
@include('frontend.error-components.head')

<body>
    @include('frontend.components.navbar')
    @include('frontend.components.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
    @include('frontend.components.footer')
    <a href="https://wa.me/{{ config('siteConfig.app.whatsapp') }}?text=হ্যালো আমি আপনাদের লতিফ এন্ড সন্স ওয়েবসাইট থেকে এসেছি । কিছু প্রশ্ন ছিল।"
        class="whats-app gradient shadow" target="_blank">
        <span class="p-3"><i class="bi bi-whatsapp whats-app-icon"></i> Contact us</span>
    </a>
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
