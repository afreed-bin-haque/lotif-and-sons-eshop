<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('welcome') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="{{ config('siteConfig.app.name') }}">
            <span class="d-none d-lg-block">লতিফ এন্ড সন্স</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar col-lg-8">
        <form class="search-form d-flex align-items-center category_hoolder" method="get" action="#">
            <input type="text" name="query" placeholder="এখানে সার্চ করুন" title="এখানে সার্চ করুন">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item search_mini">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search nav_icon_size"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{ route('view.upload_list') }}">
                    <i class="bi bi-camera2 nav_icon_size"></i>
                    <div class="mini_screen">
                        <span class="d-none d-md-block ps-2 pe-2 nave_link_font">লিস্ট আপলোড করুন</span>
                    </div>
                </a><!-- End Profile Iamge Icon -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown pe-3">

                @if(session()->has('access_token'))

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
                    <i class="bi bi-person-circle nav_icon_size"></i>
                    <div class="mini_screen">
                        <span class="d-none d-md-block ps-2 nave_link_font">অ্যাকাউন্ট</span>
                    </div>
                </a><!-- End Profile Iamge Icon -->

                @else

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{ route('log.in') }}">
                    <i class="bi bi-box-arrow-in-right nav_icon_size"></i>
                    <div class="mini_screen">
                        <span class="d-none d-md-block ps-2 nave_link_font">লগইন করুন</span>
                    </div>
                </a><!-- End Profile Iamge Icon -->

                @endif

            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
