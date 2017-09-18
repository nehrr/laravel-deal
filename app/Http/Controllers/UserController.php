<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DateTime;
use App\User;

class UserController extends Controller {

    public function index() {
        $users = User::latest()->get();
        return view('membre.index', ['users' => $users]);
    }

    public function show(User $user) {
        return view('membre.show', ['user' => $user]);
    }

    public function store(Request $request) {
        $user = new User;
        $user->name = $request->pseudo;
        $user->password = $request->mdp;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->telephone = $request->tel;
        $user->civilite = $request->civilite;
        $user->statut = $request->statut;
        $user->save();
        return redirect()->route('membre.index');
    }
    
    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('membre.index');
    }

    public function update(Request $request, User $user) {
        $user->name = $request->pseudo;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->telephone = $request->tel;
        $user->civilite = $request->civilite;
        $user->statut = $request->statut;
        $user->save();
        return redirect()->route('membre.index');
    }

    public function edit(User $user) {
        return view('membre.edit', ['user' => $user]);
    }

}
