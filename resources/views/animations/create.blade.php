@extends('animations.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Animations </div>
    <div class="card-body">
        <form action="{{ url('animation')}}" method="post">
            {!! csrf_field() !!}
            <label>sportives</label><br>
            <input type="text" name="sportives" id="sportives" class="form-control"><br>
            <label>culture</label><br>
            <input type="text" name="culture" id="culture" class="form-control"><br>
            <label>sortie</label><br>
            <input type="text" name="sortie" id="sortie" class="form-control"><br>
            <label>arts</label><br>
            <input type="text" name="arts" id="arts" class="form-control"><br>
            <label>loisirs</label><br>
            <input type="text" name="loisirs" id="loisirs" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop
