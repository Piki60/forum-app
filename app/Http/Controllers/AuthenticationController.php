<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    /*Inscription*/
    public function signup()
    {
        return view('authentification.signup');
    }

    public function signupPost(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pseudo' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'pseudo' => $request->pseudo,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/connexion');

    }

    /*Connexion*/
    public function login()
    {
        return view('authentification.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/mon-compte');
        }

        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects.',
        ]);
    }

    /*Deconnexion*/
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
