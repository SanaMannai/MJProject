@extends('admin.clubs.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">clubs Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">SPORTIVES : {{ $clubs->sportives}}</h5>
            <p class="card-text">ARTS : {{ $clubs->arts}}</p>
            <p class="card-title">LOISIRS : {{ $clubs->loisirs}}</p>
            <p class="card-title">FORMATION : 
                {{ $clubs->formation}}</p>

    </div>
      </hr>
    </div>
</div>
