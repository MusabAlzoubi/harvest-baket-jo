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
                <form method="GET" action="{{ route('store.shop') }}" class="input-group">
                    <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
                    <input type="search" name="q" value="{{ request('q') }}" class="form-control" placeholder="{{ __('ui.search_placeholder') }}">
                    <button class="btn btn-primary">{{ __('ui.search_btn') }}</button>
                </form>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3">
                <div class="border rounded p-4">
                    <h5 class="mb-3">{{ __('ui.categories_title') }}</h5>
                    <a class="d-block mb-2 {{ request('category') ? '' : 'fw-bold text-primary' }}" href="{{ route('store.shop', ['lang' => app()->getLocale(), 'q' => request('q')]) }}">{{ __('ui.tab_all') }}</a>
                    @foreach($categories as $category)
                        <a class="d-flex justify-content-between mb-2 {{ request('category') === $category->slug ? 'fw-bold text-primary' : '' }}" href="{{ route('store.shop', ['lang' => app()->getLocale(), 'category' => $category->slug, 'q' => request('q')]) }}">
                            <span>{{ $category->localizedName(app()->getLocale()) }}</span>
                            <span class="text-muted">{{ $category->products_count }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row g-4">
                    @forelse($products as $product)
                        <div class="col-md-6 col-lg-4">
                            <div class="border rounded p-3 h-100 bg-white">
                                <img src="{{ $product->image ?: asset('img/fruite-item-1.jpg') }}" class="img-fluid rounded mb-3 store-card-image" alt="{{ $product->localizedName(app()->getLocale()) }}">
                                <h6>{{ $product->localizedName(app()->getLocale()) }}</h6>
                                <p class="small text-muted mb-2">{{ \Illuminate\Support\Str::limit($product->localizedDescription(app()->getLocale()), 70) }}</p>
                                <p class="mb-2"><strong>{{ number_format($product->displayPrice(), 2) }} {{ __('ui.currency') }}</strong> / {{ $product->base_unit }}</p>
                                <form action="{{ route('store.cart.add', $product) }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    <input type="number" name="quantity" class="form-control form-control-sm" min="1" value="1">
                                    <button type="submit" class="btn btn-primary btn-sm rounded-pill px-3">{{ __('ui.add_to_cart') }}</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>{{ __('ui.no_products') }}</p>
                    @endforelse
                </div>

                <div class="mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
