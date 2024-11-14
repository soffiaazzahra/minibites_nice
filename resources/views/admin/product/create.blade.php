@extends('admin.page')

@section('content')
<div class="container admin-container" style="padding-top: 5px; font-size: 1.2rem;"> <!-- Menambahkan font-size di sini -->
    <h2 class="mb-4" style="font-size: 2rem;">Tambah Produk</h2> <!-- Ukuran judul lebih besar -->
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
        <button type="submit" class="admin-btn btn-primary btn-lg" style="background-color: #CD3449; color: white; border: none;">Tambah Produk</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
<style>
    .admin-btn {
        background-color: #CD3449;
        color: white;
        border: none;
        padding: 0.6rem 1.2rem;
        font-size: 1.1rem; /* Font ukuran sedang */
        border-radius: 0.25rem;
    }
    .admin-btn:hover {
        background-color: #b12c3f;
    }

    .form-label {
        font-size: 1.2rem; /* Memperbesar label form */
    }

    input.form-control, 
    textarea.form-control {
        font-size: 1.1rem; /* Memperbesar teks dalam input dan textarea */
    }
</style>
@endsection
