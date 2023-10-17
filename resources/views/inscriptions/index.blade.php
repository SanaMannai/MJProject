@extends('inscriptions.layout')
@section('content')


<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>Inscriptions</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/inscription/create')}}" class="btn btn-success btn-sm" title= "Add new inscription">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>nom</th>
                                <th>prenom</th>
                                <th>age</th>
                                <th>niveau</th>
                                <th>telephone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inscriptions as $item )
                            <tr>

                                <td>{{ $item->nom}}</td>
                                <td>{{ $item->prenom}}</td>
                                <td>{{ $item->age}}</td>
                                <td>{{ $item->niveau}}</td>
                                <td>{{ $item->telephone}}</td>
                                <td>
                                    <a href="{{ url('inscription/' . $item->id)}}" title="View Inscriptions"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('inscription/' . $item->id . '/edit')}}" title="Edit Inscriptions"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('inscription' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field()}}
                                       <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm("confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button></a>
                                     </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
       </div>
     </div>
 </div>
 @endsection