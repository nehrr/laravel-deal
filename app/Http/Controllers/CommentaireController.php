<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;

class CommentaireController extends Controller {

    public function index() {
        $commentaires = Commentaire::latest()->get();
        return view('commentaire.index', ['commentaires' => $commentaires]);
    }

    public function show(Commentaire $commentaire) {
        return view('commentaire.show', ['commentaire' => $commentaire]);
    }

    public function store(Request $request) {
        $commentaire = new Commentaire;
        $commentaire->id = $request->id;
        $commentaire->membre_id = $request->membre_id;
        $commentaire->annonce_id = $request->annonce_id;
        $commentaire->commentaire = $request->commentaire;
        $commentaire->save();
        return redirect()->route('commentaire.index');
    }

    public function destroy(Commentaire $commentaire) {
        $commentaire->delete();
        return redirect()->route('commentaire.index');
    }

    public function update(Request $request, Commentaire $commentaire) {
        $commentaire->commentaire = $request->commentaire;
        $commentaire->save();
        return redirect()->route('commentaire.index');
    }

    public function edit(Commentaire $commentaire) {
        return view('commentaire.edit', ['commentaire' => $commentaire]);
    }

}
