@extends('layouts.app')

@section('content')
    <div class='card'>
        <div class='card-header'>
            <span>Update the user : {{$toUpdate->name}}</span>
        </div>
        <div class='card-body'>
            <form method='POST' action='update-user'>
                @csrf
                <div class='form-group'>
                    <label for='nameLabel'>Nom</label>
                    <input type='text' name='name' value='{{$toUpdate->name}}' id='nameLabel' class='form-control'>
                </div>
                <div class='form-group'>
                    <label for='emailLabel'>Email</label>
                    <input type='text' name='email' value='{{$toUpdate->email}}' id='emailLabel' class='form-control'>
                </div>
                <input type='hidden' name='id' value='{{$toUpdate->id}}'>
                <input type='submit' value='Update the user' class='btn btn-primary'>
            </form>
        </div>
    </div>
@endsection
