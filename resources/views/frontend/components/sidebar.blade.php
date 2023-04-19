<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">
                <i class="bi bi-grid"></i>
                <span class="{{ '/' === request()->path() ? 'nav_active': '' }}">হোমপেজ</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cart') }}">
                <i class="bi bi-basket3"></i>
                <span class="{{ 'cart' === request()->path() ? 'nav_active': '' }}">কার্ট</span>
            </a>
        </li><!-- End Dashboard Nav -->


    </ul>

</aside><!-- End Sidebar-->
