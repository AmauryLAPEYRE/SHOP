<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Author as Author;

class AuthorController extends Controller
{
    public function addOne(Request $request)
    {
        $newAuthor = new Author;
        $newAuthor->firstname = $request->input('firstname');
        $newAuthor->lastname = $request->input('lastname');
        $newAuthor->save();
        return redirect('/authors')
        ->with('success','L\'auteur '.$newAuthor->firstname.' '.$newAuthor->lastname.' a été ajouté avec succès !');
    }

    public function deleteOne(Request $request)
    {
        Author::destroy($request->input('id'));
        return redirect('/authors');
    }
}
