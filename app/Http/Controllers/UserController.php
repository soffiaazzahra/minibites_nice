<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class UserController extends Controller
{
    //
    public function user()
    {
        if(Auth::check())
        {
            $products = Product::all();
            return view('user.page', compact('products'));
        }
        return redirect()->route('auth.login')->withErrors([
            'notif'     => 'login dulu sebelum akses Dashboard',
        ]);
    }

    public function menu()
    {
        if(Auth::check())
        {
            $products = Product::all();
            return view('user.menu', compact('products'));
        }
        return redirect()->route('auth.login')->withErrors([
            'notif'     => 'login dulu sebelum akses Dashboard',
        ]);
    }

    public function about()
    {
        if(Auth::check())
        {
            $products = Product::all();
            return view('user.about');
        }
        return redirect()->route('auth.login')->withErrors([
            'notif'     => 'login dulu sebelum akses Dashboard',
        ]);
    }

    public function contact()
    {
        if(Auth::check())
        {
            $products = Product::all();
            return view('user.contact');
        }
        return redirect()->route('auth.login')->withErrors([
            'notif'     => 'login dulu sebelum akses Dashboard',
        ]);
    }
}
