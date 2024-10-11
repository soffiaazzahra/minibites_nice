<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        // Sesuaikan view ini dengan view landing page kamu
        //Ambil semua produk dari database
        $products = Product::all();
    
        // Kirimkan data produk ke view landing page
        return view('landing.page', compact('products'));
    }
}
