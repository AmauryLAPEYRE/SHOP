<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Genre as Genre;

class GenreController extends Controller
{
    public function addOne(Request $request)
    {
        $newGenre = new Genre;
        $newGenre->name = $request->input('name');
        $name = $newGenre->name;
        $newGenre->save();
        return redirect('/genres')
        ->with('success','Le genre '.$name.' a été ajouté avec succès !');
    }

    public function deleteOne(Request $request)
    {
        Genre::destroy($request->input('id'));
        return redirect('/genres')
        ->with('success','Le genre a été supprimé avec succès !');
    }
}
