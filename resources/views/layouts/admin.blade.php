<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial;
            display:flex;
            min-height:100vh;
            background:#f4f4f4;
        }

        .sidebar{
            width:220px;
            background:#2c3e50;
            color:white;
            padding:20px;
        }

        .sidebar h2{
            margin-bottom:20px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:10px;
            border-radius:6px;
            margin-bottom:8px;
        }

        .sidebar a:hover,
        .sidebar a.active{
            background:#3498db;
        }

        .content{
            flex:1;
            padding:30px;
        }

        h1{
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:10px;
        }

        th{
            background:#eee;
        }

        .btn{
            display:inline-block;
            padding:10px 16px;
            background:#3498db;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-bottom:20px;
        }

        .success{
            background:#d4edda;
            color:#155724;
            padding:12px;
            border-radius:5px;
            margin-bottom:20px;
        }

    </style>

</head>

<body>

<div class="sidebar">

    <h2>MiniShop</h2>

    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    <a href="{{ route('admin.categories.index') }}"
       class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
        Categories
    </a>

    <a href="{{ route('admin.products.index') }}"
       class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
        Products
    </a>

    <a href="{{ route('admin.about') }}"
       class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">
        About
    </a>

</div>

<div class="content">

    <h1>@yield('page_heading')</h1>

    @include('partials.flash')

    @yield('content')

</div>

</body>
</html>