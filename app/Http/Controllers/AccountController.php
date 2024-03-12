<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        //retourner la vue du compte utilisateur
        return view('account.account', [
            'user' => User::find(auth()->id())
        ]);
    }

    public function edit()
    {
        return view('account.edit', [
            'user' => User::find(auth()->id())
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pseudo' => 'required|unique:users,pseudo,' . auth()->id(),
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        $user = User::find(auth()->id());
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->pseudo = $request->pseudo;
        $user->email = $request->email;
        $user->save();

        return back()->with('message', 'Vos informations ont bien été mises à jour.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user = User::find(auth()->id());
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('message', 'Votre mot de passe a bien été mis à jour.');
    }
}
