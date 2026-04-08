@extends('layouts.app')

@php($activePage = 'shop')

@section('content')
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ __('ui.categories_title') }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
        <li class="breadcrumb-item active text-white">{{ __('ui.categories_title') }}</li>
    </ol>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="stats-card"><h6 class="mb-1">{{ __('ui.products_count_label') }}</h6><h4 class="mb-0">{{ $stats['products_count'] }}</h4></div>
            </div>
            <div class="col-md-6">
                <div class="stats-card"><h6 class="mb-1">{{ __('ui.categories_count_label') }}</h6><h4 class="mb-0">{{ $stats['categories_count'] }}</h4></div>
            </div>
        </div>

        <div class="row g-4">
            @foreach($categories as $category)
                <div class="col-md-6 col-lg-4">
                    <div class="border rounded p-3 h-100 bg-white shadow-sm">
                        <a href="{{ route('store.categories.show', ['lang' => app()->getLocale(), 'category' => $category]) }}">
                            <img src="{{ $category->image ?: asset('img/vegetable-item-1.jpg') }}" alt="{{ $category->localizedName(app()->getLocale()) }}" class="img-fluid rounded mb-3 store-card-image">
                        </a>
                        <h5>
                            <a href="{{ route('store.categories.show', ['lang' => app()->getLocale(), 'category' => $category]) }}" class="text-dark">
                                {{ $category->localizedName(app()->getLocale()) }}
                            </a>
                        </h5>
                        <p>{{ $category->localizedDescription(app()->getLocale()) }}</p>
                        <span class="badge bg-primary">{{ $category->products_count }} {{ __('ui.products_count_label') }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
