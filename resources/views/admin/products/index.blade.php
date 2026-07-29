@extends('layouts.admin')

@section('title','Products')

@section('page_heading','Products')

@section('content')

<a href="{{ route('admin.products.create') }}" class="btn">
    Thêm mới
</a>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Actions</th>
</tr>

<tr>
    <td>1</td>
    <td>Keychron K2</td>
    <td>Bàn phím</td>
    <td>1.890.000</td>
    <td>Edit Delete</td>
</tr>

<tr>
    <td>2</td>
    <td>Logitech G102</td>
    <td>Chuột</td>
    <td>590.000</td>
    <td>Edit Delete</td>
</tr>

<tr>
    <td>3</td>
    <td>Dell 24"</td>
    <td>Màn hình</td>
    <td>3.590.000</td>
    <td>Edit Delete</td>
</tr>

</table>

<!-- fake data P07; thay Eloquent P09–11 -->

@endsection