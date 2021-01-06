@extends('admin.layout.master')
@section('content')
 <div><a href  = "{{ url('admin/actor/create') }}"><button class="btn btn-primary">Actor Create</button></a>
<div class="row">
      <div class="card border-primary">
            <div class="card-header border-primary bg-dark">
                  <h3 class="card-title text-white">Actors List</h3>
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
                              @foreach($actors as $actor)
                              <tr>
                                    <td>{{ $actor->id }}</td>
                                    <td>{{ $actor->name }}</td>
                                    <td>{{ $actor->description }}</td>
                                    <td>{{ $actor->created_at }}</td>
                                    <td>{{ $actor->updated_at }}</td>
                                    <td>
                                    <a href="{{ url('admin/actor/edit/'.$actor->id ) }}">
                                    <button class="btn btn-warning">Edit</button></a>
                                    <a href="{{ url('admin/actor/delete/'.$actor->id ) }}">
                                    <button class="btn btn-danger">Delete</button></a>
                                    <a href="{{ url('admin/actor/show/'.$actor->id ) }}">
                                    <button class="btn btn-info">Show</button></a>
                                    </td>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
                  {{ $actors }} 
            </div>
            
            
      </div>
    
</div>















@endsection