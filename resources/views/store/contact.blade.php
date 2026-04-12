@extends('layouts.app')

@php($activePage = 'contact')

@section('meta_title', __('ui.contact_meta_title'))
@section('meta_description', __('ui.contact_meta_description'))

@section('content')
        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">{{ __('ui.contact_page_title') }}</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
                <li class="breadcrumb-item active text-white">{{ __('ui.nav_contact') }}</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">{{ __('ui.contact_headline') }}</h1>
                                <h4 class="text-center">{{ __('ui.contact_subheadline', ['phone' => __('ui.phone')]) }}</h4>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="h-100 rounded">
                                <iframe class="rounded w-100"
                                style="height: 400px;" src="{{ config('services.google.maps_embed_url') }}"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="bg-white p-4 rounded">
                                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                                    <div>
                                        <h4 class="mb-1">{{ __('ui.google_reviews_title') }}</h4>
                                        <p class="mb-0 text-muted">{{ __('ui.google_reviews_subtitle') }}</p>
                                    </div>
                                    <a class="btn btn-primary rounded-pill px-4 py-2" href="{{ $googlePlace['url'] ?? config('services.google.maps_review_url') }}" target="_blank" rel="noopener" data-analytics-event="review_click" data-analytics-category="reputation" data-analytics-label="contact_reviews_cta">
                                        {{ __('ui.write_google_review') }}
                                    </a>
                                </div>

                                @if ($googlePlace && ! empty($googlePlace['reviews']))
                                    <div class="mb-3">
                                        <span class="badge bg-success fs-6">
                                            {{ __('ui.google_rating_summary', ['rating' => $googlePlace['rating'] ?? '-', 'total' => $googlePlace['user_ratings_total'] ?? '-']) }}
                                        </span>
                                    </div>
                                    <div class="row g-3">
                                        @foreach ($googlePlace['reviews'] as $review)
                                            <div class="col-md-6">
                                                <div class="border rounded p-3 h-100">
                                                    <h6 class="mb-1">{{ $review['author_name'] }}</h6>
                                                    <p class="small text-muted mb-2">{{ __('ui.review_rating', ['rating' => $review['rating'] ?? '-']) }} · {{ $review['relative_time_description'] }}</p>
                                                    <p class="mb-0">{{ $review['text'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="mb-0">{{ __('ui.google_reviews_fallback') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <form action="" class="">
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="{{ __('ui.name') }}">
                                <input type="tel" class="w-100 form-control border-0 py-3 mb-4" placeholder="{{ __('ui.phone_placeholder') }}">
                                <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="{{ __('ui.message_placeholder') }}"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit">{{ __('ui.send') }}</button>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>{{ __('ui.address_label') }}</h4>
                                    <p class="mb-2"><a href="{{ __('ui.map_url') }}" target="_blank" rel="noopener" data-analytics-event="map_open" data-analytics-category="contact" data-analytics-label="contact_card_address">{{ __('ui.address') }}</a></p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fab fa-whatsapp fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>{{ __('ui.whatsapp_label') }}</h4>
                                    <p class="mb-2"><a href="{{ __('ui.whatsapp_url') }}" target="_blank" rel="noopener" data-analytics-event="whatsapp_click" data-analytics-category="contact" data-analytics-label="contact_card_whatsapp">{{ __('ui.phone') }}</a></p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>{{ __('ui.phone_label') }}</h4>
                                    <p class="mb-2">{{ __('ui.phone') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection
