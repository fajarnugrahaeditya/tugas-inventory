@extends('layouts.main')

@section('content')
<h1>Edit Data Product</h1>

{{-- tampilkan error validasi --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/update/{{ $product->id }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>

        <input type="text"
               name="name"
               class="form-control"
               value="{{ old('name', $product->name) }}"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>

        <select name="category_id" class="form-control" required>

            @foreach($categories as $c)
                <option value="{{ $c->id }}"
                    {{ old('category_id', $product->category_id) == $c->id ? 'selected' : '' }}>

                    {{ $c->name }}

                </option>
            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga</label>

        <input type="number"
               name="price"
               class="form-control"
               value="{{ old('price', $product->price) }}"
               min="1"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>

        <input type="number"
               name="stock"
               class="form-control"
               value="{{ old('stock', $product->stock) }}"
               min="1"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>

        <select name="status" class="form-control" required>

            <option value="tersedia"
                {{ old('status', $product->status) == 'tersedia' ? 'selected' : '' }}>
                Tersedia
            </option>

            <option value="habis"
                {{ old('status', $product->status) == 'habis' ? 'selected' : '' }}>
                Habis
            </option>

        </select>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan Perubahan
    </button>

    <a href="/products" class="btn btn-secondary">
        Kembali
    </a>
</form>
@endsection