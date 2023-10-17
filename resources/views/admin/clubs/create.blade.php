@extends('admin.clubs.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Create New clubs </div>
    <div class="card-body">
        <form action="{{ url('admin/club')}}" method="post">
            {!! csrf_field() !!}
            <label> SPORTIVES</label><br>
            <input type="text" name="sportives" id="sportives" class="form-control"><br>
            <label>ARTS</label><br>
            <input type="text" name="arts" id="arts" class="form-control"><br>
            <label>LOISIRS</label><br>
            <input type="text" name="loisirs" id="loisirs" class="form-control"><br>
            <label>FORMATION</label><br>
            <input type="text" name="formation" 
            id="formation" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop
