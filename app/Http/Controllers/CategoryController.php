<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category as Category;


class CategoryController extends Controller
{
    public function addOne(Request $request)
    {
        $newCategory = new Category;
        $newCategory->name = $request->input('name');
        $newCategory->save();
        return redirect('/categories')
        ->with('success','La catégorie '.$newCategory->name.' a été ajouté avec succès !');
    }

    public function deleteOne(Request $request)
    {
        Category::destroy($request->input('id'));
        return redirect('/categories')
        ->with('success','La catégorie a été suprimé avec succès !');
    }
}
