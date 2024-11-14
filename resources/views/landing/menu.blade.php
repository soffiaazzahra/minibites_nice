<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whishlist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Tambahkan custom CSS untuk halaman Cart -->
    <style>
        .cart-content {
            margin-top: 120px; /* Beri jarak agar tidak menempel pada navbar */
        }

        /* Tambahkan styling khusus untuk elemen di halaman Cart */
        .cart-content h1 {
            margin-bottom: 2rem; /* Jarak bawah untuk judul */
        }

        .cart-content .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Beri bayangan pada card */
            border: none; /* Hilangkan border default */
        }

        .cart-content .breadcrumb {
            background-color: #f8f9fa; /* Warna latar breadcrumb agar lebih terang */
            padding: 0.75rem 1rem;
            border-radius: 0.25rem;
        }

        /* Tambahkan style untuk total belanja */
        .cart-total {
            font-weight: bold;
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>
<body>

    <!-- Sertakan Navbar -->
    @include('landing.home.navbar')

    <!-- Konten Keranjang Belanja -->
    <section class="menu" id="menu">
        <div class="container cart-content">
            <h1>What We Serve</h1>
            <div class="box-container">
                @foreach($products as $product)
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" width="300" height="auto">
                    </div>
                    <div class="content">
                        <h3>{{ $product->nama }}</h3>
                        <h6>{{ $product->deskripsi }}</h6>
                        <div class="price">Rp {{ number_format($product->harga, 3, '.', '.') }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('landing.home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
