@extends('layouts.master')
@section('content')
<div class="container col-md-4">
      <div class="row">
            <div class="card">
                  <div class="card-header text-white bg-dark">
                        
                        <h3>Contact Form </h3>  </div>
                        <div class="card-body">
                              <form action="{{ url('save_contact_us') }}" class="form" method="POST">
                              @csrf
                                    <div class="form-group">
                                          <label for="">Email</label>
                                          <input type="text" name="email" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                          <label for="">Message</label>
                                          <textarea name="message" id="" cols="30" rows="10" name="message" class="form-control" ></textarea>
                                    </div>
                                    <div class="form-group">
                                          <button class="btn btn-dark text-white">Send Message</button>
                                    </div>
                              </form>
                        </div>
                        
                        
                  </div>
            </div>
      </div>
      @endsection
    