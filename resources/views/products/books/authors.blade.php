@extends('layouts.app')

@section('content')
    <div class='row'>
    <div class='col-12 col-md-6'>
        <div class='card card-dark'>
            <div class='card-header'>
                <span>Ajouter un auteur</span>
            </div>
            <div class='card-body'>
                <form method='POST' action='addauthor'>
                @csrf
                    <div class='form-group'>
                        <label for='firstLabel'>Prenom</label>
                        <input id='firstLabel' type='text' name='firstname' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='lastLabel'>Nom</label>
                        <input id='lastLabel' type='text' name='lastname' class='form-control'>
                    </div>
                    <input type='submit' value='Ajouter' class='btn btn-primary'>
                </form>
            </div>
        </div>
    </div>

    <div class='col-12 col-md-6'>
        <div class='card'>
            <div class='card-header'>
                <span>Tous les auteurs</span>
            </div>
            <div class='card-body'>
                <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Auteurs</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($authors as $author)
                            <tr>
                                <td>{{ $author->completeName() }}</td>
                                <td>
                                    <form method='POST' action='delete-author'>
                                        @csrf
                                        <input type='hidden' name='id' value='{{$author->id}}'>
                                        <input type='submit' value='Supprimer' class='btn btn-danger'>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
