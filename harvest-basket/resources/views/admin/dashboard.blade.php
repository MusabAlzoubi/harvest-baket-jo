@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Dashboard</h1>
        <a href="{{ route('store.home') }}" class="btn btn-outline-success btn-sm">Open Storefront</a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Products</p>
                    <h4 class="mb-0">0</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Categories</p>
                    <h4 class="mb-0">0</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Orders</p>
                    <h4 class="mb-0">0</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-1">Customers</p>
                    <h4 class="mb-0">0</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h2 class="h5">Next Steps</h2>
            <ul class="mb-0">
                <li>Connect dashboard cards to real database counts.</li>
                <li>Implement CRUD for categories and products.</li>
                <li>Connect orders table and status timeline.</li>
            </ul>
        </div>
    </div>
@endsection
