@extends('layouts.app')

@php($activePage = 'cart')

@section('content')
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ __('ui.nav_cart') }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('store.home', ['lang' => app()->getLocale()]) }}">{{ __('ui.nav_home') }}</a></li>
        <li class="breadcrumb-item active text-white">{{ __('ui.nav_cart') }}</li>
    </ol>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <h2 class="mb-4 text-primary">{{ __('ui.cart_title') }}</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('ui.item') }}</th>
                        <th>{{ __('ui.quantity') }}</th>
                        <th>{{ __('ui.price') }}</th>
                        <th>{{ __('ui.total') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('ui.product_green_almond') }}</td>
                        <td>1</td>
                        <td>{{ __('ui.price_sample_1') }}</td>
                        <td>{{ __('ui.price_sample_1') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('ui.product_grape_leaves') }}</td>
                        <td>2</td>
                        <td>{{ __('ui.price_sample_2') }}</td>
                        <td>{{ __('ui.price_total_sample') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-light rounded p-4">
            <h5>{{ __('ui.cart_note_title') }}</h5>
            <p class="mb-0">{{ __('ui.cart_note_desc') }}</p>
        </div>
    </div>
</div>
@endsection
