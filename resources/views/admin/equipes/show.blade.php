@extends('admin.equipes.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Equipes Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ $equipes->nom}}</h5>
            <p class="card-text">Adress : {{ $equipes->adress}}</p>
            <p class="card-title">Téléphone : {{ $equipes->téléphone}}</p>

    </div>
      </hr>
    </div>
</div>
