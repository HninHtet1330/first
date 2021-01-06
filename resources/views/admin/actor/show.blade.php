@extends('admin.layout.master')
@section('content')

      <div class="row col-md-6">
            <div class="card">
                  <div class="card-header text-white bg-dark card-border-primary">
                        
                        <h3>Actor Detail</h3></div>
                        <div class="card-body">
                              <form action="{{ url('admin/actor/show/'.$actors->id ) }}" class="form" method="POST">
                               @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input type="text" name="name"  class="form-control" value="{{ $actors->name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                          <label for="">Description</label>
                                          <textarea name="description" id="" cols="30" rows="10" class="form-control" readonly >{{ $actors->description }}</textarea>
                                    </div>
                                    
                              </form>
                        </div>
                        
                        
                  </div>
            </div>
 

@endsection