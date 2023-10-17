@extends('admin.clubs.layout')
@section('content')
<div class="container" href="#">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card-header">
                  <h2>clubs</h2>
              </div>
              <div class="card-body">
                <a href="{{ url('/admin/club/create')}}" class="btn btn-success btn-sm" title= "Add new club">
                    Add new
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>SPORTIVES</th>
                                <th> ARTS</th>
                                <th> LOISIRS</th>
                                <th> FORMATION</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clubs as $item ){}
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->sportives }}</td>
                                <td>{{ $item->arts}}</td>
                                <td>{{ $item->loisirs}}</td>
                                <td>{{ $item->formation}}</td>
                                <td>
                                    <a href="{{ url('/admin/club/' . $item->id)}}" title="View clubs"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/admin/club/' . $item->id . '/edit')}}" title="Edit clubs"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="{{ url('/admin/club' . '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field()}}
                                       <button type="submit" class="btn btn-danger btn-sm" title="Delete clubs" onclick="return confirm("confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button></a>
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

