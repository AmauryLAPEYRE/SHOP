@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card home-card">
                <div class="card-header">Tableau de bord</div>
                    <div class="card-body">
                        <div class='d-flex flex-md-row justify-content-around'>
                            <div class='box'>
                                <a href='/games'>JEUX</a>
                            </div>
                            <div class='box'>
                                <a href='/books'>LIVRES</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
