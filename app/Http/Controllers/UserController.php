<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validez les données du formulaire (nom, e-mail, mot de passe, etc.)
        $validatedData = $request->validate([
            'register-name' => 'required',
            'register-lastname' => 'required',
            'register-date' => 'required',
            'register-tel' => 'required',
            'register-address' => 'required',
            'registe-email' => 'required|email|unique:users',
            'register-pass' => 'required|min:6',
        ]);

        // Créez un nouvel utilisateur
        User::create([
            'register-name' => $validatedData['name'],
            'register-lastname' => $validatedData['prenoms'],
            'register-date' => $validatedData['dateN'],
            'register-tel' => $validatedData['tel'],
            'register-address' => $validatedData['adresse'],
            'register-email' => $validatedData['email'],
            'register-pass' => bcrypt($validatedData['password']),
        ]);

        // Redirigez l'utilisateur vers une page de confirmation ou de connexion
        return redirect()->route('login')->with('success', 'Inscription réussie ! Connectez-vous maintenant.');
    }

}
