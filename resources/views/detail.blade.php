@extends('layouts.master')
@section('content')
<div class="row col-mt-3">
    
    <div class="card col-md-4">
        <div class="card-title bg-info text-dark">
            <h3>{{ $category->name }}</h3>
        </div>
        <div class="card-body"> 
            <p class="card-text">
                {{ $category->description }}
            </p>  
        </div>
        <div class="card-footer text-dark">
         Date   <span>
         {{ $category->created_at }}
            </span>
        </div>
    </div>
    
   
</div>
@endsection