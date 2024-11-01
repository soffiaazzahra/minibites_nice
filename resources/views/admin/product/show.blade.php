@extends('admin.page')

@section('content')
<div class="container admin-container" style="padding-top: 5px; font-size: 1.1rem;">
    <h2 class="mb-4" style="font-size: 1.8rem;">Detail Produk</h2> <!-- Memperbesar ukuran judul -->

    <div class="border p-3" style="border-radius: 8px; border: 1px solid #000;">
        <div class="row">
            <!-- Bagian Gambar di Kiri -->
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" class="img-fluid" style="width: 100%; height: auto; max-height: 300px; object-fit: cover;">
            </div>

            <!-- Garis Pemisah antara Gambar dan Deskripsi -->
            <div class="col-md-1 d-flex align-items-center">
                <hr style="border: 1px solid #000; height: 100%; margin: 0;">
            </div>

            <!-- Bagian Deskripsi di Kanan -->
            <div class="col-md-7 d-flex flex-column justify-content-center">
                <h3 style="font-size: 1.6rem;">{{ $product->nama }}</h3> <!-- Memperbesar ukuran nama produk -->
                <hr style="border: 1px solid #000;">
                <p><strong>Harga:</strong> Rp{{ number_format($product->harga, 0, ',', '.') }}.000</p>
                <hr style="border: 1px solid #000;">
                <p style="font-size: 1.1rem;">{{ $product->deskripsi }}</p> <!-- Memperbesar ukuran deskripsi -->
            </div>
        </div>
    </div>

    <!-- Tombol di luar border -->
    <div class="mt-3">
        <a href="{{ route('admin.product.index') }}" class="admin-btn btn-primary btn-lg" style="background-color: #CD3449; color: white; border: none;">Kembali ke Daftar Produk</a>
    </div>
</div>
<style>
    .admin-btn {
        background-color: #CD3449;
        color: white;
        border: none;
        padding: 0.6rem 1.2rem;
        font-size: 1.2rem; /* Memperbesar ukuran font tombol */
        border-radius: 0.25rem;
    }
    .admin-btn:hover {
        background-color: #b12c3f;
    }

    .form-label {
        font-size: 1.2rem;
    }

    input.form-control, 
    textarea.form-control {
        font-size: 1.1rem;
    }
</style>
@endsection
