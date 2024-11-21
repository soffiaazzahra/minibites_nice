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

</head>
<body>

    <header class="fixed-top">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <input type="checkbox" name="" id="toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <label for="toggler" class="fa fa-bars"></label>
            <!-- Logo -->
            <a href="{{ route('landing.page') }}" class="logo text-dark fw-bold">MINIBITES<span class="text-danger">.</span></a>

            <!-- Navbar Links -->
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing.page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing.menu') }}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing.about') }}">About Us</a>
                        </li>
                        <!-- Tombol Login hanya muncul di layar kecil -->
                        <li class="nav-item d-lg-none">
                            <a href="{{ route('auth.login') }}" class="btn btn-primary">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Icons untuk layar besar dan kecil -->
            <div class="icons d-flex align-items-center">
                <!-- Ikon Like yang tidak bisa dipencet -->
<a class="me-3 disabled-icon" style="pointer-events: none;">
    <i class="fas fa-heart" style="font-size: 1.5rem;"></i>
</a>

<!-- Ikon Shopping Cart yang tidak bisa dipencet -->
<a class="me-3 position-relative disabled-icon" style="pointer-events: none;">
    <i class="fas fa-shopping-cart" style="font-size: 1.5rem;"></i>
</a>

                <!-- Tombol Login untuk layar besar -->
                <a href="{{ route('auth.login') }}" class="d-none d-lg-block">
                    <i class="btn btn-primary" style="font-size: 2rem;">Login</i>
                </a>
            </div>
        </div>
    </header>

    <!-- Sertakan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
