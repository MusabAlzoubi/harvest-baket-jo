@extends('layouts.app')

@php($activePage = 'shop')

@section('content')
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ $category->localizedName(app()->getLocale()) }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('store.categories', ['lang' => app()->getLocale()]) }}">{{ __('ui.categories_title') }}</a></li>
        <li class="breadcrumb-item active text-white">{{ $category->localizedName(app()->getLocale()) }}</li>
    </ol>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="text-primary mb-1">{{ $category->localizedName(app()->getLocale()) }}</h2>
                <p class="mb-0">{{ $category->localizedDescription(app()->getLocale()) }}</p>
            </div>
            <a href="{{ route('store.shop', ['lang' => app()->getLocale(), 'category' => $category->slug]) }}" class="btn btn-outline-primary rounded-pill">{{ __('ui.shop_this_category') }}</a>
        </div>

        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-md-6 col-lg-3">
                    <div class="border rounded p-3 h-100 bg-white shadow-sm">
                        <a href="{{ route('store.products.show', ['lang' => app()->getLocale(), 'product' => $product]) }}">
                            <img src="{{ $product->image ?: asset('img/fruite-item-1.jpg') }}" alt="{{ $product->localizedName(app()->getLocale()) }}" class="img-fluid rounded mb-3 store-card-image">
                        </a>
                        <h6>{{ $product->localizedName(app()->getLocale()) }}</h6>
                        <p class="mb-2"><strong>{{ number_format($product->displayPrice(), 2) }} {{ __('ui.currency') }}</strong></p>
                        <form action="{{ route('store.cart.add', $product) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary rounded-pill w-100">{{ __('ui.add_to_cart') }}</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>{{ __('ui.no_products') }}</p>
            @endforelse
        </div>

        <div class="mt-4 d-flex justify-content-center">{{ $products->links() }}</div>
    </div>
</div>
@endsection
