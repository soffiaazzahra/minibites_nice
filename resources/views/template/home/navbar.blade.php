<nav id="navmenu" class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;"> <!-- Mengatur latar belakang menjadi putih -->
    <div class="container-fluid">
        <!-- Navbar Brand dengan Jarak -->
        <a class="navbar-brand me-5" href="#">MiniBites</a> <!-- Menambahkan me-5 untuk memberi jarak -->

        <!-- Toggler untuk Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-5"> <!-- Menambahkan me-5 untuk memberi jarak -->
                    <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                </li>
                <li class="nav-item me-5"> <!-- Menambahkan me-5 untuk memberi jarak -->
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item me-5"> <!-- Menambahkan me-5 untuk memberi jarak -->
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item me-5"> <!-- Menambahkan me-5 untuk memberi jarak -->
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>

            <!-- Right Navbar Actions -->
            <div class="d-flex align-items-center ms-auto">
                <!-- Search Form -->
                <form class="d-flex me-5" style="margin-left: 80px;"> <!-- Jarak di sini ditambah -->
                    <input type="text" placeholder="Search" class="form-control" style="border-radius: 20px; padding: 0.5rem 1rem;">
                </form>

                <!-- Cart Button Tanpa Border -->
                <button class="btn btn-light me-5" style="border: none; border-radius: 50%; padding: 0.5rem;">
                    <i class="bi bi-cart" style="font-size: 1.2rem;"></i>
                </button>

                <!-- Book a Table Button -->
                <a class="btn btn-primary btn-getstarted" href="index.html#book-a-table">Registrasi</a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Memastikan navbar lebih lebar */
    #navmenu {
        padding: 0.5rem 2rem; /* Menambah padding untuk lebar navbar */
    }
</style>