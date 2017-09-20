<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller {

    public function index() {
        $photos = Photo::latest()->get();
        return view('photo.index', ['photos' => $photos]);
    }

    public function show(Photo $photo) {
        return view('photo.show', ['photo' => $photo]);
    }

    public function store(Request $request) {
        $photo = new Photo;
        $photo->photo1 = $request->photo1;
        $photo->photo2 = $request->photo2;
        $photo->photo3 = $request->photo3;
        $photo->photo4 = $request->photo4;
        $photo->photo5 = $request->photo5;
        $photo->save();
        return redirect()->route('photo.index');
    }

    public function destroy(Photo $photo) {
        $photo->delete();
        return redirect()->route('photo.index');
    }

    public function update(Request $request, Photo $photo) {
        $photo->photo1 = $request->photo1;
        $photo->photo2 = $request->photo2;
        $photo->photo3 = $request->photo3;
        $photo->photo4 = $request->photo4;
        $photo->photo5 = $request->photo5;
        $photo->save();
        return redirect()->route('photo.index');
    }

    public function edit(Photo $photo) {
        return view('photo.edit', ['photo' => $photo]);
    }

}
