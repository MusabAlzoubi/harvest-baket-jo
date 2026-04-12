@php
    if (request()->has('lang') && in_array(request('lang'), ['ar', 'en'], true)) {
        session(['locale' => request('lang')]);
    }

    $locale = session('locale', 'ar');
    app()->setLocale($locale);
    $isArabic = $locale === 'ar';

    $metaTitle = trim($__env->yieldContent('meta_title', __('ui.site_title')));
    $metaDescription = trim($__env->yieldContent('meta_description', __('ui.seo_description')));
    $metaKeywords = trim($__env->yieldContent('meta_keywords', __('ui.seo_keywords')));
    $canonicalUrl = url()->current();
    $googleAnalyticsId = config('services.google.analytics_id');
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $isArabic ? 'rtl' : 'ltr' }}">

    <head>
        <meta charset="utf-8">
        <title>{{ $metaTitle }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="{{ $metaKeywords }}" name="keywords">
        <meta content="{{ $metaDescription }}" name="description">
        <link rel="canonical" href="{{ $canonicalUrl }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $metaTitle }}">
        <meta property="og:description" content="{{ $metaDescription }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:site_name" content="{{ __('ui.brand') }}">
        <meta property="og:locale" content="{{ $locale === 'ar' ? 'ar_JO' : 'en_US' }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $metaTitle }}">
        <meta name="twitter:description" content="{{ $metaDescription }}">

        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'LocalBusiness',
                'name' => __('ui.brand'),
                'description' => __('ui.tagline'),
                'url' => config('app.url'),
                'telephone' => __('ui.phone'),
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => __('ui.address'),
                    'addressLocality' => 'Shafa Badran',
                    'addressCountry' => 'JO',
                ],
                'sameAs' => [__('ui.map_url')],
            ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
        </script>

        @if (! empty($googleAnalyticsId))
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ $googleAnalyticsId }}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '{{ $googleAnalyticsId }}');
            </script>
        @endif

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        @include('layouts.header', ['locale' => $locale, 'isArabic' => $isArabic])

        @if (session('success'))
            <div class="container mt-5 pt-5">
                <div class="alert alert-success mb-0">{{ session('success') }}</div>
            </div>
        @endif

        @yield('content')

        @include('layouts.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
