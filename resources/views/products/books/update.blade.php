@extends('layouts.app')

@section('content')



<div class='card'>
    <div class='card-header'>
        <span>Mettre à jour le livre : {{ $books->title }}</span>
    </div>

    <div class='card-body'>
        <form method='POST' action='/updatebook'>
            @csrf
            <div class='form-group'>
                <label for='titleLabel'>Titre</label>
                <input type='text' name='title' value='{{ $books->title }}' id='titleLabel' class='form-control'>
            </div>

            <div class='form-group'>
                <label for='resumeLabel'>Resume</label>
                <textarea name='resume' id='resumeLabel' class='form-control'>{{$books->resume }}</textarea>
            </div>

            <div class='form-group'>
                <label for='authorLabel'>Auteur</label>
                <select name='author' id='authorLabel' class='form-control'>
                    @foreach ($authors as $author)
                        @foreach ($books->author as $writer)
                                @if ($writer->completeName() === $author->name)
                                    <option selected value='{{$author->id}}'>{{$author->completeName()}}</option>
                                @else
                                    <option value='{{$author->id}}'>{{$author->completeName()}}</option>
                                @endif
                            @endforeach
                    @endforeach
                </select>
            </div>

            <div class='form-group'>
                <label for='typeLabel'></label>
                <select name='type' id='typeLabel' class='form-control'>
                    @foreach ($genres as $genre)
                        @foreach ($books->genre as $book_genre )
                            @if ($book_genre->name === $genre->name)
                                <option selected value='{{$genre->id}}'>{{$genre->name}}</option>
                            @else
                                <option value='{{$genre->id}}'>{{$genre->name}}</option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
            </div>

            <div class='form-group'>
                <label for='priceLabel'>Prix</label>
                <input type='number' step="0.10" name='price' value='{{ $books->price }}' id='priceLabel' class='form-control'>

            </div>

            <div class='form-group'>
                <label for='stockLabel'>Quantité</label>
                <input type='number' name='stock' value='{{ $books->stock }}'id='stockLabel' class='form-control'>
            </div>
            <input type='hidden' name='id' value='{{ $books->id }}'>
            <input type='submit' value='Mettre à jour' class='btn btn-primary'>
        </form>
    </div>
</div>

@endsection
