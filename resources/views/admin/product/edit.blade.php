@extends('admin.page')

@section('content')
<div class="container admin-container" style="padding-top: 5px;">
    <h2 class="mb-4">Edit Produk</h2>

    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $product->nama }}" required>
        </div>
        
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk (Kosongkan jika tidak ingin mengubah)</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $product->deskripsi }}</textarea>
        </div>

        <button type="submit" class="admin-btn btn-primary btn-lg" style="background-color: #CD3449; color: white; border: none;">Update Produk</button>
    </form>
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
