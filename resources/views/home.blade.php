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
                    <div class='d-flex flex-md-row justify-content-around'>
                       <div class='box'>
                            <div>Quantité de jeux disponible :<br> {{$totalGameStock}}</div>
                            <span class='hr'></span>
                            <div>Valeur totale :<br> {{$totalGamePrice}} €</div>
                       </div>

                       <div class='box'>
                            <div>Quantité de livre disponible :<br> {{$totalBookStock}}</div>
                            <span class='hr'></span>
                            <div>Valeur totale :<br> {{$totalBookPrice}} €</div>
                       </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
