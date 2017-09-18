<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;

class CommentaireController extends Controller
{
           public function index()
    {
       $commentaires = Commentaire::latest()->get();
       return view('commentaire.index', ['commentaires' => $commentaires]);
    }
    
        public function show(Commentaire $commentaire)
    {
       return view('commentaire.show', ['commentaire' => $commentaire]);
    }
}
