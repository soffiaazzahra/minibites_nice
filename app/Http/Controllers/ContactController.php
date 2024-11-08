<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'number' => 'required|numeric',
        'message' => 'required|string',
    ]);

    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'number' => $request->number,
        'message' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Message sent successfully!');
}
public function index()
{
    $contacts = Contact::all();
    return view('admin.contact', compact('contacts'));
}

}