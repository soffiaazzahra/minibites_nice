<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
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
    <div class="container cart-content"> <!-- Tambahkan class cart-content -->
        <h1>Keranjang Belanja</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($cart)
            <div class="row">
                @foreach ($cart as $id => $details)
                    <div class="col-12 mb-4 d-flex align-items-center">
                        <!-- Checkbox untuk memilih produk -->
                        <div class="form-check me-3">
                            <input type="checkbox" name="selected_products[]" value="{{ $id }}" class="form-check-input product-checkbox" id="product-{{ $id }}" data-price="{{ $details['price'] }}">
                            <label class="form-check-label" for="product-{{ $id }}"></label>
                        </div>
                        <!-- Detail produk dalam card -->
                        <div class="card w-100 h-100">
                            <div class="card-body d-flex align-items-center">
                                <img src="{{ asset('storage/' . $details['image']) }}" class="card-img-top me-3" alt="{{ $details['name'] }}" style="width: 80px; height: auto;">
                                <div class="flex-grow-1">
                                    <h5 class="card-title">{{ $details['name'] }}</h5>
                                    <p class="card-text">Rp {{ number_format($details['price'], 3, '.', '.') }}</p>
                                    <p class="card-text">Jumlah:
                                        <input type="number" name="quantities[{{ $id }}]" value="{{ $details['quantity'] }}" min="1" class="form-control w-50 quantity-input" style="display:inline-block;">
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Total Belanja -->
            <div class="cart-total">
                <h3>Total Belanja: Rp <span id="total-price">0</span></h3>
                <a href="#" id="whatsapp-button" class="btn btn-success mt-3" style="display: none;" target="_blank">
                    Pesan via WhatsApp
                </a>
            </div>

        @else
            <div class="alert alert-info">
                Keranjang belanja Anda kosong.
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.product-checkbox');
            const totalPriceElement = document.getElementById('total-price');
            const whatsappButton = document.getElementById('whatsapp-button');

            // Fungsi untuk menghitung total harga dan membuat pesan WhatsApp
            function calculateTotal() {
                let total = 0;
                let selectedProducts = [];

                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        const productCard = checkbox.closest('.d-flex');
                        const price = parseFloat(checkbox.dataset.price); // Harga asli produk
                        const quantity = parseInt(productCard.querySelector('.quantity-input').value);
                        const productName = productCard.querySelector('.card-title').textContent;

                        total += price * quantity; // Hitung total belanja
                        selectedProducts.push(`${productName} x${quantity} - Rp ${formatPrice(price)}`); // Tampilkan harga asli
                    }
                });

                totalPriceElement.textContent = formatPrice(total); // Tampilkan total
                toggleWhatsappButton(selectedProducts);
            }

            // Fungsi untuk menampilkan atau menyembunyikan tombol WhatsApp
            function toggleWhatsappButton(products) {
                if (products.length > 0) {
                    const message = `Halo, saya ingin memesan:\n\n${products.join('\n')}\n\nTotal: Rp ${totalPriceElement.textContent}`;
                    whatsappButton.href = `https://wa.me/6289501777943?text=${encodeURIComponent(message)}`;
                    whatsappButton.style.display = 'inline-block';
                } else {
                    whatsappButton.style.display = 'none';
                }
            }

            // Fungsi untuk menambahkan format koma pada harga
            function formatPrice(price) {
                return price.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ".").replace('.', '.');
            }

            checkboxes.forEach(checkbox => checkbox.addEventListener('change', calculateTotal));
            document.querySelectorAll('.quantity-input').forEach(input => input.addEventListener('input', calculateTotal));

            // Hitung total saat halaman pertama kali dimuat
            calculateTotal();
        });
    </script>



</body>
</html>
