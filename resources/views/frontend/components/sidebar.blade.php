<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">
            <img src="{{ asset('assets/img/home.svg') }}" alt="home" class="nav_icon_size aux_icon_side pe-3">
                <span class="{{ '/' === request()->path() ? 'nav_active': '' }}">হোমপেজ</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cart') }}">
                <img src="{{ asset('assets/img/basket3.svg') }}" alt="home" class="nav_icon_size aux_icon_side pe-3">
                <span class="{{ 'cart' === request()->path() ? 'nav_active': '' }}">কার্ট</span>
            </a>
        </li><!-- End Dashboard Nav -->


    </ul>

</aside><!-- End Sidebar-->
