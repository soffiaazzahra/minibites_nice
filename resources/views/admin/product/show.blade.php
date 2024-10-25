@extends('admin.page')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Detail Produk</h2>

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
                <h3>{{ $product->nama }}</h3>
                <hr style="border: 1px solid #000;"> <!-- Garis pemisah antara nama dan harga -->
                <p><strong>Harga:</strong> Rp{{ number_format($product->harga, 0, ',', '.') }}.000</p>
                <hr style="border: 1px solid #000;"> <!-- Garis pemisah antara harga dan deskripsi -->
                <p>{{ $product->deskripsi }}</p>
            </div>
        </div>
    </div>

    <!-- Tombol di luar border -->
    <div class="mt-3">
        <a href="{{ route('admin.product.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
    </div>
</div>
@endsection
