<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Menambah produk ke keranjang
    public function addToCart($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->nama,
                'quantity' => 1,
                'price' => $product->harga,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Menampilkan halaman keranjang
    public function viewCart()
    {
        $cart = session()->get('cart');
        return view('landing.cart', compact('cart'));
    }

    // Menghapus produk dari keranjang
public function destroy($id)
{
    $cart = session()->get('cart');
    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    return redirect()->route('cart.view')->with('success', 'Produk berhasil dihapus dari keranjang!');
}

}
