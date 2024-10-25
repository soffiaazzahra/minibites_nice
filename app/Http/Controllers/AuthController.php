<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(StoreAuthRequest $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            if (auth()->user()->role_id == 1)
            {
                $products = Product::all();
                return redirect()->route('admin.page');
            } else {
                $products = Product::all();
                return redirect()->route('user.page');
            }
        }

        return back()->withErrors([
            'notif'     =>'Kredensial tidak valid',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing.page')
            ->withSuccess('Anda telah keluar dari Sistem');
    }
}
