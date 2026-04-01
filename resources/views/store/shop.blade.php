@extends('layouts.app')

@php($activePage = 'shop')

@section('content')
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ __('ui.nav_shop') }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
        <li class="breadcrumb-item active text-white">{{ __('ui.nav_shop') }}</li>
    </ol>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-8">
                <h2 class="text-primary">{{ __('ui.shop_title') }}</h2>
                <p>{{ __('ui.shop_subtitle') }}</p>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="{{ __('ui.search_placeholder') }}">
                    <button class="btn btn-primary">{{ __('ui.search_btn') }}</button>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="border rounded p-4 h-100">
                    <h5>{{ __('ui.product_green_almond') }}</h5>
                    <p>{{ __('ui.product_green_almond_desc') }}</p>
                    <span class="fw-bold">{{ __('ui.price_sample_1') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="border rounded p-4 h-100">
                    <h5>{{ __('ui.product_grape_leaves') }}</h5>
                    <p>{{ __('ui.product_grape_leaves_desc') }}</p>
                    <span class="fw-bold">{{ __('ui.price_sample_2') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="border rounded p-4 h-100">
                    <h5>{{ __('ui.product_molokhia') }}</h5>
                    <p>{{ __('ui.product_molokhia_desc') }}</p>
                    <span class="fw-bold">{{ __('ui.price_sample_3') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
