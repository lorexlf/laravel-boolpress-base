@extends('layouts.layout')

@section('main')

@if(session('id'))
<div class="alert alert-danger">
   <p>Hai cancellato il post con ID {{session ('id')}}</p>
</div>
@endif

<div class="container mt-5">
   <div class="row row-cols-1 row-cols-md-3">
   @foreach($posts as $post)
      
      <div class="col mb-4">
         <div class="card">
         <a href="{{route('posts.show', $post->id)}}">
            <img src="{{$post->img}}" class="card-img-top" alt="...">
         </a>
         <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->text}}</p>
         </div>
         </div>
      </div>

   @endforeach
   </div>
</div>

@endsection