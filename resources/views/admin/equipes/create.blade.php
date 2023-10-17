@extends('admin.equipes.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New equipes </div>
    <div class="card-body">
        <form action="{{ url('admin/equipe')}}" method="post">
            {!! csrf_field() !!}
            <label>Nom</label><br>
            <input type="text" name="nom" id="nom" class="form-control"><br>
            <label>Adress</label><br>
            <input type="text" name="adress" id="adress" class="form-control"><br>
            <label>Téléphone</label><br>
            <input type="text" name="téléphone" id="téléphone" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop
