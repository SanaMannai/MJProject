@extends('admin.clubs.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit club</div>
    <div class="card-body">
        <form action="{{ url('admin/club/' .$clubs->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$clubs->id}}" id="id"/>
            <label>SPORTIVES</label><br>
            <input type="text" name="sportives" id="sportives" value="{{$clubs->sportives}}" class="form-control"><br>
            <label>ARTS</label><br>
            <input type="text" name="arts" id="arts" value="{{$clubs->arts}}" class="form-control"><br>
            <label>LOISIRS</label><br>
            <input type="text" name="loisirs" id="loisirs" value="{{$clubs->loisirs}}" class="form-control"><br>
            <label>FORMATION</label><br>
            <input type="text" name="formation" id="formation" value="{{$clubs->formation}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>

@stop

