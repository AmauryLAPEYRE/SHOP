<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Game as Game;

class GameController extends Controller
{
    public function addOne(Request $request)
    {
        $newGame = new Game;
        $newGame->title = $request->input('title');
        $newGame->description = $request->input('description');
        $newGame->price = $request->input('price');
        $newGame->stock = $request->input('stock');
        $newGame->save();
        $newGame->category()->attach($request->input('category'));
        return redirect('/games')
        ->with('success','Le jeu '.$newGame->title.' été ajouté avec succès !');
    }

    public function deleteOne(Request $request)
    {
        Game::destroy($request->input('id'));
        return redirect('/games')
        ->with('success','Le jeu a été retiré avec succès !');
    }

    public function updateOne(Request $request)
    {
        $updatedGame = Game::find($request->input('id'));
        $updatedGame->title = $request->input('title');
        $updatedGame->description = $request->input('description');
        $updatedGame->price = $request->input('price');
        $updatedGame->stock = $request->input('stock');
        $updatedGame->save();
        $updatedGame->category()->detach();
        $updatedGame->category()->attach($request->input('category'));
        return redirect('/games')
        ->with('success','Le jeu '.$updatedGame->title.' a été mis à jour avec succès !');
    }

    public function updateStock(Request $request)
    {
        $updateGame = Game::find($request->input('id'));
        $oldStock = $updateGame->stock;
        $value = $request->input('ch-stock');
        if($request->input('update-genre') === "add") {
            $newStock = $oldStock - $value;

        } else {
            $newStock = $oldStock + $value;
            if($newStock < 0) {
                return redirect('/games')
                ->with('error','La quantité est négative. Veuillez entrer une quantité superieur ou égal à 0');
            }
        }
        $updateGame->stock = $newStock;
        $updateGame->save();
        return redirect('/games')
        ->with('success','Le stock a été modifié avec succès !');
    }
}
