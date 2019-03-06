<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;

class BookController extends Controller
{
    public function addOne(Request $request)
    {
        $book = new Book;
        $book->title = $request->input('title');
        $book->resume = $request->input('resume');
        $book->price = $request->input('price');
        $book->stock = $request->input('stock');
        $book->save();
        $book->author()->attach($request->input('author'));
        $book->genre()->attach($request->input('genre'));
        return redirect('/books')
        ->with('success','Le livre '.$book->title.' a été ajouté avec succès !');
    }

    public function deleteOne(Request $request)
    {
        Book::destroy($request->input('id'));
        return redirect('/books')
        ->with('success','Le livre a été retiré avec succès !');
    }

    public function updateOne(Request $request)
    {
        $updatedBook = Book::find($request->input('id'));
        $updatedBook->title = $request->input('title');
        $updatedBook->resume = $request->input('resume');
        $updatedBook->price = $request->input('price');
        $updatedBook->stock = $request->input('stock');
        $updatedBook->save();
        $updatedBook->author()->detach();
        $updatedBook->genre()->detach();
        $updatedBook->author()->attach($request->input('author'));
        $updatedBook->genre()->attach($request->input('genre'));
        return redirect('/books')
        ->with('success','Le livre '.$updatedBook->title.' a été modifié avec succès !');
    }

    public function updateStock(Request $request)
    {
        $updatedBook = Book::find($request->input('id'));
        $oldStock = $updatedBook->stock;
        $value = $request->input('ch-stock');
        if($request->input('update-genre') === "add") {
            $newStock = $oldStock - $value;

        } else {
            $newStock = $oldStock + $value;
            if($newStock < 0) {
                return redirect('/books')
                ->with('error','Vous avez entré une valeure négative. Veuillez entrer une valeur supérieur ou égal à 0');
            }
        }
        $updatedBook->stock = $newStock;
        $updatedBook->save();
        return redirect('/books')
        ->with('success','Le stock a été modifié avec succès');
    }
}
