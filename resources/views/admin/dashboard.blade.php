<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop Admin — Dashboard</title>
</head>
<body>

    <h1>MiniShop Admin — Dashboard</h1>

    <hr>

    <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
    <a href="{{ route('admin.categories.index') }}">Categories</a> |
    <a href="{{ route('admin.products.index') }}">Products</a> |
    <a href="{{ route('admin.about') }}">About</a>

    <hr>

    <h2>CORE Stats</h2>

    <p>Categories: {{ $stats['categories'] }}</p>

    <p>Products: {{ $stats['products'] }}</p>

    <p>Inventory Value: {{ number_format($stats['inventory_value']) }}</p>

</body>
</html>