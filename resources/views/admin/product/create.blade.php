@extends('admin.page')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Tambah Produk</h2>
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk:</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Produk" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk:</label>
            <input type="number" class="form-control" name="harga" placeholder="Harga Produk" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk:</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Produk:</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Produk" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Tambah Produk</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>

@endsection