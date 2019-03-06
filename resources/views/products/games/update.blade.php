@extends('layouts.app')

@section('content')


<div class='card'>
    <div class='card-header'>
        <span>Modifier le jeu {{$games->title}}</span>
    </div>

    <div class='card-body'>

    <form action='updategame' method='POST'>
        @csrf
        <div class='form-group'>
            <label for='titleLabel'>Titre</label>
            <input type='text' name='title' value='{{$games->title}}' id='titleLabel' class='form-control'>
        </div>

        <div class='form-group'>
            <label for='descriptionLabel'>Description</label>
            <textarea name='description' id='descriptionLabel' class='form-control'>{{$games->description}}</textarea>
        </div>

        <div class='form-group'>
            <label for='categoryLabel'>Catégorie</label>
            <select name='category' id='categoryLabel' class='form-control'>
                @foreach ($categories as $category)
                    @foreach ($games->category as $cat)
                        @if ( $cat->name === $category->name)
                            <option selected value='{{ $category->id }}'>{{ $category->name }}</option>
                        @else
                            <option value='{{ $category->id }}'>{{ $category->name }}</option>
                        @endif
                    @endforeach
                @endforeach
            </select>
        </div>

        <div class='form-group'>
            <label for='priceLabel'>Prix</label>
            <input type='number' step='0.01' name='price' value='{{$games->price}}' id='priceLabel' class='form-control'>
        </div>

        <div class='form-group'>
            <label for='stockLabel'>Quantité</label>
            <input type='number' step='1' name='stock' value='{{$games->stock}}' id='stockLabel' class='form-control'>
        </div>
        <input type='hidden' value='{{ $games->id }}' name='id'>
        <input type='submit' value='Modifier' class='btn btn-primary'>
        </div>
    </form>
</div>





@endsection
