@extends('layouts.app')
@section('content')
<div class='container'>
  <div class='table-responsive-lg'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse E-mail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if($user->admin == 0)
                        <tr>
                            <td>
                                <span>{{$user->name}}</span>
                            </td>
                            <td>
                                <span>{{$user->email}}</span>
                            </td>
                            <td>
                                <div class='btn-group' role="group">
                                    <form method='POST' action='/delete'>
                                        @csrf
                                        <input type='hidden' name='id' value='{{$user->id}}'>
                                        <input type='submit' value='Supprimer' class='btn btn-danger'>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
@endsection
