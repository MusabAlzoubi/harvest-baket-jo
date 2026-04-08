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

        @if($cartItems->isEmpty())
            <div class="alert alert-info">{{ __('ui.cart_empty') }}</div>
        @else
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>{{ __('ui.item') }}</th>
                            <th>{{ __('ui.quantity') }}</th>
                            <th>{{ __('ui.price') }}</th>
                            <th>{{ __('ui.total') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ $item['product']->image ?: asset('img/fruite-item-1.jpg') }}" alt="{{ $item['product']->localizedName(app()->getLocale()) }}" class="cart-thumb rounded">
                                        <div>
                                            <div>{{ $item['product']->localizedName(app()->getLocale()) }}</div>
                                            <small class="text-muted">{{ optional($item['product']->category)->localizedName(app()->getLocale()) }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('store.cart.update', $item['product']) }}" method="POST" class="d-flex gap-2">
                                        @csrf
                                        <input type="number" name="quantity" min="0" value="{{ $item['quantity'] }}" class="form-control form-control-sm" style="max-width:90px;">
                                        <button class="btn btn-outline-primary btn-sm">{{ __('ui.update') }}</button>
                                    </form>
                                </td>
                                <td>{{ number_format($item['unit_price'], 2) }} {{ __('ui.currency') }}</td>
                                <td>{{ number_format($item['line_total'], 2) }} {{ __('ui.currency') }}</td>
                                <td>
                                    <form action="{{ route('store.cart.remove', $item['product']) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-danger">{{ __('ui.remove') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <div class="bg-light rounded p-4" style="min-width: 280px;">
                    <div class="d-flex justify-content-between fw-bold">
                        <span>{{ __('ui.total') }}</span>
                        <span>{{ number_format($subtotal, 2) }} {{ __('ui.currency') }}</span>
                    </div>
                    <a href="{{ route('store.checkout', ['lang' => app()->getLocale()]) }}" class="btn btn-primary rounded-pill w-100 mt-3">{{ __('ui.nav_checkout') }}</a>
                </div>
            </div>
        @endif

        <div class="bg-light rounded p-4 mt-4">
            <h5>{{ __('ui.cart_note_title') }}</h5>
            <p class="mb-0">{{ __('ui.cart_note_desc') }}</p>
        </div>
    </div>
</div>
@endsection
