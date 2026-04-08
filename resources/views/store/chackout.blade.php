@extends('layouts.app')

@php($activePage = 'checkout')

@section('content')
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ __('ui.nav_checkout') }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
        <li class="breadcrumb-item active text-white">{{ __('ui.nav_checkout') }}</li>
    </ol>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <h2 class="mb-4 text-primary">{{ __('ui.checkout_title') }}</h2>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="bg-light rounded p-4">
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.name') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.phone_label') }}</label>
                        <input type="tel" class="form-control" placeholder="{{ __('ui.phone_placeholder') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.address_label') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('ui.address') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.message_placeholder') }}</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <button class="btn btn-primary rounded-pill px-4">{{ __('ui.send') }}</button>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="bg-white border rounded p-4">
                    <h5>{{ __('ui.order_summary') }}</h5>
                    @forelse($cartItems as $item)
                        <p class="mb-2">{{ $item['product']->localizedName(app()->getLocale()) }} × {{ $item['quantity'] }}</p>
                    @empty
                        <p class="mb-2">{{ __('ui.cart_empty') }}</p>
                    @endforelse
                    <hr>
                    <div class="d-flex justify-content-between">
                        <strong>{{ __('ui.total') }}</strong>
                        <strong>{{ number_format($subtotal, 2) }} {{ __('ui.currency') }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
