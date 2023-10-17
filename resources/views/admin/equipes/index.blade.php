@extends('admin.equipes.layout')
@section('content')
<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>Equipes</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/admin/equipe/create')}}" class="btn btn-success btn-sm" title= "Add new equipe">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Adress</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipes as $item )
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->nom}}</td>
                                <td>{{ $item->adress}}</td>
                                <td>{{ $item->téléphone}}</td>
                                <td>
                                    <a href="{{ url('/admin/equipe/' . $item->id)}}" title="View Equipes"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/admin/equipe/' . $item->id . '/edit')}}" title="Edit Equipes"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('/admin/equipe' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field()}}
                                       <button type="submit" class="btn btn-danger btn-sm" title="Delete Equipes" onclick="return confirm("confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button></a>
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

