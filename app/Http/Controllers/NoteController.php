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
}
