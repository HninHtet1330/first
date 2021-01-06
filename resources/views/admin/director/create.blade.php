@extends('admin.layout.master')
@section('content')

      <div class="row col-md-6">
            <div class="card">
                  <div class="card-header text-white bg-dark">
                        
                        <h3>Director Create Form </h3>  </div>
                        <div class="card-body">
                              <form action="{{ url('admin/director') }}" class="form" method="POST">
                               @csrf
                                    <div class="form-group">
                                          <label for="">Name</label>
                                          <input type="text" name="name" class="form-control" required >
                                    </div>
                                    <div class="form-group">
                                          <label for="">Description</label>
                                          <textarea name="description" id="" cols="30" rows="10" required class="form-control" ></textarea>
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