<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function processRegister(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // Validasi field lainnya jika diperlukan
        ]);

        // Redirect ke halaman welcome dengan data
        return redirect()->route('welcome')
            ->with('firstName', $validated['first_name'])
            ->with('lastName', $validated['last_name']);
    }

    public function welcome()
    {
        // Mengambil data dari session
        $firstName = session('firstName', 'Guest');
        $lastName = session('lastName', '');

        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}
