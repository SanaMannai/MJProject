@extends('inscriptions.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Inscriptions</div>
    <div class="card-body">
        <form action="{{ url('inscription/' .$inscriptions->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$inscriptions->id}}" id="id"/>
            <label>nom</label><br>
            <input type="text" name="nom" id="nom" value="{{$inscriptions->nom}}" class="form-control"><br>
            <label>prenom</label><br>
            <input type="text" name="prenom" id="prenom" value="{{$inscriptions->prenom}}" class="form-control"><br>
            <label>age</label><br>
            <input type="text" name="age" id="age" value="{{$inscriptions->age}}" class="form-control"><br>
            <label>niveau</label><br>
            <input type="text" name="niveau" id="niveau" value="{{$inscriptions->niveau}}" class="form-control"><br>
            <label>telephone</label><br>
            <input type="text" name="telephone" id="telephone" value="{{$inscriptions->telephone}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop