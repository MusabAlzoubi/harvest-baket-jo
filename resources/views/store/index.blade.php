@extends('layouts.app')

@php($activePage = 'home')

@section('content')
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">{{ __('ui.hero_kicker') }}</h4>
                <h1 class="mb-3 display-5 text-primary">{{ __('ui.hero_title') }}</h1>
                <p class="mb-4">{{ __('ui.home_intro') }}</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ __('ui.whatsapp_url') }}" target="_blank" rel="noopener" class="btn btn-primary rounded-pill px-4 py-2">{{ __('ui.order_whatsapp') }}</a>
                    <a href="{{ route('store.shop', ['lang' => app()->getLocale()]) }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">{{ __('ui.nav_shop') }}</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 text-center">
                <img src="{{ asset('img/hero-img-1.png') }}" class="img-fluid" alt="{{ __('ui.brand') }}">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4 h-100">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;">
                        <i class="fas fa-shipping-fast fa-2x text-primary"></i>
                    </div>
                    <h5>{{ __('ui.feature_delivery_title') }}</h5>
                    <p class="mb-0">{{ __('ui.feature_delivery_desc') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4 h-100">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;">
                        <i class="fas fa-award fa-2x text-primary"></i>
                    </div>
                    <h5>{{ __('ui.feature_trust_title') }}</h5>
                    <p class="mb-0">{{ __('ui.feature_trust_desc') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4 h-100">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;">
                        <i class="fas fa-hand-holding-heart fa-2x text-primary"></i>
                    </div>
                    <h5>{{ __('ui.feature_pick_title') }}</h5>
                    <p class="mb-0">{{ __('ui.feature_pick_desc') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4 h-100">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;">
                        <i class="fas fa-smile-beam fa-2x text-primary"></i>
                    </div>
                    <h5>{{ __('ui.feature_service_title') }}</h5>
                    <p class="mb-0">{{ __('ui.feature_service_desc') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h2 class="text-primary">{{ __('ui.categories_title') }}</h2>
            <p>{{ __('ui.categories_subtitle') }}</p>
        </div>
        <div class="row g-4">
            @forelse($categories as $category)
                <div class="col-md-6 col-lg-3">
                    <div class="border rounded p-3 h-100 bg-white">
                        <img src="{{ $category->image ?: asset('img/vegetable-item-1.jpg') }}" class="img-fluid rounded mb-3 store-card-image" alt="{{ $category->localizedName(app()->getLocale()) }}">
                        <h5>{{ $category->localizedName(app()->getLocale()) }}</h5>
                        <p class="mb-0">{{ $category->localizedDescription(app()->getLocale()) }}</p>
                    </div>
                </div>
            @empty
                <p class="text-center">{{ __('ui.no_categories') }}</p>
            @endforelse
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h2 class="text-primary mb-1">{{ __('ui.products_title') }}</h2>
                <p class="mb-0">{{ __('ui.products_subtitle') }}</p>
            </div>
            <a href="{{ route('store.shop', ['lang' => app()->getLocale()]) }}" class="btn btn-outline-primary rounded-pill px-4">{{ __('ui.view_all_products') }}</a>
        </div>
        <div class="row g-4">
            @forelse($featuredProducts as $product)
                <div class="col-md-6 col-lg-3">
                    <div class="border rounded p-3 h-100 bg-white">
                        <img src="{{ $product->image ?: asset('img/fruite-item-1.jpg') }}" class="img-fluid rounded mb-3 store-card-image" alt="{{ $product->localizedName(app()->getLocale()) }}">
                        <h6 class="mb-1">{{ $product->localizedName(app()->getLocale()) }}</h6>
                        <p class="small text-muted mb-2">{{ optional($product->category)->localizedName(app()->getLocale()) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>{{ number_format($product->displayPrice(), 2) }} {{ __('ui.currency') }}</strong>
                            <form action="{{ route('store.cart.add', $product) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary rounded-pill px-3">{{ __('ui.add_to_cart') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">{{ __('ui.no_products') }}</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
