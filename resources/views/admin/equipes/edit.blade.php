@extends('admin.equipes.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit equipe</div>
    <div class="card-body">
        <form action="{{ url('admin/equipe/' .$equipes->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$equipes->id}}" id="id"/>
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" value="{{$equipes->nom}}" class="form-control"><br>
            <label>Adress</label><br>
            <input type="text" name="adress" id="adress" value="{{$equipes->adress}}" class="form-control"><br>
            <label>Téléphone</label><br>
            <input type="text" name="téléphone" id="téléphone" value="{{$equipes->téléphone}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop
