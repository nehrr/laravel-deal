<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;

class AnnonceController extends Controller
{
        public function index()
    {
       $annonces = Annonce::latest()->get();
       return view('annonce.index', ['annonces' => $annonces]);
    }
    
        public function show(Annonce $annonce)
    {
       return view('annonce.show', ['annonce' => $annonce]);
    }
    
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return redirect()->route('annonce.index');
    }
    
    public function update(Request $request, Annonce $annonce)
    {
        $annonce->titre = $request->titre;
        $annonce->description_courte = $request->description_courte;
        $annonce->description_longue = $request->description_longue;
        $annonce->prix = $request->prix;
        $annonce->save();
        return redirect()->route('annonce.index');
    }
    
    public function edit(Annonce $annonce)
    {
       return view('annonce.edit', ['annonce' => $annonce]);
    }
    
    
}
