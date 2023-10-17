@extends('animations.layout')
@section('content')


<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>Animations</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/inscription/create')}}" class="btn btn-success btn-sm" title= "Add new animation">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>sportives</th>
                                <th>culture</th>
                                <th>sortie</th>
                                <th>arts</th>
                                <th>loisirs</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animations as $item )
                            <tr>

                                <td>{{ $item->sportives}}</td>
                                <td>{{ $item->culture}}</td>
                                <td>{{ $item->sortie}}</td>
                                <td>{{ $item->arts}}</td>
                                <td>{{ $item->loisirs}}</td>
                                <td>
                                    <a href="{{ url('animation/' . $item->id)}}" title="View Animations"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('animation/' . $item->id . '/edit')}}" title="Edit Animations"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('animation' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
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