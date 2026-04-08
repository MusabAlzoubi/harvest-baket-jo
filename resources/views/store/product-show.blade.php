@extends('layouts.app')

@php($activePage = 'shop')

@section('content')
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ $product->localizedName(app()->getLocale()) }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('store.shop', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_shop') }}</a></li>
        <li class="breadcrumb-item active text-white">{{ $product->localizedName(app()->getLocale()) }}</li>
    </ol>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                <img src="{{ $product->image ?: asset('img/fruite-item-1.jpg') }}" class="img-fluid rounded product-hero-image" alt="{{ $product->localizedName(app()->getLocale()) }}">
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded p-4">
                    <h2 class="text-primary">{{ $product->localizedName(app()->getLocale()) }}</h2>
                    <p class="text-muted mb-2">{{ optional($product->category)->localizedName(app()->getLocale()) }}</p>
                    <p>{{ $product->localizedDescription(app()->getLocale()) }}</p>
                    <h3 class="mb-3">{{ number_format($product->displayPrice(), 2) }} {{ __('ui.currency') }} <small class="text-muted">/ {{ $product->base_unit }}</small></h3>
                    <form action="{{ route('store.cart.add', $product) }}" method="POST" class="d-flex gap-2">
                        @csrf
                        <input type="number" name="quantity" class="form-control" min="1" value="1" style="max-width:120px;">
                        <button class="btn btn-primary rounded-pill px-4">{{ __('ui.add_to_cart') }}</button>
                    </form>
                </div>
            </div>
        </div>

        @if($relatedProducts->isNotEmpty())
            <div class="mt-5">
                <h4 class="text-primary mb-4">{{ __('ui.related_products') }}</h4>
                <div class="row g-4">
                    @foreach($relatedProducts as $related)
                        <div class="col-md-6 col-lg-3">
                            <div class="border rounded p-3 h-100 bg-white shadow-sm">
                                <a href="{{ route('store.products.show', ['lang' => app()->getLocale(), 'product' => $related]) }}">
                                    <img src="{{ $related->image ?: asset('img/fruite-item-1.jpg') }}" class="img-fluid rounded mb-3 store-card-image" alt="{{ $related->localizedName(app()->getLocale()) }}">
                                </a>
                                <h6>{{ $related->localizedName(app()->getLocale()) }}</h6>
                                <p class="mb-0"><strong>{{ number_format($related->displayPrice(), 2) }} {{ __('ui.currency') }}</strong></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
