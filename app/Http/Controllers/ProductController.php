<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan ini diimport

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Menyimpan gambar produk ke dalam storage
        $path = $request->file('image')->store('products', 'public');

        // Membuat produk baru di database
        $product = new Product();
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->image = $path;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update informasi produk
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;

        // Cek jika ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus file gambar lama dari storage
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            // Simpan gambar baru
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        $product->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus file gambar dari storage
        if ($product->image) {
            Storage::delete('public/' . $product->image); // Perbaiki 'storage' menjadi 'Storage'
        }

        // Hapus produk dari database
        $product->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil dihapus!');
    }
}
