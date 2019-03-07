@extends('layouts.app')

@section('content')



<h3>Ajouter un jeu :</h3>
<form action='addgame' method='POST'>
    @csrf


    <div class='form-group'>
        <label for='titleLabel'>Titre</label>
        <input required id='titleLabel' type='text' name='title' class='form-control'>
    </div>

    <div class='form-group'>
        <label for='descriptionLabel'>Description</label>
        <textarea required id='descriptionLabel' name='description' class='form-control'></textarea>
    </div>

    <div class='form-group'>
        <label for='categLabel'>Catégorie</label>
        <select id='categLabel' name='category' class='form-control'>
            @foreach ($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class='row'>
        <div class='form-group col-6'>
            <label for='priceLabel'>Prix</label>
            <input required id='priceLabel' type='number' step="0.10" placeholder="€" name='price' class='form-control'>
        </div>

        <div class='form-group col-6'>
            <label for='stockLabel'>Quantité</label>
            <input required id='stockLabel' type='number' name='stock' class='form-control'>
        </div>
    </div>
    <input type='submit' value='Ajouter le jeu' class='btn btn-primary'>
</form>
@endsection
