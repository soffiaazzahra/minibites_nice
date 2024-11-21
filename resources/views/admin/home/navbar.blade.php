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
            padding: 0.5rem 1.5rem;
        }

        .logo {
        font-size: 2rem;
        color: #333;
        text-decoration: none;
        display: inline-block;
        text-align: left;
        margin-right: 2rem; /* Tambahkan margin kanan pada logo */
        }

        .logo span {
            color: var(--red); /* Warna aksen */
        }

        /* Untuk memastikan logo di tengah */
        .navbar {
            display: flex;
            justify-content: center; /* Pusatkan semua elemen di dalam navbar */
            align-items: center;
            width: 100%;
        }

        /* Styling untuk menu navbar */
        .navbar-nav .nav-link {
        font-size: 1.3rem;
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

        /* Tombol Dashboard */
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

        /* Tombol Logout dengan Styling yang Sama */
        .btn-logout {
            background-color: var(--red); /* Warna tombol sama dengan tombol dashboard */
            border-radius: 5rem; /* Sudut tombol melengkung sama */
            font-size: 1.3rem; /* Ukuran font yang sama */
            color: #fff; /* Warna teks tombol */
            padding: 0.5rem 2rem; /* Spasi dalam tombol */
            transition: background-color 0.3s ease-in-out; /* Transisi warna saat hover */
        }

        .btn-logout:hover {
            background-color: #333; /* Warna hover yang sama */
        }

        /* Icons */
        .icons a {
            color: #666; /* Warna ikon */
            transition: color 0.3s; /* Transisi warna */
        }

        .icons a:hover {
            color: var(--red); /* Warna saat hover */
        }

        /* Toggler Styling untuk mobile */
        #toggler {
            display: none; /* Sembunyikan toggle pada ukuran besar */
        }

        @media (max-width: 768px) {
            #toggler {
                display: block; /* Tampilkan toggle di mobile */
                font-size: 2rem; /* Ukuran tombol toggle lebih kecil */
                background-color: transparent;
                border: none;
                color: #333;
            }
        }
    </style>
</head>
<body>

    <header class="fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <input type="checkbox" name="" id="toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <label for="toggler" class="fa fa-bars"></label>
            <a href="{{ route('admin.product.index') }}" class="logo text-dark fw-bold">minibites<span class="text-danger">.</span></a>
            <!-- Navbar Links -->
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto"> <!-- Gunakan mx-auto untuk menyejajarkan navbar links di tengah -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.product.index') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.contact.index') }}">Contact</a>
                        </li>
                    </ul>
                    <!-- Tombol Logout tetap di sisi kanan -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>






    <!-- Sertakan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
