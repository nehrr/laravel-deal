<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Annonce;

class CategorieController extends Controller {

    public function index() {
        $categories = Categorie::latest()->get();
        return view('categorie.index', ['categories' => $categories]);
    }

    public function show(Categorie $categorie) {
        return view('categorie.show', ['categorie' => $categorie]);
    }

    public function store(Request $request) {
        $categorie = new Categorie;
        $categorie->titre = $request->titre;
        $categorie->motscles = $request->motscles;
        $categorie->save();
        return redirect()->route('categorie.index');
    }

    public function destroy(Categorie $categorie) {
        $categorie->delete();
        return redirect()->route('categorie.index');
    }

    public function update(Request $request, Categorie $categorie) {
        $categorie->titre = $request->titre;
        $categorie->motscles = $request->motscles;
        $categorie->save();
        return redirect()->route('categorie.index');
    }

    public function edit(Categorie $categorie) {
        return view('categorie.edit', ['categorie' => $categorie]);
    }

}
