<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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

<section class="contact" id="contact">
    <div class="container cart-content">
        <h1 class="heading"> <span> contact </span> us </h1>
        <div class="row">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" class="box" required>
                <input type="email" name="email" placeholder="Email" class="box" required>
                <input type="number" name="number" placeholder="Number" class="box" required>
                <textarea name="message" class="box" placeholder="Message" cols="30" rows="10" required></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>
    </div>
</section>

@include('user.home.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
