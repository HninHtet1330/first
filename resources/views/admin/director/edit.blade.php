@extends('admin.layout.master')
@section('content')

      <div class="row col-md-6">
            <div class="card">
                  <div class="card-header text-white bg-dark card-border-primary">
                        
                        <h3>Director Edit Form </h3>  </div>
                        <div class="card-body">
                              <form action="{{ url('admin/director/'.$directors->id ) }}" class="form" method="POST">
                               @csrf
                               @method('PATCH')
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input type="text" name="name"  class="form-control" value="{{ $directors->name }}">
                                    </div>
                                    <div class="form-group">
                                          <label for="">Description</label>
                                          <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{ $directors->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                          <button class="btn btn-dark text-white">Save</button>
                                          <button class="btn btn-danger text-white">Cancel</button>
                                    </div>
                              </form>
                        </div>
                        
                        
                  </div>
            </div>
 

@endsection