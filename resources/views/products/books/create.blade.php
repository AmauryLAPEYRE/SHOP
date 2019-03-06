@extends('layouts.app')

@section('content')
<h2>AJouter un livre</h2>

<form method='POST' action='/addbook'>
    @csrf
    <div class='form-group'>
        <label for='titleLabel'>Titre</label>
        <input id='titleLabel' type='text' name='title' class='form-control'>
    </div>

    <div class='form-group'>
        <label for='resumeLabel'>Description</label>
        <textarea id='resumeLabel' name='resume' class='form-control'></textarea>
    </div>
    <div class='row'>
        <div class='form-group col-6'>
            <label for='authorLabel'>Auteur</label>
            <select id='authorLabel' name='author' class='form-control'>
                @foreach ($authors as $author)
                    <option value='{{$author->id}}'>{{$author->completeName()}}</option>
                @endforeach
            </select>
        </div>

        <div class='form-group col-6'>
            <label for='genreLabel'>Genre</label>
            <select id='genreLabel' name='genre' class='form-control'>
                @foreach ($genres as $genre)
                    <option value='{{$genre->id}}'>{{$genre->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class='row'>
        <div class='form-group col-6'>
            <label for='priceLabel'>Prix</label>
            <input id='priceLabel' type='number' step="0.01" name='price' class='form-control'>
        </div>

        <div class='form-group col-6'>
            <label for='stockLabel'>Quantité</label>
            <input id='stockLabel' type='number' name='stock' class='form-control'>
        </div>
    </div>

    <input type='submit' class='btn btn-primary' value='Nouveau livre'>



</form>
@endsection
