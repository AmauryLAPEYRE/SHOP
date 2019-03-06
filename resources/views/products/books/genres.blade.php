@extends('layouts.app')

@section('content')

<div class='row'>
    <div class='col-12 col-md-6'>
        <div class='card'>
            <div class='card-header'>
                <p>Ajouter un genre</p>
            </div>
            <div class='card-body'>
                <form method='POST' action='addgenre'>
                @csrf
                    <div class='form-group'>
                        <label for='nameLabel'>Genre</label>
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
                <span>Tous les genres</span>
            </div>
            <div class='card-body'>
            {{--  --}}
                <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Genre</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                         @foreach ($genres as $genre)
                            <tr>
                                <td>{{ $genre->name }}</td>
                                <td>
                                    <form method='POST' action='delete-genre'>
                                        @csrf
                                        <input type='hidden' name='id' value='{{$genre->id}}'>
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
