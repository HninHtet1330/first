@extends('layouts.master')
@section('content')
<div class="container mt-3">
<div class="row">
<img src="https://cdnb.artstation.com/p/assets/images/images/012/402/721/large/maria-angels-vives-portada-para-cine-made-in-asia-by-me-with-my-name.jpg?1534619070" alt="" width="30" height="220"></div>
    <div class="row">
        <a href="{{ url('/contact_us') }}">
            <button class="btn btn-success">Contact Us</button></a>
            @foreach($categories as $category)
            <div class="card col-md-4">
                
                
                <div class="card-body"> 
                    <div class="card-title bg-info text-dark">
                        <h3>{{ $category->name }}</h3>
                    </div>
                    <p class="card-text">
                        {{ $category->description }}
                    </p>  
                </div>
                <div class="card-footer">
                    <a href="{{ url('/detail/'.$category->id) }}"><button class="btn btn-success">Details</button></a>
                </div>
            </div>
            @endforeach
            {{ $categories }}
        </div>
        @endsection
</div>    
