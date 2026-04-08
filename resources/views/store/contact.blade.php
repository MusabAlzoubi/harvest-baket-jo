@extends('layouts.app')

@php($activePage = 'contact')

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
                                style="height: 400px;" src="https://www.google.com/maps?q=31.996341,35.869004&z=17&output=embed"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    <p class="mb-2"><a href="{{ __('ui.map_url') }}" target="_blank" rel="noopener">{{ __('ui.address') }}</a></p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fab fa-whatsapp fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>{{ __('ui.whatsapp_label') }}</h4>
                                    <p class="mb-2"><a href="{{ __('ui.whatsapp_url') }}" target="_blank" rel="noopener">{{ __('ui.phone') }}</a></p>
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
