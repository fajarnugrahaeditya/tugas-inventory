@extends('layouts.main')

@section('content')

<div class="text-center mt-5">

    <h1 class="mb-3">
        Inventory App
    </h1>

    <p class="text-muted mb-4">
        Selamat datang pada aplikasi inventaris sederhana Laravel.
    </p>

    <a href="/products"
       class="btn btn-primary">
        Kelola Produk
    </a>

    <a href="/categories"
       class="btn btn-success">
        Kelola Kategori
    </a>

</div>

@endsection