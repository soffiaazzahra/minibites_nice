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
    <div class="container cart-content"> <!-- Tambahkan class cart-content -->
        <h1>Whishlist Produk</h1>

        @if ($wishlists->isEmpty())
        <div class="alert alert-info">
            Anda Belum Menambahkan Whishlist
        </div>
        @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wishlists as $index => $wishlist)
                <tr>
                    <td>{{ $wishlist->product->name }}</td>
                    <td>{{ number_format($wishlist->product->price, 2) }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script>
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
    </script> --}}

</body>
</html>
