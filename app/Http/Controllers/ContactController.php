<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Hier kun je de e-mail logica toevoegen
        // Mail::to('info@paradisepour.nl')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', 'Bedankt voor je bericht! We nemen zo spoedig mogelijk contact met je op.');
    }
} 