@extends('layouts.main')

@section('content')
<h1>Tambah Data Product</h1>

<form action="/store" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="category_id" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach($categories as $c)
                <option value="{{ $c->id }}">
                    {{ $c->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stock" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-control" required>
            <option value="tersedia">Tersedia</option>
            <option value="habis">Habis</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan Data
    </button>

    <a href="/products" class="btn btn-secondary">
        Kembali
    </a>
</form>
@endsection