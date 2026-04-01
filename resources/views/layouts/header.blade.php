@php
    $switchLocale = ($locale ?? app()->getLocale()) === 'ar' ? 'en' : 'ar';
@endphp
<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">{{ __('ui.address') }}</a></small>
                <small class="me-3"><i class="fas fa-phone-alt me-2 text-secondary"></i><a href="tel:+962779154999" class="text-white">{{ __('ui.phone') }}</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="{{ route('store.contact', ['lang' => $locale ?? app()->getLocale()]) }}" class="text-white"><small class="text-white mx-2">{{ __('ui.order_whatsapp') }}</small>/</a>
                <a href="{{ route('store.contact', ['lang' => $locale ?? app()->getLocale()]) }}" class="text-white"><small class="text-white ms-2">{{ __('ui.rate_us') }}</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="{{ route('store.home', ['lang' => $locale ?? app()->getLocale()]) }}" class="navbar-brand"><h1 class="text-primary display-6">{{ __('ui.brand') }}</h1></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('store.home', ['lang' => $locale ?? app()->getLocale()]) }}" class="nav-item nav-link {{ ($activePage ?? '') === 'home' ? 'active' : '' }}">{{ __('ui.nav_home') }}</a>
                    <a href="{{ route('store.shop', ['lang' => $locale ?? app()->getLocale()]) }}" class="nav-item nav-link {{ ($activePage ?? '') === 'shop' ? 'active' : '' }}">{{ __('ui.nav_shop') }}</a>
                    <a href="{{ route('store.cart', ['lang' => $locale ?? app()->getLocale()]) }}" class="nav-item nav-link {{ ($activePage ?? '') === 'cart' ? 'active' : '' }}">{{ __('ui.nav_cart') }}</a>
                    <a href="{{ route('store.checkout', ['lang' => $locale ?? app()->getLocale()]) }}" class="nav-item nav-link {{ ($activePage ?? '') === 'checkout' ? 'active' : '' }}">{{ __('ui.nav_checkout') }}</a>
                    <a href="{{ route('store.contact', ['lang' => $locale ?? app()->getLocale()]) }}" class="nav-item nav-link {{ ($activePage ?? '') === 'contact' ? 'active' : '' }}">{{ __('ui.nav_contact') }}</a>
                </div>
                <div class="d-flex m-3 me-0 align-items-center gap-3">
                    <a href="{{ url()->current() }}?lang={{ $switchLocale }}" class="btn btn-outline-secondary rounded-pill px-3">{{ __('ui.lang_switch') }}</a>
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    <a href="#" class="position-relative my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('ui.search_title') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="{{ __('ui.search_placeholder') }}" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
