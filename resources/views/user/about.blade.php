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
    @include('user.home.navbar')

    <!-- Konten Keranjang Belanja -->
    <!-- about section starts -->
  <section class="about" id="about">
    <div class="container cart-content">
        <h1 class="heading"> <span> about </span> us </h1>
        <div class="row">
            <div class="video-container">
                <video src="{{asset('nice/images/Snaptik.app_7278215670423145734.mp4')}}" controls autoplay muted loop></video>
                <h3>Pastry Minibites</h3>
            </div>
            <div class="content">
                <h3>Why choose us</h3>
                <p>MiniBites hadir dengan komitmen untuk memberikan pengalaman rasa terbaik melalui produk berkualitas yang dibuat dari bahan pilihan dan diproses secara higienis. Lebih dari sekadar pastry, kami mengutamakan cita rasa otentik yang memanjakan setiap gigitan serta menyajikan variasi rasa yang mengikuti tren dan selera masa kini.</p>
                <p>Dengan resep asli dan inovasi terbaru, MiniBites berusaha menciptakan momen spesial bagi setiap pelanggan kami. Kami memahami bahwa kepuasan pelanggan adalah prioritas utama, sehingga kami selalu menawarkan produk dengan kualitas premium dan layanan yang ramah serta terpercaya. Kami percaya bahwa kelezatan, kualitas, dan nilai tambah produk kami akan membuat MiniBites menjadi pilihan tepat bagi pecinta pastry.</p>
            </div>
        </div>
    </div>
</section>

@include('user.home.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
