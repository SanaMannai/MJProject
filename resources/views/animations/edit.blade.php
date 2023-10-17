@extends('animations.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Animations</div>
    <div class="card-body">
        <form action="{{ url('animation/' .$animations->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$animations->id}}" id="id"/>
            <label>sportives</label><br>
            <input type="text" name="sportives" id="sportives" value="{{$animations->sportives}}" class="form-control"><br>
            <label>culture</label><br>
            <input type="text" name="culture" id="culture" value="{{$animations->culture}}" class="form-control"><br>
            <label>sortie</label><br>
            <input type="text" name="sortie" id="sortie" value="{{$animations->sortie}}" class="form-control"><br>
            <label>arts</label><br>
            <input type="text" name="arts" id="arts" value="{{$animations->arts}}" class="form-control"><br>
            <label>loisirs</label><br>
            <input type="text" name="loisirs" id="loisirs" value="{{$animations->loisirs}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop