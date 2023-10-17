@extends('inscriptions.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header"> Inscriptions Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">nom : {{ $inscriptions->nom}}</h5>
            <p class="card-text">prenom : {{ $inscriptions->prenom}}</p>
            <p class="card-text">age : {{ $inscriptions->age}}</p>
            <p class="card-title">niveau : {{ $inscriptions->niveau}}</p>
            <p class="card-title">telephone : {{ $inscriptions->telephone}}</p>

    </div>
      </hr>
    </div>
</div>