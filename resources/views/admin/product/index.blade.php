@extends('admin.page')

@section('content')

<div class="container admin-container" style="padding-top: 400px;"> <!-- Tingkatkan padding-top sesuai kebutuhan -->
    <!-- Konten lainnya -->
    
    <h2 class="mb-4" style="margin-top: 50px;">Daftar Produk</h2> <!-- Tambahkan margin-top jika perlu -->

    <!-- Tombol Create di atas tabel -->
    <div class="mb-3">
        <a href="{{ route('admin.product.create') }}" class="btn btn-success btn-admin">Tambah Produk</a>
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
                    <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-info btn-admin">Show</a>
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-admin">Edit</a>
                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-admin">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
