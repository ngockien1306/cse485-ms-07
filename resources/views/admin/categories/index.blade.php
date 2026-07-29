@extends('layouts.admin')

@section('title','Categories')

@section('page_heading','Categories')

@section('content')

<a href="{{ route('admin.categories.create') }}" class="btn">
    Thêm mới
</a>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Actions</th>
</tr>

<tr>
    <td>1</td>
    <td>Bàn phím</td>
    <td>Mechanical</td>
    <td>Edit Delete</td>
</tr>

<tr>
    <td>2</td>
    <td>Chuột</td>
    <td>Gaming</td>
    <td>Edit Delete</td>
</tr>

<tr>
    <td>3</td>
    <td>Màn hình</td>
    <td>27 inch</td>
    <td>Edit Delete</td>
</tr>

</table>

<!-- fake data P07; thay Eloquent P09–11 -->

@endsection