<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                        <img src="{{ asset('img/Primary-logo.png') }}" alt="{{ __('ui.brand') }}" class="img-fluid" style="height: 52px; width: auto;">
                        <div>
                            <h1 class="text-primary mb-0 fs-3">{{ __('ui.brand') }}</h1>
                            <p class="text-secondary mb-0">{{ __('ui.tagline') }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="position-relative mx-auto">
                        <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="text" placeholder="{{ __('ui.price_list_whatsapp') }}">
                        <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">{{ __('ui.send_list') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">{{ __('ui.about_title') }}</h4>
                    <p class="mb-4">{{ __('ui.about_desc') }}</p>
                    <a href="{{ route('store.contact', ['lang' => app()->getLocale()]) }}" class="btn border-secondary py-2 px-4 rounded-pill text-primary">{{ __('ui.contact_us') }}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">{{ __('ui.important_links') }}</h4>
                    <a class="btn-link" href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a>
                    <a class="btn-link" href="{{ route('store.shop', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_shop') }}</a>
                    <a class="btn-link" href="{{ route('store.cart', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_cart') }}</a>
                    <a class="btn-link" href="{{ route('store.checkout', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_checkout') }}</a>
                    <a class="btn-link" href="{{ route('store.contact', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_contact') }}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">{{ __('ui.contact_info') }}</h4>
                    <p>📍 <a class="text-white-50" href="{{ __('ui.map_url') }}" target="_blank" rel="noopener" data-analytics-event="map_open" data-analytics-category="footer" data-analytics-label="footer_address">{{ __('ui.address') }}</a></p>
                    <p>📞 {{ __('ui.phone') }}</p>
                    <p>💬 WhatsApp: <a class="text-white-50" href="{{ __('ui.whatsapp_url') }}" target="_blank" rel="noopener" data-analytics-event="whatsapp_click" data-analytics-category="footer" data-analytics-label="footer_whatsapp">{{ __('ui.phone') }}</a></p>
                    <p>🧺 {{ __('ui.choose_like_home') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>{{ __('ui.brand') }}</a>، {{ __('ui.rights') }}</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                {{ __('ui.designed_by') }}
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
