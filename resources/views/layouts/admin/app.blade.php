<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Harvest Basket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container-fluid">
    <div class="row min-vh-100">
        <aside class="col-12 col-md-3 col-lg-2 bg-dark text-white p-3">
            <h5 class="mb-4">Harvest Basket Admin</h5>
            <nav class="nav flex-column gap-2">
                <a class="nav-link text-white p-0" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="nav-link text-white-50 p-0" href="#">Products</a>
                <a class="nav-link text-white-50 p-0" href="#">Categories</a>
                <a class="nav-link text-white-50 p-0" href="#">Orders</a>
                <a class="nav-link text-white-50 p-0" href="#">Settings</a>
            </nav>
        </aside>
        <main class="col-12 col-md-9 col-lg-10 p-4">
            @yield('content')
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
