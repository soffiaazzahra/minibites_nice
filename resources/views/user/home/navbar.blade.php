<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBites</title>

    <!-- Sertakan CSS Bootstrap dan Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('nice/css/style.css') }}">

    <!-- Custom CSS -->
    <style>
        /* Navbar Custom Styling */
        header {
            background-color: #fff; /* Latar belakang header */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan header */
        }

        .logo {
            font-size: 2rem; /* Ukuran font logo */
            color: #333; /* Warna logo */
            text-decoration: none; /* Tanpa garis bawah */
        }

        .logo span {
            color: var(--red); /* Warna aksen */
        }

        .navbar-nav .nav-link {
            font-size: 1.3rem; /* Ukuran font link navbar */
            padding: 0.5rem 1.5rem; /* Spasi pada link */
            color: #666; /* Warna default link */
            transition: color 0.3s ease-in-out; /* Transisi halus */
        }

        .navbar-nav .nav-link:hover {
            color: var(--red); /* Warna merah saat hover */
        }

        .navbar-nav .nav-link.active {
            color: var(--red); /* Warna merah untuk link aktif */
            font-weight: bold; /* Bold pada link aktif */
        }

        /* Tombol dashboard */
        .btn-dashboard {
            background-color: var(--red); /* Warna tombol */
            border-radius: 5rem; /* Sudut tombol melengkung */
            font-size: 1.3rem; /* Ukuran font tombol */
            color: #fff; /* Warna teks tombol */
            padding: 0.5rem 2rem; /* Spasi dalam tombol */
            transition: background-color 0.3s ease-in-out; /* Transisi warna saat hover */
        }

        .btn-dashboard:hover {
            background-color: #333; /* Warna saat hover */
        }

        /* Icons */
        .icons a {
            color: #666; /* Warna ikon */
            transition: color 0.3s; /* Transisi warna */
        }

        .icons a:hover {
            color: var(--red); /* Warna saat hover */
        }
    </style>
</head>
<body>

<header class="fixed-top">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <!-- Logo -->
        <a href="#" class="logo text-dark fw-bold">pastry<span class="text-danger">.</span></a>

        <!-- Navbar Links -->
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/user">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Icons -->
        <div class="icons d-flex align-items-center">
            <a href="#" class="me-3">
                <i class="fas fa-heart" style="font-size: 2rem;"></i>
            </a>
            <a href="#" class="me-3">
                <i class="fas fa-shopping-cart" style="font-size: 2rem;"></i>
            </a>
            <form action="{{ route('auth.logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary" style="font-size: 2rem;">Logout</button>
            </form>
        </div>
    </div>
</header>

<!-- Sertakan JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
