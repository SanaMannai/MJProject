@extends('animations.layout')
@section('content')

$table->string("sportives");
$table->string("culture");
$table->string("sortie");
$table->string("arts");
$table->string("loisirs");

<div class="card" style="margin:20px;">
    <div class="card-header"> Animations Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">sportives : {{ $animations->sportives}}</h5>
            <p class="card-text">culture : {{ $animations->culture}}</p>
            <p class="card-text">sortie : {{ $animations->sortie}}</p>
            <p class="card-title">arts : {{ $animations->arts}}</p>
            <p class="card-title">loisirs : {{ $animations->loisirs}}</p>

    </div>
      </hr>
    </div>
</div>