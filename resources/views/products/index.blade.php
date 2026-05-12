@extends('layouts.main')

@section('content')
<h1>Daftar Barang Inventaris</h1>

<a href="/create" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td class="text-center">{{ $products->firstItem() + $loop->index }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->category->name }}</td>
            <td>Rp {{ number_format($p->price) }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->status }}</td>
            <td>
                <a href="/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/delete/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- pagination --}}
<div class="mt-3 text-start">
    {{ $products->links() }}
</div>

@endsection