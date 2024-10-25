@extends('admin.page')

@section('content')
<div class="container mt-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{ route('landing.page') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <h2 class="mb-4">Daftar Produk</h2>

    <!-- Tombol Create di atas tabel -->
    <div class="mb-3">
        <a href="{{ route('admin.product.create') }}" class="btn btn-success">Tambah Produk</a>
    </div>

    <!-- Tabel daftar produk -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->harga }}</td>
                <td>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" width="100">
                </td>
                <td>{{ $product->deskripsi }}</td>
                <td>
                    <!-- Tombol untuk edit dan delete -->
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
