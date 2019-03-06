@extends('layouts.app')

@section('content')
<h1>Tous les livres  :</h1>

<div class='table-responsive-xl'>
    <table class='table table-striped table-hover'>
        <thead class="thead-dark">
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Auteur</th>
                <th>Genre</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($books as $book )
            <tr>
                <td class="align-middle">{{$book->title}}</td>
                <td class="overflow-auto">{{$book->resume}}</td>
                <td class="align-middle">
                @foreach ($book->author as $author)
                    @if ($author->completeName() !== null )
                        {{$author->completeName()}}
                    @else
                        <a href='/authors'>Create author</a>
                    @endif

                @endforeach
                </td>

                <td class="align-middle">
                @foreach ($book->genre as $genre)
                    @if ($genre->name !== null )
                         <span>{{$genre->name}}</span>
                    @else
                        <a href='/types'>Créer un genre</a>
                    @endif

                @endforeach
                </td>

                <td class="align-middle">{{$book->price}}€</td>
                <td class="align-middle">
                @if ($book->stock > 0)
                    {{$book->stock}}
                @else
                    <span>Stock épuisé</span>
                @endif
                </td>

                <td class="align-middle">
                    <div class='btn-group'>
                        <form action='delete-book' method='POST'>
                            @csrf
                            <input type='hidden' name='id' value='{{ $book->id }}'>
                            <input type='submit' value='Supprimer' class='btn btn-danger'>
                        </form>

                        <form action='update-book' method='GET'>
                            @csrf
                            <input type='hidden' name='id' value='{{ $book->id }}'>
                            <input type='submit' value='Mettre à Jour' class='btn btn-success'>
                        </form>

                        <button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#manageStock_{{$book->id}}' aria-expanded="false" aria-controls="manageStock_{{$book->id}}">Modifier le stock</button>
                    </div>
                </td>
            </tr>
            <tr class='collapse' id='manageStock_{{$book->id}}'>

                <td class="align-middle" colspan="7">
                    <form action='update-book-stock' method='POST'>
                        @csrf
                        <div class='row'>
                            <div class='form-group col-3'>
                                <input type='number' class='form-control' placeholder='Quantité à ajouter ou retirer' name='ch-stock'>
                            </div>

                            <div class='form-group col-3'>
                                <input type='hidden' name='id' value='{{$book->id}}'>
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
