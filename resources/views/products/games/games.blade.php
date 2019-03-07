@extends('layouts.app')

@section('content')

<h3>Tous les jeux : </h3>

<div class='table-responsive-lg'>
    <table class='table table-striped table-hover'>
        <thead class="thead-dark">
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game )
            <tr>
                <td class="align-middle">{{$game->title}}</td>
                <td>{{$game->description}}</td>
                <td class="align-middle">
                @foreach ($game->category as $category)
                @if ($category->name !== null )
                    <span>{{ $category->name }}</span>
                @else
                    <a href='/categories'>Create a type</a>
                @endif

                @endforeach
                </td>
                <td class="align-middle">{{$game->price}}€</td>
                <td class="align-middle">
                    @if ($game->stock > 0)
                        {{$game->stock}}
                    @else
                        <span>Stock épuisé</span>
                    @endif
                </td>
                <td class="align-middle">
                    <div class='btn-group'>
                        <form action='/delete-game' method='POST'>
                            @csrf
                            <input type='hidden' name='id' value='{{ $game->id }}'>
                            <input type='submit' value='Supprimer' class='btn btn-danger'>
                        </form>
                        <form action='/update-game' method='GET'>
                            <input type='hidden' name='id' value='{{ $game->id }}'>
                            <input type='submit' value='Mettre à jour' class='btn btn-success'>
                        </form>
                        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#manageStock_{{$game->id}}' aria-expanded="false" aria-controls="manageStock_{{$game->id}}">Modifier le stock</button>
                    </div>
                </td>
            </tr>
            <tr class='collapse' id='manageStock_{{$game->id}}'>
                <td colspan="7">
                    <form action='update-game-stock' method='POST'>
                        @csrf
                        <div class='row'>
                            <div class='form-group col-3'>
                                <input required type='number' class='form-control' placeholder='Quantité à ajouter ou retirer' name='ch-stock'>
                            </div>
                            <div class='form-group col-3'>
                                <input type='hidden' name='id' value='{{$game->id}}'>
                                <input type='submit' value='Change' class='btn btn-primary form-control'>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>







@endsection
