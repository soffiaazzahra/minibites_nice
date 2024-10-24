<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class DashboardController extends Controller
{
    //
    public function user()
    {
        if(Auth::check())
        {
            $products = Product::all();
            return view('member.page', compact('products'));
        }
        return redirect()->route('auth.login')->withErrors([
            'notif'     => 'login dulu sebelum akses Dashboard',
        ]);
    }

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
