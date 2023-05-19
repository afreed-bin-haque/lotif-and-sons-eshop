<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">
            <img src="{{ asset('assets/img/home.svg') }}" alt="home" class="nav_icon_size aux_icon_side pe-3">
                <span class="{{ '/' === request()->path() ? 'nav_active': '' }}">হোমপেজ</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <hr>
        @if(session()->get('path') === 'Admin')
        <li class="nav-item">
            <p class="btn btn-sm" style="cursor: none;">Admin</p>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cart') }}">
                <span class="{{ 'backend/set/product' === request()->path() ? 'nav_active': '' }}">Set Product</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cart') }}">
                <span class="{{ 'backend/set/product' === request()->path() ? 'nav_active': '' }}">Change User</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @endif

    </ul>

</aside><!-- End Sidebar-->
