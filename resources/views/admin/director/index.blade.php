@extends('admin.layout.master')
@section('content')
 <div><a href  = "{{ url('admin/director/create') }}"><button class="btn btn-primary">Director Create</button></a>
<div class="row">
      <div class="card border-primary">
            <div class="card-header border-primary bg-dark">
                  <h3 class="card-title text-white">Directors List</h3>
            </div>
            <div class="card-body">
                  <table class="table">
                        <thead>
                              <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>description</th>
                                    <th>created-at</th>
                                    <th>updated-at</th>
                                    <th>process</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach($directors as $director)
                              <tr>
                                    <td>{{ $director->id }}</td>
                                    <td>{{ $director->name }}</td>
                                    <td>{{ $director->description }}</td>
                                    <td>{{ $director->created_at }}</td>
                                    <td>{{ $director->updated_at }}</td>
                                    <td>
                                    <a href="{{ url('admin/director/'.$director->id.'/edit' ) }}">
                                    <button class="btn btn-warning">Edit</button></a>
                                    
                                    
                                    <form action="{{ url('admin/director/'.$director->id ) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button></a>
                                    </form>
                                    <a href="{{ url('admin/director/'.$director->id ) }}">
                                    <button class="btn btn-info">Show</button></a>
                                    </td>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
                  {{ $directors }} 
            </div>
            
            
      </div>
    
</div>















@endsection