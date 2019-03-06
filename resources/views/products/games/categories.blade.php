@extends('layouts.app')

@section('content')

<div class='row'>
    <div class='col-12 col-md-6'>
        <div class='card'>
            <div class='card-header'>
                <span>Ajouter une catégorie</span>
            </div>
            <div class='card-body'>
                <form method='POST' action='addcategory'>
                @csrf
                    <div class='form-group'>
                        <label for='nameLabel'>Nom</label>
                        <input id='nameLabel' type='text' name='name' class='form-control'>
                    </div>
                    <input type='submit' value='Ajouter' class='btn btn-primary'>
                </form>
            </div>
        </div>
    </div>

    <div class='col-12 col-md-6'>
        <div class='card'>
            <div class='card-header'>
                <span>Toutes les catégories</span>
            </div>
            <div class='card-body'>
                <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form method='POST' action='delete-category'>
                                        @csrf
                                        <input type='hidden' name='id' value='{{$category->id}}'>
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
