@extends('inscriptions.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Inscriptions </div>
    <div class="card-body">
        <form action="{{ url('inscription')}}" method="post">
            {!! csrf_field() !!}
            <label>nom</label><br>
            <input type="text" name="nom" id="nom" class="form-control"><br>
            <label>prenom</label><br>
            <input type="text" name="prenom" id="prenom" class="form-control"><br>
            <label>age</label><br>
            <input type="text" name="age" id="age" class="form-control"><br>
            <label>niveau</label><br>
            <input type="text" name="niveau" id="niveau" class="form-control"><br>
            <label>telephone</label><br>
            <input type="text" name="telephone" id="telephone" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop