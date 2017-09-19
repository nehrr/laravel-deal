<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
           public function index()
    {
       $notes = Note::latest()->get();
       return view('note.index', ['notes' => $notes]);
    }
    
        public function show(Note $note)
    {
       return view('note.show', ['note' => $note]);
    }
    
    public function store(Request $request) {
        $note = new Note;
        $note->membre_id1 = $request->pseudo;
        $note->membre_id2 = $request->mdp;
        $note->note = $request->nom;
        $note->avis = $request->prenom;
        $note->save();
        return redirect()->route('note.index');
    }
    
    public function destroy(Note $note) {
        $note->delete();
        return redirect()->route('note.index');
    }

    public function update(Request $request, Note $note) {
        $note->note = $request->note;
        $note->avis = $request->avis;
        $note->save();
        return redirect()->route('note.index');
    }

    public function edit(Note $note) {
        return view('note.edit', ['note' => $note]);
    }
    
}
