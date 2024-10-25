<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function admin()
    {
        if(Auth::check())
        {
            $products = Product::all();
            return view('admin.page', compact('products'));
        }
        return redirect()->route('auth.login')->withErrors([
            'notif'     => 'login dulu sebelum akses Dashboard',
        ]);
    }
}
