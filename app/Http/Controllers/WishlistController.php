<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\user;

class WishlistController extends Controller
{
    public function toggle(Request $request, $productId)
    {
        $user = Auth::user();

        // Fetch the product by its ID
        $product = Product::find($productId);

        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Cek apakah produk sudah ada di wishlist user
        $wishlistItem = Wishlist::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();

        if ($wishlistItem) {
            // Jika sudah ada, hapus dari wishlist
            $wishlistItem->delete();
            return redirect()->back()->with('status', 'Removed from Wishlist');
        } else {
            // Jika belum ada, tambahkan ke wishlist
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
            ]);
            return redirect()->back()->with('status', 'Added to Wishlist');
        }
    }

    public function viewWishlist()
    {
        $user = auth()->user(); // Mendapatkan user yang terautentikasi
        $wishlists = Wishlist::with('product') // Menarik relasi dengan model 'Product'
        ->where('user_id', $user->id)
        ->get(); // Ambil semua data wishlist yang berhubungan dengan user

    return view('user.wishlist', compact('wishlists')); // Kirim data wishlist ke view
    }


}
