@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <div class="alert alert-success" role="alert">
                        <p>Connecté en tant qu'admin !</p>
                    </div>
                    Vous êtes connecté!

                {{-- @foreach ($users as $user)
                    <p>This is user {{ $user->name }}</p>
                @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
